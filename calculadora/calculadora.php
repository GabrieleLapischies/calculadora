<?php
if (isset($_POST["btn"])){
    $num1 = $_POST["n1"];
    $num2 = $_POST["n2"];
    $op = $_POST["btn"];

        switch($op){
            case "+":
                $res = $num1 + $num2;
                break;
            case "-":
                $res = $num1 - $num2;
                break;
            case "*":
                $res = $num1 * $num2;
                break;
            case "/":
                if ($num2 != 0)
                    $res = $num1 / $num2;
                else $res= "Não existe divisão por zero!";
                break;
        }
    echo "O resultado da operacão $num1 $op $num2 é  $res";

}


?>