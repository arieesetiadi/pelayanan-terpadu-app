<?php

namespace App\Http\Controllers\Lapor;

use PDF;
use App\Models\Notifikasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\SIKDisetujui;
use App\Mail\SIKDitolak;
use App\Mail\SIKUploadPersetujuan;
use App\Models\Laporan\SIK;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class SIKController extends Controller
{
    public function index()
    {
        $laporanSIK = session('laporanSIK') ?? SIK::getSIK();
        $old = session('old') ?? null;

        return view('admin.sik.index', [
            'title' => 'Laporan SIK',
            'laporanSIK' => $laporanSIK,
            'old' => $old
        ]);
    }

    public function setuju($id)
    {
        // Mengubah status dari SIK
        $laporan = SIK::find($id);
        $laporan->update([
            'status' => true
        ]);

        $pelapor = User::find($laporan->pelapor_id);

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

        // Insert notifikasi ke database
        $notif = Notifikasi::insert($toPelapor);

        // Kirim email ke pelapor
        Mail::send(new SIKDisetujui($notif->id, $pelapor));

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

        $pelapor = User::find($laporan->pelapor_id);

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

        // Insert notifikasi ke database
        $notif = Notifikasi::insert($toPelapor);

        // Kirim email ke pelapor
        Mail::send(new SIKDitolak($notif->id, $request->alasanPenolakan, $pelapor));

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

        $data->validate([
            'proposalKegiatan' => 'required',
            'izinTempat' => 'required',
            'izinInstansi' => 'required',
            'rekomendasiPolsek' => 'required',
        ]);

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
        // if (isset($data->simpanSementara)) {
        //     SIK::insertDraft($data->all());
        //     return back()->with('success', 'Data Anda berhasil disimpan sementara');
        // }

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

        $pelapor = User::find($laporan->pelapor_id);

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
        $notif = Notifikasi::insert($toPelapor);

        // Kirim email ke pelapor
        Mail::send(new SIKUploadPersetujuan($notif->id, $namaFile, $pelapor));

        return back()->with('success', 'Surat izin keramaian berhasil diunggah.');
    }

    public function downloadPernyataan(Request $request)
    {
        // Download pernyataan keaslian dokumen
        $data = [
            'namaOrganisasi' => $request->SIKNamaOrganisasi,
            'namaPenanggungJawab' => auth()->user()->nama,
            'alamat' => auth()->user()->alamat,
            'telepon' => auth()->user()->telepon,
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

    public function filterDate(Request $request)
    {
        $keyword = $request->keyword;
        $dates = explode(" - ", $request->dateFilter);

        $start = $dates[0];
        $end = $dates[1];

        $laporan = SIK::getFilteredByDate($start, $end, $keyword);
        return redirect()->to('/admin/sik')->with('laporanSIK', $laporan)->with('old', $request->all());
    }

    public function pdf(Request $request)
    {
        $keyword = $request->keyword ?? '';

        if ($request->dateFilter != '' && $keyword != '') {
            $dates = explode(" - ", $request->dateFilter);
            $start = $dates[0];
            $end = $dates[1];
            $data['laporanSIK'] = SIK::getFilteredByDate($start, $end, $keyword);
        } else if ($request->dateFilter != '') {
            $dates = explode(" - ", $request->dateFilter);
            $start = $dates[0];
            $end = $dates[1];
            $data['laporanSIK'] = SIK::getFilteredByDate($start, $end, $keyword);
        } else if ($keyword != '') {
            $data['laporanSIK'] = SIK::searchSIK($keyword);
        } else {
            $data['laporanSIK'] = SIK::getSIK();
        }

        $pdf = PDF::loadview('pdf.sik-all', $data)->setPaper('legal', 'landscape');
        return $pdf->stream('laporan-sik.pdf');
    }

    public function excel(Request $request)
    {
        $keyword = $request->keyword ?? '';

        if ($request->dateFilter != '' && $keyword != '') {
            $dates = explode(" - ", $request->dateFilter);
            $start = $dates[0];
            $end = $dates[1];
            $data['laporanSIK'] = SIK::getFilteredByDate($start, $end, $keyword);
        } else if ($request->dateFilter != '') {
            $dates = explode(" - ", $request->dateFilter);
            $start = $dates[0];
            $end = $dates[1];
            $data['laporanSIK'] = SIK::getFilteredByDate($start, $end, $keyword);
        } else if ($keyword != '') {
            $data['laporanSIK'] = SIK::searchSIK($keyword);
        } else {
            $data['laporanSIK'] = SIK::getSIK();
        }

        return view('excel.sik', $data);
    }
}
