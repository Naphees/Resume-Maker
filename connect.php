<?php
     class connect
       {
            public $conn;
           
           public function connect()
               {
                
                 $server="localhost";
                 $user="impprfrh_resume_naphees";
                 $password="resume_naphees9997";
                 $db="impprfrh_resume";


                 $this->conn=new mysqli($server,$user,$password,$db)or die('connection errors');
                if($this->conn==TRUE)
                    {
                      
                    }
                    else
                      {
                        print"connection is fail";
                      }
               }
      
       }
       $ob= new connect();
       $ob->connect();
       
       session_start();
       
      $ip=$_SERVER['REMOTE_ADDR'];
      $_SESSION['ip']=$ip;
      $date=date("d-m-y");
      $time=date("h:m:s");
           $ins_ip="INSERT INTO security(`ip`,`time`,`date`)VALUES('".$ip."','".$time."', '".$date."')";
       

      
?>