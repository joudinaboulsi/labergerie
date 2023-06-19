@extends('cms.layouts.master')
@section('content')
<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Section Two</h5>
    <div class="card-body">
        <div class="demo-inline-spacing">
            <a href="{{route('sectionTwoCreate')}}" class="btn btn-outline-primary">Add </a>
        </div>

        <div class="my-5"></div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($aboutSection as $about )
                    <tr>
                        <td>{!! substr(strip_tags($about->description), 0, 100) !!}</td>

                        <td>
                            @if ($about->image)
                            <img src="../assets/about/{{ $about->image }}" width="100">
                            @endif
                        </td>


                        <td style="display:flex;">
                            <a href="{{route('sectionTwoEdit',$about->id)}}" class="btn btn-outline-dark">Edit </a>


                            <form action="{{route('sectionTwoDelete', $about->id)}}" method="POST">

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