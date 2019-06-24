<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = "Welcome to the show";

        return view('pages.index')->with('title', $title);
        // return view('pages.index', compact('title'));
    }

    public function about()
    {
        $title = "About Us";
        return view('pages.about')->with('title', $title);
    }

    public function services()
    {
        $title = "Our Services";

        $data = [
            'title'=>'Our Services',
            'services' => ['Web design', 'Programming', 'SEO']
        ];
        return view('pages.services')->with($data);
    }
}
