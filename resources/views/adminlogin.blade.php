<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    @include('templates.imports')
</head>

<body>
    <div class="container login-container">
        <div class="row">
            <div class="col center mt-5">
                <form action="" class="col-12" method="POST">
                    <div class="form-row center">
                        <p class="normal-text mb-0">Welcome, admin</p>
                    </div>
                    <div class="form-row center">
                        <p class="big-text">Login as Admin</p>
                    </div>
                    <div class="username-input center mb-3 normal-text form-row">
                        <label class="col-sm-2 col-form-label" for="username">Username</label>
                        <input class="form-control col-sm-10" type="text" name="username">
                    </div>
                    <div class="password-input center mb-3 normal-text form-row">
                        <label class="col-sm-2 col-form-label" for="password">Password</label>
                        <input class="form-control col-sm-10" type="password" name="password">
                    </div>
                    <div class="login-button normal-text center">
                        <input type="submit" value="Login" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
