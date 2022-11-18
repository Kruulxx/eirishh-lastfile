<?php
# Initialize the session
session_start();

# If user is not logged in then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./login.php';" . "</script>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payroll</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="./img/favicon-16x16.png" type="image/x-icon">
</head>

<body>
<nav class="navbar navbar-expand-lg ">
                    <header>
                        <img class="logo" src="images/eirishh.png" alt="logo">
                    </header>
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                <div class="nav-link" > </div>
                </li>

                  <li class="nav-item">
                    <a class="nav-link" href="employee.php">Employee</a>
                   
                  </li>
              <li class="nav-item">
                <a class="nav-link" href="attendance.php">Attendance</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="payrolls.php">Payroll</a>
              </li>
            </ul>
            <a href="./logout.php" class="btn btn-outline-primary">Log Out</a>
      
          </div>
        </div>
      </nav>
</body>

</html>