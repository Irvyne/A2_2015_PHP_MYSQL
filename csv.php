<?php
/**
 * @author Thibaud BARDIN (https://github.com/Irvyne).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

$fp = fopen('output.csv', 'w+');

$link = mysqli_connect(
    'localhost',
    'root',
    'toor',
    'php_a1_test'
) or die('BDD Error');

$sql = 'SELECT * FROM article';
$result = mysqli_query($link, $sql);

if (false === $result) {
    var_dump(mysqli_error($link));
} else {
    $i = 0;
    while ($article = mysqli_fetch_assoc($result)) {
        if (0 === $i) {
            fputcsv($fp, $article);
            $i++;
        }
        fputcsv($fp, $article);
    }
}

fclose($fp);