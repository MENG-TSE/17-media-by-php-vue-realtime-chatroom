@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    Editing {{ $anchor->name  }}
                </div>
                @if(Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('anchorEditPost', $anchor->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group">
                                <label for="normal-input" class="form-control-label">Name</label>
                                <input name="name" id="normal-input" class="form-control" value="{{ $anchor->name }}" placeholder="Anchor Name">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="placeholder-input" class="form-control-label">Description</label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="10" >{{ $anchor->description }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="normal-input" class="form-control-label">Thumbnail1</label>
                                    <input type="file" name="thumbnail1" id="normal-input" class="form-control" >
                                </div>
                                <img src="{{ asset($anchor->thumbnail1) }}" width="100">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="normal-input" class="form-control-label">Thumbnail2</label>
                                    <input type="file" name="thumbnail2" id="normal-input" class="form-control">
                                </div>
                                <img src="{{ asset($anchor->thumbnail2) }}" width="100">
                            </div>
                        </div>


                    <button class="btn btn-success" type="submit">Update Anchor</button>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection