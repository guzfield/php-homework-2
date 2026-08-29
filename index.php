<?php

echo "Введите первое число (делимое): ";
$firstInput = trim(fgets(STDIN));

echo "Введите второе число (делитель): ";
$secondInput = trim(fgets(STDIN));

if (!is_numeric($firstInput) || strpos($firstInput, '.') !== false) {
    fwrite(STDERR, "Введите, пожалуйста, число\n");
    exit(1);
}

if (!is_numeric($secondInput) || strpos($secondInput, '.') !== false) {
    fwrite(STDERR, "Введите, пожалуйста, число\n");
    exit(1);
}

$first = (int)$firstInput;
$second = (int)$secondInput;

if ($second === 0) {
    fwrite(STDERR, "Делить на 0 нельзя\n");
    exit(1);
}

$result = $first / $second;

echo "Результат деления $first на $second: $result\n";

exit(0);

?>
