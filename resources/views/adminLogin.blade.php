<!DOCTYPE html>
<html>

<head>
    <title>Form</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Admin login
            </div>
            <div class="card-body">
                <form name="login" action="{{route('admin')}}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" required="">
                    </div>
                    <button type="submit" class="btn btn-primary" action=''>Log in</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>