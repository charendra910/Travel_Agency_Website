<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact data</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <center>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Contact Us CRUD Operation</h2>
<br>
</div>
<div class="pull-right mb-2">
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered"  style="background-color:rgb(244, 202, 148);">
<tr style="background-color:rgb(108, 159, 108)">
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone Number</th>
<th>Message</th>
<th width="125px">Operation</th>
</tr>
@foreach ($record as $data)
<tr>
<td>{{ $data->id }}</td>
<td>{{ $data->name }}</td>
<td>{{ $data->email }}</td>
<td>{{ $data->phonenumber }}</td>
<td>{{ $data->message }}</td>
<td>

        <a href="{{url('editform',$data->id)}}"><button style="background-color:green;">Edit</button></a>



        <a href="{{url('deletes',$data->id)}}"><button style="background-color:red">delete</button></a>

{{-- <form action="{{ route('contacts.destroy',$data->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('companies.edit',$data->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form> --}}
</td>
</tr>
@endforeach
</table><br><br>
<button style="font-size:x-large"><a href="{{url('index')}}">Home</a></button><br><br>
<a href="{{url('display1')}}" ><button style="background-color:bisque;font-size:x-large">Go to register table </button></a>

</center>
</body>
</html>
