
@extends('backend.master')
@section('page_content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Index Form</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Index Form</h1>

        <form action="{{route('category_store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="title" name="name" required>
            </div>
            <div class="mb-3">
                <label for="review" class="form-label">Review</label>
                <input type="text" class="form-control" id="name" name="review" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <textarea class="form-control" id="description" name="image" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>



@endsection
