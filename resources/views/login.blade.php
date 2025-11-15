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
        <form>
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" placeholder="johndoe@gmail.com">
            <div>
                <label for="password">Password</label>
                <a href="" class="forget-password">Forgot Password?</a>
            </div>
            <input type="password" name="password" id="password" placeholder="●●●●●●●●●●●●●●">
            <input type="checkbox" name="" id="">
            <label for="">Keep me signed in</label>
            <input type="submit" value="Login">
        </form>
        <div class="divider">
            <hr><span>or sign in with</span><hr>
        </div>
        <button>Continue with Google</button>
        <a href="" class="create-account">Create an account</a>
    </div>
</body>
</html>