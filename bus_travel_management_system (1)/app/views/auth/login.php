<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <form action='/auth/login' method='POST'>
        <input type='email' name='email' placeholder='Email' required>
        <input type='password' name='password' placeholder='Password' required>
        <button type='submit'>Login</button>
    </form>
</body>
</html>
