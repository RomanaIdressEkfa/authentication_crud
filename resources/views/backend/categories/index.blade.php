
@extends('backend.master')
@section('page_content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Table with Action Buttons</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Table with Action Buttons</h1>
        {{-- @dd($tables) --}}
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Review</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=1
                @endphp
                @foreach ($tables as $table)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$table->image}}</td>
                    <td>{{$table->name}}</td>
                    <td>{{$table->review}}</td>
                    <td>
                        <button class="btn btn-success">Show</button>
                        <a href="{{route('category_edit',$table->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{route('category_delete',$table->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach


                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

    <a href="{{route('category_create')}}" class="btn btn-success mt-5 mb-5">Please Create Meeee!!!!!</a>
</body>
</html>


@endsection
