@extends('layout.baseLayout')
@section('title', 'Liste Livre')
@section('content')
<main id="main_liste">
    @foreach ($books as $book)
        <p>{{ $book['title'] }} : {{ $book['author'] }}</p>
    @endforeach
</main>
@endsection