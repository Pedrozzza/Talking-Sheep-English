@extends('layouts.app')

@section('content')
<section id="administration">
    <div class="container">
        <h4>Seznam aktuálních studentů</h4>
        <table>
            <tr class="users">
                <th>Jméno</th>
                <th>Email</th>
                <th>Registrován</th>
                <th>Akce</th>
            </tr>
            
                @foreach( $users as $user )
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('d/m/Y') }}</td>
                    <td>
                    {!! Form::open(['action' => ['App\Http\Controllers\AdministrationsController@destroy', $user->id], 'method' => 'DELETE', 'onclick'=> 'return confirm("Opravdu smazat uživatele? Smazáním uživatele dojde ke smazaní všech jeho odevzdaných souborů. Akce je nenávratná")']) !!}
                    {{ Form::submit('X', ['class' => 'delete']) }}
                    {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
                
        </table>
       
    </div>
</section>
    
@endsection

