@extends('layouts.app')

@section('title', 'Create new project')

@section('content')
    <h1 class="text-center mt-5">Add A Project</h1>
    @include('includes.form')
@endsection
@section('scripts')
    @vite('resources/js/slug-gen.js')
@endsection