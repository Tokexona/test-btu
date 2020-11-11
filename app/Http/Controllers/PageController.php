<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHomePage()
    {
    return view('content-page')
        ->withText('this is home page')
        ->with('footer_text', "this is example footer text from comtroller");
    }


    public function getContactPage()
    {
        return view('content-page')
        ->withFooter(true)

        ->with('footer_text', "this is example footer text from contact");
    }

    public function getAboutUsPage()
    {
        return view('abcontent-page')
        ->withFooter(true)

        ->with('footer_text', "this is example footer text from about");
    }



}