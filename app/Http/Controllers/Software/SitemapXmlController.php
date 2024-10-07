<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class SitemapXmlController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        $projects = Project::where('status', 1)->get();
        $services = Service::where('status', 1)->get();
        $what_we_do = Project::where('status', 1)->get();
        return response()->view('sitemap', [
            'blogs' => $blogs,
            'projects' => $projects,
            'services' => $services,
            'what_we_do' => $what_we_do
        ])->header('Content-Type', 'text/xml');
    }
}
