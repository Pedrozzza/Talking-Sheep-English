@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="margin-top: 130px;margin-bottom: 130px">
            <h2 class="d-flex justify-content-center">Vytvoření kategorie</h2>
            {!! Form::open(['action' => 'App\Http\Controllers\FoldersController@store', 'method' => 'POST']) !!}
            <div class="form-group font-weight-bold">
                {{Form::label('title', 'Titulek')}}
                {{Form::text('title','', ['class' => 'form-control', 'placeholder' => 'Titulek'])}}
            </div>
            <div class="form-group font-weight-bold">
                {{Form::label('description', 'Popis')}}
                {{Form::textarea('description','', ['id'=>'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Popis...'])}}
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
