<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h3>Variable Variables</h3>
        <?php
            $message = "Good";
            $$message = "Afternoon";
            echo '$message = '.$message."<br>";
            echo '$$message = '.$$message."<br>";
            
            echo '$Good = ' .$Good."<br>";
            echo "$message $Good <br>";
            echo $message." ".$$message;
        ?>

        <?php
            $a = null;
            $b = "0";
            $c = 0;
            $d = "";
            $e = false;
        ?>

        <h3>Isset. Test if the value of a variable exist</h3>
        <hr color="red" size="3">
        <?php
            echo '$a = null in isset() = '.isset($a)."<br>";
            echo '$b = "0" in isset() = '.isset($b)."<br>";
            echo '$c = 0 in isset() = '.isset($c)."<br>";
            echo '$d = "" in isset() = '.isset($d)."<br>";
            echo '$e = false in isset() = '.isset($e)."<br>";
        ?>

        <h3>empty(). Test if the value of a variable is empty, if it is then it will display TRUE</h3>
        <hr color="red" size="3">
        <?php
            echo '$a = null in empty() = '.empty($a)."<br>";
            echo '$b = "0" in empty() = '.empty($b)."<br>";
            echo '$c = 0 in empty() = '.empty($c)."<br>";
            echo '$d = "" in empty() = '.empty($d)."<br>";
            echo '$e = false in empty() = '.empty($e)."<br>";
        ?>

        <h3>is_null(). Test if the value of a variable is NULL, if it is then it will display TRUE.</h3>
        <hr color="red" size="3">
        <?php
            echo '$a = null in is_null() = '.is_null($a)."<br>";
            echo '$b = "0" in is_null() = '.is_null($b)."<br>";
            echo '$c = 0 in is_null() = '.is_null($c)."<br>";
            echo '$d = "" in is_null() = '.is_null($d)."<br>";
            echo '$e = false in is_null() = '.is_null($e)."<br>";
        ?>
        <h3>Gettype and Settype</h3>
        <hr color="red" size="3">
        <?php $test1 = 3;?>
        <?php $test2 = 3;?>
        <?php settype($test1,"string");?>
        <?php (string) $test2;?>
        $test1: <?php echo gettype($test1);?><br>
        $test2: <?php echo gettype($test2);?><br>

        <?php $newTest2 = (string)$test2;?>

        $test2: <?php echo gettype($newTest2);?> <br>

        <h3>Type Juggling</h3>
        <hr color="red" size="3">
        <?php $count ="2";?>
        Type:<?php echo gettype($count);?> <br>

        <?php $count = $count + 3;?>
        Type:<?php echo gettype($count);?>

        <?php $ducks = "There are ".$count." ducks in the pond";
            echo $ducks;
        ?>

        <?php echo gettype($ducks);?>
        <br>
    </body>
</html>