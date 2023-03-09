<?php function myCalculator($num01, $oper, $num02) {
    $sum = 0;
    switch ($oper) {
        case "add":
            $sum = $num01 + $num02;
            break;
        case "sub":
            $sum = $num01 - $num02;
            break;
        case "multi":
            $sum = $num01 * $num02;
            break;
        case "div":
            $sum = $num01 / $num02;
            break;
        default:
            $sum = "error!, try again!";
            break;
    }
    return $sum;
}

$num01 = $_GET["num01"];
$oper = $_GET["oper"];
$num02 = $_GET["num02"];

echo "Value: " . myCalculator($num01, $oper, $num02);

?>