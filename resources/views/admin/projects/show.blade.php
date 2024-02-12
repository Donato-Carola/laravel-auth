@extends('layouts.admin')

@section('title', 'Admin Projects')

@section('main-content')
    <div class="container">
        <div class="row">
           

            <div class="col-12">

                <h2 scope="row">
                    {{ $project->id }}
                </h2>
                <p>

                        {{ $project->title }}
                </p>


                <p>{{ $project->author }}</p>
                <p>{{ $project->description }}</p>
                <p>{{ $project->date }}</p>

                <p>


                    <button class="btn btn-sm btn-success">
                        Edit
                    </button>

                    <button class="btn btn-sm btn-warning">
                        delete
                    </button>
                </p>

            </div>
        </div>

    </div>


@endsection
