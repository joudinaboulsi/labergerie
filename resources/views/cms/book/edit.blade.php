@extends('cms.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">


    <!-- Basic Layout -->
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit</h5>
                    <small class="text-muted float-end">Book Content</small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('BookContentUpdate',$book->id)}}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Title</label>
                            <input type="text" class="form-control" id="basic-default-fullname" name="title"
                              value="{{$book->title}}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Price</label>
                            <input type="text" class="form-control" id="basic-default-fullname" name="price"
                               value="{{$book->price}}"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Status</label>
                            <input type="text" class="form-control" id="basic-default-fullname" name="status"
                               value="{{$book->status}}" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Person</label>
                            <input type="text" class="form-control" id="basic-default-fullname" name="person"
                          value="{{$book->person}}" />
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">From Day</label>
                            <input type="text" class="form-control" id="basic-default-fullname" name="from_day"
                       value="{{$book->from_day}}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">From Month</label>
                            <input type="text" class="form-control" id="basic-default-fullname" name="from_month"
                               value="{{$book->from_month}}"/>
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">To Day</label>
                            <input type="text" class="form-control" id="basic-default-fullname" name="to_day"
                             value="{{$book->to_day}}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">To Month</label>
                            <input type="text" class="form-control" id="basic-default-fullname" name="to_month"
                               value="{{$book->to_month}}"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Description</label>
                            <textarea class="form-control" id="basic-default-fullname" name="description"> {!!$book->description !!}</textarea>
                        </div>

                <div class="mb-3">
                    @if ($book->image_one)
                <img src="../assets/book/{{$book->image_one}}"width="150">        
                    @endif
                </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Image</label>
                            <input type="file" class="form-control" id="file" name="image_one" />
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