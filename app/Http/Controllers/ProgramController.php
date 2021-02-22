<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program(){
        return '<a href="https://www.educastudio.com/program/karir">https://www.educastudio.com/program/karir</a><br>
        <a href="https://www.educastudio.com/program/magang">https://www.educastudio.com/program/magang</a><br>
        <a href="https://www.educastudio.com/program/kunjugan-industri">https://www.educastudio.com/program/kunjungan-industri</a><br>';
    }
}
