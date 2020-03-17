<?php

namespace App\Http\Controllers;

use App\Model\About;
use App\Model\AchievementOrganization;
use App\Model\Blogs;
use App\Model\Client;
use App\Model\Experience;
use App\Model\Funfact;
use App\Model\Service;
use App\Model\Skill;
use App\Model\SlugWork;
use App\Model\Social;
use App\Model\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all()->first();
        $skills = Skill::where('status', 1)->get();
        $other_skills = Skill::where('status', 2)->get();
        $services = Service::all();
        $funfacts = Funfact::all();
        $educations = Experience::orderByDesc('id')->where('status', 1)->get();
        $experiences = Experience::orderByDesc('id')->where('status', 2)->get();
        $socials = Social::all();
        $achievements = AchievementOrganization::orderByDesc('id')->where('status', 1)->get();
        $organizations = AchievementOrganization::orderByDesc('id')->where('status', 2)->get();
        $works = Work::all();
        $slugs = SlugWork::all();
        $clients = Client::all();
        $blogs = Blogs::all()->sortByDesc('id')->take(3);

        return view('home.index', compact('about', 'skills', 'other_skills', 'services', 'funfacts', 'educations', 'experiences', 'socials', 'achievements', 'organizations', 'works', 'slugs', 'clients', 'blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
