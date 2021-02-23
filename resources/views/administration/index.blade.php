@extends('layouts.app')

@section('content')
<section id="administration">
    <div class="container">
    @include('inc.messages')  
        <h4 class="my-3">Seznam aktuálních studentů</h4>
        <table>
            <tr class="">
                <th>ID</th>
                <th>Jméno</th>
                <th>Email</th>
                <th>Registrován</th>
                <th>Smazat</th>
                <th>Zpráva</th>
            </tr>
            
                @foreach( $users as $user )
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('d/m/Y') }}</td>
                    <td>
                        {!! Form::open(['action' => ['App\Http\Controllers\AdministrationsController@destroy', $user->id], 'method' => 'DELETE', 'onclick'=> 'return confirm("Opravdu smazat uživatele? Smazáním uživatele dojde ke smazaní všech jeho odevzdaných souborů. Akce je nenávratná")']) !!}
                        {{ Form::submit('X', ['class' => 'delete']) }}
                        {!! Form::close() !!}
                    </td>
                    <td>
                        {!! Form::open(['action' => ['App\Http\Controllers\MessagesController@index', $user->id], 'method' => 'get']) !!}
                        {{ Form::submit('&#9993;', ['class' => 'message']) }}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach       
        </table>
        <div class="mt-3">
            <p>Celkový počet studentů: {{ $users->count() }} </p>
        </div>
        <hr>
       
        <h4 class="my-3">Odevzdané úkoly</h4>
        
        <table class="mb-3">
            <tr class="">
                <th>ID</th>
                <th>ID studenta</th>
                <th>Jméno studenta</th>
                <th>Číslo úkolu</th>
                <th>Soubor</th>
                <th>Odevzdáno</th>
                <th>Smazat</th>
                <th>Stáhnout</th>
            </tr>
            
                @foreach( $homeworks as $homework )
                <tr>
                    <td>{{ $homework->id }}</td>
                    <td>{{ $homework->user_id }}</td>
                    <td>{{ $homework->name }}</td>
                    <td>{{ $homework->number }}</td>
                    <td>{{ $homework->file}}</td>
                    <td>{{ $homework->created_at }}</td>
                    <td>
                        {!! Form::open(['action' => ['App\Http\Controllers\HomeworksController@destroy', $homework->id], 'method' => 'DELETE', 'onclick'=> 'return confirm("Opravdu smazat úkol? Akce je nenávratná")']) !!}
                        {{ Form::submit('X', ['class' => 'delete']) }}
                        {!! Form::close() !!}
                    </td>
                    <td>
                        <a href="/storage/homework_upload/{{ $homework->file }}" class="download"> &#10149;</a>    
                    </td>
                </tr>
                @endforeach       
        </table>
    </div>
</section>
    
@endsection

