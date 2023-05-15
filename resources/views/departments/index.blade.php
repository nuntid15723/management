<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Departments</title>
</head>

<body>
    <div class="container mt-5">

        <a href="{{ route('departments.create') }}"><button type="button" class="btn btn-success">Create New
                Department</button></a>


        <table class="table mt-3">
            <thead>
                <td class="table-primary">Employee Code</td>
                <td class="table-secondary">Department</td>
                <td class="table-success">Position</td>
                <td class="table-danger">Others</td>
                <td class="table-info">Actions</td>

            </thead>
            <tbody>
                @foreach ($departments as $department)
                    <tr>
                        <td>{{ $department->employee_code }}</td>
                        <td>{{ $department->department }}</td>
                        <td>{{ $department->position }}</td>
                        <td>{{ $department->others }}</td>
                        <td>
                            <div class="row">
                                <div class="col-3">
                                    <a href="{{ route('departments.show', $department->id) }}"><button type="button" class="btn btn-info">View</button></a>
                                </div>
                                <div class="col-3">
                                    <a href="{{ route('departments.edit', $department->id) }}"><button type="button" class="btn btn-warning">Edit</button></a>
                                </div>
                                <div class="col-3">
                                    <form action="{{ route('departments.destroy', $department->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
