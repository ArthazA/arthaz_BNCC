<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center text-decoration-underline mt-5">PT ChipiChapa</h1>
    <h2 class="text-center mt-5">- Employee List -</h2>

    <div class="d-flex flex-wrap gap-5 justify-content-center mt-5 mb-5">
    @foreach($emps as $empl)
        <div class="card" style="width: 18rem;">
        <img src="{{asset('assets/whoa.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-center">{{$empl->empName}}</h5>
            <p class="card-text">Age: {{$empl->age}}</p>
            <p class="card-text">Address: {{$empl->address}}</p>
            <p class="card-text">Phone Number: {{$empl->phoneNo}}</p>
            <div class="d-flex justify-content-center gap-3">
            <a href="/update/employee/{{$empl->id}}" class="btn btn-primary">Update Data</a>
                <form action="/delete/book/{{$empl->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
        </div>
    @endforeach
    </div>

    <footer class="fixed-bottom p-3">
    <div class="container-fluid">
        <div class="row">
            <div class="text-end">
            <a href="/add/employee" class="btn btn-success">Add Employee</a>
            </div>
        </div>
    </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>