@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="margin-top: 130px;margin-bottom: 130px">
            <a href="/folders/{{$post->folder_id}}" class="btn-1 mb-4">Go back</a>
            <h2 class="mb-4 d-flex justify-content-center">{{$post->title}}</h2>
            <div class="p-3 mt-3">
                <div class="obal">
                    {!!$post->body!!}
                </div>
                <hr>
                <div>
                    <p>Pro stáhnutí klikni na
                        <a href="/storage/file_upload/{{$post->file_upload}}" class="contactemail"> {{ $post->file_upload }}</a>
                        @if (!empty($post['file_upload1']))
                        ,dále <a href="/storage/file_upload/{{$post->file_upload1}}" class="contactemail"> {{ $post->file_upload1 }}</a>
                        @endif
                        @if (!empty($post['file_upload2']))
                        a <a href="/storage/file_upload/{{$post->file_upload2}}" class="contactemail">{{ $post->file_upload2 }}</a>
                        @endif                 
                    </p>
                </div>               
            </div>

            @if(Auth()->user()->id == 1)
                <a href="/posts/{{$post->id}}/edit" class="btn-2 mt-3 float-right ml-3">Editovat lekci</a>

                {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'DELETE', 'class' => 'float-right', 'onclick'=> 'return confirm("Opravdu smazat? Akce je nenávratná")']) !!}
                {{ Form::submit('Smazat lekci', ['class' => 'btn-3 float-right mt-3']) }}
                {!! Form::close() !!}
            @endif
        </div>
    </div>
@endsection

