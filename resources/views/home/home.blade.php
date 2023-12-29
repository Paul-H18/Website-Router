@extends('layouts.master')

@section('imports')

    @vite('resources/css/app.css')

@endsection

@section('title')

    {{ $title }}

@endsection

@section('content')

    <h1>Website-Router</h1>


    <div class="boxes">

        @if($websites)

            @foreach($websites as $site)
                <a href="{{ $site["link"] }}">{{ $site["title"] }}</a>
            @endforeach

        @else
            <div class="box">
                <p>No websites found!<br> Check your websites.json!</p>
            </div>
        @endif

    </div>

@endsection


@section('scripts')

@endsection
