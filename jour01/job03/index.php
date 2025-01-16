<?php
$b = true;
$i = 10;
$s = "twenty";
$f = 25.5;?>

<header>
    <p>
<?php

print "Type____________Nom________Valeur";

?>
    </p>
</header>

<body>
    <p>
<?php

var_dump($b);
print "_________b";
print("___________$b <br>");

var_dump($i);
print "____________i";
print("___________$i <br>");

var_dump($s);
print "___s";
print("__________$s<br>");

var_dump($f);
print "_________f";
print("___________$f<br>");

?>
    </p>
</body>