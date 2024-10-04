
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
        require('design_all.php');
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kala Cheeta | </title>
</head>
<body>

<div class="container-fluid">
    <div class="row">
          <div class="col-sm-4" style="color: red;">
            <?php
                     class query
                        {
                            function __construct()
                            {
                               echo "<br> name = ".$name=htmlspecialchars($_POST['name']); 
                              echo " <br> phone =".  $phone=htmlspecialchars($_POST['phone']);
                               echo"<br> address ". $address=htmlspecialchars($_POST['address']);
                             echo "<br>".  $email=htmlspecialchars($_POST['email']);
                               echo "<br> business = ".$business=htmlspecialchars($_POST['business']);
                               echo "<br> description = ". $description=htmlspecialchars($_POST['description']);
                               $message="Name : ".$name."\n Phone no : ".$phone." \n email : ".$email.             "\n Address : ".$address."\n Business : ".$business;
                               echo"<br>".$message;
                               if(mail($email,$description,$message )==TRUE)
                                  {
                                            echo"successfully sent";
                                  }
                                  else
                                  {

                                  }
                            }
                        }
                        $ob=new query();
            ?>
          </div>

    </div>

</div>
    
</body>
</html>