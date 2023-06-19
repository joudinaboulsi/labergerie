@extends('cms.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">


    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit</h5>
                    <small class="text-muted float-end">Slider</small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('sliderImageUpdate',$slider->id)}}" enctype="multipart/form-data">
                        @csrf

                        <div class="12">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="title"
                                   value="{{$slider->title}}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Main Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="main_title"
                                  value="{{$slider->main_title}}" />
                            </div>
                    
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Subtitle</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="subtitle"
                                  value="{{$slider->subtitle}}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Link text</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="link_text"
                                    value="{{$slider->link_text}}" />
                            </div>
                      
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">url</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="link_url"
                                    value="{{$slider->link_url}}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Image</label>
                                <input type="file" class="form-control" id="file" name="image" />
                                @if($slider->image)
                                <img src="../assets/slider/{{$slider->image}}" width="150">
                                @endif
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