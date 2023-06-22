@extends('cms.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Book Now Page</h5>

                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('storeBookPage')}}">
                        @csrf
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Page Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="page_title"
                                    value="{{$book->page_title}}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Page Subtitle</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="page_subtitle"
                                    value="{{$book->page_subtitle}}" />
                            </div>
                        </div>
                        {{-- <hr class="my-5" />
                       <h5 class="mb-3">BookNow Detail Page</h5> --}}
                      {{-- <div class="row">
                  
                            <div class="mb-3 col-6">
                                <label class="form-label" for="basic-default-fullname">Title Detail</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="page_titleDetail"
                                    value="{{$book->page_titleDetail}}" />
                            </div>
                          
                            <div class="mb-3 col-6">
                                <label class="form-label" for="basic-default-fullname">SubTitle Detail</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="page_subtitleDetail"
                                    value="{{$book->page_subtitleDetail}}" />
                            </div>
                          
                        </div> --}}
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection