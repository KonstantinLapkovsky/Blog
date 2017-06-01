<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{
    public function index(Tag $tag)
    {

    	$posts = $tag->posts;

    	return view('posts.index', compact('posts'));
    }
    
    public function store()
    {
    	$this->validate(request(),[
    		'title' => 'required',
    		'body' => 'required'
    	]);

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );
}