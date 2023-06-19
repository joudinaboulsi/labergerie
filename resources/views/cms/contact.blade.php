@extends('cms.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">


    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Contact Page</h5>
                   
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('contactSave')}}">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Page Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" name="page_title"
                                    value="{{$contact->page_title}}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Page Subtitle</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" id="basic-default-company" name="page_subtitle"
                                 value="{{$contact->page_subtitle}}" />
                            </div>
                        </div>
                    
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Title Form</label>
                            <div class="col-sm-10">
                                <input type="text" id="basic-default-phone" class="form-control phone-mask"
                                  value="{{$contact->title_form}}" name="title_form"
                                    aria-describedby="basic-default-phone" />
                            </div>
                        </div>
                      
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      
    </div>
</div>
@endsection