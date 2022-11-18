<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view ('blogs.index')->with('blogs', $blogs);
    }
 
    
    public function create()
    {
        return view('blogs.create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        Blog::create($input);
        return redirect('blogs')->with('flash_message', 'Blogs Addedd!');  
    }
 
    
    public function show($id)
    {
        $blogs = Blog::find($id);
        return view('blogs.show')->with('blogs', $blogs);
    }
 
    
    public function edit($id)
    {
        $blogs = Blog::find($id);
        return view('blogs.edit')->with('blogs', $blogs);
    }
 
  
    public function update(Request $request, $id)
    {
        $blogs = Blog::find($id);
        $input = $request->all();
        $blogs->update($input);
        return redirect('blogs')->with('flash_message', 'Blogs Updated!');  
    }
 
  
    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect('blogs')->with('flash_message', 'Blogs deleted!');  
    }
}
