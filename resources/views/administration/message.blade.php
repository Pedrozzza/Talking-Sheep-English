@extends('layouts.app')

@section('content')
<div class="container">
@include('inc.messages')
        <div style="margin-top: 130px;margin-bottom: 130px">
            <h2 class="d-flex justify-content-center">Napište zprávu -> {{ $user->name }}</h2>
            {!! Form::open(['action' => ['App\Http\Controllers\MessagesController@store', $user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

            <div class="form-group font-weight-bold">
                {{Form::label('body', 'Poznámka')}}
                {{Form::text('body','', ['class' => 'form-control'])}}
            </div>
            <div class="form-group font-weight-bold">
                {{Form::label('number', 'Číslo úkolu')}}
                {{Form::number('number', '')}}
            </div>
            <div class="form-group font-weight-bold">
                {{Form::label('file','Opravený úkol')}}
                {{Form::file('file_message')}}
            </div>
            <div>
                {{Form::label('evaluation', 'Hodnocení úkolu')}}
                {{Form::select('evaluation', [
                    '' => 'None',
                    '&#10025; &#10025; &#10025;' => '3 * &#10025;',
                    '&#10025; &#10025; ' => '2 * &#10025;',
                    '&#10025;' => '1 * &#10025;',
                    ])}}
            </div>

            {{Form::submit('Odeslat', ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>

@endsection

