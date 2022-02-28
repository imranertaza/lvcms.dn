<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 2</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"  />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('dist/css/adminlte.min.css') }}">
      <!-- summernote -->
  <link rel="stylesheet" href="{{ url('plugins/summernote/summernote-bs4.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card mt-5">
                    <h4 class="card-title m-3">Admin Login</h4>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                              <label for="email">Email address</label>
                              <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                              <label for="password">Password</label>
                              <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- AdminLTE for demo purposes -->
    <script src="{{url('dist/js/demo.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{url('dist/js/pages/dashboard2.js')}}"></script>
    <!-- Summernote -->
    <script src="../../plugins/summernote/summernote-bs4.min.js"></script>
</body>
</html>