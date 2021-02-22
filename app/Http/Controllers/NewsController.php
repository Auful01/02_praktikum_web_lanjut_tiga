<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($news){
        return redirect('https://www.educastudio.com/'.$news.'');
    }

    public function topic($topic){
        return redirect('https://www.educastudio.com/news/'.$topic.'');
    }
}
