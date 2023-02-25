<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index(){
        return "Selamat Datang";
    }

    public function about() {
        return "<p>NIM : 2141720261 <br> Nama : Salwa Labibah Canora</p>";
    }

    public function articles($id){
        return "<h1>Halaman artikel dengan ID $id </h1>";
    }

}
