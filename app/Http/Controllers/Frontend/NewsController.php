<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Repositories\BlogRepository;

class NewsController extends Controller
{
    public function __construct(
        public BlogRepository $repository){
    }

    /**
     * Provision a new web server.
     */
    public function index()
    {
        $news = $this->repository->orderBy('created_at', 'desc')->get()->all();

        return view('site.news.index', [
            'news' => $news,
        ]);
    }

    public function show(Blog $blog)
    {
        return view('site.news.show', [
            'item' => $blog
        ]);
    }

}
