@extends('cms.layouts.master')
@section('content')
<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Sliders </h5>
    <div class="card-body">
        <div class="demo-inline-spacing">
            <a href="{{route('BookContentCreate')}}" class="btn btn-outline-primary">Add </a>
        </div>
        <div class="my-5"></div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Person</th>
                        <th>From Day</th>
                        <th>From Month</th>
                        <th>To Day</th>
                        <th>To Month</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($book_now as $b )
                    <tr>
                        <td>{{$b->title}}</td>
                        <td>{{$b->price}}</td>

                        <td>{!! $b->description !!}</td>
                       
                        <td>{{$b->person}}</td>
                        <td>{{$b->status}}</td>
                        <td>{{$b->from_day}}</td>
                        <td>{{$b->from_month}}</td>
                        <td>{{$b->to_day}}</td>
                        <td>{{$b->to_month}}</td>
                        <td>
                            @if ($b->image_one)
                            <img src="../assets/book/{{ $b->image_one }}" width="100">
                            @endif
                        </td>


                        <td style="display:flex;">
                            <a href="{{route('BookContentEdit',$b->id)}}" class="btn btn-outline-dark">Edit </a>


                            <form action="{{route('BookContentDelete',$b->id)}}" method="POST">

                                @csrf
                                <button type="submit" class="btn btn-outline-danger"
                                    style=" margin:0 5px">Delete</button>
                            </form>
                        </td>

                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
    @endsection