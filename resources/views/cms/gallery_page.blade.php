@extends('cms.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Gallery Page</h5>
                 
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('galleryPageUpdate')}}" >
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label class="form-label" for="basic-default-fullname">Page Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="page_title"
                                  value="{{$gallery->page_title}}"   />
                            </div>
                           <div class="mb-3 col-6">
                                <label class="form-label" for="basic-default-fullname">Page Subtitle</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="page_subtitle"  value="{{$gallery->page_subtitle}}"/>
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