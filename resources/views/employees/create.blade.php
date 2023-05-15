<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Create Employee</title>
</head>

<body>
    <div class="container">
        {{-- <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="employee_code">Employee Code:</label>
            <input type="text" name="employee_code">

            <label for="name">Name:</label>
            <input type="text" name="name">

            <label for="start_date">Start Date:</label>
            <input type="date" name="start_date">

            <label for="description">Description:</label>
            <textarea name="description"></textarea>

            <label for="image">Image:</label>
            <input type="file" name="image">

            <button type="submit">Create</button>
        </form> --}}
        <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Employee Code</span>
                <input type="text" class="form-control" name="employee_code" placeholder="employee_code" aria-label="employee_code"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Name</span>
                <input type="text" class="form-control" name="name" placeholder="name" aria-label="name"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Start Date</span>
                <input type="date" class="form-control" name="start_date" placeholder="start_date" aria-label="start_date"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
                <span class="input-group-text">Description</span>
                <textarea class="form-control" name="description" aria-label="With textarea"></textarea>
            </div>
            <div class="input-group mb-3">
                <input type="file" name="image" class="form-control" placeholder="start_date" aria-label="start_date"
                    aria-describedby="basic-addon1">
            </div>
            <button type="submit">Create</button>
        </form>
    </div>
</body>

</html>
