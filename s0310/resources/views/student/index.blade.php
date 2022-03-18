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



    <div class="container-fluid">
        <h2>student index blade </h2>
        <a href="{{ route('students.create') }}">單筆新增</a>
        <a href="{{ route('students.export') }}">輸出excel</a>
        <a href="{{ route('students.updateAll') }}">update all</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>chinese</th>
                    <th>english</th>
                    <th>math</th>
                    <th>mobile</th>
                    <th>love</th>
                    <th>edit/del</th>
                </tr>
            </thead>

            @foreach ($data as $oneData)
                <tbody>
                    <tr>
                        <td>{{ $oneData->id }}</td>
                        <td>{{ $oneData->name }}</td>
                        <td>{{ $oneData->chinese }}</td>
                        <td>{{ $oneData->english }}</td>
                        <td>{{ $oneData->math }}</td>
                        <td>
                            @if (!empty($oneData->phoneRelation->name))
                                {{ $oneData->phoneRelation->name }}
                            @endif
                        </td>
                        <td>
                            @if (!empty($oneData->lovesRelation[0]->name))
                                {{-- {{ $oneData->phoneRelation->name }} --}}
                                @php
                                    // foreach ($oneData->lovesRelation as $key => $value) {
                                    //     echo "$value->name<br>";
                                    // }
                                @endphp

                                @foreach ($oneData->lovesRelation as $value)
                                        {{ $value->name }}
                                @endforeach

                            @endif
                        </td>
                        <td>
                            <a href="{{ route('students.edit', ['student' => $oneData->id]) }}"
                                class=" btn btn-warning btn-sm" role="button">修改</a>

                            {{-- style="display: inline;" --}}
                            <form class="d-inline"
                                action="{{ route('students.destroy', ['student' => $oneData->id]) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="刪除" class="btn btn-danger btn-sm">
                            </form>
                            {{-- <a href="{{route('students.destroy', ['student' => $oneData->id])}}">Del</a> --}}
                            {{-- <a href="{{route('students.edit')}}">Edit</a> --}}
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>

</body>

</html>
