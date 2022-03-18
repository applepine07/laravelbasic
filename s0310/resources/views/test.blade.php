<!DOCTYPE html>
<html>

<body>

    <?php
class Fruit {
  public $name;
  private $color;


  //初始值設定 new 一定會執行一次
  function __construct($name,$color) {
    $this->name = $name; 
    $this->color = $color;
  }

  public function go(){
    echo "動作 go <br>";
  }

  public function stop(){
    echo "動作 stop <br>";
  }

  public function setColor($color){
    $this->color = $color;
  }

  public function getColor(){
    echo "getColor<br>";
    echo $this->color."<br>";
  }

}

$apple = new Fruit('apple1','red');
$apple2 = new Fruit('apple2','red');
$appleArr = [$apple,$apple2];
echo $apple->name."<br>"; //public可以任意使用
// echo $apple->color."<br>";//private 不可直接使用
$apple->getColor();
// $apple->go();
// $apple->go();
// $apple->go();
// $apple->go();



?>

</body>

</html>
