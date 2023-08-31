@extends('layouts.app')

@section('title', 'Projects List')


@section('content')
    <h1 class="text-center mt-5">Projects List</h1>
    <ul class="list-unstyled">
        @forelse ($projects as $project)
            <li class="my-5">
                <div class="card p-5">
                    <h2>
                        {{ $project->title }}
                    </h2>
                </div>
            </li>
        @empty
        @endforelse
    </ul>
@endsection