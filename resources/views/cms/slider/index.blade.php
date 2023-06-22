@extends('cms.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row">

        <div class="col">
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Sliders </h5>
                <div class="card-body">
                    <div class="demo-inline-spacing">
                        <a href="{{route('sliderCreate')}}" class="btn btn-outline-primary">Add </a>
                    </div>
                    <div class="my-5"></div>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Main Title</th>
                                    <th>Subtitle</th>
                                    <th>link text</th>
                                    <th>link url</th>
                                    <th>image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($sliders as $slider )
                                <tr>
                                    <td>{{$slider->title}}</td>
                                    <td>{{$slider->main_title}}</td>
                                    <td>{{$slider->subtitle}}</td>
                                    <td>{{$slider->link_text}}</td>
                                    <td>{{$slider->link_url}}</td>

                                    <td>
                                        @if ($slider->image)
                                        <img src="../assets/slider/{{ $slider->image }}" width="100">
                                        @endif
                                    </td>


                                    <td style="display:flex;">
                                        <a href="{{route('sliderEdit',$slider->id)}}" class="btn btn-outline-dark">Edit
                                        </a>


                                        <form action="{{route('deleteSlider',$slider->id)}}" method="POST">

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
            </div>
        </div>
    </div>
</div>

<!--/ Basic Bootstrap Table -->
@endsection