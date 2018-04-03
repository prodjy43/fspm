<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\News;

class PagesController extends Controller
{
    public function index(){
        $news = News::orderBy('created_at','desc')->get()->take(3);
        $files = File::allFiles('images/banners');
        return view('pages.index', [
            'news' => $news,
            'files' => $files
        ]);
    }

    public function presentation(){
        return view('pages.presentation');
    }

    public function comite(){
        return view('pages.comite');
    }

    public function statuts(){
        return view('pages.status');
    }

    public function partenaire(){
        return view('pages.partenaire');
    }

    public function maitrise(){
        return view('pages.maitrise');
    }

    public function afcmt(){
        return view('pages.afcmt');
    }

    public function polymecanicien(){
        return view('pages.polymecanicien');
    }

    public function offreEmplois(){
        return view('pages.offreEmploi');
    }

    public function apprentissage(){
        return view('pages.apprentissage');
    }

    public function shop(){
        return view('pages.shop');
    }
    
    public function post(){
        $news = News::orderBy('created_at','desc')->get();
        return view('pages.post', [
            'news' => $news
        ]);
    }

    public function journaux(){
        return view('pages.journaux');
    }

    public function revue(){
        return view('pages.revue');
    }

    public function experts(){
        return view('pages.experts');
    }

    public function agenda(){
        return view('pages.agenda');
    }

    public function publicite(){
        return view('pages.publicite');
    }
}
