<?php

function safe_eval($expr){
    if (preg_match('/^[0-9()+\-*\/.\s]+$/',$expr)){
        try {
            //$val='return' . $expr. ';';
            $result = eval('return ' . $expr. ';');
            return $result;
        } catch (Throwable $e) {
            //return "error in expression";
            return $e->getmessage();
        }
    }else {
        return "invalid input!";
    }
    /*
        if (preg_match('/^[0-9()+\-*\/.\s]+$/', $expr)) {
            try {
                // Evaluate the expression directly
                $result = eval('return ' . $expr . ';');
                return $result;
            } catch (Throwable $e) {
                return "Error in expression: " . $e->getMessage();
            }
        } else {
            return "Invalid input!";
        
    }    */
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $input = $_POST["expression"];
    //echo "input".$input;
    if (empty($input)) {

        exit();
    }
    $output=safe_eval($input);
    //echo "<br>";
    
    if (is_numeric($output)) { 
        
        echo  $output;

    }else {

        echo $output;

    }
    
    exit();
}else{
    //echo "failes";
    header("Location: ../main.html");
    exit();
}