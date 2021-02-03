<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <header>
      <img src="{{ asset('images/marchio-sito-test.png') }}" alt="">
      <nav>
        <a href="">Home</a>
        <a href="">Prodotti</a>
        <a href="">News</a>
      </nav>
    </header>
    <main>
      <div class="container">
        <h3>Le lunghe</h3>
        <div class="img_pasta">
          <div class="layover">

          </div>
        </div>
      </div>
      <div class="container">
        <h3>le corte</h3>
        <div class="img_pasta">
          <div class="layover">

          </div>
        </div>
      </div>
      <div class="container">
        <h3>le cortissime</h3>
        <div class="img_pasta">
          <div class="layover">

          </div>
        </div>
    </div>
  </main>
  <footer>
      <div class="container">
      </div>
  </footer>
</html>
