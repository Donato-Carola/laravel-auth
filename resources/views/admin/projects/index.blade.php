@extends('layouts.admin')

@section('title', 'Admin Projects')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>
                    These are all our avaible project, {{ Auth::user()->name }}
                </h2>
            </div>

            <div class="col-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->id }}</th>
                                <td>
                                    <a href="{{ route('admin.projects.show', $project) }}">
                                        {{ $project->title }}
                                </td>
                                </a>

                                <td>{{ $project->author }}</td>
                                <td>{{ substr($project->description, 0, 50) }}...</td>
                                <td>{{ $project->date }}</td>

                                <td>
                                    <a href="{{ route('admin.projects.show', $project) }}">
                                        <button class="btn btn-sm btn-primary">

                                            view
                                        </button>
                                    </a>

                                    <a href="{{ route('admin.projects.edit', $project) }}">
                                        <button class="btn btn-sm btn-success">
                                            Edit
                                        </button>

                                    </a>

                                    <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-warning">
                                            delete
                                        </button>
                                    </form>

                                </td>



                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">
                                    There are bo projects avaible

                                </td>
                            </tr>
                        @endforelse


                    </tbody>
                </table>
            </div>
        </div>

    </div>


@endsection
