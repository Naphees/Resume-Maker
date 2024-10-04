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
           <div class="row" style="margin:5%">
               <div class="col-sm-4"></div>
               <div class="col-sm-4 jumborton">
                    <div class="row jumbotron">
                            <form action="your_resume.php" method="post">
                            <div class="col-sm-12">
                                        <b><i><h3>Resume</h3></i></b>
                                        <br><hr>
                                        <h6><b><i><label for="resume">Resume number</label></i></b></h6>
                                        <input type="number" name="resume_id" required class="form-control" value="1">
                                        <br><br>
                                        <button type="submit" value="submit" name="submit" class="btn-success"><b><i>apply</i></b></button>
                                          <button type="reset" value="reset" name="reset" class="btn-danger"><b><i>reset</i></b></button>
                            </div>
                            </form>
                    </div>
               </div>
               <div class="col-sm-4"></div>

           </div>
            </div>
    </body>
</html>
