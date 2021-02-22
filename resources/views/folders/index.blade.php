@extends('layouts.app')

@section('content')
  
    <div class="container">
        @include('inc.messages')
        <div style="margin-top: 50px;margin-bottom: 50px">
            <h2 class="d-flex justify-content-center mb-4">Seznam kategorií</h2>
            @if(Auth()->user()->id == 1)
                <a href="/folders/create" class="btn-2">Vytvořit novou kategorii</a>
            @endif
            @if(count($folders) > 0)
                @foreach($folders as $folder)
                
                    <a href="/folders/{{$folder->id}}">
                    <div class="lesson box-shad" style="background-color: {{ $folder->color }};">
                            <div class="obal">
                                <h5 class="pt-3 d-flex justify-content-center popisek">{{ $folder->title }}</h5>
                                <div class="pb-1 pr-3">{!! $folder->description !!}</div>
                            </div>                  
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

