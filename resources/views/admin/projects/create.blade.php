@extends('layouts.app')

@section('title', 'Create new project')

@section('content')
    <h1 class="text-center mt-5">Add A Project</h1>
    <form method="POST" action="{{ route('admin.projects.store') }}" class="text-white bg-dark p-5 rounded mt-5">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" required>
            <div class="form-text">Required</div>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Repository name</label>
            <input type="text" class="form-control" id="slug" aria-describedby="slugHelp" name="slug" required>
            <div class="form-text">Without spaces, use '-' as a space</div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image (url)</label>
            <input type="url" class="form-control" id="image" name="image">
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="main_lang" class="form-label">Main language used</label>
                <input type="text" class="form-control" id="main_lang" name="main_lang">
            </div>
            <div class="mb-3 col-6">
                <label for="other_langs" class="form-label">Other languages used</label>
                <input type="text" class="form-control" id="other_langs" name="other_langs">
            </div>
        </div>
        <div class="mb-3 w-25">
            <label for="n_stars" class="form-label">Number of stars received</label>
            <input type="number" class="form-control" id="n_stars" name="n_stars">
        </div>
        <div class="mb-3 form-check">
            <label class="form-check-label" for="is_public">Open source</label>
            <input type="checkbox" value="1" class="form-check-input" id="is_public" name="is_public">
        </div>
        <button type="submit" class="btn btn-success mt-3">Create</button>
    </form>
@endsection