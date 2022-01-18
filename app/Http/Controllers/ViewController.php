<?php


namespace App\Http\Controllers;


class ViewController extends Controller
{
    public function index(){
        return view('main');
    }

    public function roadmap(){
        return view('apps.roadmap.index');
    }

    public function speedruns(){
        return view('apps.speedruns.index');
    }

    public function records(){
        return view('apps.records.index');
    }

    public function contact(){
        return view('core.contact');
    }
}