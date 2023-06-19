@extends('cms.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">


    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Create</h5>
                    <small class="text-muted float-end">Gallery</small>
                </div>

                <!-- Flash notification -->
              
                <div class="card-body">
                    <form  method="POST" action= "{{route('galleryStore')}}" enctype="multipart/form-data">
             @csrf
                       
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label class="form-label" for="basic-default-fullname">Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="title"
                                    placeholder="title" />
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label" for="basic-default-company">Image</label>
                                <input type="file" class="form-control" id="file" name="image" />
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