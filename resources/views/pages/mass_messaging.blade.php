@extends('layouts.app')

@section('content')
<div class="container">
@include('inc.messages')
        <div style="margin-top: 130px;margin-bottom: 130px">
            <h2 class="d-flex justify-content-center mb-4">Napište zprávu vybraným uživatelům</h2>
            {!! Form::open(['action' => 'App\Http\Controllers\MessagesController@sendMassMessage', 'method' => 'POST']) !!}
            {{ csrf_field() }}
                    <table>
                    <tr class="">
                        <th>ID</th>
                        <th>Jméno</th>
                        <th>Email</th>
                        <th>Registrován</th>
                        <th>Vybrat</th>
                    </tr>
                    
                    @foreach( $users as $user )
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('d/m/Y') }}</td>
                        <td>{{ Form::checkbox('users[]', $user->id) }}</td>
                    </tr>
                    @endforeach
                    <tr style="background-color:#0000ff1a">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <!-- <td>{{ Form::checkbox('select-all', '',['id' => 'select-all']) }} {{ Form::label('select-all', '',['class' => 'ml-3']) }}</td> -->
                        <td><input type="checkbox" id="select-all" name="select-all"><label for="select-all" class="ml-3 mb-0">Vybrat vše</label></td>
                    </tr>       
                </table>
                <div class="form-group font-weight-bold mt-3">
                    {!! Form::label('subject', 'Předmět zprávy*') !!}
                    {!! Form::text('subject','', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group font-weight-bold mt-3">
                    {!! Form::label('body', 'Vaše zpráva*') !!}
                    {!! Form::textarea('body','', ['id'=>'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Text...']) !!}
                </div>
                <div class="mt-4">
                    {{ Form::submit('Odeslat', ['class' => 'btn btn-primary']) }}
                </div>   
            </div>
            {!! Form::close() !!} 
        </div>
    </div>
    
@endsection

