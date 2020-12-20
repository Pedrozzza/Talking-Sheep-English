@extends('layouts.app')

@section('content')
    <section id="category">
        <div class="container">
            <div class="jumbotron">
                <a href="/folders" class="btn btn-danger mb-4">Jít zpět</a>
                    <h2 class="mb-2 d-flex justify-content-center">{{$folder->title}}</h2>
                <div class="card p-3 mt-3">
                    <div>
                        {!! $folder->description !!}
                    </div>
                    <hr>
                    <small>Vytvořeno: {{$folder->created_at}}</small>
                </div>

                @if(Auth()->user()->id == 1)
                    <a href="/folders/{{$folder->id}}/edit" class="btn btn-primary mt-3 float-right ml-3">Editovat kategorii</a>

                    {!! Form::open(['action' => ['App\Http\Controllers\FoldersController@destroy', $folder->id], 'method' => 'DELETE', 'class' => 'float-right']) !!}
                    {{ Form::submit('Smazat kategorii', ['class' => 'btn btn-warning float-right mt-3']) }}
                    {!! Form::close() !!}
                @endif
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <br><br><hr>
            <h3 class="mt-3 d-flex justify-content-center aboutheaders">Seznam lekcí k této kategorii</h3>

            @if(count($posts) > 0)
                @foreach($posts as $post)
                    <a href="/posts/{{$post->id}}" class="contactemail">
                        <div class="card p-3 mt-4 cardstyle" style="background-color: {{ $post->color }}">
                            <h5>{{$post->title}}</h5>
                            <small>Vytvořeno: {{$post->created_at}}</small>
                        </div>
                    </a>

                @endforeach
                <div class="mt-4 d-flex justify-content-center">
                    {{$posts->links()}}
                </div>
            @else
                <p class="font-weight-bold">Nenalezeny žádné lekce</p>
            @endif
            @if(Auth()->user()->id == 1)
                <a href="/posts/create/{{$folder->id}}" class="btn btn-success mt-3 mb-3">Vytvořit novou lekci</a>
            @endif
        </div>
    </section>
@endsection
