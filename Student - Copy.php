<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * The student class which contains the surname, first name, emails and grades
 * 
 * @author John
 */
class Student {
    
    /**
    * Constructor for the Student class
    * 
    */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
    *  
    * Allows the addition of email to the student object 
    * 
    * @ $which The category of where the email is stored
    * @ $address the actual email address
    */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    /**
    *  
    * Adds the grade to the student object
    * 
    * @ $grade The grade of the student
    */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /**
    *  
    * Calculates the average grade of the student
    * 
    */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    /**
    *  
    * Prints the content of the student.
    * 
    */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}