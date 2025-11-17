<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FINEbank.io | Signup</title>
    @vite('resources/css/app.css')
    @vite('resources/css/signup.css')
</head>
<body>
    <div class="container">
        <h1><span class="bold">FINE</span>bank.<span class="bold">IO</span></h1>
        <span class="create-account">Create an account</span>
        <form action="">
            <label for="">Name</label>
            <input type="text" name="" id="" placeholder="Addi Mohammed">
            <label for="">Email Address</label>
            <input type="email" name="" id="" placeholder="Hello@example.com">
            <label for="">Password</label>
            <input type="password" name="" id="" placeholder="•••••••••••"> 
            <span class="terms">By continuing, you agree to our <a href="">terms of services.</a></span>
            <input type="submit" value="Sign up">
        </form>
        <div class="divider">
            <hr><span>or sign up with</span><hr>
        </div>
        <button class="google">Continue with Google</button>
        <span class="have-account">Already have an account? <a href="">Sign in here</a></span>
    </div>
</body>
</html>