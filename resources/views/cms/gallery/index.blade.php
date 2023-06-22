@extends('cms.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row">

        <div class="col">
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Gallery</h5>
                <div class="card-body">
                    <div class="demo-inline-spacing">
                        <a href="{{route('gallery_Create')}}" class="btn btn-outline-primary">Add </a>
                    </div>

                    <div class="my-5"></div>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($gallery as $g )
                                <tr>
                                    <td>{{$g->title}}</td>

                                    <td>
                                        @if ($g->image)
                                        <img src="../assets/gallery/{{ $g->image }}" width="100">
                                        @endif
                                    </td>


                                    <td style="display:flex;">
                                        <a href="{{route('galleryPageEdit',$g->id)}}" class="btn btn-outline-dark">Edit
                                        </a>


                                        <form action="{{route('galleryPageDelete', $g->id)}}" method="POST">

                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger"
                                                style=" margin:0 5px">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--/ Basic Bootstrap Table -->
@endsection