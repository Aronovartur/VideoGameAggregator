@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
            Popular Games - PC
        </h2>

        <div class="popular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800">
            @foreach($popularPCGames as $game)
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src=" {{Str::replaceFirst('thumb','cover_big', $game['cover']['url'])}}"
                                 alt="coverImage" class="hover:opacity-75 transition ease-in-out">
                            <a href="#"
                               class="block text0base font-semibold leading-tight hover:text-gray-400 mt-8">{{$game['name']}}</a>
                            <span class="text-gray-100">
                            Also available on:
                                </span>
                            <div class="text-gray-400 mt-1">

                                @foreach($game['platforms'] as $platform)

                                    @if(array_key_exists('abbreviation', $platform))

                                        @if($platform['abbreviation']!='PC')
                                        {{$platform['abbreviation']}},
                                            @endif

                                    @endif


                                @endforeach

                            </div>
                        </a>
                    </div>
                </div>

            @endforeach


        </div>
    </div>



@endsection