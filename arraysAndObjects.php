<?php

// Two types of arrays: INDEXED, ASSOCIATIVE

// Creating an INDEXED array
$myArr = array("Milk", "Bread", "Cheese", 42, true);

var_dump($myArr);

echo "<br>The first thing on the list is $myArr[0]";

echo "<br>But here's the full list:<ul>";
// new for php
foreach($myArr as $v) {
  echo "<li>$v</li>";
}
echo "</ul>";

$myAssoc = array("name" => "Edison", "age" => 3);
var_dump($myAssoc);

echo "<br>Get associative 'name': " . $myAssoc["name"]; 

// json_encode — Returns the JSON representation of a value
echo "<br>" . json_encode($myAssoc) . "<br>";

// returns - turns JSON into a String
$decoded = json_decode('{"power":"Fluffiness", "strength": 10000}', true);
var_dump($decoded);

echo "<br>Decoded power: " . $decoded['power']; 

?>
<hr>
<?php

echo json_encode($myArr);
echo "<hr>";

$subArray = array("val1", "val2", $myArr, 12, $decoded);
echo json_encode($subArray);

?>

<hr>

<h1>Classes</h1>

<?php
class Dog{
  public $name;
  public $breed = "Newfoundland";
  public $weight = 124;

  function _construct($name){
    // arrows are how you get properties of objects
    $this->name = $name;
  }
}

$choco = new Dog("Coco");

var_dump($choco)

// will loop through each property
// Ask later why this isn't working
echo "<ul>";
foreach($choco as $key => $val){
  echo "<li>$key &rarr; $val </li>"
}

echo "</ul>";