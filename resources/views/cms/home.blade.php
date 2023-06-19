@extends('cms.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Home Page</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('HomePagStore')}}" enctype="multipart/form-data">
                        @csrf
                       
                        <!-- About section -->
                        <hr class="my-5" />
                        <h5 class="mb-10"> About Section</h5>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="title_home"
                                    value="{{$home->title_home}}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Main</label>
                                <textarea class="form-control" id="basic-default-fullname" name="text_home">{!!$home->text_home !!}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Subtitle</label>
                                <input type="text" value="{{$home->title_home}}" class="form-control" id="basic-default-fullname" name="subtitle_home"
                                    value="{{$home->subtitle_home}}" />
                            </div>
                            <div class="mb-3">
                               
                                @if ($home->image_home)
                                    <img src="../assets/home/{{$home->image_home}}"  width="180">
                                @endif
                            </div>
                            <div class="mb-3 mt-3">
                                
                                <label class="form-label" for="basic-default-fullname">Image</label>
                                <input type="file" id="file" class="form-control" name="image_home" />
                            </div>
                        </div>
                        <!-- Info section-->
                        <hr class="my-5" />
                        <h5 class="mb-10">Info Section</h5>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="title_info"
                                    value="{{$home->title_info}}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Content one</label>
                                <textarea class="form-control" id="basic-default-fullname"
                                    name="contenetone_info">{!!$home->contenetone_info !!}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Content two</label>
                                <textarea class="form-control" id="basic-default-fullname"
                                    name="contenetwo_info">{!!$home->contenetwo_info !!}</textarea>
                            </div>
                            <div class="mb-3">
                                @if ($home->imageone_info)
                                <img src="../assets/home/{{$home->imageone_info}}" width="180">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Image</label>
                                <input type="file" id="file" class="form-control" name="imageone_info" />
                            </div>


                            <div class="mb-3">
                                @if ($home->imagetwo_info)
                                <img src="../assets/home/{{$home->imagetwo_info}}" width="180">
                                @endif
                            </div>
                                <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Image two</label>
                                <input type="file" id="file" class="form-control" name="imagetwo_info" />
                            </div>
                        </div>
                        <!-- Service section -->
                        <hr class="my-5" />
                        <h5 class="mb-10">Service Section</h5>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="title_service"
                                     value="{{$home->title_service}}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Title one</label>
                                <input type="text" class="form-control" id="basic-default-fullname"
                                    name="title1_service"  value="{{$home->title1_service}}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Content one</label>
                                <textarea class="form-control" id="basic-default-fullname" name="text1_service">{!! $home->text1_service !!}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Title Two</label>
                                <input type="text" class="form-control" id="basic-default-fullname"
                                    name="title2_service"  value="{{$home->title2_service}}" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Content two</label>
                                <textarea class="form-control" id="basic-default-fullname" name="text2_service">{!! $home->text2_service !!}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Title three</label>
                                <input type="text" class="form-control" id="basic-default-fullname"
                                    name="title3_service"  value="{{$home->title3_service}}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Content three</label>
                                <textarea class="form-control" id="basic-default-fullname" name="text3_service">{!! $home->text3_service !!}</textarea>
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