<?php
  session_start();
       
      $ip=$_SERVER['REMOTE_ADDR'];
      $_SESSION['ip']=$ip;
      $date=date("d-m-y");
      $time=date("h:m:s");
           $ins_ip="INSERT INTO security(`ip`,`time`,`date`)VALUES('".$ip."','".$time."', '".$date."')";
           
       
         $server="localhost";
                 $user="impprfrh_resume_naphees";
                 $password="resume_naphees9997";
                 $db="impprfrh_resume";


                 $conn=new mysqli($server,$user,$password,$db)or die('connection errors');
                 if($conn->query($ins_ip)==TRUE)
                        {
                            echo"";
                        }


?>
<!doctype html>
<html lang="en">
    <head>
        <title>Dashboard</title>
          <?php  
          require('design_all.php');
          ?>
    </head>
    <body ng-app=""  >
        <div class="container-fluid">
            <?php
                include('connect.php');
                require('header.php');
            ?>
            <br>
            <div class="jumbotron">           
       <br>
                    <h3>What do you mean by resume ? </h3><BR>
                     <h6>A resume is a format document that a job applicant creates to itemize their qualifications for a position.
                        <br>A resume is usually accompanied by a cutomized cover letter in which the applicant expresses an interst in  <br>
                        a specific job or company and draws attention to <br>the most relevant specifics on the resume.


                     </h6>
                     </div>
                        <BR>
                        <div class="jumbotron">
                     <h3>
                     What’s the purpose of a resume?</h3>
                     <h6>
The purpose of a resume is to show employers you’re qualified for a position and convince them to offer you an interview.
</h6>
</div>
          <br>
          <div class="jumbotron">
          <h3>
          What to include on a resume for a job<br>
          </h3>
          <h6>
What you put on a resume depends on the job you’re applying for and your relevant professional background.

At a minimum, be sure to include these sections on your resume:
<br>
1. Contact details
<br>
When writing your contact information on your resume, include your first and last name, phone number, and email address. Additionally, you can add your LinkedIn profile.

List your city if you want to show you live near where the company is located.
<br>
2. Introduction
<br>
Add a concise overview of your professional background and key qualifications. Your introduction can be in the form of a resume summary or resume objective.
<br>
3. Education
<br>
Your resume’s education section can include your school name(s), highest degree earned, majors and minors.

Additionally, you can add your GPA (if it’s greater than 3.8), Dean’s list (if you’ve been on it), or Latin honors (like cum laude). List relevant coursework only if you lack experience or if it’s related to the position.
<BR>
4. Experience
<BR>
List any relevant work experience you have. Include your title, the company you worked for, your start and end date, and bullet points outlining your key responsibilities and notable accomplishments.
<br>
5. Skills
<br>
Include skills on your resume that are relevant to the position. Be sure to use a strong mix of hard skills and soft skills to demonstrate that you’re a well-rounded candidate.
          </h>
          <br><br><br>
          <h6>
</div>
<div class="jumbotron">
       <h3>   What is a good resume?</h3>
          <br>
          <h6>
A good resume is a resume that successfully captures and maintains busy hiring managers’ attention. It follows one for the three standard resume formats (chronological, functional, combination) and clearly showcases the candidate’s top relevant skills and career highlights.

A good resume is also well-formatted and uses a template that is appropriate for your industry.
<br><br>
What is a resume for a job?
<br>
A resume for a job is a resume written by a candidate applying for a new professional role, whether that is within the same company or at a different company. A resume for a job should be tailored for a specific position at a specific organization.

Other types of resumes include internship resumes, general resumes, and LinkedIn resumes.
<br><br>
What is a college resume?
<br>
A college resume is used by current students or recent graduates to apply for a job or internship position. It typically places greater emphasis on your education and non-work related experience than a traditional resume which focuses on your professional achievements.
<br><br>         
          </h6>
</div>

        
                </div>
                <div class="container-fluid">
                    <div style="background-color:teal;">
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-6">
                            <h3><b><i>Developer</i></b></h3>
                              <b><i> Naphees <br> Mob. :  9997178512<br>Email  :  naphees9997@gmail.com<br> Address  :  Khatauli near by Meerut city </i></b>
                            <br><br><hr><br>
                            </div>
                           
                                   
                        </div>
                       
                     </div>
                </div>
    </body>
</html>
