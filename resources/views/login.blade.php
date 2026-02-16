<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/css/login.css')
    <title>FINEbank.io | Login</title>
</head>
<body>
    <div class="container">
        <h1><span class="bold">FINE</span>bank.<span class="bold">IO</span></h1>
        <form method="POST" action="">
            @csrf
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" placeholder="johndoe@gmail.com">
            <div class="forgot-password">
                <label for="password">Password</label>
                <a href={{ route("forgot-password") }}>Forgot Password?</a>
            </div>
            <input type="password" name="password" id="password" placeholder="•••••••••••">
            <div class="keep-me">
                <input type="checkbox" name="" id="">
            <label for="">Keep me signed in</label>
            </div>
            <input type="submit" value="Login" class="submit">
        </form>
        <div class="divider">
            <hr><span>or sign in with</span><hr>
        </div>
        <button class="google"><img src={{ asset('assets/google.png') }} alt="">Continue with Google</button>
        <a href={{ route("signup") }} class="create-account">Create an account</a>
    </div>
</body>
</html>