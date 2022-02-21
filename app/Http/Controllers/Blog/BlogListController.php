<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogListController extends Controller
{
    public function index()
    {
        $title = "Blog List";
        $blogListActive = 'active';

        return view('pages.blog.list', compact('title', 'blogListActive'));
    }
}
