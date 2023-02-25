<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function articles($id){
        return "<h1>Halaman artikel dengan ID $id </h1>";
    }
}
