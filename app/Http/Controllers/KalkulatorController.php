<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    // Menghitung Tabung
    public function calculate_tabung(Request $request)
    {
        $total_luas = $request->input('total_luas');
        $t = $request->input('tinggi');

        $result = $total_luas * $t;

        return redirect('/')->with('info', 'Hasil Volume Tabung adalah : ' .$result);
    }

    public function calculate_bola(Request $request)
    {
        $empat_per_tiga = $request->input('empatpertiga') ?: 1.33;
        $ro = $request->input('ro') ?: 3.14;
        $r = $request->input('jari_jari');

        $result = $empat_per_tiga * $ro * $r * $r * $r;

        return redirect('/')->with('info_hasil_volume_bola', 'Hasil Volume Bola adalah : ' .$result);
    }

    public function calculate_kerucut(Request $request)
    {
        $satu_per_tiga = $request->input('satupertiga') ?: 0.33;
        $ro = $request->input('ro') ?: 3.14;
        $r = $request->input('jari_jari');
        $t = $request->input('tinggi');

        $total_luas = $r * $r;

        $result = $satu_per_tiga * $ro * $total_luas * $t;

        return redirect('/')->with('hasil_volume_kerucut', 'Hasil Volume Bola adalah : ' .$result);
    }
}
