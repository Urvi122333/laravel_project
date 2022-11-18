<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class ="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
            <h4> Login </h4>
            <hr>
                <form action="{{ route('login-user')}}" method="post">
                @if(Session::has('success'))
                    <div class="alert alert-success"> {{Session::get('success')}} </div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger"> {{Session::get('fail')}} </div>
                    @endif
                    @csrf
                <div class="form-group">
                        <label for ="email">Mobile</label>
                        <input type="number" class="form-control" placeholder="Enter MobileNo" name="mobno" value="{{old('mobno')}}">
                        <span class="text-danger">@error('mobno'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for ="password">Password</label>
                        <input type="text" class="form-control" placeholder="Enter Password" name="password" value="{{old('password')}}">
                        <span class="text-danger">@error('password'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                       <button class="btn btn-block btn-primary" type="submit">Login</button>
                    </div>
                    <br>
                    <a href="registration">New User!!! Register Here</a>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>