@extends('cms.layouts.master')
@section('content')
<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Sliders </h5>
    <div class="card-body">
        <div class="demo-inline-spacing">
            <a href="{{route('serviceCreate')}}" class="btn btn-outline-primary">Add </a>
        </div>
        <div class="my-5"></div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>text</th>

                        <th>image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($services as $service )
                    <tr>
                        <td>{{$service->text}}</td>

                        <td>
                            @if ($service->icon)
                            <img src="../assets/services/{{ $service->icon }}" width="100">
                            @endif
                        </td>
                        <td style="display:flex;">
                            <a href="{{route('serviceEdit',$service->id)}}" class="btn btn-outline-dark">Edit </a>


                            <form action="{{route('serviceDelete', $service->id)}}" method="POST">

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