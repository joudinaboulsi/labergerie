@extends('cms.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">How to arrive Page</h5>

                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('arriveStore')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label class="form-label" for="basic-default-fullname">Page Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="page_title"
                                    value="{{$arrive->page_title}}" />
                            </div> 
                            <div class="mb-3 col-6">
                                <label class="form-label" for="basic-default-fullname">Page Subtitle</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="page_subtitle"
                                  value="{{$arrive->page_subtitle}}" />
                            </div>
                        </div>
                        <hr class="my-5" />
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Map</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="map" value="{{$arrive->map}}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="title"value="{{$arrive->title}}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Main</label>
                                <textarea class="form-control" id="basic-default-fullname" name="main">{!!$arrive->main !!}</textarea>
                            </div>

                            <div class="mb-3 mt-3">
                                @if($arrive->image)
                                <img src="../assets/arrive/{{$arrive->image}}"width="250">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">image</label>
                                <input type="file" class="form-control" id="file" name="image" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">SubTitle</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="subtitle" value="{{$arrive->subtitle}}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Content</label>
                                <textarea class="form-control" id="basic-default-fullname" name="content">{!! $arrive->content!!}</textarea>
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