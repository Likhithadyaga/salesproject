<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Historical Site</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <style>
        .containe {
    text-align: center;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
    </style>
</head>

<body>
  
  <section>
    <nav aria-label="breadcrumb"
      style="background-color: #5D6D7E; padding-top: 2%; padding-bottom: 1%; padding-left: 5%;">
      <ol class="breadcrumb" style="background-color: #5D6D7E;">
        <li class="breadcrumb-item"><a href="index.html"
            style="color: white; text-decoration: none; font-weight: 600;  ">Login Page</a></li>
      </ol>
    </nav>
  </section>
  <br>
  <div class="content">
    <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
        <div class="containe">
          <h1> Login</h1>
<br>
 <form id="loginForm" action="users.php" method="POST">
          <div class="form-group row">
            <label for="text" class="col-sm-2 col-form-label" style="margin-left:13%">Username</label>
            <div class="col-sm-6">
              
              <input type="text" class="form-control" id="username" name="username" placeholder="Enter Text" required>
            </div>
          </div>
          <br>
          <div class="form-group row">
            <label for="text" class="col-sm-2 col-form-label" style="margin-left:13%">Password</label>
            <div class="col-sm-6">
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
            </div>
          </div>

          <br>
          <p>New user <a href="register.php">Signup</a></p>
<button type="submit" class="btn btn-primary">Login</button>

            <?php
           
            if (isset($errorMessage)) {
                echo '<p class="error-message">' . $errorMessage . '</p>';
            }
            ?>
          
</form>
<br>
          
        </div>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>

</html>

