@extends('layouts.app')

@section('content')

    <div class="container">
    <h4 class="my-3">Příchozí pošta</h4>
        
        
        <table class="mb-3">
            <tr class="">
                <th>Od koho</th>
                <th>Předmět</th>
                <th>Zpráva</th>            
                <th>Číslo úkolu</th>
                <th>Soubor</th>
                <th>Hodnocení</th>
                <th>Doručeno</th>
                <th>Smazat</th>
                <th>Stáhnout</th>

            </tr>
            @if(count($messages) > 0)
                @foreach( $messages as $message )
                <tr>
                    <td></td>
                    <td>{{ $message->title }}</td>
                    <td>{!! $message->body !!}</td>
                    <td>{{ $message->number }}</td>
                    <td>{{ $message->file }}</td>
                    <td>{{ $message->evaluation }}</td>
                    <td>{{ $message->created_at }}</td>
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'onclick'=> 'return confirm("Opravdu smazat úkol? Akce je nenávratná")']) !!}
                        {{ Form::submit('X', ['class' => 'delete']) }}
                        {!! Form::close() !!}
                    </td>
                    <td>
                        <a href="/storage/message_upload/{{ $message->file }}" class="download"> &#10149;</a>    
                    </td>
                </tr>
                @endforeach
            @else
            <tr><td>Žádné zprávy k zobrazení</td>
                          </tr>
                
            @endif 
        </table>
    </div>
    
@endsection

