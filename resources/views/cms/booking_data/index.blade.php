@extends('cms.layouts.master')
@section('content')
<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Data </h5>
    <div class="card-body">
       
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
                        <th>Price</th>
                        <th>Actions</th>

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
                        <td>$ {{$d->price}}</td>
                        <td>
                      <a href="{{route('dataEdit',$d->id)}}" class="btn btn-outline-dark">Edit</a>
                    
                      <a href="{{route('generatePdf',$d->id)}}" class="btn btn-outline-dark" target="_blank">Generate Pdf</a>
                      <a href="{{route('sendPdf',$d->id)}}" class="btn btn-outline-dark" target="_blank">Send by email</a>
                        </td>
                       
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
    @endsection