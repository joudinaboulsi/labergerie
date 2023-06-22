@extends('cms.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit</h5>
                    <small class="text-muted float-end">Booking Request Data</small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('dataUpdate',$data->id)}}" arget="_blank">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Name</label>
                            <input type="text" class="form-control" id="basic-default-fullname" name="name"
                                value="{{$data->name}}" />
                        </div>
                       
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">email</label>
                            <input type="text" class="form-control" id="basic-default-fullname" name="email"
                                value="{{$data->email}}" />
                        </div>

                    
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Phone</label>
                            <input type="text" class="form-control" id="basic-default-fullname" name="phone"
                                value="{{$data->phone}}" />
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Start</label>
                            <input type="date" class="form-control" id="basic-default-fullname" name="start"
                                value="{{$data->start}}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">End</label>
                            <input type="date" class="form-control" id="basic-default-fullname" name="end"
                                value="{{$data->end}}" />
                        </div>

                       <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Price</label>
                            <input type="text" class="form-control" id="basic-default-fullname" name="price" value="{{$data->price}}" />
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                </div>

                </form>
            </div>
        </div>
    </div>

</div>
</div>
@endsection