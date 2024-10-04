<?php
 session_start();
require('connect.php');
   $resume_id=htmlspecialchars($_POST['resume_id']);
    $qry="SELECT *  FROM personal WHERE resume_number = '".$resume_id."' && ip = '".$_SESSION['ip']."' ORDER BY id DESC";
     $result=$ob->conn->query($qry);
     if($result->num_rows >0)
        {
            $row=$result->fetch_assoc();
           
        }

       
        $qry2="SELECT * FROM  more WHERE resume_number = '".$resume_id."'  && ip = '".$_SESSION['ip']."' ";
         $result2=$ob->conn->query($qry2);
         if($result2->num_rows >0) 
            {
              
                $row2=$result2->fetch_assoc();
               
            }   
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php require('design_all.php'); ?>
    
</head>
<body>
    <div class="container">
            <?php  require('header1.php'); ?>
          <br>
            
                <div class="row">
                <div class="col-sm-4">
                    <div class="row jumbotron">
                        <div class="col-sm-12">
                 
                    <img src="image/<?php echo $row['photo'];?>" class="img-circle img-responsive" width="150px" height="170px">
                        <br>   
                    <h6 class=""><b><i> <?php
                    echo $row['name']."<br>".$row['email']."<br>".$row['contact'];
                     echo"<br><br> Address  :  ".$row['address'];  
                    ?> </i></b></h6>
                    <hr>
                    </div>

                    <div class="col-sm-12">
                            <h2><b><i>Project</i></b></h2>
                            <?php
                                             $qry1="SELECT * FROM project WHERE resume_number = '".$resume_id."'  && ip = '".$_SESSION['ip']."' ";
                                             $result1=$ob->conn->query($qry1);
                                             if($result1->num_rows >0)
                                                 {
                                        while($project=$result1->fetch_assoc())
                                             {
                            ?>
                                <b><i> <?php echo"Project    :    ".$project['project']."<br>Project Duration    :   ".$project['project_duration']."<br>Detail   :   ".$project['detail']."<br>";
                               echo" ";?><a href="<?php echo $project['link']; ?>"><?php  ?><?php echo $project['link']."<br><br>"; ?></a>  </i></b>
                            <?php
                                                 
                                                }
                                                 }
                                ?>
                    </div>

                    <div class="col-sm-12">
                                <h3><b><i>Achievements</i></b></h3>
                                <h6><b><i> <?php echo $row2['achievements']; ?></i></b></h6>
                    </div>
                    <div class="col-sm-12">
                            <h3><b><i>Strengths</i></b></h3>
                            <h6><b><i> <?php echo $row2['strengths']; ?></i></b></h6>
                    </div>
                    <div class="col-sm-12">
                                    <h3><b><i>Hobbies</i></b></h3>
                                    <h6><b><i> <?php echo $row2['hobbies']; ?></i></b></h6>
                    </div>
                    <div class="col-sm-12">
                                    <h3><b><i>Career Objective</i></b></h3>
                                    <h6><b><i> <?php echo $row2['career_objective']; ?></i></b></h6>
                    </div>

                    
                 </div>
                 </div>
                 <!-- 4 is finish -->
                   <div class="col-sm-1"></div>
                    <div class="col-sm-6">
                       <div class="row">
                        <div class="col-sm-12">
                          
                        <h2><b><i>Profile</i></b></h2>
                         <p><b><i>
                       <?php   
                        echo $row['resume_heading'];
                       /*An ambitious software engineer with strong command in C, java, Javascript, JQuery, HTML, SQL database, MVC, php, and Web API. Constant learner and ability to adapt to new technologies. Possess strong communication and team management skills.
                         
                         
                         */
                         ?>
                         
                         </i></b></p>
                    </div>
                   
                    
                    <div class="col-sm-12">
                            <br><hr>   <h2><b><i>Skills</i></b></h2>

                                <?php
                                             $qry1="SELECT * FROM skill WHERE resume_number = '".$resume_id."'  && ip = '".$_SESSION['ip']."' ";
                                             $result1=$ob->conn->query($qry1);
                                             if($result1->num_rows >0)
                                                 {
                                                    while($skill=$result1->fetch_assoc())
                                                     {
                                                        ?>
                                                      <b><i>  <?php echo $skill['skill']."  :  ".$skill['skill_information'];?><br>
                                                      </i></b>
                                                        <?php
                                                     }
                                                 }
                                ?>

                    </div>
                    <div class="col-sm-12">
                       
                          
                          <?php
                                             $qry1="SELECT * FROM experience WHERE resume_number = '".$resume_id."'  && ip = '".$_SESSION['ip']."' ";
                                             $result1=$ob->conn->query($qry1);
                                             if($result1->num_rows >0)
                                                 {
                                                   echo"<br> <h3><b><i>Experience</i></b></h3> ";
                                                while($exp=$result1->fetch_assoc())
                                                      {  ?>
                                                       
                                                 <?php  echo"<br> * ".$exp['work']." in  ".$exp['company']."  from ".$exp['experience'];?> 
                                                     
                                                     <?php }
                                                 }
                                                 else
                                                   {
                                                    echo"<b><i><h3>Experience<br> </h3>Fresher with good knowledge</i></b>";
                                                   }
                                                 
                                ?>
                    </div>
                    
                    <div class="col-sm-12">
                             <br><hr><h2><b><i>Education</i></b></h2>
                            
                                      <table class="table table-hover table-striped">
                                            <tr>
                                                <th><b><i>Class/course/diploma</i></b></th>
                                                <th><b><i>College/Institute</i></b></th>
                                                <th><b><i>Board</i></b></th>
                                            </tr>
                                <?php 
                                 $qry1="SELECT * FROM education WHERE resume_number = '".$resume_id."'  && ip = '".$_SESSION['ip']."' ";
                                 $result1=$ob->conn->query($qry1);
                                 if($result1->num_rows >0)
                                     {
                                   while($edu=$result1->fetch_assoc())
                                   {
                                
                                ?>
                                  
                                  
                                   <b><i><td><?php echo $edu['class'];  ?></td></i></b>
                                    <b><i><td><?php echo $edu['college'];  ?></td></i></b>
                                    <b><i><td><?php echo $edu['board'];  ?></td></i></b>
                                   </tr>      
                                               
                                  <?php }    } ?>
                                      </table>                  
                                
                    </div>
                    
                    
                    <div class="col-sm-12">
                                <br><hr><h3><b><i>Declaration</i></b></h3>
                                 <h6><b><i> <?php echo $row2['declaration']; ?></i></b></h6>
                    </div>
                    
                    
                    </div> 
                </div>
               
            </div>
    </div>
    
</body>
</html>