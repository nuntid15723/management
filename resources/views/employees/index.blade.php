<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <td class="table-primary">Employee Code</td>
                    <td class="table-secondary">Name</td>
                    <td class="table-success">Start Date</td>
                    <td class="table-danger">Description</td>
                    <td class="table-warning">Image</td>
                    <td class="table-info">Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->employee_code }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->start_date }}</td>
                        <td>{{ $employee->description }}</td>
                        <td>
                            @if ($employee->image)
                                <img src="{{ asset('storage/' . $employee->image) }}" alt="Employee Image"
                                    width="100">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-3">
                                    <a href="{{ route('departments.show', $employee->id) }}"><button type="button"
                                            class="btn btn-info">View</button></a>
                                </div>
                                <div class="col-3">
                                    <a href="{{ route('departments.edit', $employee->id) }}"><button type="button"
                                            class="btn btn-warning">Edit</button></a>
                                </div>
                                <div class="col-3">
                                    <form action="{{ route('departments.destroy', $employee->id) }}" method="POST">
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
