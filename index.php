<html>
    <head>
        <meta charset="UTF-8">
    <titile></titile>
    </head>
    <body>
    <?php
   
        //Including the student Class
        include('Student.php');

        //Creating the students array.
        $students = array();

        //Adding the first Student
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        //Adding the second student
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

        //Adding myself
        $third = new Student();
        $third->surname = "Kim";
        $third->first_name = "John";
        $third->add_email('home','john@kim.com');
        $third->add_email('work','jdoe@hello.com');
        $third->add_grade(80);
        $third->add_grade(80);
        $third->add_grade(80);
        $students['A00992503'] = $third;

        //sorting the students array
        ksort($students);
                
        foreach($students as $student)
            echo $student->toString();
    ?>
    </body>
</html>


