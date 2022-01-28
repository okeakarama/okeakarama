<?php

namespace App\Http\Controllers;
use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Subscriptions;
use Illuminate\Support\Carbon;

class FrontendController extends Controller
{
    public function index(){
        $data['title'] = 'Welcome';
        //$data['movies'] = Movies::paginate(6);  //Movies::latest()->get();
        return view('front.home', $data);
    }

    public function podcast(){
        $data['title'] = 'Podcast';
        //$data['movies'] = Movies::paginate(6);  //Movies::latest()->get();
        return view('front.podcast', $data);
    }

    public function about(){
        $data['title'] = 'Podcast';
        return view('front.about', $data);
    }

    public function contact(){
        $data['title'] = 'Contact';
        return view('front.contact', $data);
    }

}
