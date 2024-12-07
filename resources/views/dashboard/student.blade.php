@extends('dashboard.default')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Student Dashboard') }}
    </h2>
@endsection

@section('content')
    <div>
        {{ __("Welcome to the Student Dashboard!") }}
    </div>
@endsection
