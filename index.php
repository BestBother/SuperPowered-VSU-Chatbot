<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign in</title>
  <link rel="stylesheet" href="login-page.css">
  <script defer src="login-page.js"></script>
</head>
<style>
html {
  height: 100%;
}

body {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  display: grid;
  justify-items: center;
  align-items: center;
  background-color: #ff8103;
}

#main-holder {
  width: 50%;
  height: 70%;
  display: grid;
  justify-items: center;
  align-items: center;
  background-color: white;
  border-radius: 7px;
  box-shadow: 0px 0px 5px 2px black;
}

#login-form {
  align-self: flex-start;
  display: grid;
  justify-items: center;
  align-items: center;
}

.login-form-field::placeholder {
  color: #2600ff;
}

.login-form-field {
  border: none;
  border-bottom: 1px solid #2600ff;
  margin-bottom: 10px;
  border-radius: 3px;
  outline: none;
  padding: 0px 0px 5px 5px;
}

#login-form-submit {
  width: 100%;
  padding: 7px;
  border: none;
  border-radius: 5px;
  color: white;
  font-weight: bold;
  background-color: black;
  cursor: pointer;
  outline: none;
}
</style>
<body>
  <main id="main-holder">
    <h1 id="login-header">Sign in</h1>
    
    
    <form method = "post" action="VSU_Bot.php">
      <input type="text" name="Course One" id="Course_One" class="Courses" placeholder="Course One">
      <input type="text" name="Course Two" id="Course_Two" class="Courses" placeholder="Course Two">
      <input type="submit" value="Login" id="login-form-submit">
    </form>
  
  </main>
</body>

</html>
