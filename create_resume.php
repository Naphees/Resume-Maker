<!doctype html ng-app="">
<html lang="en">
    <head>
            




        <title>
            create resume
        </title>
        <?php require('design_all.php');  ?>


        <script>
            $(document).ready(function(){
                    $("#per").click(function(){
                            $("#personal").show(4000);
                    });
                  




                    $("#edu").click(function(){
                            $("#education").show(4000);
                    });
                   


                    $("#ski").click(function(){
                            $("#skill").show(4000);
                    });
                    
                    

                    $("#exp").click(function(){
                            $("#experience").show(4000);
                    });
                   



                    $("#pro").click(function(){
                            $("#project").show(4000);
                    });
                   


                    $("#mor").click(function(){
                    $('#more').show(4000);
                    });
                    
                });
            </script>
    </head>

    <body>
     
        <div class="container">
            <?php require('connect.php'); require('header.php'); ?>
            <br>
            <div class="jumbotron" id="create"  >
                <div class="row">
                    <div class="col-sm-12">
                            <h1 class="text-center"><b><i>Create resume in some steps</i></b> </h1>
                            <br>
                    </div>
                    <div class="col-sm-6">
                         
                                     <h1><button class="btn-lg btn btn-success form-control" id="per"><b><i>Add personal details</i></b></button></h1>
                                        <br>
                                        <div class="jumbotron bg-success" id="personal" style="display:none;">
            
            <form action="create_resume_access.php" method="post" enctype="multipart/form-data" >
                <fieldset>
                    <legend><h3> <b><i> Personal details </i></b> </h3>  </legend>
                <div class="row">
                    <div class="col-sm-12">
                        <input type="hidden" name="test" value="personal" required  class="form-control">
                        <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR'];  ?>" required class="form-control" autofocus> <br>
                    </div>
                    <div class="col-sm-12">
                                        <textarea name="resume_heading" id="" required class="form-control" placeholder="enter resume summary"autofocus cols="30" rows="3"></textarea> <br>
                
                
            </div>
            <div class="col-sm-12">
                
                <input type="text" name="name" value="" required class="form-control" autofocus placeholder="enter your name"> <br>
            </div>
           
            
            <div class="col-sm-12">
                
                <input type="number" name="contact"  required class="form-control" autofocus placeholder="enter contact number">  <br>
            </div>
            
            <div class="col-sm-12">
                
                
                <textarea name="address" id="" required class="form-control" placeholder="enter your address"autofocus cols="30" rows="3"></textarea> <br>
            </div>
            <div class="col-sm-12">
                
                <input type="email" name="email"  required class="form-control" autofocus placeholder="enter your email">   <br>
            </div>
            <div class="col-sm-12">
                <b><i><label for="photo"> upload your image </label></i></b>
                <input type="file" id="photo" name="photo"  required class="form-control" autofocus placeholder="upload your photo"> <br>
            </div>
           
            <div class="col-sm-12">
                 <b><i><label for="resume_number"> Resume number describes your resume </label></i></b>
                <input type="number" name="resume_number" required class="form-control" autofocus placeholder="enter resume number" id="resume_number"><br>
            </div>
            
            
            <div class="col-sm-12 text-center" >
                   <button type="submit" name="submit" value="submit" class="btn btn-lg btn-secondary"><B><i>Add</i></B></button>
                   <button type="reset" name="reset" value="reset" class="btn btn-lg btn-danger"><b><i>Reset</i></b></button>
                 <br>
            </div>
                </div>
        </fieldset>
            </form>
        </div>




                                         <br>
                    </div>
                    <div class="col-sm-6">
                        <h1><button class="btn-lg btn btn-danger form-control" id="edu"><b><i>Add education details</i></b></button></h1>
                            <br>
                            
                            <div class="jumbotron bg-danger" id="education" style="display:none;">
                    <form action="create_resume_access.php" method="post"  >
                        <fieldset><legend>
                            <b><i><h1>Education</h1></i></b>
                        </legend>
                        <div class="row">
                              <div class="col-sm-12">
                              <input type="hidden" name="test" value="education" required  class="form-control"><br>
                                    <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" class="form-control"placeholder="enter your ip" required>
                              <br></div>
                              <div class="col-sm-12">
                                    <input type="text" name="class" value="" class="form-control"placeholder="enter your class/course" required>
                              <br></div>
                              <div class="col-sm-12">
                                    <input type="text" name="college" value="" class="form-control"placeholder="enter your college" required>
                              <br></div>
                              <div class="col-sm-12">
                                    <input type="text" name="board" value="" class="form-control"placeholder="enter your board name" >
                              <br></div>
                                          <div class="col-sm-12">
                 <b><i><label for="resume_number"> Resume number describes your resume </label></i></b>
                <input type="number" name="resume_number" required class="form-control" autofocus placeholder="enter resume number" id="resume_number"><br>
            </div>


                              <div class="col-sm-12 text-center" >
                                 <button type="submit" name="submit" value="submit" class="btn btn-lg btn-success"><B><i>Add</i></B></button>
                                    <button type="reset" name="reset" value="reset" class="btn btn-lg btn-secondary"><b><i>Reset</i></b></button>
                                <br>
                             </div>
                        </div>
                    
                    
                    </fieldset>
                        
                    </form>
                </div>






                           <br>
                    </div>
                    <div class="col-sm-6">
                        <h1><button class="btn-lg btn btn-primary form-control" id="ski"><b><i>Add skills details</i></b></button></h1>       
                               <br>
                               <div class="jumbotron bg-primary" id="skill" style="display:none;">
                    <form action="create_resume_access.php" method="post" >
                        <fieldset><legend>
                            <b><i><h1>Skills</h1></i></b>
                        </legend>
                        <div class="row">
                              <div class="col-sm-12">
                              <input type="hidden" name="test" value="skill" required  class="form-control"><br>
                                    <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" class="form-control"placeholder="enter ip address" required>
                              <br></div>
                              <div class="col-sm-12">
                                    <input type="text" name="skill" value="" class="form-control"placeholder="enter your skill name" required>
                              <br></div>

                              <div class="col-sm-12">
                                    <input type="text" name="skill_information" value="" class="form-control"placeholder="enter your skill information" required>
                              <br></div>
                                          <div class="col-sm-12">
                 <b><i><label for="resume_number"> Resume number describes your resume </label></i></b>
                <input type="number" name="resume_number" required class="form-control" autofocus placeholder="enter resume number" id="resume_number"><br>
            </div>


                              

                              <div class="col-sm-12 text-center" >
                                 <button type="submit" name="submit" value="submit" class="btn btn-lg btn-success"><B><i>Add</i></B></button>
                                    <button type="reset" name="reset" value="reset" class="btn btn-lg btn-danger"><b><i>Reset</i></b></button>
                                <br>
                             </div>
                        </div>
                    
                    
                    </fieldset>
                        
                    </form>
                </div>

                               


                               <br>

                               




                    </div>
                    <div class="col-sm-6">
                        <h1><button class="btn-lg btn btn-warning form-control" id="mor"><b><i>Add some special details</i></b></button></h1>     
                            <br> 
                            <div class="jumbotron bg-warning" id="more" style="display:none;">
                    <form action="create_resume_access.php" method="post" >
                        <fieldset><legend>
                            <b><i><h1>Add information</h1></i></b>
                        </legend>
                        <div class="row">
                              <div class="col-sm-12">
                                    <input type="hidden" name="test" value="more" class="form-control" required>
                                    <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" class="form-control"placeholder="enter your ip" required>
                              <br></div>
                              <div class="col-sm-12">
                                    <input type="text" name="achievements" value="" class="form-control"placeholder="enter your achievements" required>
                              <br></div>
                              <div class="col-sm-12">
                                    <input type="text" name="strengths" value="" class="form-control"placeholder="enter your strengths" required>
                              <br></div>
                              <div class="col-sm-12">
                                    <input type="text" name="hobbies" value="" class="form-control"placeholder="enter your hobbies" required>
                              <br></div>
                              <div class="col-sm-12">
                                    <input type="text" name="career_objective" value="" class="form-control"placeholder="enter your career objective" required>
                              <br></div>
                              <div class="col-sm-12">
                                 <b><i>Declaration<br></i></b>
                                   <input type="radio" name="declaration" id="know" value="I here declare that the information furnished above is true to the best of my knowledge" required> <label for="know"><b><i>I here declare that the information furnished above is true to the best of my knowledge</i></b></label>
                                   
                              <br></div>
                                          <div class="col-sm-12">
                 <b><i><label for="resume_number"> Resume number describes your resume </label></i></b>
                <input type="number" name="resume_number" required class="form-control" autofocus placeholder="enter resume number" id="resume_number"><br>
            </div>


                              <div class="col-sm-12 text-center" >
                                 <button type="submit" name="submit" value="submit" class="btn btn-lg btn-success"><B><i>Add</i></B></button>
                                    <button type="reset" name="reset" value="reset" class="btn btn-lg btn-danger"><b><i>Reset</i></b></button>
                                <br>
                             </div>
                        </div>
                    
                    
                    </fieldset>
                        
                    </form>
                </div>


                            

                            <br>
                    </div>
                    <div class="col-sm-6">
                        <h1><button class="btn-lg btn btn-danger form-control" id="exp"><b><i>Add experience details</i></b></button></h1>        
                            <br>
                            <div class="jumbotron bg-danger" id="experience" style="display:none;">
                    <form action="create_resume_access.php" method="post" >
                        <fieldset><legend>
                            <b><i><h1>Experience</h1></i></b>
                        </legend>
                        <div class="row">
                              <div class="col-sm-12">
                                    <input type="hidden" name="test" value="experience" required class="form-control">
                                    <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" class="form-control"placeholder="enter your ip address" required>
                              <br></div>
                              <div class="col-sm-12">
                                    <input type="text" name="company" value="" class="form-control"placeholder="enter company name" required>
                              <br></div>
                              <div class="col-sm-12">
                                    <input type="text" name="address" value="" class="form-control"placeholder="enter company address" required>
                              <br></div>
                              <div class="col-sm-12">
                                    <input type="text" name="work" value="" class="form-control"placeholder="what is work in company" required>
                              <br></div>
                              <div class="col-sm-12">
                                    <input type="text" name="experience" value="" class="form-control"placeholder="Howmany experience in company" required>
                              <br></div>
                                          <div class="col-sm-12">
                 <b><i><label for="resume_number"> Resume number describes your resume </label></i></b>
                <input type="number" name="resume_number" required class="form-control" autofocus placeholder="enter resume number" id="resume_number"><br>
            </div>


                              <div class="col-sm-12 text-center" >
                                 <button type="submit" name="submit" value="submit" class="btn btn-lg btn-success"><B><i>Add</i></B></button>
                                    <button type="reset" name="reset" value="reset" class="btn btn-lg btn-warning"><b><i>Reset</i></b></button>
                                <br>
                             </div>
                        </div>
                    
                    
                    </fieldset>
                        
                    </form>
                </div>



                            <br>
                    </div>
                    <div class="col-sm-6">
                            <h1><button class="btn-lg btn btn-secondary form-control" id="pro"><b><i>Add project details</i></b></button></h1>       
                             <br>
                             <div class="jumbotron bg-secondary" id="project" style="display:none;">
                    <form action="create_resume_access.php" method="post" >
                        <fieldset><legend>
                            <b><i><h1>Project</h1></i></b>
                        </legend>
                        <div class="row">
                              <div class="col-sm-12">
                                    <input type="hidden" name="test" value="project" class="form-control" required>
                                    <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" class="form-control"placeholder="enter your ip" required>
                              <br></div>
                              <div class="col-sm-12">
                                    <input type="text" name="project" value="" class="form-control"placeholder="enter project name" required>
                              <br></div>
                              <div class="col-sm-12">
                                    <input type="text" name="project_duration" value="" class="form-control"placeholder="enter project duration" required>
                              <br></div>
                              <div class="col-sm-12">
                                    <input type="text" name="detail" value="" class="form-control"placeholder="enter some details related project" required>
                              <br></div>
                              <div class="col-sm-12">
                                    <input type="text" name="link" value="" class="form-control"placeholder="enter project link (webside or application)" >
                              <br></div>
                                          <div class="col-sm-12">
                 <b><i><label for="resume_number"> Resume number describes your resume </label></i></b>
                <input type="number" name="resume_number" required class="form-control" autofocus placeholder="enter resume number" id="resume_number"><br>
            </div>

                              <div class="col-sm-12 text-center" >
                                 <button type="submit" name="submit" value="submit" class="btn btn-lg btn-success"><B><i>Add</i></B></button>
                                    <button type="reset" name="reset" value="reset" class="btn btn-lg btn-danger"><b><i>Reset</i></b></button>
                                <br>
                             </div>
                        </div>
                    
                    
                    </fieldset>
                        
                    </form>
                </div>





                            <br>
                    </div>
                </div>
            </div>

           
        

            


        
                

                

               
                

            
        </div>
            </p>
    </body>
</html>