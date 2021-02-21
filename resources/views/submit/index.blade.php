@extends('layouts.app')

@section('content')
<section id="submit" class="sheep_background">
    <div class="container" class="submit_container">
        <div class="submit_padding">
            <p class="font-weight-bold mt-5" style="font-size: 1.1rem">
                Upload your homework <strong class="darkred">HERE! </strong>
            </p>
            <div class="mt-3">
            {!! Form::open(['action' => 'App\Http\Controllers\HomeworksController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group font-weight-bold">

                {{Form::label('name', 'Vaše jméno')}}
                {{Form::text('name','',)}}
            
                {{Form::label('number', 'Číslo úkolu')}}
                {{Form::number('number', '')}}
            </div>   
            <div class="form-group font-weight-bold"> 
                {{Form::label('file', 'Vložte soubor')}}
                {{Form::file('file')}}
            </div>
            <did>
                {{Form::submit('Odeslat', ['class' => 'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
    
@endsection

