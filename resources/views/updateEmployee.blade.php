<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <form method="POST" action="/save/update/{{$emps->id}}">
    @csrf
    @method('PATCH')
    <img src="{{asset('assets/background_homepage.jpg')}}" alt="Background" class="position-absolute top-50 start-50 translate-middle" width="100%" height="100%">

    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <form>
            <div class="card-header">
                <h3 class="text-center mx-auto">Update Data</h3>
            </div>
                <div class="mb-3">
                    <label for="emp-name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="emp-name" name="empName" value="{{$emps->empName}}" minlength="5" maxlength="20">
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control" id="age" value="{{$emps->age}}" min="20" name="age">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{$emps->address}}" minlength="10" maxlength="40">
                </div>
                <div class="mb-3">
                    <label for="phone-number" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="phone-number" value="{{$emps->phoneNo}}" name="phoneNo" pattern="08\d{7,10}" placeholder="Start with 08">
                </div>
                <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center text-center mx-auto">Submit</button>
            </form>
            </div>
            </div>
    </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


