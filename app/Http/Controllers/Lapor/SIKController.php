<?php

namespace App\Http\Controllers\Lapor;

use App\Models\Notifikasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Laporan\SIK;

class SIKController extends Controller
{
    public function index()
    {
        return view('admin.sik.index', [
            'title' => 'Laporan SIK',
            'laporanSIK' => SIK::orderBy('id', 'desc')->get()
        ]);
    }

    public function setuju($id)
    {
        // Mengubah status dari SIK
        $laporan = SIK::find($id);
        $laporan->update([
            'status' => true
        ]);

        // Mengirim notifikasi ke pelapor
        $toPelapor = [
            'judul' => 'Dokumen Disetujui',
            'isi' => 'Dokumen persyaratan telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.',
            'tipe' => 'sik',
            'telah_dibaca' => false,
            'dikirim_kepada' => 'pelapor',
            'laporan_id' => $laporan->id,
            'pelapor_id' => $laporan->pelapor_id,
            'dikirim_pada' => now()
        ];

        Notifikasi::insert($toPelapor);

        // Redirect ke halaman admin SIK
        return redirect()->to('/admin/sik')->with('success', 'Berhasil menyetujui dokumen persyaratan');
    }

    public function tolak(Request $request)
    {
        // Ubah status laporan menjadi false/ditolak
        $laporan = SIK::find($request->id);
        $laporan->update([
            'status' => false,
            'keterangan' => $request->alasanPenolakan
        ]);

        // Mengirim notifikasi ke pelapor
        $toPelapor = [
            'judul' => 'Dokumen Ditolak',
            'isi' => 'Dokumen persyaratan Anda ditolak. Silahkan periksa kembali kelengkapan dokumen persyaratan.',
            'tipe' => 'sik',
            'telah_dibaca' => false,
            'dikirim_kepada' => 'pelapor',
            'laporan_id' => $laporan->id,
            'pelapor_id' => $laporan->pelapor_id,
            'dikirim_pada' => now()
        ];

        Notifikasi::insert($toPelapor);

        // Redirect ke halaman admin SIK
        return redirect()->to('admin/sik')->with('success', 'Anda telah menolak dokumen persyaratan');
    }

    public function upload(Request $data)
    {
        // Upload file terbaru saja
        if ($data->laporan_id) {
            SIK::updateDokumen($data->all());

            // Kirim notifikasi setelah upload ulang
            $toAdmin = [
                'judul' => 'Dokumen Persyaratan SIK Telah Diperbaharui',
                'isi' => 'Dokumen perlu pengecekkan kelengkapan.',
                'tipe' => 'sik',
                'telah_dibaca' => false,
                'dikirim_kepada' => 'admin',
                'laporan_id' => $data->laporan_id,
                'dikirim_pada' => now()
            ];

            Notifikasi::insert($toAdmin);
            return back()->with('success', 'Berhasil mengirim dokumen persyaratan terbaru');
        }

        // Insert nama file ke database
        $laporan = SIK::insert($data->all());

        // Kirim notifikasi
        $toAdmin = [
            'judul' => 'Dokumen Persyaratan SIK Masuk',
            'isi' => 'Dokumen perlu pengecekkan kelengkapan.',
            'tipe' => 'sik',
            'telah_dibaca' => false,
            'dikirim_kepada' => 'admin',
            'laporan_id' => $laporan->id,
            'dikirim_pada' => now()
        ];

        Notifikasi::insert($toAdmin);
        return back()->with('success', 'Berhasil mengirim dokumen persyaratan');
    }

    public function uploadForm(Request $data)
    {
        // Insert data form ke database
        SIK::insertForm($data->all());

        $toAdmin = [
            'judul' => 'Data Pelaporan SIK Masuk',
            'isi' => 'Data Izin Keramaian diterima. Lanjutkan ke proses persetujuan.',
            'tipe' => 'sik',
            'telah_dibaca' => false,
            'dikirim_kepada' => 'admin',
            'laporan_id' => $data['id'],
            'dikirim_pada' => now()
        ];

        Notifikasi::insert($toAdmin);

        // Redirect ke beranda
        return redirect()->to('/pengaduan-masyarakat/sik')->with('success', 'Data Izin Keramaian berhasil dikirim');
    }

    public function downloadPernyataan(Request $request)
    {
        dd($request->all());
        // Download pernyataan keaslian dokumen
        $data = [
            'namaLengkap' => $request->pernyataanNamaLengkap,
            'tempatLahir' => $request->pernyataanTempatLahir,
            'tanggalLahir' => $request->pernyataanTanggalLahir,
            'alamat' => $request->pernyataanAlamat,
            'telepon' => $request->pernyataanTelepon,
        ];

        $pdf = PDF::loadview('pdf.pernyataan-keaslian-sik', $data);
        return $pdf->stream('pernyataan-keaslian.pdf');
    }
}
