<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $error = "";
        $num1 = "";
        $num2 = "";
        $result = "";


        if(isset($_GET["operation"])){
            $operator = $_GET["operation"];
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
            // $clear = $_GET["clear"];

            // if(is_numeric($num1) && is_numeric($num2)){
            //     switch($operator){
            //         case 'add' : $result = $num1 + $num2;
            //         break;

            //         case 'sub' : $result = $num1 - $num2;
            //         break;

            //         case 'mul' : $result = $num1 * $num2;
            //         break;

            //         case 'div' : $result = $num1 / $num2;
            //         break;

            //         case 'clear' : $result = "";
            //         break;
            //     }
            // }
            // else{
            //     $error = "Enter Number First";
            // }
            // if(is_numeric($num1) && is_numeric($num2)){
            //     if($operator == "add"){
            //         $result = $num1 + $num2;
            //     }
            // }
            if(is_numeric($num1) && is_numeric($num2)){
                function result($num1, $num2, $operator){
                    if($operator == "add"){
                        return $num1 + $num2;
                    }
                }
                $value =  result($num1, $num2, $operator);
            }

            
        }
    ?>

    <div>
        <form action="./index.php" method="get">
            <div>
                <label for="num1">Number 1</label>
                <input type="number" name="num1" value=""/>
            </div>
            <div>
                <label for="num2">Number 2</label>
                <input type="number" name="num2" value=""/>
            </div>
            <div>
                <label for="result">Result</label>
                <input type="number" name="result" value="<?php echo $value; ?>" disabled/>
            </div>
            <div>
                <input type="submit" name="operation" value="add"/>
                <input type="submit" name="operation" value="sub"/>
                <input type="submit" name="operation" value="mul"/>
                <input type="submit" name="operation" value="div"/>
                <input type="submit" name="operation" value="clear"/>
            </div>
            <p><?php echo $error; ?></p>
        </form>
    </div>
</body>
</html>