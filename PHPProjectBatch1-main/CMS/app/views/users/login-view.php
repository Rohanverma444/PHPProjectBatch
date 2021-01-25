<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="CMS">
    <meta name="generator" content="Hugo 0.79.0">
    <title>CMS</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="app/views/users/signin.css" rel="stylesheet">
</head>
<body class="text-center">

<main class="form-signin">
    <p style="color: red"><?php if(@$_GET['error']){ echo @$_GET['error']; } ?> </p>
    <form method="post" action="?module=users&action=login">
        <img class="mb-4" src="assets/images/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
        <label for="user_name" class="visually-hidden">Username</label>
        <input type="text" id="user_name" name="user_name" class="form-control" placeholder="" required autofocus>
        <label for="inputPassword" class="visually-hidden">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="" name="remember_me" id="remember_me" onclick="setRememberMe(this);"> Remember me
            </label>
        </div>
        <a href="?module=users&action=register">Register</a>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
    </form>
</main>

<script>
    function setRememberMe(obj) {
        if(obj.checked)
           document.getElementById("remember_me").value = 1;
        else
            document.getElementById("remember_me").value = 0;
    }
</script>
</body>
</html>
