@extends('layouts.admin')

@section('title', 'Creating a new post')

@section('main-content')
    <div class="container">
        <div class="row">

            <div class="col-12">

                @include('partials.errors')

                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf
                    <div class="mb-3 input-group">
                        <label for="title" class="input-group-text"> Title:</label>
                        <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
                    </div>

                    <div class="mb-3 input-group">
                        <label for="author" class="input-group-text"> Author:</label>
                        <input class="form-control" type="text" name="author" id="author" value="{{ old('author') }}">
                    </div>

                    <div class="mb-3 input-group">
                        <label for="image" class="input-group-text">image_url:</label>
                        <input class="form-control" type="text" name="image" id="image" value="{{ old('image') }}">
                    </div>

                    <div class="mb-3 input-group">
                        <label for="date" class="input-group-text"> Date:</label>
                        <input class="form-control" type="text" name="date" id="date" value="{{ old('date') }}">
                    </div>

                    <div class="mb-3 input-group">
                        <label for="description" class="input-group-text"> Description:</label>
                        <textarea class="form-control" type="text" name="description" id="description"> {{ old('description') }}</textarea>
                        </div>



                    <button type="submit" class="btn btn-sm btn-primary">
                        Add new Project
                    </button>

                    <button type="reset" class="btn btn-sm btn-warning">
                        Reset Form
                    </button>

                </form>









            </div>
        </div>

    </div>


@endsection
