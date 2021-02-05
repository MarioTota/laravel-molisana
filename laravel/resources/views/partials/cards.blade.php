<section class="container">
    <h3>{{ $title }}</h3>
    <div class="cards">
    @foreach( $pastaArray as $pasta)
        <div class="card">
        <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
        <div class="card-text">
            <a href="{{ route('prodotto',['id' => $pasta['position']]) }}">{{ $pasta['titolo'] }}</a>
        </div>
        </div>
    @endforeach
    </div>
</section>