<?php

namespace App\Http\Controllers\Lapor;

use Barryvdh\DomPDF\PDF;
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
            'laporanSIK' => SIK::paginate(20)
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
            'judul' => 'Dokumen SIK Disetujui',
            'isi' => 'Dokumen persyaratan SIK telah disetujui. Silahkan lanjutkan mengisi form selanjutnya.',
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
            'judul' => 'Dokumen SIK Ditolak',
            'isi' => 'Dokumen persyaratan SIK Anda ditolak. Silahkan periksa kembali kelengkapan dokumen persyaratan.',
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
        if (isset($data->simpanSementara)) {
            SIK::insertDraft($data->all());
            return back()->with('success', 'Data Anda berhasil disimpan sementara');
        }

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

    public function uploadFile(Request $request)
    {
        // Upload file persetujuan
        $path = 'assets-user/upload/';
        $namaFile = uploadFile($request->file('file'), $path);

        // Insert ke database
        $laporan = SIK::find($request->id);
        $laporan->update([
            'dokumen_persetujuan' => $namaFile
        ]);

        // Buat notifikasi
        $toPelapor = [
            'judul' => 'Surat Izin Keramaian Diterima',
            'isi' => 'Surat izin keramaian dapat diunduh disini.',
            'tipe' => 'sik',
            'telah_dibaca' => false,
            'dikirim_kepada' => 'pelapor',
            'laporan_id' => $request->id,
            'pelapor_id' => $laporan->pelapor_id,
            'dokumen_persetujuan' => $namaFile,
            'dikirim_pada' => now()
        ];

        // Insert notifikasi ke database
        Notifikasi::insert($toPelapor);

        return back()->with('success', 'Surat izin keramaian berhasil diunggah.');
    }

    public function downloadPernyataan(Request $request)
    {
        // Download pernyataan keaslian dokumen
        $data = [
            'namaOrganisasi' => $request->SIKNamaOrganisasi,
            'namaPenanggungJawab' => $request->SIKNamaPenanggungJawab,
            'alamat' => $request->SIKAlamat,
            'telepon' => $request->SIKTelepon,
        ];

        $pdf = PDF::loadview('pdf.pernyataan-keaslian-sik', $data);
        return $pdf->stream('pernyataan-keaslian.pdf');
    }

    // Fungsi untuk menghapus data SIK
    public function hapus($id)
    {
        // Hapus SIK
        SIK::find($id)->delete();

        // Hapus notifikasi dari SIK
        Notifikasi
            ::where('tipe', 'sik')
            ->where('laporan_id', $id)
            ->delete();

        return redirect()->to('admin/sik')->with('success', 'Anda berhasil menghapus data');
    }
}
