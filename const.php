<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Laptop{ 
        public $name;
        public $color; 
        public $model; 
        public $version; 
 
        public function __construct($name,$color, $model, $version) { 
            $this->name = $name;
            $this->color = $color; 
            $this->model = $model; 
            $this->version = $version; 
        } 
         
            public function xyz(){ 
                return "My laptop is ".$this->name." ". $this->color . " " . $this->model ." " . $this->version. "....!"; 
            }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             

    } 
    $mylaptop = new laptop("hp","blue", "2016", "1.235.1"); 
    echo $mylaptop -> xyz(); 
    echo "<br>" ; 
    ?>
</body>
</html>


