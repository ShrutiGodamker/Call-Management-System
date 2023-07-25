<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Call</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">

    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-decoration-none"> my logo
      </a>

      <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">

        <li>
          <a href="workorder.html" class="nav-link">
            Add New Call
          </a>
        </li>
        <li>
          <a href="viewcalltable.html" class="nav-link">
            View Calls
          </a>
        </li>
        <li>
          <a href="engtable.html" class="nav-link">
            Engineers
          </a>
        </li>
        <li>
          <a href="index.html" class="nav-link">
            Log Out
          </a>
        </li>

      </ul>
    </div>
    <!-- Add Call form-->
    <h1>ADD CAll</h1>
    <form action="php/create.php" method="">
      <section>
        <fieldset>
          <legend> User Information </legend>
          Employee Name:
          <input type="text" name="employee_name">
          <br>
          <br>

          Email to Notify:
          <input type="text" name="employee_email">
          <br>
          <br>

          Department:
          <input type="text" name="department">
          <br>
          <br>

          Designation:
          <input type="text" name="designation">
          <br>
          <br>

        </fieldset>
      </section>
      <br>
      <section>
        <fieldset>
          <legend> Call Information </legend>

          Engineer Name:
          <select class="form-select" aria-label="Default select example">
            <option selected> --Select Engineer Name-- </option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <br>
          <br>

          Status:
          <select class="form-select" aria-label="Default select example">
            <option selected> --Select Status-- </option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <br>
          <br>

          Level:
          <select class="form-select" aria-label="Default select example">
            <option selected> --Select Level-- </option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <br>
          <br>
          Subject:
          <input type="text" name="Subject">
          <br>
          <br>

          Description:
          <input type="text" name="Description">
          <br>
          <br>

          Priority:
          <select class="form-select" aria-label="Default select example">
            <option selected> --Select Category-- </option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <br>
          <br>
        </fieldset>
        <br>
      </section>
      <button class="submit" name="submit">Submit</button>
      <button class="reset" >reset</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>


</body>

</html>

<?php
include "php/config.php";

if(isset($_POST['submit']))
{
  $employee_name = $_POST['employee_name'];
  $employee_email = $_POST['employee_email'];
  $department = $_POST['department'];
  $designation = $_POST['designation'];
  $engineer_name = $_POST['engineer_name'];
  $designation = $_POST['designation'];
  $status = $_POST['status'];
  $level = $_POST['level'];
  $subject = $_POST['subject'];
  $description = $_POST['description'];
  $priority=$_POST['priority'];

  $sql = "INSERT INTO 'users'('$employee_name',$employee_email,$department,$designation,$status,$level,$subject,$description,$priority)";

  $result = $conn->query($sql);
  if($result == TRUE)
  {
    echo "New Record Created Successfully";
  }
  else
  {
    echo "Error:" .$sql."<br>".$conn->error;
  }
  $conn->close();
}
?>