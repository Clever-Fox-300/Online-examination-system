<html>
<head>
<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-image: url('assi4.jpg');">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Admin side</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="schedule.php">Schedule</a>
              </li>

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Exams
                  </a>
                  <div class="dropdown-menu" aria-labelledby="Exam">
                    <a class="dropdown-item" href="ongoing exam.php">Ongoing Exams</a>
                    <a class="dropdown-item" href="completed exam.php">Completed Exams</a>
                    <a class="dropdown-item" href="next exam">Next Exams</a>
                  </div>  
              </li>
             

              <li class="nav-item">
                <a class="nav-link logout" href="Alogin.php">logout</a>
              </li>
        </ul>
      </div>
  </nav>  

 <marquee bgcolor="351085" width="100%" direction="right" height="30px">
   <font color="#ED5711"></font>
    Online Examination
    </marquee>

</body>
</html>
