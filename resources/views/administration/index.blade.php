@extends('layouts.app')

@section('content')
<section id="administration">
    <div class="container mb-5">
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

        <h4 class="my-3">Hromadné zprávy</h4>
        <div>
            <a href="{{ route('massMessaging') }}" class="btn btn-primary">Přejít</a>
        </div>
        <hr>

        <h4 class="my-3">Seznam zájemců o kurz!</h4>
        <table>
            <tr class="">
                <th>Jméno</th>
                <th>Email</th>
                <th>Tel. číslo</th>
                <th>Zapsán</th>
                <th>Smazat</th>
            </tr>
            
                @foreach( $applicants as $applicant )
                <tr>
                    <td>{{ $applicant->name }}</td>
                    <td>{{ $applicant->email }}</td>
                    <td>{{ $applicant->phone }}</td>
                    <td>{{ $applicant->created_at->format('d/m/Y') }}</td>
                    <td>
                        {!! Form::open(['action' => ['App\Http\Controllers\ApplicantController@destroy', $applicant->id], 'method' => 'DELETE', 'onclick'=> 'return confirm("Opravdu smazat zájemce? Smazáním zájemce dojde ke smazaní všech kontaktů na něj a akce je nenávratná")']) !!}
                        {{ Form::submit('X', ['class' => 'delete']) }}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach       
        </table>
        
        @if(count($applicants) <= 0 )
            <div class="py-2">
                <p>Dosud nebyl zaznamenán žádný zájemce o kurz</p>
            </div>
        @endif

        <hr>

        <h4 class="my-3">Odevzdané úkoly</h4>
        <table class="mb-3">
            <tr class="">
                <th>ID studenta</th>
                <th>Jméno studenta</th>
                <th>Číslo úkolu</th>
                <th>Soubor</th>
                <th>Odevzdáno</th>
                <th>Stáhnout</th>
                <th>Zkontrolováno</th>
                <th>Vybrat</th>
            </tr>
            
                @foreach( $homeworks as $homework )
                {!! Form::open(['action' => ['App\Http\Controllers\HomeworksController@destroy'], 'method' => 'DELETE', 'onclick'=> 'alert("Opravdu smazat úkol/y? Akce je nenávratná")']) !!}
                {{ csrf_field() }}
                <tr id="" class="">
                    <td>{{ $homework->user_id }}</td>
                    <td>{{ $homework->name }}</td>
                    <td>{{ $homework->number }}</td>
                    <td>{{ $homework->file}}</td>
                    <td>{{ $homework->created_at }}</td>
                    <td>
                        <a href="/storage/homework_upload/{{ $homework->file }}" class="download"> &#10149;</a>    
                    </td>
                    <td class="checked">{!! $homework->checked !!}</td>
                    <td>{{ Form::checkbox('homeworks[]', $homework->id) }}</td>
                </tr>
                @endforeach  
                <tr style="background-color:#0000ff1a">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><input type="checkbox" id="select-all" name="select-all"><label for="select-all" class="ml-3 mb-0">Vybrat vše</label></td>
                    </tr>      
        </table>
        <div class="mt-4 text-right">
            {{ Form::submit('Smazat vybrané', ['class' => 'btn-4', 'style' => 'color:white']) }}
        </div>   
        {!! Form::close() !!} 
    <hr>    

        <h4 class="my-3">Správce registračních kódů</h4>
        <div class="my-3">
            {!! Form::open(['action' => 'App\Http\Controllers\CodesController@store', 'method' => 'POST']) !!}
                {{ Form::label('code', 'Vytvořit nový kód')}}
                {{ Form::text('code','')}}
                {{ Form::submit('Vytvořit', ['class' => 'btn btn-primary']) }}
            {!! Form::close() !!}
        </div>

        <p >Seznam aktuálně platných kódů:</p>
        <table id="" class="mb-3">
            <tr class="">
                <th>ID</th>
                <th>Kód</th>
                <th>Vytvořeno</th>                                
                <th>Odebrat kód</th>              
            </tr>
            
                @foreach( $codes as $code )
                <tr>
                    <td>{{ $code->id }}</td>
                    <td>{{ $code->code }}</td>
                    <td>{{ $code->created_at }}</td>
                    <td>
                        {!! Form::open(['action' => ['App\Http\Controllers\CodesController@destroy', $code->id], 'method' => 'DELETE', 'onclick'=> 'return confirm("Opravdu vymazat tento registrační kód? Akce je nenávratná")']) !!}
                        {{ Form::submit('X', ['class' => 'delete']) }}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach       
        </table>
    </div>

</section>

@endsection


    
