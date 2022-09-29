<?php

namespace App\Http\Controllers;

use App\Mail\LaporanPerkembanganSP2HP;
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
        $data['title'] = 'SP2HP';
        $data['laporanSP2HP'] = SP2HP::paginate(20);
        return view('admin.sp2hp.index', $data);
    }

    // Fungsi untuk melaporkan tindak kriminal
    public function lapor(Request $request)
    {
        // Upload file lampiran jika ada
        $path = 'assets-user/upload/';

        $fotoKtp = uploadFile($request->file('fotoKtp'), $path);
        $fotoPelapor = uploadFile($request->file('fotoPelapor'), $path);
        $lampiran = uploadFile($request->file('lampiran'), $path);

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
            'pelapor_id' => auth()->user()->id
        ]);

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
        $path = 'assets-user/upload/';

        // Ambil data dari form upload
        $laporan = SP2HP::find($request->id);
        $pelapor = User::find($laporan->pelapor_id);

        $keterangan = $request->keterangan;
        $perkembangan = uploadFile($request->file('file'), $path);

        // Update data perkembangan ke database
        $laporan->update([
            'file_pemberitahuan' => $perkembangan,
            'keterangan_pemberitahuan' => $keterangan
        ]);

        // Kirim notifikasi ke halaman pelapor
        $toPelapor = [
            'judul' => 'Perkembangan SP2HP',
            'isi' => 'Progres penyidikan tindak kriminal dapat dilihat pada file pdf berikut.',
            'tipe' => 'sp2hp',
            'telah_dibaca' => false,
            'dikirim_kepada' => 'pelapor',
            'laporan_id' => $request->id,
            'pelapor_id' => $laporan->pelapor_id,
            'dikirim_pada' => now()
        ];
        Notifikasi::insert($toPelapor);

        // Kirim notifikasi ke email pelapor
        Mail::send(new LaporanPerkembanganSP2HP($perkembangan, $keterangan, $pelapor));

        // Redirect ke halaman admin SP2HP
        return redirect()->to('admin/sp2hp')->with('success', 'Anda berhasil mengunggah perkembangan penyidikan.');
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
            'isi' => 'Pelaporan SP2HP Telah Divalidasi. Dokumen validasi SP2HP dapat diunduh disini.',
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
        Mail::send(new SP2HPValid($pelapor));

        // Redirect ke halaman admin SIK
        return redirect()->to('/admin/sp2hp')->with('success', 'Berhasil melakukan validasi pelaporan SP2HP');
    }

    public function invalid($id)
    {
    }
}
