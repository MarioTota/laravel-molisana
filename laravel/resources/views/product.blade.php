@extends('layouts.main')

@section('content')
<main style="background-color: #B8DAE4; background-image:none;">
    <div class="container">
        <h1>{{ $product['titolo'] }}</h1>
        <div class="immagini_prodotto">
            {{-- @if($id > 0) --}}
                <a href="{{ route('prodotto', ['id' => $prev]) }}"><i class="fas fa-chevron-left"></i></a>
            {{-- @endif --}}
            {{-- @if($id = count($product -1)) --}}
                <a href="{{ route('prodotto', ['id' => $next]) }}"><i class="fas fa-chevron-right"></i></a>
            {{-- @endif --}}
            <img class="prodotto" src="{{ $product['src-h'] }}" alt="">
            <img class="prodotto" src="{{ $product['src-p'] }}" alt="">
            <p>{!! $product['descrizione'] !!}"</p>
        </div>
    </div>
</main>
@endsection