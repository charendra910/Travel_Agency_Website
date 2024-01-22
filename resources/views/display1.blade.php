<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact data</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<style>
table, th, td {
  border: 2px solid;
}

</style>
</head>
<body>
    <center>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Register CRUD Operation</h2>
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
<table class="table table-bordered" style="background-color:antiquewhite;">
<tr style="background-color:coral">
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th width="50px;">Operation</th>
</tr>
@foreach ($record as $data)
<tr>
<td>{{ $data->id }}</td>
<td>{{ $data->name }}</td>
<td>{{ $data->email }}</td>
<td>{{ $data->password }}</td>

<td>

        {{-- <a href="{{url('editform',$data->id)}}"><button style="background-color:rgb(114, 221, 114)"> Edit </button></a> --}}



        <a href="{{url('delete',$data->id)}}"> <button style="background-color:red">Delete</button></a>

{{-- <form action="{{ route('contacts.destroy',$data->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('companies.edit',$data->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form> --}}
</td>
</tr>
@endforeach
</table><br>
<a href="{{url('index')}}"><button style="background-color:rgb(80, 92, 80);color:white;font-size:30px;" >Home</button></a>
</center>
</body>
</html>
