<?php

namespace App\Http\Controllers;

use PDF;
use App\Mail\LaporanPerkembanganSP2HP;
use App\Mail\SP2HPInvalid;
use App\Mail\SP2HPSelesai;
use App\Mail\SP2HPValid;
use App\Models\Laporan\SP2HP;
use App\Models\Notifikasi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SP2HPController extends Controller
{
    // Halaman admin SP2HP
    public function index()
    {
        $laporanSP2HP = session('laporanSP2HP') ?? SP2HP::getSP2HP();
        $old = session('old') ?? null;

        $data['title'] = 'SP2HP';
        $data['laporanSP2HP'] = $laporanSP2HP;
        $data['old'] = $old;

        return view('admin.sp2hp.index', $data);
    }

    // Fungsi untuk melaporkan tindak kriminal
    public function lapor(Request $request)
    {
        $data = $request->all();
        $keys = array_keys($data);

        $terlapor = $request->terlapor;
        $saksi = getSaksi($keys, $data);
        $bukti = getBukti($keys, $data);

        // Upload file lampiran jika ada
        $path = 'assets-user/upload/';

        $fotoKtp = uploadFile($request->file('fotoKtp'), $path);
        $fotoPelapor = uploadFile($request->file('fotoPelapor'), $path);
        $lampiran = uploadFile($request->file('lampiran'), $path);

        if ($request->reupload) {
            $laporan = SP2HP::find($request->id);
            $laporan->update([
                'nama_lengkap' => $request->namaLengkap,
                'tempat_lahir' => $request->tempatLahir,
                'tanggal_lahir' => $request->tanggalLahir,
                'pekerjaan' => $request->pekerjaan,
                'kewarganegaraan' => $request->kewarganegaraan,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'judul_laporan' => $request->judulLaporan,
                'isi_laporan' => $request->isiLaporan,
                'tanggal_kejadian' => $request->tanggalKejadian,
                'lokasi_kejadian' => $request->lokasiKejadian,
                'detail_lokasi_kejadian' => $request->detailLokasiKejadian,
                'kategori' => $request->kategori,
                'foto_ktp' => $fotoKtp,
                'foto_pelapor' => $fotoPelapor,
                'lampiran' => $lampiran,
                'terlapor' => $terlapor,
                'saksi' => $saksi,
                'bukti' => $bukti,
                'status' => null
            ]);
        } else {
            // Insert data SP2HP ke database
            $laporan = SP2HP::create([
                'nama_lengkap' => $request->namaLengkap,
                'tempat_lahir' => $request->tempatLahir,
                'tanggal_lahir' => $request->tanggalLahir,
                'pekerjaan' => $request->pekerjaan,
                'kewarganegaraan' => $request->kewarganegaraan,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'judul_laporan' => $request->judulLaporan,
                'isi_laporan' => $request->isiLaporan,
                'tanggal_kejadian' => $request->tanggalKejadian,
                'lokasi_kejadian' => $request->lokasiKejadian,
                'detail_lokasi_kejadian' => $request->detailLokasiKejadian,
                'kategori' => $request->kategori,
                'foto_ktp' => $fotoKtp,
                'foto_pelapor' => $fotoPelapor,
                'lampiran' => $lampiran,
                'terlapor' => $terlapor,
                'saksi' => $saksi,
                'bukti' => $bukti,
                'pelapor_id' => auth()->user()->id
            ]);
        }


        // Kirim notifikasi ke admin
        $toAdmin = [
            'judul' => 'Pelaporan Tindak Kriminal Masuk',
            'isi' => 'Pelaporan perlu diproses.',
            'tipe' => 'sp2hp',
            'telah_dibaca' => false,
            'dikirim_kepada' => 'admin',
            'laporan_id' => $laporan->id,
            'dikirim_pada' => now()
        ];

        Notifikasi::insert($toAdmin);

        // Redirect ke halaman SP2HP
        return redirect()->to('/tindak-kriminal/sp2hp')->with('success', 'Berhasil melaporkan tindak kriminal');
    }

    public function hapus($id)
    {
        // Hapus data SP2HP
        $laporan = SP2HP::find($id);
        $laporan->delete();

        // Hapus notifikasi dari SP2HP
        Notifikasi
            ::where('tipe', 'sp2hp')
            ->where('laporan_id', $id)
            ->delete();

        // Redirect ke halaman admin SP2HP
        return redirect()->to('admin/sp2hp')->with('success', 'Anda berhasil menghapus data');
    }

    public function uploadKeterangan(Request $request)
    {
        // Ambil data dari form upload
        $laporan = SP2HP::find($request->id);
        $pelapor = User::find($laporan->pelapor_id);
        $filePerkembangan = null;

        if (!is_null($request->file('file'))) {
            $path = 'assets-user/upload/';
            $filePerkembangan = uploadFile($request->file('file'), $path);

            // Update data perkembangan ke database
            $laporan->update([
                'file_pemberitahuan' => $filePerkembangan,
            ]);
        }

        $keterangan = $request->keterangan;
        $laporan->update([
            'keterangan_pemberitahuan' => $keterangan,
            'perkembangan' => 'Sedang Diproses'
        ]);


        // Kirim notifikasi ke halaman pelapor
        $toPelapor = [
            'judul' => 'Perkembangan SP2HP',
            'isi' => 'Pelaporan tindak kriminal Anda sudah diterima dan sedang dalam proses. Surat tanda terima pelaporan Anda dapat dilihat pada file pdf berikut.',
            'tipe' => 'sp2hp',
            'telah_dibaca' => false,
            'dikirim_kepada' => 'pelapor',
            'laporan_id' => $request->id,
            'pelapor_id' => $laporan->pelapor_id,
            'dikirim_pada' => now()
        ];
        Notifikasi::insert($toPelapor);

        // Kirim notifikasi ke email pelapor
        Mail::send(new LaporanPerkembanganSP2HP($filePerkembangan, $keterangan, $pelapor));

        // Redirect ke halaman admin SP2HP
        return redirect()->to('admin/sp2hp')->with('success', 'Anda berhasil mengunggah pemberitahuan ke pelapor.');
    }

    public function valid($id)
    {
        // Generate nomor polisi
        $nomorPolisi = generateNomorPolisi();

        // Ubah status SP2HP menjadi valid/true
        $laporan = SP2HP::find($id);
        $laporan->update([
            'status' => true,
            'nomor_polisi' => $nomorPolisi
        ]);

        $pelapor = User::find($laporan->pelapor_id);

        // Mengirim notifikasi ke pelapor
        $toPelapor = [
            'judul' => 'Pelaporan SP2HP Telah Divalidasi',
            'isi' => 'Pelaporan SP2HP telah divalidasi dan sedang dalam proses.',
            'tipe' => 'sp2hp',
            'telah_dibaca' => false,
            'dikirim_kepada' => 'pelapor',
            'laporan_id' => $laporan->id,
            'pelapor_id' => $laporan->pelapor_id,
            'dikirim_pada' => now()
        ];

        // Insert notifikasi ke database
        $notif = Notifikasi::insert($toPelapor);

        // Kirim email ke pelapor
        Mail::send(new SP2HPValid($pelapor));

        // Redirect ke halaman admin SP2HP
        return redirect()->to('/notifikasi/cetak-pdf/' . $notif->id);
    }

    public function invalid(Request $request)
    {
        $keteranganInvalid = $request->keteranganInvalid;

        // Ubah status SP2HP menjadi invalid/false
        $laporan = SP2HP::find($request->id);
        $laporan->update([
            'status' => false,
        ]);

        // Kirim notifikasi ke pelapor
        $pelapor = User::find($laporan->pelapor_id);

        // Mengirim notifikasi ke pelapor
        $toPelapor = [
            'judul' => 'Pelaporan SP2HP Tidak Valid',
            'isi' => 'Silahkan periksa kembali kelengkapan pelaporan tindak kriminal.',
            'tipe' => 'sp2hp',
            'telah_dibaca' => false,
            'dikirim_kepada' => 'pelapor',
            'laporan_id' => $laporan->id,
            'pelapor_id' => $laporan->pelapor_id,
            'dikirim_pada' => now()
        ];

        // // Insert notifikasi ke database
        $notif = Notifikasi::insert($toPelapor);

        // Kirim email ke pelapor
        Mail::send(new SP2HPInvalid($pelapor, $keteranganInvalid, $notif->id));

        // Redirect ke halaman admin SP2HP
        return redirect()->to('/admin/sp2hp')->with('success', 'Berhasil menolak pelaporan SP2HP');
    }

    public function selesai($id)
    {
        // Ubah perkembangan menjadi selesai
        $laporan = SP2HP::find($id);
        $laporan->update([
            'perkembangan' => 'Selesai'
        ]);

        $pelapor = User::find($laporan->pelapor_id);

        // Kirim notifikasi ke halaman Pelapor
        $toPelapor = [
            'judul' => 'Pelaporan SP2HP Telah selesai diproses',
            'isi' => 'Pelaporan SP2HP telah selesai diproses. Silahkan melanjutkan proses ke bagian Reskrim Polres Badung.',
            'tipe' => 'sp2hp',
            'telah_dibaca' => false,
            'dikirim_kepada' => 'pelapor',
            'laporan_id' => $laporan->id,
            'pelapor_id' => $laporan->pelapor_id,
            'dikirim_pada' => now()
        ];

        // Insert notifikasi ke database
        Notifikasi::insert($toPelapor);

        // Kirim email ke pelapor
        Mail::send(new SP2HPSelesai($pelapor));

        // Redirect ke halaman admin SP2HP
        return redirect()->to('/admin/sp2hp')->with('success', 'Berhasil menyelesaikan pelaporan SP2HP');
    }

    public function filterDate(Request $request)
    {
        $keyword = $request->keyword;

        $dates = explode(" - ", $request->dateFilter);
        $start = $dates[0];
        $end = $dates[1];

        $laporan = SP2HP::getFilteredByDate($start, $end, $keyword);
        return redirect()->to('/admin/sp2hp')->with('laporanSP2HP', $laporan)->with('old', $request->all());
    }

    public function pdf(Request $request)
    {
        $keyword = $request->keyword ?? '';

        if ($request->dateFilter != '' && $keyword != '') {
            $dates = explode(" - ", $request->dateFilter);
            $start = $dates[0];
            $end = $dates[1];
            $data['laporanSP2HP'] = SP2HP::getFilteredByDate($start, $end, $keyword);
        } else if ($request->dateFilter != '') {
            $dates = explode(" - ", $request->dateFilter);
            $start = $dates[0];
            $end = $dates[1];
            $data['laporanSP2HP'] = SP2HP::getFilteredByDate($start, $end, $keyword);
        } else if ($keyword != '') {
            $data['laporanSP2HP'] = SP2HP::searchSP2HP($keyword);
        } else {
            $data['laporanSP2HP'] = SP2HP::getSP2HP();
        }

        $pdf = PDF::loadview('pdf.sp2hp-all', $data)->setPaper('a4', 'landscape');
        return $pdf->stream('laporan-sp2hp.pdf');
    }

    public function excel(Request $request)
    {
        $keyword = $request->keyword ?? '';

        if ($request->dateFilter != '' && $keyword != '') {
            $dates = explode(" - ", $request->dateFilter);
            $start = $dates[0];
            $end = $dates[1];
            $data['laporanSP2HP'] = SP2HP::getFilteredByDate($start, $end, $keyword);
        } else if ($request->dateFilter != '') {
            $dates = explode(" - ", $request->dateFilter);
            $start = $dates[0];
            $end = $dates[1];
            $data['laporanSP2HP'] = SP2HP::getFilteredByDate($start, $end, $keyword);
        } else if ($keyword != '') {
            $data['laporanSP2HP'] = SP2HP::searchSP2HP($keyword);
        } else {
            $data['laporanSP2HP'] = SP2HP::getSP2HP();
        }

        return view('excel.sp2hp', $data);
    }
}
