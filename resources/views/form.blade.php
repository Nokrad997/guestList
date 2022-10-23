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
        Guest list form
      </div>
      <div class="card-body">
        <form name="addUser" id="form" method="post" action="{{route('form')}}">
          @csrf
          <div class="form-group">
            <label for="Email">Email</label>
            <input name="Email" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" name="Name" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="Surname">Surname</label>
            <input name="Surname" class="form-control" required="">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>