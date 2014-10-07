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

$names = [
    'dzvezfezfze',
    'sdfgbjukjuyjkt',
    'zefzadefzfgzef',
    'argytjyt',
];
/*
 * CRUD
 *
 * Create => INSERT
 * Read   => SELECT
 * Update => UPDATE
 * Delete => DELETE
 */

//$sql = 'INSERT INTO article (id, name) VALUES (NULL, ?)';
//
//$prepareStatement = mysqli_prepare($link, $sql);
//
//foreach($names as $name) {
//    mysqli_stmt_bind_param($prepareStatement, 's', $name);
//    mysqli_stmt_execute($prepareStatement);
//}
$name = 'MonNouveauNom';
$sql = 'UPDATE article SET name="'.mysqli_real_escape_string($link, $name).'" WHERE id=8';

$result = mysqli_query($link, $sql);

var_dump($result);

var_dump(mysqli_error($link));
