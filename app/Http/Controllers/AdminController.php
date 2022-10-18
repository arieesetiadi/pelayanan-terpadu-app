<?php

namespace App\Http\Controllers;

use App\Models\Laporan\SIK;
use App\Models\Laporan\SKTLK;
use App\Models\Laporan\SP2HP;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use PDF;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $data = [];

        if (session('laporan')) {
            $laporan = session('laporan');

            $data = [
                'laporanSKTLK' => $laporan['SKTLK'],
                'laporanSIK' => $laporan['SIK'],
                'laporanSP2HP' => $laporan['SP2HP'],
            ];
        }

        $data['title'] = 'Dashboard';
        $data['countSIK'] = count(SIK::getSIK());
        $data['countSKTLK'] = count(SKTLK::getSKTLK());
        $data['countSP2HP'] = count(SP2HP::getSP2HP());

        return view('admin.dashboard', $data);
    }

    public function profile()
    {
        return view('admin.profile', [
            'title' => 'Profile'
        ]);
    }

    public function laporanWilayahPDF(Request $request)
    {
        $monthsPeriod = getMonthsPeriod($request->start, $request->end);

        $start = Carbon::make('01-' . $request->start);
        $end = Carbon::make('01-' . $request->end);

        if ($start->eq($end)) {
            $data['periode']  = $start->monthName . ' ' . $start->year;
        } else {
            $data['periode']  = $start->monthName . ' ' . $start->year . ' - ' . $end->monthName . ' ' . $end->year;
        }

        foreach ($monthsPeriod as $i => $month) {
            $current = Carbon::make($month);

            $label = $current->monthName . ' ' . $current->year;
            $start = $current->firstOfMonth()->toDateString();
            $end = $current->lastOfMonth()->toDateString();

            $data['laporan'][$i] = [
                'label' => $label,
                'laporanSKTLK' => SKTLK::getByPeriod($start, $end),
                'laporanSIK' => SIK::getByPeriod($start, $end),
                'laporanSP2HP' => SP2HP::getByPeriod($start, $end)
            ];

            $data['countPerPeriod'][$label]['SKTLK'] = SKTLK::countByPeriod($start, $end);
            $data['countPerPeriod'][$label]['SIK'] = SIK::countByPeriod($start, $end);
            $data['countPerPeriod'][$label]['SP2HP'] = SP2HP::countByPeriod($start, $end);
        }

        foreach (getLokasi() as $lokasi) {
            $countSKTLK = SKTLK::countPerLokasi($lokasi, $request->start, $request->end);
            $countSIK =  SIK::countPerLokasi($lokasi, $request->start, $request->end);
            $countSP2HP =  SP2HP::countPerLokasi($lokasi, $request->start, $request->end);
            $data['countPerLokasi'][$lokasi] = $countSKTLK + $countSIK + $countSP2HP;
        }

        $pdf = PDF::loadview('pdf.laporan-per-wilayah', $data)->setPaper('a4', 'landscape');
        return $pdf->stream('laporan-per-wilayah.pdf');
    }

    public function laporanWilayahExcel(Request $request)
    {
        $monthsPeriod = getMonthsPeriod($request->start, $request->end);

        $start = Carbon::make('01-' . $request->start);
        $end = Carbon::make('01-' . $request->end);

        if ($start->eq($end)) {
            $data['periode']  = $start->monthName . ' ' . $start->year;
        } else {
            $data['periode']  = $start->monthName . ' ' . $start->year . ' - ' . $end->monthName . ' ' . $end->year;
        }

        foreach ($monthsPeriod as $i => $month) {
            $current = Carbon::make($month);

            $label = $current->monthName . ' ' . $current->year;
            $start = $current->firstOfMonth()->toDateString();
            $end = $current->lastOfMonth()->toDateString();

            $data['laporan'][$i] = [
                'label' => $label,
                'laporanSKTLK' => SKTLK::getByPeriod($start, $end),
                'laporanSIK' => SIK::getByPeriod($start, $end),
                'laporanSP2HP' => SP2HP::getByPeriod($start, $end)
            ];

            $data['countPerPeriod'][$label]['SKTLK'] = SKTLK::countByPeriod($start, $end);
            $data['countPerPeriod'][$label]['SIK'] = SIK::countByPeriod($start, $end);
            $data['countPerPeriod'][$label]['SP2HP'] = SP2HP::countByPeriod($start, $end);
        }

        foreach (getLokasi() as $lokasi) {
            $countSKTLK = SKTLK::countPerLokasi($lokasi, $request->start, $request->end);
            $countSIK =  SIK::countPerLokasi($lokasi, $request->start, $request->end);
            $countSP2HP =  SP2HP::countPerLokasi($lokasi, $request->start, $request->end);
            $data['countPerLokasi'][$lokasi] = $countSKTLK + $countSIK + $countSP2HP;
        }

        return view('excel.laporan-per-wilayah', $data);
    }
}
