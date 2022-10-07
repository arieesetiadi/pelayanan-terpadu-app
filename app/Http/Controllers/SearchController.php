<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $type = explode('/', $request->header('referer'));
        $type = array_reverse($type)[0];

        switch ($type) {
            case 'sktlk':
                dd("Cari $request->keyword pada SKTLK");
                break;
            case 'sik':
                dd("Cari $request->keyword pada SIK");
                break;
            case 'sp2hp':
                dd("Cari $request->keyword pada SP2HP");
                break;
            default:
                dd("Cari $request->keyword pada Semua");
                break;
        }
    }
}
