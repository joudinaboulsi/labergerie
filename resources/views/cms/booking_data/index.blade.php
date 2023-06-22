@extends('cms.layouts.master')
@section('content')
<style>
    /* The Modal (background) */
    .ebcf_modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content */
    .ebcf_modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 50%;
    }

    /* The Close Button */
    .ebcf_close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .ebcf_close:hover,
    .ebcf_close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>
<!-- Basic Bootstrap Table -->
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row">

        <div class="col">
            <div class="card">
                <h5 class="card-header">Data Booking</h5>
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
                                    <td>{{ $d->name }}</td>
                                    <td>{{ $d->email }}</td>
                                    <td>{{ $d->phone }}</td>

                                    <td>{{ $d->start }}</td>

                                    <td>{{ $d->end }}</td>
                                    <td>$ {{ $d->price }}</td>
                                    <td>
                                        <a href="{{ route('dataEdit', $d->id) }}"
                                            class="btn btn-icon btn-outline-primary"><span
                                                class="tf-icons bx bx-edit"></span></a>

                                        <a href="{{ route('generatePdf', $d->id) }}"
                                            class="btn btn-icon btn-outline-primary" target="_blank"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-file-pdf" viewBox="0 0 16 16">
                                                <path
                                                    d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                                                <path
                                                    d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z" />
                                            </svg></a>
                                        <a id="mySizeChart{{ $d->id }}" class="btn btn-icon btn-outline-primary"
                                            target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-envelope"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                            </svg></a>
                                    </td>

                                </tr>

                                <div id="mySizeChartModal{{ $d->id }}" class="ebcf_modal">

                                    <div class="ebcf_modal-content">
                                        <span class="ebcf_close">&times;</span>
                                        <div class="container-xxl flex-grow-1 container-p-y">


                                            <!-- Basic Layout -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card mb-4">
                                                        <div
                                                            class="card-header d-flex justify-content-between align-items-center">
                                                            <h5 class="mb-0">More Details </h5>

                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">

                                                                <div class="mb-3 mt-3 col-6">
                                                                    <label class="form-label"
                                                                        for="basic-default-fullname">Name:
                                                                    </label>
                                                                    <p style="font-size: 15px">
                                                                        {{$d->name}}
                                                                    </p>
                                                                </div>
                                                                <div class="mb-3 mt-3 col-6">
                                                                    <label class="form-label"
                                                                        for="basic-default-fullname">Email:
                                                                    </label>
                                                                    <p style="font-size: 15px">
                                                                        {{$d->email}}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-3 mt-3 col-6">
                                                                    <label class="form-label"
                                                                        for="basic-default-fullname">Phone:
                                                                    </label>
                                                                    <p style="font-size: 15px">
                                                                        {{$d->phone}}
                                                                    </p>
                                                                </div>

                                                                <div class="mb-3 mt-3 col-6">
                                                                    <label class="form-label"
                                                                        for="basic-default-fullname">Price:
                                                                    </label>
                                                                    <p style="font-size: 15px">
                                                                        ${{$d->price}}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-3 mt-3 col-6">
                                                                    <label class="form-label"
                                                                        for="basic-default-fullname">Start
                                                                        Date:
                                                                    </label>
                                                                    <p style="font-size: 15px">
                                                                        {{$d->start}}
                                                                    </p>
                                                                </div>
                                                                <div class="mb-3 mt-3 col-6">
                                                                    <label class="form-label"
                                                                        for="basic-default-fullname">End Date:
                                                                    </label>
                                                                    <p style="font-size: 15px">
                                                                        {{$d->end}}
                                                                    </p>

                                                                </div>
                                                            </div>
                                                            <div class="mb-3 mt-3">
                                                                <h5>Find an attachement</h5>
                                                                {{-- <embed name="brochure" src="/storage/{{$d->pdf_file}}"
                                                                    type="application/pdf"> --}}
                                                                    <a class="btn btn-info" href="http:/storage/{{$d->pdf_file}}"> open pdf</a>
                                                            </div>
                                                            <a href="{{route('sendPdf',$d->id)}}" class="btn btn-primary">Send by email</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                    </div>
                    <script>
                        // Get the modal
                                            var ebModal = document.getElementById('mySizeChartModal{{ $d->id }}');

                                            // Get the button that opens the modal
                                            var ebBtn = document.getElementById("mySizeChart{{ $d->id }}");

                                            // Get the <span> element that closes the modal
                                            var ebSpan = document.getElementsByClassName("ebcf_close")[0];

                                            // When the user clicks the button, open the modal
                                            ebBtn.onclick = function() {
                                                ebModal.style.display = "block";
                                            }

                                            // When the user clicks on <span> (x), close the modal
                                            ebSpan.onclick = function() {
                                                ebModal.style.display = "none";
                                            }

                                            // When the user clicks anywhere outside of the modal, close it
                                            window.onclick = function(event) {
                                                if (event.target == ebModal) {
                                                    ebModal.style.display = "none";
                                                }
                                            }
                    </script>
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