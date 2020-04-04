<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {
    public function about() {
        $data = [];
        $data["first_name"] = "Luke";
        $data["last_name"] = "Skywalker";
        return view('pages.about', $data);
    }

    public function contact() {
        $data = [];
        $data["first_name"] = "tomoya";
        $data["last_name"] = "takayasu";
        return view('pages.contact', $data);
    }
}
