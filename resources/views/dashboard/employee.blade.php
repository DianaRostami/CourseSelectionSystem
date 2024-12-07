@extends('dashboard.default')

@section('header')
    <a href="{{ route('employee.index') }}">Employee Index</a>
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Employee Dashboard') }}
    </h2>
@endsection

@section('content')
    <div>
        {{ __("Welcome to the Employee Dashboard!") }}
    </div>
@endsection
