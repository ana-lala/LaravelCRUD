@extends('layouts.frontend')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Category
                            <a href="{{ url('https://probable-space-doodle-4v66vjjx5rx25j5j-80.app.github.dev/category') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('https://probable-space-doodle-4v66vjjx5rx25j5j-80.app.github.dev/category') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" />
                                @error('name') <span class="text-danger">{{ $message}}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description" rows="3" class="form-control"></textarea>
                                @error('description') <span class="text-danger">{{ $message}}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Status</label>
                                <br/>
                                <input type="checkbox" name="status" checked /> Chacked=visible, unchecked=hidden
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection