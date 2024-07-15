<?php
 
$showAlert = false; 
$showError = false; 
$exists=false;
 
if(isset($_POST['username']) && isset($_POST['password'])){
        function validate($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return data;
        }

        $username = validate($_POST['username']);
        $password = validate($_POST['password']);

        if(empty($username)){

        }else if(empty($password)){

                exit();

        }else{
                "SELECT * FROM signup_user WHERE us";
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
 
 <div class="container  mx-auto ">
   
<br>
<br>

   
<div class="container shadow-lg w-50 my-4 border pb-2 pt-2 " style="height:400px;">
    
 
 <h1 class="text-center mb-2 text-info mt-5">Login</h1> 
 <hr class="w-50 ">
 <form action="" method="post" >
 
 <div class="form-group"> 
 <label for="username">Username</label> 
 <input type="text" class="form-control" id="username"
 name="username" aria-describedby="emailHelp" Required> 
 </div>
 
 <div class="form-group"> 
 <label for="password">Password</label> 
 <input type="password" class="form-control"
 id="password" name="password" Required> 
 </div>
 
 
 
 <div class="text-center">
  
 <button type="submit"  class="btn btn-primary  btn-sm " onclick="redirectFun()";>
 Submit
 </button>
 
 </div>
 
 <br>
  
    <div class="container 
  text-center">
    <small class=" text-center mt-4">Don't have an account ? </small><a href="main.php"> Signup</a>
    </div>

    <!-- Modal -->
  
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