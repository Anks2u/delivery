<?php
 
$showAlert = false; 
$showError = false; 
$exists=false;
 
if($_SERVER["REQUEST_METHOD"] == "POST") {
 
 // Include file which makes the
 // Database Connection.
 include 'connection.php'; 
 
 $username = $_POST["username"]; 
 $password = $_POST["password"]; 
 $c_password = $_POST["c_password"];
 
 
 $sql = "Select * from signup_user where username='$username'";
 
 $result = mysqli_query($conn, $sql);
 
 $num = mysqli_num_rows($result); 
 
 // This sql query is use to check if
 // the username is already present 
 // or not in our Database
 if($num == 0) {
 if(($password == $c_password) && $exists==false) {
 
 $hash = password_hash($password, 
 PASSWORD_DEFAULT);
 
 // Password Hashing is used here. 
 $sql = "INSERT INTO `signup_user` ( `username`, 
 `password`, `date`) VALUES ('$username', 
 '$hash', current_timestamp())";
 
 $result = mysqli_query($conn, $sql);
 
 if ($result) {
 $showAlert = true; 
 }
 } 
 else { 
 $showError = "Passwords do not match"; 
 } 
 }// end if 
 
 if($num>0) 
 {
 $exists="Username already exist"; 
 } 
 
}//end if 
 
?>
 
<!doctype html>
 
<html lang="en">
 
<head>
 
 <!-- Required meta tags --> 
 <meta charset="utf-8"> 
 <meta name="viewport" content=
 "width=device-width, initial-scale=1, 
 shrink-to-fit=no">
 
 <!-- Bootstrap CSS --> 
 <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
 integrity=
"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
 crossorigin="anonymous"> 
</head>
 
<body>
 
<?php
 
 if($showAlert) {
 
 echo ' <div class="alert alert-success 
 alert-dismissible fade show  sticky-div fixed-top" role="alert">
 
 <strong>Success!</strong> Your account is 
 now created and you can login. 
 <button type="button" class="close"
 data-dismiss="alert" aria-label="Close"> 
 <span aria-hidden="true">×</span> 
 </button> 
 </div> '; 
 }
 
 if($showError) {
 
 echo ' <div class="alert alert-danger 
 alert-dismissible fade show sticky-div fixed-top" role="alert"> 
 <strong>Error!</strong> '. $showError.'
 
 <button type="button" class="close" 
 data-dismiss="alert aria-label="Close">
 <span aria-hidden="true">×</span> 
 </button> 
 </div> '; 
 }
 
 if($exists) {
 echo ' <div class="alert alert-danger 
 alert-dismissible fade show fixed-top" role="alert">
 
 <strong>Error!</strong> '. $exists.'
 <button type="button" class="close" 
 data-dismiss="alert" aria-label="Close"> 
 <span aria-hidden="true">×</span> 
 </button>
 </div> '; 
 }
 
?>
 
 <div class="container mt-5 mx-auto ">
   

   
<div class="container mt-5 w-50 shadow-lg my-4 border pb-2 pt-2 ">
    
 
 <h1 class="text-center mb-2 text-info mt-3">Signup</h1> 
 <hr class="w-50 ">
 <form action="" method="post" >
 
 <div class="form-group"> 
 <label for="username">Username</label> 
 <input type="text" class="form-control" id="username"
 name="username" aria-describedby="emailHelp" Required> 
 </div>

 <div class="form-group"> 
 <label for="username">Email</label> 
 <input type="email" class="form-control" id="email"
 name="email" aria-describedby="emailHelp" Required> 
 </div>
 
 <div class="form-group"> 
 <label for="password">Password</label> 
 <input type="password" class="form-control"
 id="password" name="password" Required> 
 </div>
 
 <div class="form-group"> 
 <label for="cpassword">Confirm Password</label> 
 <input type="password" class="form-control"
 id="c_password" name="c_password" Required>
 
  
 </div> 
 
 <div class="text-center">
  
 <button type="submit"  class="btn btn-primary  btn-sm " onclick="redirectFun()";>
 Submit
 </button>
 
 </div>
 <br>

 <div class="container mt-0
  text-center">
    <small class=" text-center">Already have an account? </small><a href="login.php">Login</a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
   
 </form>
 
</div>
     
</div>

</div>

        

 

<script src=
"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity=
"sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous">
    </script>
     <script src=
"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity=
"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous">
    </script>

<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
 
<script src="
https://code.jquery.com/jquery-3.5.1.slim.min.js"
 integrity="
sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
 crossorigin="anonymous">
</script>
 
<script src="
https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
 integrity=
"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
 crossorigin="anonymous">
</script>
 
<script src="
https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
 integrity=
"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
 crossorigin="anonymous">
</script> 
</body> 
</html>