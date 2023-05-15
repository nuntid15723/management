<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Create Department</title>
</head>

<body>

    {{-- <form action="{{ route('departments.store') }}" method="POST">
        @csrf
        <label for="employee_code">Employee Code:</label>
        <select name="employee_code" id="">
            <option selected="" disabled="">
                เลือกรหัสพนักงาน</option>
            @foreach ($employee as $emid)
                <option value="{{ $emid->id }}">
                    {{ $emid->employee_code }}</option>
            @endforeach
        </select>
        <label for="department">Department:</label>
        <input type="text" name="department">

        <label for="position">Position:</label>
        <input type="text" name="position">

        <label for="others">Others:</label>
        <textarea name="others"></textarea>

        <button type="submit">Create</button>
    </form> --}}
    <div class="container">

        <form action="{{ route('departments.store') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Employee Code</span>
                <select name="employee_code" id="">
                    <option selected="" disabled="">
                        เลือกรหัสพนักงาน</option>
                    @foreach ($employee as $emid)
                        <option value="{{ $emid->employee_code }}">
                            {{ $emid->employee_code }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">department</span>
                <input type="text" class="form-control" name="department" placeholder="department"
                    aria-label="department" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">position</span>
                <input type="text" class="form-control" name="position" placeholder="position" aria-label="position"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
                <span class="input-group-text">others</span>
                <textarea class="form-control" name="others" aria-label="With textarea"></textarea>
            </div>
            <button type="submit">Create</button>
        </form>
    </div>
</body>

</html>
