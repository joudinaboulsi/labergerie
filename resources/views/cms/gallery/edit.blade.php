@extends('cms.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">


    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit</h5>
                    {{-- <small class="text-muted float-end">Gallery</small> --}}
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('galleryUpdate',$gallery->id)}}" enctype="multipart/form-data">
                        @csrf

                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="title"
                                    value="{{$gallery->title}}" />
                            </div>
                            <div class="mb-3">
                             
                                @if($gallery->image)
                                <img src="../assets/gallery/{{$gallery->image}}"  srcset="" width="100">
                                @endif
                             <div class="mt-10">
                                <label class="form-label" for="basic-default-company">Image</label>
                                <input type="file" class="form-control" id="file" name="image" />
                             </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection