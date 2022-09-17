<?php

namespace App\Http\Controllers;

use App\Models\Laporan\SP2HP;
use App\Models\Notifikasi;
use Illuminate\Http\Request;

class SP2HPController extends Controller
{
    // Halaman admin SP2HP
    public function index(){
        $data['title'] = 'SP2HP';
        $data['laporanSP2HP'] = SP2HP::paginate(20);
        return view('admin.sp2hp.index', $data);
    }
    
    // Fungsi untuk melaporkan tindak kriminal
    public function lapor(Request $request){
        // Upload file lampiran jika ada
        $path = 'assets-user/upload/';
        $lampiran = $request->file('lampiran');
        $namaLampiran = uploadFile($lampiran, $path);

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
            'lampiran' => $namaLampiran,
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
}
