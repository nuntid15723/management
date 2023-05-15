<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Employee Details</title>
</head>

<body>
    <p><strong>Employee Code:</strong> {{ $employee->employee_code }}</p>
    <p><strong>Name:</strong> {{ $employee->name }}</p>
    <p><strong>Start Date:</strong> {{ $employee->start_date }}</p>
    <p><strong>Description:</strong> {{ $employee->description }}</p>
    <p>
        <strong>Image:</strong>
        @if ($employee->image)
            <img src="{{ asset('storage/' . $employee->image) }}" alt="Employee Image" width="100">
        @else
            No Image
        @endif
    </p>

    <a href="{{ route('employees.edit', $employee->id) }}">Edit</a>
    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>

</html>
