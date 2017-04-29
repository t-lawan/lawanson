<?php

namespace App\Http\Controllers;
use App\Project;
use App\Experience;
use App\Institution;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function portfolioPage()
    {
      $projects = Project::with('technologies')->get();
      $institutions = Institution::all();
      $experiences = Experience::all();

      return view ('public.pages.home', compact('projects', 'institutions', 'experiences'));
    }

    public function passwordPage()
    {
      return view('public.pages.password');
    }

    public function checkPassword(Request $request)
    {

      $password = request('password');
      if($password === $_ENV['PAGE_PASSWORD'])
      {
        $projects = Project::with('technologies')->get();
        $institutions = Institution::all();
        $experiences = Experience::all();

        return view ('public.pages.home', compact('projects', 'institutions', 'experiences'));
      }
      return view('public.pages.password');

    }
}
