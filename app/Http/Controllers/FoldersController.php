<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class FoldersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $folders = Folder::orderBy('title')->paginate(10);
        return view('folders.index')->with('folders', $folders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Just admin can create a page
        if(Auth()->user()->id !== 1){
            return redirect('/folders')->with('error', 'Unathorized Page');
        }

        return view('folders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'color' => 'required',
        ]);

        //create post
        $folder = new Folder;
        $folder->title = $request->input('title');
        $folder->description = $request->input('description');
        $folder->color = $request->input('color');
        $folder->save();

        return redirect('/folders')->with('success', 'Folder created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $folder = Folder::find($id);
        $posts = Post::orderBy('title')->whereIn('folder_id', $folder)->paginate(50);
        return view('folders.show')->with(compact('folder','posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $folder = Folder::find($id);
        return view('folders.edit')->with('folder', $folder);
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
        $this->validate($request, [
            'title' => 'required',
        ]);

        //create post
        $folder = Folder::find($id);
        $folder->title = $request->input('title');
        $folder->description = $request->input('description');
        $folder->color = $request->input('color');
        $folder->save();

        return redirect('/folders')->with('success', 'Folder updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $folder = Folder::find($id);
        $folder->delete($id);

        return redirect('/folders')->with('success', 'Folder deleted');
    }
}
