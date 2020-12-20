@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="margin-top: 90px;margin-bottom: 50px">
            <h2 class="d-flex justify-content-center">Editovat Lekci</h2>
            <a href="/folders/"{{$post->folder_id}} class="btn btn-danger mb-3">Jít zpět</a>

            {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group font-weight-bold">
                {{Form::label('title', 'Titulek')}}
                {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group font-weight-bold">
                {{Form::label('body', 'Obsah')}}
                {{Form::textarea('body', $post->body, ['id'=>'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body text...'])}}
            </div>
            <div class="form-group font-weight-bold">
                {{Form::file('file_upload')}}
            </div>
            <div>
                {{Form::label('color', 'Barva pozadí')}}
                {{Form::select('color', [
                    '#ffffff' => 'bílá',
                    '#ff6666' => 'červená',
                    '#80aaff' => 'modrá',
                    '#80ff80' => 'zelená',
                    '#ffff4d' => 'žlutá',
                    '#ff751a' => 'oranžová',
                    '#ff99ff' => 'růžová',
                    '#80ffe5' => 'tyrkysová',
                    '#c2d6d6' => 'šedá',
                    ])}}
            </div>
            {{Form::submit('Odeslat', ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
