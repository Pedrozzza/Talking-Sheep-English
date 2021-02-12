<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\Console\Input\Input;

class PostsController extends Controller
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
        $posts = Post::orderBy('created_at', 'DESC')->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('posts.create')->with('folder_id', $id);
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
            'body' => 'required',
            'file_upload' => 'nullable',
            'file_upload1' => 'nullable',
            'file_upload2' => 'nullable',
            'file_homework' => 'nullable',
        ]);

        //handle file upload 
        if($request->hasFile('file_upload'))
        {
            //Get file with extension
            $fileNameWithExt = $request->file('file_upload')->getClientOriginalName();
            //Get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('file_upload')->getClientOriginalExtension();
            //File name to store
            $fileNameToStore = $fileName . '.' . rand(1, 999) . '.' . $extension;
            //Upload file
            $path = $request->file('file_upload')->storeAs('public/file_upload', $fileNameToStore);
        } else{
            $fileNameToStore = '';
        }

        if($request->hasFile('file_upload1'))
        {
            $fileNameWithExt1 = $request->file('file_upload1')->getClientOriginalName();
            $fileName1 = pathinfo($fileNameWithExt1, PATHINFO_FILENAME);
            $extension1 = $request->file('file_upload1')->getClientOriginalExtension();
            $fileNameToStore1 = $fileName1 . '.' . rand(1, 999) . '.' . $extension1;
            $path = $request->file('file_upload1')->storeAs('public/file_upload', $fileNameToStore1);
        } else{
            $fileNameToStore1 = '';
        }

        if($request->hasFile('file_upload2'))
        { 
            $fileNameWithExt2 = $request->file('file_upload2')->getClientOriginalName();
            $fileName2 = pathinfo($fileNameWithExt2, PATHINFO_FILENAME);
            $extension2 = $request->file('file_upload2')->getClientOriginalExtension();
            $fileNameToStore2 = $fileName2 . '.' . rand(1, 999) . '.' . $extension2;
            $path = $request->file('file_upload2')->storeAs('public/file_upload', $fileNameToStore2);
        } else{
            $fileNameToStore2 = '';
        }

        //homework file
        if($request->hasFile('file_homework'))
        {
            $fileNameWithExtH = $request->file('file_homework')->getClientOriginalName();
            $fileNameH = pathinfo($fileNameWithExtH, PATHINFO_FILENAME);
            $extensionH = $request->file('file_homework')->getClientOriginalExtension();
            $fileNameToStoreH = $fileNameH . '.' . rand(1, 999) . '.' . $extensionH;
            $path = $request->file('file_homework')->storeAs('public/file_upload', $fileNameToStoreH);
        } else{
            $fileNameToStoreH = '';
        }

        //create a post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->folder_id = $request->input('folder_id');
        $post->user_id = auth()->user()->id;
        $post->file_upload = $fileNameToStore;
        $post->file_upload1 = $fileNameToStore1;
        $post->file_upload2 = $fileNameToStore2;
        $post->file_homework = $fileNameToStoreH;
        $post->color = $request->input('color');
        $post->save();

        return redirect('/folders/'.$post->folder_id)->with('success', 'Post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
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
            'body' => 'required',
            'file_upload' => 'nullable',
            'file_upload1' => 'nullable',
            'file_upload2' => 'nullable',
            'file_homework' => 'nullable',
        ]);
        
        if($request->hasFile('file_upload'))
        {
            $fileNameWithExt = $request->file('file_upload')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file_upload')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '.' . time() . '.' . $extension;
            $path = $request->file('file_upload')->storeAs('public/file_upload', $fileNameToStore);
        }

        if($request->hasFile('file_upload1'))
        {
            $fileNameWithExt1 = $request->file('file_upload1')->getClientOriginalName();
            $fileName1 = pathinfo($fileNameWithExt1, PATHINFO_FILENAME);
            $extension1 = $request->file('file_upload1')->getClientOriginalExtension();
            $fileNameToStore1 = $fileName1 . '.' . rand(1, 999) . '.' . $extension1;
            $path = $request->file('file_upload1')->storeAs('public/file_upload', $fileNameToStore1);
        } else{
            $fileNameToStore1 = '';
        }

        if($request->hasFile('file_upload2'))
        {
            $fileNameWithExt2 = $request->file('file_upload2')->getClientOriginalName();
            $fileName2 = pathinfo($fileNameWithExt2, PATHINFO_FILENAME);
            $extension2 = $request->file('file_upload2')->getClientOriginalExtension();
            $fileNameToStore2 = $fileName2 . '.' . rand(1, 999) . '.' . $extension2;
            $path = $request->file('file_upload2')->storeAs('public/file_upload', $fileNameToStore2);
        } else{
            $fileNameToStore2 = '';
        }

        if($request->hasFile('file_homework'))
        {
            $fileNameWithExtH = $request->file('file_homework')->getClientOriginalName();
            $fileNameH = pathinfo($fileNameWithExtH, PATHINFO_FILENAME);
            $extensionH = $request->file('file_homework')->getClientOriginalExtension();
            $fileNameToStoreH = $fileNameH . '.' . rand(1, 999) . '.' . $extensionH;
            $path = $request->file('file_homework')->storeAs('public/file_upload', $fileNameToStoreH);
        } else{
            $fileNameToStoreH = '';
        }

        //create post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        if($request->hasFile('file_upload')){
            Storage::delete('public/file_upload/' . $post->file_upload);
            $post->file_upload = $fileNameToStore;
        }
        if($request->hasFile('file_upload1')){
            Storage::delete('public/file_upload/' . $post->file_upload1);
            $post->file_upload1 = $fileNameToStore1;
        }
        if($request->hasFile('file_upload2')){
            Storage::delete('public/file_upload/' . $post->file_upload2);
            $post->file_upload2 = $fileNameToStore2;
        }
        if($request->hasFile('file_homework')){
            Storage::delete('public/file_upload/' . $post->file_homework);
            $post->file_homework = $fileNameToStoreH;
        }
        $post->color = $request->input('color');
        $post->save();

        return redirect('/folders/'.$post->folder_id)->with('success', 'Post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        //Delete file from folder, if post is deleted
        Storage::delete('public/file_upload/' . $post->file_upload);
        $post->delete($id);
        return redirect('/folders/'.$post->folder_id)->with('success', 'Post deleted');
    }
}
