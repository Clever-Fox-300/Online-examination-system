<?php
session_start();

include('question_connectivity.php');

$examname = $_SESSION['examname'];
$timeduration=$_SESSION['Time_duration'];
$maxscore=$_SESSION['Max_score'];
?>
<html>
    <head>
        <title>Question Type</title>
        <link rel="stylesheet" type="text/css"  href="ques_style.css">
</head>
<body>

    <div style="overflow: hidden;" class="header">
        <h2 style="text-transform: uppercase;"><?php echo $examname;?></h2>
        <p style="float: left;">Time:<?php echo $timeduration;?></p>
        <p style="float: right;">Max score:<?php echo $maxscore;?></p>
      
    </div>

    <div id="question_container">
        <button id="mcq" class="ques" onclick="add_mcq_questions()">OBJECTIVE </button>
        <button id="subjective" class="ques" onclick="add_subjective_questions()">SUBJECTIVE</button>
  
    </div>
    
    <script type="text/javascript" src="add_questions.js"></script>
    

</body>
</html>