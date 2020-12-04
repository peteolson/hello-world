<?PHP
echo "hello-world";
echo "<br>";

for($i = 0; $i < 11; $i++) {
  echo $i;
  echo "<br>";
}
add_two_numbers(6,3);
function add_two_numbers($num1,$num2) {
  echo ($num1 + $num2);
}
