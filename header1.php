



<nav class="navbar navbar-expand-md bg-success navbar-dark sticky-top fixed-top"  >
  <!-- Brand -->
  <a class="navbar-brand" href="index.php"><h1><b><i>Resume maker</i></b></h1></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php" id="index"><b><i>Dashboard</i></b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create_resume.php" id="create_resume"><b><i>Create Resume</i></b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="resume.php" id="your_resume"><b><i>Your resume</i></b></a>
      </li>
      
     
     
     
      <li class="nav-item">
        <a class="nav-link" href="" id="print"><b><i>print</i></b></a>
      </li>

     
     
      
    </ul>
  </div>
</nav>
 <script>
 $(document).ready(function(){
    $("#create_resume").click(function(){
        location.replace('create_resume.php');
    });
    $("#index").click(function(){
        location.replace('index.php');
    });
    $("#your_resume").click(function(){
        location.replace('your_resume.php');
    });
    $("#donate").click(function(){
        location.replace('donate.php');
    });
    $("#help").click(function(){
        location.replace('help.php');
    });
    $("#feedback").click(function(){
        location.replace('feedback.php');
    });
    $("#contact").click(function(){
        location.replace('contact.php');
    });
    $("#print").click(function(){
          window.print();
    });
    
 });
 </script>
 