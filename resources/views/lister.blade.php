@extends('layout.baseLayout')
@section('title', 'Liste Livre')
@section('content')
<main id="main_liste">
    <h2>Liste Livre</h2>
   
    @foreach ($books as $book)
     
        <p>{{ $book['title'] }} :
            @foreach ($book['author'] as $author)
                {{ $author }}
            @endforeach
            
        </p>
        
        {{ Form::open(['url' => '/updatelivre']) }}
        {{ Form::hidden('id', $book['id']) }}
        {{ Form::submit('Update') }}
        {{ Form::close() }}
        {{ Form::open(['url' => '/deletelivre']) }}
        {{ Form::hidden('id', $book['id']) }}
        {{ Form::submit('Delete') }}
        {{ Form::close() }}
    @endforeach
</main>
@endsection