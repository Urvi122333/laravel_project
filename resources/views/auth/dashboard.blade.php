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
            <h4> Welcome to Dashboard </h4>
            <hr>
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>MobileNo</th>
                    <th>Password</th>
                </thead>
                <tbody>
                    <td>{{$data->fname}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->mobno}}</td>
                    <td><a href="logout">Logout</a></td>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>