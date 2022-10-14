<?php

namespace App\Http\Controllers;

use App\Models\Laporan\SIK;
use Illuminate\Http\Request;
use App\Models\Laporan\SKTLK;
use App\Models\Laporan\SP2HP;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $type = explode('/', $request->header('referer'));
        $type = array_reverse($type)[0];
        $keyword = $request->keyword;

        switch ($type) {
            case 'sktlk':
                $laporan = SKTLK::searchSKTLK($keyword);
                return redirect()->to('/admin/sktlk')->with('laporanSKTLK', $laporan);
            case 'sik':
                $laporan = SIK::searchSIK($keyword);
                return redirect()->to('/admin/sik')->with('laporanSIK', $laporan);
            case 'sp2hp':
                $laporan = SP2HP::searchSP2HP($keyword);
                return redirect()->to('/admin/sp2hp')->with('laporanSP2HP', $laporan)->with('old', $request->all());
            default:
                if ($keyword == "") return back();
                $laporan = [
                    'SKTLK' => SKTLK::searchSKTLK($keyword),
                    'SIK' => SIK::searchSIK($keyword),
                    'SP2HP' => SP2HP::searchSP2HP($keyword)
                ];

                return redirect()->to('/dashboard')->with('laporan', $laporan);
        }
    }
}
