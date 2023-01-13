@extends('layouts.app')

@section('content')
    {{--<main class="sm:container sm:mx-auto sm:mt-10">--}}
    {{--    <div class="w-full sm:px-6">--}}

    {{--        @if (session('status'))--}}
    {{--            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">--}}
    {{--                {{ session('status') }}--}}
    {{--            </div>--}}
    {{--        @endif--}}

    {{--    </div>--}}
    {{--</main>--}}
{{--    @php(dd($company))--}}

        <div class="flex-wrap flex  p-5 m-5 justify-center">

            @foreach($platoons as $platoon)
            <a  href="{{route('platoon',$platoon)}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"> {{$platoon->platoon_name}}</a>

            @endforeach
{{--@php(dd($id))--}}

    </div>



@endsection
