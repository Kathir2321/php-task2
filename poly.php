<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    abstract class NumberConcept {

        abstract function checkleapyear($year);
    }

    class ImplementClass extends NumberConcept {

        public function Checkleapyear($year)
       {
        if(($year % 100 == 0 && $year % 400 == 0) || ($year % 100 !== 0 && $year % 4 == 0)){
            echo $year.'is a leap year';
        }
        else{
            echo $year . "is Not a leap year";
        }
       }
    }
    $obj = new ImplementClass();
    $obj->Checkleapyear(2023);
    ?>
</body>
</html>