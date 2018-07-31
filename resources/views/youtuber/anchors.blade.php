@extends('layouts.master')
@section('content')
<div class="content">
    <div class="card">
        <div class="card-header bg-light">
            Anchor BroadCasts
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>thumbnail1</th>
                        <th>thumbnail2</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach(Auth::user()->anchors as $anchor) 
                            <tr>

                                <td class="text-nowrap"><a href="{{ route('singleAnchor', $anchor->id) }}">{{ $anchor->name }}</a></td>
                                <td><img src="{{ asset($anchor->thumbnail1) }}" width="100"></td>
                                <td><img src="{{ asset($anchor->thumbnail2) }}" width="100"></td>
                                <td>{{ \Carbon\Carbon::parse($anchor->created_at)->diffForHumans() }}</td>
                                <td>{{ \Carbon\Carbon::parse($anchor->updated_at)->diffForHumans() }}</td>
                                <td>{{ $anchor->description }}</td>
                                <td>
                                        <a href="{{ route('anchorEdit', $anchor->id ) }}" class="btn btn-warning"><i class="icon icon-pencil"></i></a>
                                        {{-- <form method="POST" id="deletePost-{{ $post->id }}" action="{{ route('deletePost', $post->id) }}">@csrf</form> --}}
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletePostModal-{{ $anchor->id }}">Remove</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


    @foreach(Auth::user()->anchors as $anchor)
<!-- Modal -->
        <div class="modal fade" id="deletePostModal-{{ $anchor->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">You are about to delete {{ $anchor->title }}.</h4>
            </div>
            <div class="modal-body">
            Are you sure?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">No, keep it</button>
            <form method="POST" id="deletePost-{{ $anchor->id }}" action="{{ route('deleteAnchor', $anchor->id) }}">@csrf  
            <button type="submit" class="btn btn-primary">Yes, delete it.</button>
            </form>
            </div>
        </div>
        </div>
    </div>
@endforeach

@endsection