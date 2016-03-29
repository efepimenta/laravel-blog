@extends('base')

@section('content')
    <ul>
        <li>
            <h2>{{ $post['title'] }}</h2>
            <h3>{{ $post['content'] }}</h3>
        </li>
    </ul>
@endsection