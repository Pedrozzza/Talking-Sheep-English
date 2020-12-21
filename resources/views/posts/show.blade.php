@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="margin-top: 130px;margin-bottom: 130px">
            <a href="/folders/{{$post->folder_id}}" class="btn btn-danger mb-4">Jít zpět</a>
            <h2 class="mb-4 d-flex justify-content-center">{{$post->title}}</h2>
            <div class="card p-3 mt-3">
                <div>
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
                <small>Vytvořeno:{{$post->created_at}}</small>
            </div>

            @if(Auth()->user()->id == 1)
                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary mt-3 float-right ml-3">Editovat lekci</a>

                {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'DELETE', 'class' => 'float-right']) !!}
                {{ Form::submit('Smazat lekci', ['class' => 'btn btn-warning float-right mt-3']) }}
                {!! Form::close() !!}
            @endif
        </div>
    </div>
@endsection
