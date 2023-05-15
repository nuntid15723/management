<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Department Details</title>
</head>

<body>
    <p><strong>Employee Code:</strong> {{ $department->employee_code }}</p>
    <p><strong>Department:</strong> {{ $department->dpname }}</p>
    <p><strong>Position:</strong> {{ $department->position }}</p>
    <p><strong>Others:</strong> {{ $department->others }}</p>

    <a href="{{ route('departments.edit', $department->id) }}">Edit</a>
    <form action="{{ route('departments.destroy', $department->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>

</html>
