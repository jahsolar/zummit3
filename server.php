<?php
  if (isset($_POST['submit'])) {
    # code...
    $conn= mysqli_connect("localhost", "root", "", "Jobapply");
    if (!$conn) {
      die("connection failed:" . mysqli_connect_error());
      echo "Oops!! UNABLE TO CONNECT TO DATABASE";
    }
    $uploadok = 1;

    $target = "uploaded/".basename(str_replace("'", '', $_FILES['upload']['name']));
    $pdf =str_replace("'", '', $_FILES['upload']['name']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $yoe = mysqli_real_escape_string($conn, $_POST['yoe']);
    $past_company = mysqli_real_escape_string($conn, $_POST['past_company']);
    $interest = mysqli_real_escape_string($conn, $_POST['interest']);
    $job_location = mysqli_real_escape_string($conn, $_POST['job_location']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $apply = mysqli_real_escape_string($conn, $_POST['apply']);
    $aOrd = mysqli_real_escape_string($conn, $_POST['call_req']);
    $period = mysqli_real_escape_string($conn, $_POST['period']);
    //$url = "$pdf";
    $currentDate = date('d-m-Y');
    $currentTime = date(' H:i:s');
    //$uniqueid = rand(100000, 999999);
    $filetype = (pathinfo($target, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["upload"]["tmp_name"]);
    if ($check !== false) {
      # code...
      echo "";
    }else{
      echo "";
      $uploadok = 0;
    }
    if ($filetype != "pdf") {
      # code...
      echo "<script type='text/javascript'>alert('Allowed file format is pdf only.');</script>";
      $uploadok = 0;
    }elseif ($_FILES['upload']['size'] > 200000) {
      # code...
      echo "<script type='text/javascript'>alert('maximum file size is 200kb');</script>";
      $uploadok = 0;
    }else{
      $uploadok = 1;
    }
    if ($uploadok == 0) {
      # code...
      echo "<script type='text/javascript'>alert('Sorry Your File Did Not Upload Try Again');</script>";
      $sql = "UPDATE";
    }else{
      if (move_uploaded_file($_FILES['upload']['tmp_name'], $target)) {
        # code...
        echo "";
      }else{echo "";}
      $sql= "INSERT INTO cv_details (fullname, phone_number, year_of_experience, past_company, job_interest, job_location, email, job_apply, call_req, period, resume, curdate, curtime) VALUES ('$name', '$phone', '$yoe', '$past_company', '$interest', '$job_location', '$email', '$apply', '$aOrd', '$period', '$pdf', '$currentDate', '$currentTime')";

      $to_3 = "abassjasola001@gmail.com";//careers@sprhava.com
      $subject_3 = "CV notification";
      $message_3 = "A new user has submitted CV <br><br> <a href='http://localhost/zummit/uploaded/'" .$pdf. ">Check PDF</a>";
      $headers_3 = 'From: test' . "\r\n";
      $headers_3 .= "MIME-Version: 1.0" . "\r\n";
      $headers_3 .= "Content-type:text/html; charset = utf-8" . "\r\n";
  
      mail($to_3, $subject_3, $message_3, $headers_3);
      echo "<script type='text/javascript'>alert('successful');</script>";
    }
    mysqli_query($conn, $sql);
    //echo '<meta http-equiv="refresh" content="0">';
    //header('location: ');
    mysqli_close($conn);
  }
?>