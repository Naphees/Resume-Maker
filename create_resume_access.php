<?php
    require('connect.php');
    class resume extends connect
       {
           public $test;
           public $qry;
           public $row;
           public $result;
           function __construct()
                {
                  

                 
                  
                
                }
                public static function personal()
                            {
                                
                                    $photo=htmlspecialchars($_FILES['photo']['name']);
                                    $photo=htmlspecialchars($_FILES['photo']['tmp_name']);
                                    $photo=htmlspecialchars($_FILES['photo']['size']);
                                    $photo=htmlspecialchars($_FILES['photo']['type']);

                                    $jpg="image/jpeg";
                                    if( $photo==$jpg)
                                            {
                                                echo"it is jpg";
                                                $image="image/";
                                                $image=$image.basename($_FILES['photo']['name']);
                                                if(move_uploaded_file($_FILES['photo']['tmp_name'] ,$image))
                                                  {
                                                    echo"successfully upload";
                                                  }
                                                  
                                                  
                                            }
                                        else
                                        {
                                            echo"<script>alert('upload image in jpg format ');</script>";
                                            echo"<script>location.replace('create_resume.php');</script>";
                                           
                                        }


                                    echo "<br>photo ".$photo;


                                    $photos=htmlspecialchars($_FILES['photo']['name']);
                                $ip=htmlspecialchars($_POST['ip']);
                                echo"<br> ip   ".$ip;
                                $resume_heading=htmlspecialchars($_POST['resume_heading']);
                                echo"<br> resume heading   ".$resume_heading;
                                $name=htmlspecialchars($_POST['name']);
                                echo"<br> name   ".$name;
                               
                                $email=htmlspecialchars($_POST['email']);
                                echo"<br>email    ".$email;
                                $address=htmlspecialchars($_POST['address']);
                                echo"<br>address    ".$address;
                                $resume_number=htmlspecialchars($_POST['resume_number']);
                                
                                
                                
                               
                                $contact=htmlspecialchars($_POST['contact']);
                                echo"<br> contact   ".$contact;
                               
                               // $qry="INSERT INTO `personal`(`ip`, `resume_heading`, `photo`, `name`, `father`, `email`, `address`, `gender`, `birth`, `nationality`, `marital_status`, `language`, `contact`,`resume_number`)VALUES('".$ip."' ,'".$resume_heading."' ,'".$photos."' ,'".$name."' ,'".$father."' ,'".$email."' ,'".$address."' ,'".$gender."' ,'".$birth."' ,'".$nationality."' ,'".$marital_status."' ,'".$language."' ,'".$contact."')";
                                $qry="INSERT INTO `personal`(`ip`,`resume_heading`,`photo`,`name`,`address`,`email`,`contact`,`resume_number`)VALUES ( '".$ip."', '".$resume_heading."', '".$photos."' ,'".$name."','".$address."','".$email."','".$contact."','".$resume_number."')";
                                




                               
                                
                                
                                
                                  $server="localhost";
                 $user="impprfrh_resume_naphees";
                 $password="resume_naphees9997";
                 $db="impprfrh_resume";

               
               
                                $conn=new mysqli($server,$user,$password,$db)or die('connection errors');
                               if($conn==TRUE)
                                   {
                                      
                                   }
                                   else
                                     {
                                       print"fail connection";
                                     }
            
                                     if($conn->query($qry)==TRUE)
                                     {
                                      echo"<br> insert new record";
                                     }
                                     else
                                       {
                                        echo"<br> fail insert";
                                       } 
                            }
            public static function education()
                  {
                      $server="localhost";
                 $user="impprfrh_resume_naphees";
                 $password="resume_naphees9997";
                 $db="impprfrh_resume";

   
   
                    $conn=new mysqli($server,$user,$password,$db)or die('connection errors');
                   if($conn==TRUE)
                       {
                          
                       }
                       else
                         {
                           print"fail connection";
                         }

                    $ip=htmlspecialchars($_POST['ip']);
                    $class=htmlspecialchars($_POST['class']);
                    $college=htmlspecialchars($_POST['college']);
                    $board=htmlspecialchars($_POST['board']);
                    $resume_number=htmlspecialchars($_POST['resume_number']);
                    echo"<br>ip".$ip."<br>class ".$class."<br>college".$college."<br> board".$board;
                    $qry="INSERT INTO `education`(`ip` ,`class`,`college` ,`board`,`resume_number`)VALUES('".$ip."','".$class."', '".$college."', '".$board."','".$resume_number."')";
                    if($conn->query($qry)==TRUE)
                       {
                        echo"<br> education insert";
                       }
                  }
                  public static function skill()
                         {
                            $ip=htmlspecialchars($_POST['ip']);
                            $skill=htmlspecialchars($_POST['skill']);
                            $skill_information=htmlspecialchars($_POST['skill_information']);
                            echo"<br>ip".$ip;
                            echo"<br>skill".$skill;
                            $resume_number=htmlspecialchars($_POST['resume_number']);
                                $server="localhost";
                 $user="impprfrh_resume_naphees";
                 $password="resume_naphees9997";
                 $db="impprfrh_resume";

           
                            $conn=new mysqli($server,$user,$password,$db)or die('connection errors');
                           if($conn==TRUE)
                               {
                                  
                               }
                               else
                                 {
                                   print"fail connection";
                                 }
                              $qry="INSERT INTO `skill`(`ip`,`skill`,`skill_information`,`resume_number`)VALUES('".$ip."','".$skill."','".$skill_information."','".$resume_number."')";
                              if($conn->query($qry)==TRUE)
                                 {
                                  echo"successfully skill upload";
                                 }
                                 else
                                    {
                                        echo"<br>insert error";
                                    }
                         }
                    public static function experience()
                        {
                          $ip=htmlspecialchars($_POST['ip']);
                          $company=htmlspecialchars($_POST['company']);
                          $address=htmlspecialchars($_POST['address']);
                          $work=htmlspecialchars($_POST['work']);
                          $experience=htmlspecialchars($_POST['experience']);
                            echo"<br> ip".$ip."<br>company".$company."<br>address".$address."<br>work".$work."<br> experience".$experience;
                                $resume_number=htmlspecialchars($_POST['resume_number']);

  $server="localhost";
                 $user="impprfrh_resume_naphees";
                 $password="resume_naphees9997";
                 $db="impprfrh_resume";

           
           
                            $conn=new mysqli($server,$user,$password,$db)or die('connection errors');
                           if($conn==TRUE)
                               {
                                  
                               }
                               else
                                 {
                                   print"fail connection";
                                 }
                               $qry="INSERT INTO `experience`(`ip`,`company`,`address`,`work`,`experience`,`resume_number`)VALUES('".$ip."','".$company."','".$address."','".$work."','".$experience."','".$resume_number."')";  
                                 if($conn->query($qry)==TRUE)
                                    {
                                      echo"<br>experience is insert";
                                    }

                        } 
                      public static function project()
                             {
                              $ip=htmlspecialchars($_POST['ip']);
                              $project=htmlspecialchars($_POST['project']);
                              $project_duration=htmlspecialchars($_POST['project_duration']);
                              $detail=htmlspecialchars($_POST['detail']);
                              $link=htmlspecialchars($_POST['link']);
                              echo"<br>ip".$ip."<br>project".$project."<br>project duration".$project_duration."<br>details".$detail."<br>link".$link;
                             $resume_number=htmlspecialchars($_POST['resume_number']);


                               $server="localhost";
                 $user="impprfrh_resume_naphees";
                 $password="resume_naphees9997";
                 $db="impprfrh_resume";

             
             
                              $conn=new mysqli($server,$user,$password,$db)or die('connection errors');
                             if($conn==TRUE)
                                 {
                                    
                                 }
                                 else
                                   {
                                     print"fail connection";
                                   }
                              $qry="INSERT INTO `project`(`ip`,`project`,`project_duration`,`detail`,`link`,`resume_number`)VALUES('".$ip."','".$project."','".$project_duration."','".$detail."','".$link."','".$resume_number."')";
                              if($conn->query($qry)==TRUE)
                              {
                                echo"<br>project is insert";
                              }




                            }
                  public static function more()
                      {
                        $ip=htmlspecialchars($_POST['ip']);
                        $achievements=htmlspecialchars($_POST['achievements']);
                        $strengths=htmlspecialchars($_POST['strengths']);
                        $hobbies=htmlspecialchars($_POST['hobbies']);
                        $career_objective=htmlspecialchars($_POST['career_objective']);
                        $declaration=htmlspecialchars($_POST['declaration']);
                        echo"<br>ip".$ip."<br> achievements".$achievements."<br>strengths ".$strengths."<br>hobbies".$hobbies."<br>career_objective".$career_objective."<br>declaration".$declaration;
                        $resume_number=htmlspecialchars($_POST['resume_number']);
                       
                       $server="localhost";
                 $user="impprfrh_resume_naphees";
                 $password="resume_naphees9997";
                 $db="impprfrh_resume";

       
       
                        $conn=new mysqli($server,$user,$password,$db)or die('connection errors');
                       if($conn==TRUE)
                           {
                              
                           }
                           else
                             {
                               print"fail connection";
                             } 

                             $qry="INSERT INTO `more`(`ip`,`achievements`,`strengths`,`hobbies`,`career_objective`,`declaration`,`resume_number`)VALUES('".$ip."','".$achievements."','".$strengths."','".$hobbies."','".$career_objective."','".$declaration."','".$resume_number."')";

                             if($conn->query($qry)==TRUE)
                             {
                               echo"<br>more is insert";
                             }


                      }


       }
       $ob1=new resume();
       
       $test=htmlspecialchars($_POST['test']);
      
       $personal="personal";
       $education="education";
       $skill="skill";
       $experience="experience";
       $project="project";
       $more="more";
       if($test==$personal)
            {
            
              $ob1->personal();
              echo"<script>alert('your details successfully uploaded');</script>";
                    echo"<script>location.replace('create_resume.php');</script>";
            }

            
            elseif($test==$education)
                {
                   
                    $ob1->education();
                    echo"<script>alert('your details successfully uploaded');</script>";
                    echo"<script>location.replace('create_resume.php');</script>";

                }
            elseif($test==$skill)
               {
                
                $ob1->skill();
                echo"<script>alert('your details successfully uploaded');</script>";
                    echo"<script>location.replace('create_resume.php');</script>";
               
              }
              elseif($test==$experience)
                   {
                   
                    $ob1->experience();
                    echo"<script>alert('your details successfully uploaded');</script>";
                    echo"<script>location.replace('create_resume.php');</script>";
                   }
              elseif($test==$project)
                     {
                     
                      $ob1->project();
                      echo"<script>alert('your details successfully uploaded');</script>";
                      echo"<script>location.replace('create_resume.php');</script>";
                    
                    }
              elseif($test==$more)
                  {
               
                    $ob1->more();
                    echo"<script>alert('your details successfully uploaded');</script>";
                    echo"<script>location.replace('create_resume.php');</script>";
                  }
        else
        {
        
          echo"<script>alert('no matching content');</script>";
          echo"<script>location.replace('create_resume.php');</script>";
        }
       
        

?>