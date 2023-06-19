@extends('cms.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">About Page</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('AboutPageStore')}}" enctype="multipart/form-data">
                        @csrf
                        <!-- Page  section -->
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label class="form-label" for="basic-default-fullname">Page Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="page_title"
                                    value="{{$about->page_title}}" />
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label" for="basic-default-fullname">Page Subtitle</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="page_subtitle"
                                    value="{{$about->page_subtitle}}" />
                            </div>
                        </div>
                        <!-- About section -->
                        <hr class="my-5" />
                        <h5 class="mb-10"> About Section</h5>
                        <div class="col-12">
                            <div class="mb-3">

                                @if($about->image)
                                <img src="../assets/about/{{$about->image}}" width="150">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Image</label>
                                <input type="file" id="file" class="form-control" name="image" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="title"
                                    value="{{$about->title}}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">SubTitle</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="subtitle" value="{{$about->subtitle}}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Main</label>
                                <textarea class="form-control" id="basic-default-fullname" name="main">{!! $about->main !!}</textarea>
                            </div>
                            <div class="mb-3">

                                @if($about->bg)
                                <img src="../assets/about/{{$about->bg}}" width="150">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Backgroung image</label>
                                <input type="file" id="file" class="form-control" name="bg" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Background Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="title_backg"
                                    value="{{$about->title_backg}}" />
                            </div>
                        </div>
                        <!-- Info section-->
                        <hr class="my-5" />
                        <h5 class="mb-10">Info Section</h5>
                        <div class="col-12">
                            <div class="mb-3">

                                @if($about->image1)
                                <img src="../assets/about/{{$about->image1}}" width="150">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Image One</label>
                                <input type="file" id="file" class="form-control" name="image1" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Content one</label>
                                <textarea class="form-control" id="basic-default-fullname"
                                    name="text1">{!! $about->text1 !!}</textarea>
                            </div>

                            <div class="mb-3">

                                @if($about->image2)
                                <img src="../assets/about/{{$about->image2}}" width="150">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Image two</label>
                                <input type="file" id="file" class="form-control" name="image2" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Content two</label>
                                <textarea class="form-control" id="basic-default-fullname"
                                    name="text2">{!! $about->text2 !!}</textarea>
                            </div>
                            <div class="mb-3">

                                @if($about->image3)
                                <img src="../assets/about/{{$about->image3}}" width="150">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Image thre</label>
                                <input type="file" id="file" class="form-control" name="image3" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Content three</label>
                                <textarea class="form-control" id="basic-default-fullname"
                                    name="text3">{!! $about->text3 !!}</textarea>
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