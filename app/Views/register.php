<!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    h2 {
      color: #333;
    }

    form {
      width: 500px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    label {
      display: block;
      margin-bottom: 10px;
      color: #333;
    }

    input[type="text"],
    input[type="password"],
    input[type="email"],
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 15px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <h2>Login</h2>
  <form action="/user/save" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>

</html>