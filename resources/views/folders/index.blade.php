@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="margin-top: 100px;margin-bottom: 100px">
            <h2 class="d-flex justify-content-center">Seznam kategorií</h2>
            @if(Auth()->user()->id == 1)
                <a href="/folders/create" class="btn btn-primary mb-4 mt-4">Vytvořit novou kategorii</a>
            @endif
            @if(count($folders) > 0)
                @foreach($folders as $folder)
                    <a href="/folders/{{$folder->id}}" class="contactemail">
                        <div class="card p-3 mt-4 cardstyle" style="background-color: {{ $folder->color }}">
                            <h5>{{$folder->title}}</h5>
                            <small>Vytvořeno: {{$folder->created_at}}</small>
                        </div>
                    </a>
                @endforeach
                <div class="mt-4 d-flex justify-content-center">
                    {{$folders->links()}}
                </div>
            @else
                <p>Nenalezeny žádné kategorie</p>
            @endif
        </div>
    </div>
@endsection

