<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Mobile{

    public $vivo;
    public $oppo;

    public function getvivomodel($vivomodel){
      
        $this->vivo = $vivomodel;
    }

    public function setvivomodel(){
        return $this->vivo;
    }

    public function getoppomodel($oppomodel){
     $this->oppo=$oppomodel;
    }
    public function setoppomodel(){
        return $this->oppo;
    }

}

$obj = new Mobile;
$obj->getvivomodel('vivo Y20');

echo $obj->setvivomodel();

$obj->getoppomodel('oppo f51');

echo $obj->setoppomodel();
?>
</body>
</html>