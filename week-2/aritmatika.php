function hitungAritmatika($num1, $num2, $operator) {
    switch ($operator) {
        case '+':
            return $num1 + $num2;
            break;
        case '-':
            return $num1 - $num2;
            break;
        case '*':
            return $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Error: Pembagian dengan nol!";
            }
            break;
        default:
            return "Error: Operator tidak valid!";
    }
}
