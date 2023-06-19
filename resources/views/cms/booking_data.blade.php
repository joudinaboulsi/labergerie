@extends('cms.layouts.master')
@section('content')
<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Data  </h5>
    <div class="card-body">
        {{-- <div class="demo-inline-spacing">
            <a href="{{route('serviceCreate')}}" class="btn btn-outline-primary">Add </a>
        </div> --}}
        <div class="my-5"></div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Start Date</th>
                        <th>ENd Date</th>
                      

                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
               @foreach ($data as $d)
                    <tr>
                        <td>{{$d->name}}</td>
<td>{{$d->email}}</td>
<td>{{$d->phone}}</td>
<td>{{$d->start}}</td>
<td>{{$d->end}}</td>
                      
                        {{-- <td style="display:flex;">
                            <a href="{{route('serviceEdit',$service->id)}}" class="btn btn-outline-dark">Edit </a>


                            <form action="{{route('serviceDelete', $service->id)}}" method="POST">

                                @csrf
                                <button type="submit" class="btn btn-outline-danger"
                                    style=" margin:0 5px">Delete</button>
                            </form>
                        </td> --}}

                    </tr>
               @endforeach


                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
    @endsection