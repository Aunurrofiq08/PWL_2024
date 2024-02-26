<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return '2241720198'. '<br>'.'Rofiq';
    }
    public function articles($id) {
        return "Halaman Articles Dengan id: $id";
    }
}
