@extends('layouts.app')

@section('content')
<div class="container">
@include('inc.messages')
        <div style="margin-top: 130px;margin-bottom: 130px">
            <h2 class="d-flex justify-content-center">Napište zprávu -> {{ $user->name }}</h2>
            {!! Form::open(['action' => ['App\Http\Controllers\MessagesController@store', $user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group font-weight-bold">
                {{Form::label('title', 'Předmět')}}
                {{Form::text('title','', ['class' => 'form-control', 'placeholder' => 'Předmět zprávy'])}}
            </div>
            <div class="form-group font-weight-bold">
                {{Form::label('body', 'Vaše zpráva')}}
                {{Form::textarea('body','', ['id'=>'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Zpráva...'])}}
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
                    'absolutely_perfect' => 'Absolutely perfect!',
                    'You_are_simply_the_best' => 'You are simply the best!',
                    'Well_done' => 'Well done!',
                    'This_is_an_amazing_piece_of_work' => 'This is an amazing piece of work',
                    'Great_job_but_dont_forget_to_add_corrected_sentence_from_the_previous_homework' => 'Great job, but do not forget to add corrected sentence from the previous homework',
                    'Good_but_too_short_try_to_practise_in_more_sentences_next_time' => 'Good, but too short. Try to practise in more sentences next time!',                    
                    ])}}
            </div>
            {{Form::submit('Odeslat', ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
    
@endsection

