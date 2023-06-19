@extends('cms.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Settings Page</h5>
                 
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('settingsSave')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone No</label>
                            <div class="col-sm-10">
                                <input type="text" id="basic-default-phone" class="form-control phone-mask" name="phone"
                               value="{{$settings->phone}}" aria-label="658 799 8941"
                                    aria-describedby="basic-default-phone" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Mobile No</label>
                            <div class="col-sm-10">
                                <input type="text" id="basic-default-phone" class="form-control phone-mask"
                                    name="mobile" value="{{$settings->mobile}}" aria-label="658 799 8941"
                                    aria-describedby="basic-default-phone" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="basic-default-email" class="form-control"
                                      value="{{$settings->email}}"  aria-label="john.doe" name="email"
                                        aria-describedby="basic-default-email2" />
                                 
                                </div>
                                <div class="form-text"></div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" 
                                value="{{$settings->address}}"    name="address" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-company" value="{{$settings->title}}"
                                    name="title" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">subtitle</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-company"
                                name="subtitle" value="{{$settings->subtitle}}"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">main</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-company" value="{{$settings->main}}" name="main" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">logo</label>
                            <div class="col-sm-10">
                                @if($settings->logo)
                                <img src="../cms/logo/{{$settings->logo}}"  width="250">
                                @endif
                              <input class="form-control" type="file" id="formFile" name="logo" />
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