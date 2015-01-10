<!DOCTYPE html>
<html> 
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('student.php');
        $students = array();
 
        //First student added to database
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;

        //Second student added to database
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        //Third student added to database
        $third = new Student();
        $third->surname = "Jesse";
        $third->first_name = "Adam";
        $third->add_email('home', 'ak1jesse@gmail.com');
        $third->add_email('work1', 'akjesse@hotmail.com');
        $third->add_grade(99);
        $third->add_grade(98);
        $third->add_grade(51);
        $students['a588'] = $third;
        
        //Sorting record of students
        ksort($students);
          
        //Printing records of students
        foreach ($students as $student) {
            echo $student->toString();
        }
        ?>
    </body>
</html>
