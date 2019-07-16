<!DOCTYPE html>
<html lang="en">
        <head>
                <title>Calculator</title>
        </head>
        <body>
                <form action="#" method="post" enctype="multipart/form-data">
                        <p>
                                Default number is 0
                        </p>
                        <input type="text" name="firstNum" > <br>
                        <input type="text" name="secondNum" > <br>
                        <button type="submit" name="plus"> + </button>
                        <button type="submit" name="minus"> - </button>
                        <button type="submit" name="multify"> * </button>
                        <button type="submit" name="divide"> / </button>
                </form>
        </body>
</html>

<?php 
        $plus; $minus; $multify; $divide;
        $num1; $num2; 
        if(isset($_POST['firstNum'])){
                $num1 = $_POST['firstNum'];
        } 

        if(isset($_POST['secondNum'])){
                $num2 = $_POST['secondNum'];
        }

        if(isset($_POST['plus'])){
                $plus = $num1 + $num2;
                echo $plus;
        }

        if(isset($_POST['minus'])){
                $minus = $num1 - $num2;
                echo $minus;
        }

        if(isset($_POST['multify'])){
                $multify = $num1 * $num2;
                echo $multify;
        }

        if(isset($_POST['divide'])){
                if ($num2 != 0) {
                        $divide = $num1 / $num2;
                        echo $divide;
                }
                else {
                        echo "Second number can't be 0 when divide";
                }
                
        }
?>

