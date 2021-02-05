@extends('layouts.main')

@section('content')

  <main>
    
    @include('partials.cards', ['title' => 'Le lunghe', 'pastaArray' => $lunghe ])
    
    @include('partials.cards', ['title' => 'Le corte', 'pastaArray' => $corte ])
    
    @include('partials.cards', ['title' => 'Le cortissime', 'pastaArray' => $cortissime ])      
    
  </main>
  
@endsection