<?php
session_start();

$errors = array(); 
$db = mysqli_connect('localhost','root','','exams');

if(isset($_POST['Create_test'])) {
    $examname = mysqli_real_escape_string($db ,$_POST['exam']);
    $time = date('H:i:s', strtotime(mysqli_real_escape_string($db ,$_POST['time'])));

    // SELECT DATE_FORMAT(mytime, '%l:%i %p') FROM mytable
    // if we want to retrive it in future.

    $date = mysqli_real_escape_string($db ,$_POST['date']);
    $timeduration = mysqli_real_escape_string($db ,$_POST['time_duration']);
    $maxscore = mysqli_real_escape_string($db ,$_POST['max_Score']);
    $course = mysqli_real_escape_string($db ,$_POST['course']);
    $semester = mysqli_real_escape_string($db ,$_POST['semester']);
    $year = mysqli_real_escape_string($db ,$_POST['year']);


    if(empty($examname)){
        array_push($errors, "Exam Name is required");
    }
    if(empty($course)){
        array_push($errors, "Course is required");
    }
    if(empty($year)){
        array_push($errors, "Year is required");
    }
    if(empty($semester)){
        array_push($errors, "Semester is required");
    }
    if(empty($time)){
        array_push($errors, "Time is required");
    }
    if(empty($date)){
        array_push($errors, "Date is required");
    }
    if(empty($timeduration)){
        array_push($errors, "Time Duration is required");
    }
    if(empty($maxscore)){
        array_push($errors, "Max Score is required");
    }

    if (count($errors)==0) {
        
        $_SESSION['examname'] = $examname;
        $_SESSION['Time_duration'] = $timeduration;
        $_SESSION['Max_score'] = $maxscore;

        $sql = "INSERT INTO exam_details (Name, Date, Time, Time_duration, Max_score, Course, Semester, Year)
        VALUES ('$examname', '$date', '$time', '$timeduration', '$maxscore','$course','$semester','$year')";
        
        $result = mysqli_query($db, $sql);
        
        if (!$result){
            die("Exam details is not saved.");
        }

        mysqli_close($db);
        header('location: addques.php');
    }
}
?>