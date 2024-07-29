<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login WeBe</title>
    <link href="{{ url('public') }}/assets/img/webe.png" rel="icon">
    <link rel="stylesheet" href="{{ url('public') }}/dist/css/style.css">
    <link rel="stylesheet" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
   
</head>

<body style="background-image: url({{ url('public/dist/img/custom/login.jpg') }})">                                                                                                     
     
    <div class="wrapper">
        <form action="{{ url('login') }}" method="post">
            @csrf
            <h1>Yayasan WeBe</h1>
            <div class="input-box">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <button type="submit" class="btn">Login</button>

        </form>
    </div>
</body>

</html>
