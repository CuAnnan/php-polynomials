<?php
include "PolynomialTerm.class.php";
include "PolynomialEquation.class.php";
header('Content-type: text/plain');

$term  = new \Polynomial\Term(3, 4);
$term2	= new \Polynomial\Term(5, 0);
$term3	= new \Polynomial\Term(-7, 8);

$equationString = "5x^2 + 5 + 3x + 5 ";
$equation1 = new \Polynomial\Equation($equationString);
$equation2 = $equation1->add('10');
$equation3 = $equation1->add($equation2);

$equation4 = new \Polynomial\Equation("2x + 2");
$equation5 = $equation4->pow(3);
$equation6 = $equation5->multiplyBy($equation2);

$equation7 = $equation6->getDerivative();

echo "$equation1\n$equation2\n$equation3\n";
echo "$equation4\n$equation5\n$equation6\n";
echo "$equation7\n";
