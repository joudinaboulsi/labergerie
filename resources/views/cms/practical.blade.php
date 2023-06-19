@extends('cms.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Practical Information Page</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('PracticalUpdate')}}" enctype="multipart/form-data">
                        @csrf
                        <!-- Page  section -->
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label class="form-label" for="basic-default-fullname">Page Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="page_title"
                                    value="{{$partical->page_title}}" />
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label" for="basic-default-fullname">Page Subtitle</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="page_subtitle"
                                    value="{{$partical->page_subtitle}}" />
                            </div>
                        </div>

                        <!-- About section -->
                        <hr class="my-5" />
                        <h4 class="mb-10"> Luxury Interior Content</h4>
                        <h5 class="mb-10"> Living Room Section</h5>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="title"
                                    value="{{$partical->title}}" />
                            </div>
                            <div class="mb-3 mt-3">
                                @if($partical->imageone_living)
                                <img src="../assets/partical/{{$partical->imageone_living}}" width="180">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Image one</label>
                                <input type="file" id="file" class="form-control" name="imageone_living" />
                            </div>
                            <div class="mb-3 mt-3">
                                @if($partical->imagetwo_living)
                                <img src="../assets/partical/{{$partical->imagetwo_living}}" width="180">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Image two</label>
                                <input type="file" id="file" class="form-control" name="imagetwo_living" />
                            </div>

                            <div class="mb-3 mt-3">
                                @if($partical->imagethree_living)
                                <img src="../assets/partical/{{$partical->imagethree_living}}" width="180">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Image three</label>
                                <input type="file" id="file" class="form-control" name="imagethree_living" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Subtitle</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="subtitle_living"
                                    value="{{$partical->subtitle_living}}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">content Living room</label>
                                <textarea class="form-control" id="basic-default-fullname"
                                    name="text_living">{!!$partical->text_living !!}</textarea>
                            </div>

                        </div>
                        <!-- ltichen section-->
                        <hr class="my-5" />
                        <h5 class="mb-10">Kitchen Section</h5>
                        <div class="col-12">
                            <div class="mb-3 mt-3">
                                @if($partical->imageone_kitchen)
                                <img src="../assets/partical/{{$partical->imageone_kitchen}}" width="180">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Image One</label>
                                <input type="file" id="file" class="form-control" name="imageone_kitchen" />
                            </div>
                            <div class="mb-3 mt-3">
                                @if($partical->imagetwo_kitchen)
                                <img src="../assets/partical/{{$partical->imagetwo_kitchen}}" width="180">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Image Two</label>
                                <input type="file" id="file" class="form-control" name="imagetwo_kitchen" />
                            </div>
                            <div class="mb-3 mt-3">
                                @if($partical->imagethree_kitchen)
                                <img src="../assets/partical/{{$partical->imagethree_kitchen}}" width="180">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Image Three</label>
                                <input type="file" id="file" class="form-control" name="imagethree_kitchen" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">SubTitle</label>
                                <input type="text" class="form-control" id="basic-default-fullname"
                                    name="subtitle_kitchen" value="{{$partical->subtitle_kitchen}}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Content Kitchen</label>
                                <textarea class="form-control" id="basic-default-fullname"
                                    name="text_kitchen">{!!$partical->text_kitchen !!}</textarea>
                            </div>
                        </div>

                        <!-- Bedroom  section-->
                        <hr class="my-5" />
                        <h5 class="mb-10">Bedroom Section</h5>
                        <div class="col-12">
                            <div class="mb-3 mt-3">
                                @if($partical->imageone_bed)
                                <img src="../assets/partical/{{$partical->imageone_bed}}" width="180">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Image One</label>
                                <input type="file" id="file" class="form-control" name="imageone_bed" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">SubTitle one</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="subtitle1_bed"
                                    value="{{$partical->subtitle1_bed}}" />
                            </div>


                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Content one</label>
                                <textarea class="form-control" id="basic-default-fullname" name="text1_bed">{!!$partical->text1_bed!!}</textarea>
                            </div>

                            <div class="mb-3 mt-3">
                                @if($partical->imagetwo_bed)
                                <img src="../assets/partical/{{$partical->imagetwo_bed}}" width="180">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Image Two</label>
                                <input type="file" id="file" class="form-control" name="imagetwo_bed" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">SubTitle two</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="subtitle2_bed"
                                    value="{{$partical->subtitle2_bed}}" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Content Two</label>
                                <textarea class="form-control" id="basic-default-fullname" name="text2_bed">{!!$partical->text2_bed !!}</textarea>
                            </div>

                            <div class="mb-3 mt-3">
                                @if($partical->imagethree_bed)
                                <img src="../assets/partical/{{$partical->imagethree_bed}}" width="180">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Image Three</label>
                                <input type="file" id="file" class="form-control" name="imagethree_bed" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">SubTitle three</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="subtitle3_bed"
                                    value="{{$partical->subtitle3_bed}}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Content three</label>
                                <textarea class="form-control" id="basic-default-fullname" name="text3_bed">{!!$partical-> text3_bed!!}</textarea>
                            </div>
                        </div>

                        <!-- Bathroom  section-->
                        <hr class="my-5" />
                        <h5 class="mb-10">Bathroom Section</h5>
                        <div class="col-12">
                              <div class="mb-3 mt-3">
                                            @if($partical->imageone_bath)
                                            <img src="../assets/partical/{{$partical->imageone_bath}}" width="180">
                                            @endif
                                        </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Image One</label>
                                <input type="file" id="file" class="form-control" name="imageone_bath" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">SubTitle one</label>
                                <input type="text" class="form-control" id="basic-default-fullname"
                                    name="subtitle1_bath" value="{{$partical->subtitle1_bath}}" />
                            </div>


                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Content one</label>
                                <textarea class="form-control" id="basic-default-fullname" name="text1_bath">{!!$partical->text1_bath !!}</textarea>
                            </div>
                        <div class="mb-3 mt-3">
                            @if($partical->imagetwo_bath)
                            <img src="../assets/partical/{{$partical->imagetwo_bath}}" width="180">
                            @endif
                        </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Image Two</label>
                                <input type="file" id="file" class="form-control" name="imagetwo_bath" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">SubTitle two</label>
                                <input type="text" class="form-control" id="basic-default-fullname"
                                    name="subtitle2_bath" value="{{$partical->subtitle2_bath}}" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Content Two</label>
                                <textarea class="form-control" id="basic-default-fullname" name="text2_bath">{!!$partical->text2_bath !!}</textarea>
                            </div>

                        </div>
                        <!-- Outside  section-->
                        <hr class="my-5" />
                        <h5 class="mb-10">Outside Section</h5>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="one_title"
                                    value="{{$partical->one_title}}" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Outside One Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname"
                                    name="outside_one_title" value="{{$partical->outside_one_title}}" />
                            </div>


                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Content</label>
                                <textarea class="form-control" id="basic-default-fullname"
                                    name="outside_one_text">{!!$partical->outside_one_text !!}</textarea>
                            </div>


                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Big Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname"
                                    name="outside_one_big" value="{{$partical->outside_one_big}}" />
                            </div>

                        </div>

                        <!-- Distances  section-->
                        <hr class="my-5" />
                        <h5 class="mb-10">Distances Section</h5>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="sec_title"
                                    value="{{ $partical->sec_title }}" />
                            </div>
                        <div class="mb-3 mt-3">
                                @if($partical->sec_image1)
                                <img src="../assets/partical/{{$partical->sec_image1}}" width="180">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Image one</label>
                                <input type="file" id="file" class="form-control" name="sec_image1" />
                            </div>

                            <div class="mb-3 mt-3">
                                @if($partical->sec_image2)
                                <img src="../assets/partical/{{$partical->sec_image2}}" width="180">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Image Two</label>
                                <input type="file" id="file" class="form-control" name="sec_image2" />
                            </div>
                            <div class="mb-3 mt-3">
                                @if($partical->sec_image3)
                                <img src="../assets/partical/{{$partical->sec_image3}}" width="180">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Image Three</label>
                                <input type="file" id="file" class="form-control" name="sec_image3" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Gallery Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="gallery_title"
                                    value="{{$partical->gallery_title}}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">gallery text</label>
                                <textarea class="form-control" id="basic-default-fullname"
                                    name="gallery_text">{!!$partical->gallery_text !!}</textarea>
                            </div>
                        </div>


                        <!-- Services  section-->
                        <hr class="my-5" />
                        <h5 class="mb-10">Services Section</h5>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Service Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="info_title" value="{{$partical->info_title}}" />
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