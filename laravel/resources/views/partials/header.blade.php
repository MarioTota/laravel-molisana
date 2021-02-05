<header>
		<img src="{{ asset('images/marchio-sito-test.png') }}" alt="">
		<nav>
				<a href="{{ route('home') }}" class="{{ Route::currentRouteName() == 'home' ? 'active' : ''}}">Home
				</a><a href="{{ route('prodotto', ['id' => 0]) }}" class="{{ Route::currentRouteName() == 'prodotto' ? 'active' : ''}}">Prodotti
				</a><a href="{{ route('news') }}" class="{{ Route::currentRouteName() == 'news' ? 'active' : ''}}">News</a>
		</nav>
</header>