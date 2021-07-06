@extends('master')


@section('title', 'Homepage')


@section('content')


    Recent Messages;

    <form action="/create" method="post">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="content" placeholder="Content">
        {{csrf_field()}}
        <button type="submit">Submit</button>
    </form>


    <ul>
        @foreach($messages as $message)

            <li>

                <strong>{{ $message ->title }}</strong>
                <br>
                    {{ $message->content }}
                <br>
                {{ $message->created_at -> diffForHumans()}}

                <a href="/message/{{ $message->id }}">View</a>
            </li>

        @endforeach
    </ul>


@endsection
