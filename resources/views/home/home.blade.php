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
                <div class="box">

                    <div>
                        <a href="{{ $site["link"] }}" target="_blank">{{ $site["title"] }}</a>
                    </div>
                </div>
            @endforeach

        @else
            <div class="box">
                <div>
                    <p>No websites found!<br> Check your websites.json!</p>
                </div>
            </div>
        @endif

    </div>

@endsection


@section('scripts')

@endsection
