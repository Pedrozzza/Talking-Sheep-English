@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="margin-top: 130px;margin-bottom: 130px">
            <h2 class="d-flex justify-content-center">Vytvoření nové lekce</h2>
            {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group font-weight-bold">
                {{Form::label('title', 'Titulek')}}
                {{Form::text('title','', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group font-weight-bold">
                {{Form::label('body', 'Obsah')}}
                {{Form::textarea('body','', ['id'=>'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Text...'])}}
            </div>
            <p style="font-weight:bold">Soubory k lekcím:</p>
            <div class="form-group font-weight-bold">
                {{Form::file('file_upload')}}
            </div>
            <div class="form-group font-weight-bold">
                {{Form::file('file_upload1')}}
            </div>
            <div class="form-group font-weight-bold">
                {{Form::file('file_upload2')}}
            </div>
            <div>
                {{Form::label('color', 'Barva pozadí')}}
                {{Form::select('color', [
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
            <p style="font-weight:bold" class="pt-3">Soubor HOMEWORK:</p>
            <div class="form-group font-weight-bold">
                {{Form::file('file_homework')}}
            </div>
            <p style="font-weight:bold" class="pt-3">Soubor CONVERSATION:</p>
            <div class="form-group font-weight-bold">
                {{Form::file('file_conversation')}}
            </div>
            {{Form::hidden('folder_id', $folder_id)}}
            {{Form::submit('Odeslat', ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
