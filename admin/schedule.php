<!doctype html>
<html>
    <head>
        <title>schedule</title>
        <link rel="stylesheet" type="text/css"  href="qstyle.css">
    </head>
<body>
    <div class="header">
        <h2> schedule</h2>
    </div>

    <form method="post" action="schedule.php">
   
  
    <div class="input-group">
    <label>Exam</label>
    <input type="text" name="Exam" value="">
    <div class="input-group">
    <label>Time</label>
    <input type="time" name="Time" value="">   
    </div>
    <div class="input-group">
    <label>Date</label>
    <input type="date" name="date">  
    </div>
    
    <div class="input-group">
    <button type="submit" name="lets go" class="btn"><a href="addques.php">lets go</a></button> 
    </div>
   
    </form>


</body>
</html>