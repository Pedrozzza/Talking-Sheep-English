@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="margin-top: 50px;margin-bottom: 130px">
        <a href="/folders" class="btn-back">Jít zpět</a>
            <h2 class="d-flex justify-content-center mt-5">Editovat kategorii</h2>
            {!! Form::open(['action' => ['App\Http\Controllers\FoldersController@update', $folder->id], 'method' => 'PUT']) !!}
            <div class="form-group font-weight-bold mt-5">
                {{Form::label('title', 'Titulek')}}
                {{Form::text('title',$folder->title, ['class' => 'form-control', 'placeholder' => 'Titulek'])}}
            </div>
            <div class="form-group font-weight-bold">
                {{Form::label('description', 'Description')}}
                {{Form::textarea('description', $folder->description, ['id'=>'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description text...'])}}
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
