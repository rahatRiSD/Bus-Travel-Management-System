<!DOCTYPE html>
<html>
<head><title>Register</title></head>
<body>
    <form action='/auth/register' method='POST'>
        <input type='text' name='name' placeholder='Full Name' required>
        <input type='email' name='email' placeholder='Email' required>
        <input type='password' name='password' placeholder='Password' required>
        <button type='submit'>Register</button>
    </form>
</body>
</html>
