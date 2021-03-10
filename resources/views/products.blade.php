@extends('layouts.app')

@section('title', 'Prodotti | La Molisana')

@section('content')
    <div class="products_container">
        @foreach ($pasta as $item)
            <div class="box_pasta">
                <img src="{{$item['src']}}" alt="{{$item['titolo']}}">
                <div class="overlay">
                    <i class="fas fa-plus"></i>
                    <p>{{$item['titolo']}}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection