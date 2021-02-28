@extends('layouts.app')

@section('content')

    <div class="container">
    @include('inc.messages')
    <h4 class="my-5">Hodnocení úloh</h4>
        
        
        <table class="mb-3">
            <tr>            
                <th>Číslo úkolu</th>
                <th>Poznámka</th>
                <th>Hodnocení</th>
                <th>Doručeno</th>
                <th>Smazat</th>
                <th>Stáhnout soubor</th>

            </tr>
            @if(count($messages) > 0)
                @foreach( $messages as $message )
                <tr style="word-break:break-word;">
                    <td class="number">{{ $message->number }}</td>
                    <td>{{ $message->notes }}</td>
                    <td class="evaluation">{{ $message->evaluation }}</td>
                    <td>{{ $message->created_at }}</td>
                    <td>
                        {!! Form::open(['action' => ['App\Http\Controllers\MessagesController@destroy', $message->id], 'method' => 'DELETE', 'onclick'=> 'return confirm("Opravdu si přejete tento report smazat? Akce je nenávratná")']) !!}
                        {{ Form::submit('X', ['class' => 'delete']) }}
                        {!! Form::close() !!}
                    </td>
                    <td>
                        @if( $message->file )
                            <a href="/storage/message_upload/{{ $message->file }}" class="download"> &#10149;</a>
                        @endif   
                    </td>
                </tr>
                @endforeach
            @else
            <p>Žádné hodnocení úkolu zatím není k zobrazení</p>              
            @endif 
        </table>
    </div>
    
@endsection

