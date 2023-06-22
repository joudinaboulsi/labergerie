<!DOCTYPE html>
<html>

<head>
    <title>Generate Pdf</title>
</head>

<body>
    <h1>{{ $data->email}}</h1>
  <div class="row justify-content-center">

<embed name="brochure" src="{{asset('storage/'. $data->pdf_file)}}" type="application/pdf">

</div>
    <div>
        {{-- <p>{{$content}}</p> --}}
    </div>
</body>

</html>