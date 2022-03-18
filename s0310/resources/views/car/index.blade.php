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



        @foreach ($data as $oneData)
            <p>This is user {{ $oneData->name }}</p>
        @endforeach


        <h2>index blade </h1>
            <a href="{{ route('cars.create') }}">單筆新增</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>Email</th>
                    </tr>
                </thead>

                @foreach ($data as $oneData)
                    <tbody>
                        <tr>
                            <td>{{$oneData->id}}</td>
                            <td>{{$oneData->name}}</td>
                            <td>{{$oneData->email}}</td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
    </div>

</body>

</html>
