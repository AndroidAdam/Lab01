<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Adam Jesse - A00860588
 */
class Student {
    
    //Constructor for student class
     function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    //Adds email of a student
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    //Adds grade of a student
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    //Computes average grade of a student
    function average() {
        $total = 0;
        foreach ($this->grades as $value) 
            $total += $value;
        return $total / count($this->grades);
    }
    
    //String method for displaying student records
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which => $what)
            $result .= $which . ': '. $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }
}