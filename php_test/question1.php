<?php
/**
  QUESTION 1
  Step 1
  Create a simple HTML table that has 3 rows and 2 columns.
  Step 2
  Into the first column, enter labels for Firstname, Surname and ID Number and in the second column
  put in input fields where a user can enter their Firstname, Surname and ID Number.

  Step 3
  Create a form that will submit this information to the same page

  Step 4
  On the same page, take the submitted information and write a SQL query
  that will insert the posted information into a table called tbl_Person, that has columns
  col_firstname, col_surname, col_idnumber.

  Note: It's optional whether you want to write code that connects to a database and code
  that inserts into the database. We just want to see the SQL query, that uses the posted
  variables to insert into table person
*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dev_test";

// Create connection

if(isset($_POST['save'])){

  $conn = new mysqli($servername, $username, $password, $dbname);

  $firstName = $conn->real_escape_string($_POST['firstName']);
  $lastName = $conn->real_escape_string($_POST['lastName']);
  $idNumber = $conn->real_escape_string($_POST['idNumber']);
  $sql = "INSERT INTO tbl_Person (col_firstname, col_surname, col_idnumber) VALUES ('".$yourName."','".$yourEmail."', '".$idNumber."')";

}

?>
<!-- SUPPLY YOUR ANSWER BELOW THIS COMMENT -->
<!DOCTYPE html>
<html lang="en-za">
<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width">
  <title>Ashley Jenniker: Lima Bean PHP Test</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style type="text/css">
    .container {
      padding: 20px;
    }
  </style>

</head>

<body>

  <div class="container">
    <h1>PHP test: QUESTION 1</h1>
    <table class="table" style="margin: 20px 0 40px;">
      <thead>
        <tr>
          <th>First name</th>
          <th>Last name</th>
          <th>ID Number</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Ashley</td>
          <td>Jenniker</td>
          <td>9202275168089</td>
        </tr>
      </tbody>
    </table>

    <form action="" method="post">
      <div class="form-group row">
        <label for="firstName" class="col-sm-2 col-form-label">First Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="firstName" value="">
        </div>
      </div>
      <div class="form-group row">
        <label for="lastName" class="col-sm-2 col-form-label">Last Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="lastName" value="">
        </div>
      </div>
      <div class="form-group row">
        <label for="idNumber" class="col-sm-2 col-form-label">ID Number</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="idNumber" value="">
        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>

  </div>

</body>
</html>
