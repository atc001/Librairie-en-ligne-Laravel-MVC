@extends('layout.baseLayout')
@section('title', 'Liste Livre')
@section('content')
<main id="main_liste">
    <h2>Liste Livre</h2>
    <table id="tableau">
        <tr>
            <th class="separe">Livre</th>
            <th class="separe">Auteur</th>
            <th class="separe">Image</th>
            <th>Option</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <th class="separe">{{ $book['title'] }}</th>
            <th class="separe">@foreach ($book['author'] as $author)
                    {{ $author }}
                @endforeach
            </th>
            <th class="separe"><img src="{{ URL::asset($book['cover']) }}"></th>
            <th>{{ Form::open(['url' => '/updatelivre']) }}
                {{ Form::hidden('id', $book['id']) }}
                {{ Form::submit('Update') }}
                {{ Form::close() }}
                {{ Form::open(['url' => '/deletelivre']) }}
                {{ Form::hidden('id', $book['id']) }}
                {{ Form::submit('Delete') }}
                {{ Form::close() }}
            </th>
        </tr>
        @endforeach
    </table>
</main>
@endsection
