<!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>
</head>

<body>
  <h2>Login</h2>
  <form action="/user/auth" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit" name="loginform" class="btn btn-primary">Login</button>
  </form>
</body>

</html>