/**
 *
 * @return \PDO
 */

<?php
function getConexao()
{
    $dsn = 'mysql:host=mysql742.umbler.com;dbname=bdacademico';
    $username = 'mateus';
    $password = 'kHDH9V44rwJL53M';

    try {
        $pdo = new PDO($dsn . $username, $password);
        return $pdo;
    } catch (PDOException $ex) {
        echo 'Error: ' . $ex->getMessage();
    }
}
