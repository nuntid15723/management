<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Employee</title>
</head>
<body>
    <form action="{{ route('employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="employee_code">Employee Code:</label>
        <input type="text" name="employee_code" value="{{ $employee->employee_code }}">

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $employee->name }}">

        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" value="{{ $employee->start_date }}">

        <label for="description">Description:</label>
        <textarea name="description">{{ $employee->description }}</textarea>

        <label for="image">Image:</label>
        <input type="file" name="image">

        <button type="submit">Update</button>
    </form>
</body>
</html>
