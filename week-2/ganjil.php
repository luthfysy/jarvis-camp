function tampilkanAngkaGanjil($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
    }
}
