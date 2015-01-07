<!DOCTYPE html>
<html> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset-UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('student.php');
        
        $students = array();
        
        foreach($students as $student)
            echo $student->toString();
        
        echo 'Hello out there... I live';
        ?>
    </body>
</html>
