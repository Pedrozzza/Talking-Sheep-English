@extends('layouts.app')

@section('content')
    <section id="category">
        <div class="container">
            <div class="">
                <a href="/folders" class="btn-back">Go back</a>
                    <h2 class="mt-5 d-flex justify-content-center">{{$folder->title}}</h2>
                <div class="p-3 mt-3">
                    <div class="obal">
                        {!! $folder->description !!}
                    </div>
                </div>

                @if(Auth()->user()->id == 1)
                    <a href="/folders/{{$folder->id}}/edit" class="btn-2 mt-3 float-right ml-3">Editovat kategorii</a>

                    {!! Form::open(['action' => ['App\Http\Controllers\FoldersController@destroy', $folder->id], 'method' => 'DELETE', 'class' => 'float-right', 'onclick'=> 'return confirm("Opravdu smazat? Smazáním kategorie se smažou všechny lekce v ní obsažené. Akce je nenávratná")']) !!}
                    {{ Form::submit('Smazat kategorii', ['class' => 'btn-3 float-right mt-3']) }}
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
                    <a href="/posts/{{$post->id}}">                                        
                        <div class="lesson box-shad" style="background-color: {{ $post->color }};">
                            <div class="obal box-inner">
                                <h5 class="pt-3 d-flex justify-content-center popisek">{{ $post->title }}</h5>
                                <div class="pb-1 pr-3">{!! $post->body !!}</div>
                            </div>                  
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
