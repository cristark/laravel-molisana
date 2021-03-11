@extends('layouts.app')

@section('title', 'Dettagli Prodotto | '.$dettagli['titolo'])

@section('content')
    <div class="details_container">
        <img src="{{$dettagli['src-h']}}" alt="{{$dettagli['titolo']}}">
        <img src="{{$dettagli['src-p']}}" alt="{{$dettagli['titolo']}}">
        <p>{{$dettagli['titolo']}}</p>
        <p>{{$dettagli['cottura']}}</p>
        <p>{{$dettagli['peso']}}</p>
        <p>{!!$dettagli['descrizione']!!}</p>
    </div>              
@endsection