<?php
    $mystr = "Jello, world?";
    $mystr{0} = "H";
    $mystr{12} = "!";
    print $mystr;
?>
// output: Hello, world!

$a = 1;
if (isset($a)) print "A is set";
if (isset($b)) print "B is set";
// output: A is set

print(strlen("QWERTYUIOP"));
// output: 10

$str = "abcde";
print(strpos($str, "c"));
// output: 3

function factorial($n)
{
  if ($n == 1) { return $n; } else { return $n * factorial($n - 1); }
}
print(factorial(4));
// output: 24

