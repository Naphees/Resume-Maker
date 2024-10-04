
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
        require('design_all.php');
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kala Cheeta | contact us</title>
</head>
<body>
<?php require('header.php'); ?><br>
<div class="container-fluid">
    <div class="row">
          <div class="col-sm-4">
            
          </div>

    </div>

</div>



<div class="container-fluid">
                <div class="row">
                        
                        <div class="col-sm-6" id=""  >
                                 <h5 style="font-size :30px;color:#00b0ba;" ><b><i>LET'S TALK</i></b></h5>
                                 <form action="query_receive.php" method="post">
                                   <div class="row">
                                                <div class="col-sm-6" id="three"><input type="text" class="form-control" required placeholder="enter your name" name="name" maxlength="30"> </div>
                                                <div class="col-sm-6" id="three"><input type="number" name="phone" class="form-control" required placeholder="enter you phone no" maxlength="12" ></div>
                                                <div class="col-sm-12" id="three"><textarea name="address" required class="form-control" placeholder="Are you from ?" maxlength="40"></textarea></div>
                                                <div class="col-sm-6" id="three"> <input type="email" name="email"  required class="form-control" placeholder="Enter E-mail" maxlength="35"></div>
                                                <div class="col-sm-6" id="three"> <input type="text" name="business" required  class="form-control" placeholder="Business do you have ?"maxlength="30"></div>
                                                
                                                <div class="col-sm-12" id="three"><textarea name="description" required class="form-control" placeholder="Give me short description what you want from us " maxlength="100"></textarea></div>
                                                <div class="col-sm-12">
                                                  <center>  <button type="submit" name="submit" value="submit" class="btn btn-success btn-lg"><b><i>Submit</i></b></button>
                                                    <button type="reset" name="reset" value="reset" class="btn btn-danger btn-lg"><b><i>Reset</i></b></button>
                                                    </center>
                                                </div>
                                   </div>   
                                 </form>
                        </div>

                        <div class="col-sm-6" id="three">
                                 
                                        <h1 style="font-size :30px;color:red;"><b><i><strong><center>Contact Us</center></strong></i></b></h1><br><br>
                                 
                    
                     <h1 style="font-size :30px;color:#00b0ba;"><b><i><strong>OUR  CONTACT  INFORMATION</strong></i></b></h1>
                        

                            
                               <h1 style="font-size :25px;color:red;"><b><i><strong> <span>&#9993;</span>
                                        E-Mail
                            </strong></i></b></h1>
                            <br>
                            <h5 style="font-size :20px;color:#00b0ba;" ><b><i>kalacheeta2014@gmail.com</i></b></h5>
                    
                       
                        <h1 style="font-size :25px;color:red;"><b><i><strong> 
                                        ADDRESS
                            </strong></i></b></h1>
                            <br>
                            <h5 style="font-size :20px;color:#00b0ba;" ><b><i>
                                
                            T-650-L45/1 GLAI NO. 21 NEAR HANUMAN MANDIR BALJEET NAGAR NEW DELHI West Delhi DL 110008 IN.
                            </i></b></h5>
                       
                        
                        
                                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14004.396813009795!2d77.15076901622251!3d28.65674815879333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d02fdc7bdc875%3A0x840e3f6a0250e134!2sKirti%20Nagar!5e0!3m2!1sen!2sin!4v1720108935824!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                        <div class="col-sm-6" id="three"></div>
                        <div class="col-sm-6" id="three"></div>

                </div>

                <?php
                        require('bottom.php');
                    ?>
     </div>
    
</body>
</html>