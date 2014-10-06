<?php
/**
 * @author Thibaud BARDIN (https://github.com/Irvyne).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */
$link = mysqli_connect(
    'localhost',
    'root',
    'toor',
    'php_a1_test'
) or die('BDD Error');

$result = mysqli_query($link, 'SELECT * FROM article');

while ($row = mysqli_fetch_assoc($result)) {
    echo '<h1>'.$row['name'].'</h1>';
    //var_dump($row);
}