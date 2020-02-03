<?php 

include('dbConnection.php');




if(isset($_POST['rSignup']))
{   
    // checking for empty feilds

  if(($_POST['rName'] == " ") ||($_POST['rEmail'] == "" ) || ($_POST['rPassword'] == ""))
  {
 
        $regmsg = '<div class="alert alert-warning mt-2 text-center" role="alert"> All Field are Required</div>';

  }
  else
  {
     //email already registered

     $sql = "SELECT r_email FROM requesterlogin_tb WHERE r_email = '".$_POST['rEmail']."'";

     $result = $conn->query($sql);
     if($result->num_rows==1)
     {
        $regmsg = '<div class="alert alert-warning mt-2 text-center" role="alert"> Email Id Already Registered </div>';
     }
     else
     {
        // Assigning Users Values to variables

         $rName = $_POST['rName'];
         $rEmail = $_POST['rEmail'];
         $rPassword = $_POST['rPassword'];

         $sql = "INSERT INTO requesterlogin_tb(r_name, r_email, r_password) VALUES('$rName', '$rEmail' ,'$rPassword')";
         
         if($conn->query($sql) == TRUE )
         {
              $regmsg = ' <div class="alert alert-success mt-2 text-center" role="alert" >Account Succesfully Created </div>';
         }
         else
         {
              $regmsg =  '<div class="alert alert-danger mt-2 text-center" role="alert"Unable to Create Account</div>';
         }
     }



   }

}

?>











<div class="container pt-5" id="Registration">
    <h2 class="text-center"><br>Create an Account </h2>
    <div class="row mt-4 mb-4">
        <div class="col-md-6 offset-md-3">
            <form action=""  class="shadow-lg p-4" method="POST">
            <div class="form-group">
                <i class="fas fa-user"></i><label for="name" class="font-weight-bold pl-2">Name</label><input type="text" class="form-control" placeholder="Name" name="rName">
                
            </div>
             <div class="form-group">
                <i class="fas fa-envelope"></i><label for="email" class="font-weight-bold pl-2">Email</label><input type="email" class="form-control" placeholder="Email" name="rEmail">
                <small class="form-text">We'll never show your email with anyone else.</small>
                
            </div>
             <div class="form-group">
                <i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">New Password</label><input type="password" class="form-control" placeholder="Password" name="rPassword">
                
            </div>
                
                <button type="submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold" name="rSignup">Sign Up</button>
                <em style="font-size: 12px;"> Note -By clicking Sign Up,you agree to our terms,Data Policy and Cookie Policy</em>

                <?php if(isset($regmsg))
                { echo $regmsg;} ?>
            </form>
            
        </div>
        
    </div>
    
</div>




