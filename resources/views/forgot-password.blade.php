<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/css/forgot-password.css')
</head>
<body>
    <div class="container">
        <h1><span class="bold">FINE</span>bank.<span class="bold">IO</span></h1>
        <span class="forgot-password">Forgot Password?</span>
        <p>Enter your email address to get the password reset link.</p>
        <form action="">
            <label for="">Email Address</label>
            <input type="email" name="" id="" placeholder="hello@example.com">
            <input type="submit" value="Password Reset">
        </form>
        <a href={{ route("login") }}>Back to login</a>
    <div>
</body>
</html>