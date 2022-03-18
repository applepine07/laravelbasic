<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Student 單筆修改</h2>
        {{-- <form action="http://localhost/cars_get_form" method="get"> --}}
        {{-- <form action="{{ route('cars.myform') }}" method="post"> --}}
        <form action="{{ route('students.update', ['student' => $data->id]) }}" method="post">
            {{-- 避免419 csrf --}}
            @csrf
            @method('put')
            {{-- <input type="hidden" name="_method" value="put"> --}}
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
            {{-- <input type="hidden" name="_token" value="123" /> --}}
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>名字</th>
                        <th>國文</th>
                        <th>英文</th>
                        <th>數學</th>
                        <th>電話</th>
                        <th>愛好</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td><input type="text" name="name" id="name" value="{{ $data->name }}"></td>
                        <td><input type="number" name="chinese" id="chinese" value="{{ $data->chinese }}"></td>
                        <td><input type="number" name="english" id="english" value="{{ $data->english }}"></td>
                        <td><input type="number" name="math" id="math" value="{{ $data->math }}"></td>
                        <td>
                            @if (!empty($data->phoneRelation->name))
                            <input type="text" name="phone" id="phone" value="{{ $data->phoneRelation->name }}">
                            @else
                            <input type="text" name="phone" id="phone" value="">
                            @endif
                        </td>
                        <td><input type="text" name="love" id="love" value="{{ $data->loveString }}"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="submit"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

</body>

</html>
