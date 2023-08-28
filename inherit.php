<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
class Flower
{
    protected $species;

    public function __construct($species) {
        $this->species = $species;
    }

    public function color() {
        return "Some color";
    }
}

class Rose extends Flower {
    public function color() {
        return "Red!";
    }
}

class Lotus extends Flower {
    public function color() {
        return "Pink!";
    }
}

$rose = new Rose("Rose");
$lotus = new Lotus("Lotus");

echo $rose->color();
echo "<br>";
echo $lotus->color(); 
?>

</body>
</html>