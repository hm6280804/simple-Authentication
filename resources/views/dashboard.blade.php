<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-6 mb-3">
                <h2>Welcome {{ Auth::user()->name }}</h2>
                {{-- {{ Auth::user() }} --}}
            </div>    
        </div>

        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('inner') }}" class="btn btn-primary m-5">Go to inner page</a>
                <a href="{{ route('logout') }}" class="btn btn-danger ml-3">Log out</a>
            </div>
        </div>
    </div>
</body>
</html>