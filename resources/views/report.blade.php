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

{{--            @foreach($group as $platoon)--}}
            <a  href="{{route('reports',$group)}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"> {{$group->id}}تعهد داخل مدينة الرياض</a>
{{--            @endforeach--}}
{{--@php(dd($id))--}}

    </div>



@endsection
