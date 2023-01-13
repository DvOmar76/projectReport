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
<div class="flex-wrap flex  p-5 m-5 justify-center">
    @foreach($companies as $company)
    <a href="{{route('company',$company)}}"
       class="m-5 flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
             src="@if($company->id ==1) {{asset('s.jpg')}}" @else {{asset('n.jpeg')}}" @endif alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$company->company_name}}</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"></p>
        </div>
    </a>
    @endforeach


</div>



@endsection
