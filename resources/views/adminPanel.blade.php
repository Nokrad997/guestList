<!DOCTYPE html>
<html>

<head>
    <title>adminPanel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <table class="table table-dark center">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Email</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($guests as $guest)
                    <tr>
                        <th scope="row">{{ $guest->id }}</th>
                        <td>{{ $guest->name }}</td>
                        <td>{{ $guest->surname }}</td>
                        <td>{{ $guest->email }}</td>
                        <td>
                            <form action="{{route('destroy',$guest->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $guests->links() }}

    </div>
</body>

</html>
