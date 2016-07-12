@extends('layouts.master')

@section('title','Lista de Productos')

@section('content')


        {{--if (Session::has('tabla')) {--}}
        {{--$user = Session::get('tabla');--}}
        {{--echo $user['name'];--}}
        {{--}--}}

        {{--@foreach(Session::get('tabla') as $row)--}}
        {{--<ul>--}}
            {{--<li>{{ $row }} </li>--}}
        {{--</ul>--}}
        {{--@endforeach--}}





        @if (Session::has('tabla'))

            @foreach(Session::get('tabla') as $rows)

                {{ $rows ['name'] }} <br>

            @endforeach

        @endif





    {{--@if (Session::has('tabla'))--}}

        {{--@foreach(Session::get('tabla') as $row)--}}
            {{--{{ $row }}--}}
        {{--@endforeach--}}
    {{--@endif--}}



        {{--@foreach($_SESSION['tabla'] as $row)--}}

            {{--{{ $row['name'] }}<br>--}}

        {{--@endforeach--}}



@endsection