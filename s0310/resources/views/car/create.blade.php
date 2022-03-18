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
        <h2>單筆新增</h2>
        {{-- <form action="http://localhost/cars_get_form" method="get"> --}}
        {{-- <form action="{{ route('cars.myform') }}" method="post"> --}}
        <form action="{{ route('cars.store') }}" method="post">
            {{-- 避免419 csrf  --}}
            @csrf
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
            {{-- <input type="hidden" name="_token" value="123" /> --}}
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>名字</th>
                        <th>國文</th>
                        <th>英文</th>
                        <th>數學</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="name" id="name"></td>
                        <td><input type="text" name="chinese" id="chinese"></td>
                        <td><input type="text" name="english" id="english"></td>
                        <td><input type="text" name="math" id="math"></td>
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
