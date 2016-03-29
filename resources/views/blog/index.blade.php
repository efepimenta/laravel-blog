@extends('base')

@section('content')
    <ul>
        @foreach($posts as $post)
            <li>
                <h2>{{ $post['title'] }}</h2>
                <h3>{{ $post['content'] }}</h3>
            </li>
        @endforeach
    </ul>
@endsection