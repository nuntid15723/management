<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Department</title>
</head>

<body>
    <form action="{{ route('departments.update', $department->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="employee_code">Employee Code:</label>
        <input type="text" name="employee_code" value="{{ $department->employee_code }}">

        <label for="department">Department:</label>
        <input type="text" name="department" value="{{ $department->department }}">

        <label for="position">Position:</label>
        <input type="text" name="position" value="{{ $department->position }}">

        <label for="others">Others:</label>
        <textarea name="others">{{ $department->others }}</textarea>

        <button type="submit">Update</button>
    </form>
</body>

</html>
