<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css" type="text/css">
        <title>PHP HW</title>
    </head>
    <body>
        <header>
            <h1>Модуль 11. Введение в PHP<br>Практика</h1>
        </header>
        <div class="title"><h2>Задание 1.<br>Таблица истинности PHP</h2></div>
        <table>
            <tr>
            <th><?php echo 'A' ?></th>
            <th><?php echo 'B' ?></th>
            <th><?php echo '!A' ?></th>
            <th><?php echo 'A || B' ?></th>
            <th><?php echo 'A && B' ?></th>
            <th><?php echo 'A xor B' ?></th>
            </tr>
            <tr>
            <td><?php $a = 0; echo $a ?></td>
            <td><?php $b = 0; echo $b ?></td>
            <td><?php $a = 0; echo !$a ?></td>
            <td><?php $a = 0; $b = 0; echo(int)($a || $b) ?></td>
            <td><?php $a = 0; $b = 0; echo(int)($a && $b) ?></td>
            <td><?php $a = 0; $b = 0; echo(int)($a xor $b) ?></td>
            </tr>
            <tr>
            <td><?php $a = 0; echo $a ?></td>
            <td><?php $b = 1; echo $b ?></td>
            <td><?php $a = 0; echo !$a ?></td>
            <td><?php $a = 0; $b = 1; echo $a || $b ?></td>
            <td><?php $a = 0; $b = 1; echo(int)($a && $b) ?></td>
            <td><?php $a = 0; $b = 1; echo $a xor $b ?></td>
            </tr>
            <tr>
            <td><?php $a = 1; echo $a ?></td>
            <td><?php $b = 0; echo $b ?></td>
            <td><?php $a = 1; echo(int)(!$a) ?></td>
            <td><?php $a = 1; $b = 0; echo $a || $b ?></td>
            <td><?php $a = 1; $b = 0; echo(int)($a && $b) ?></td>
            <td><?php $a = 1; $b = 0; echo $a xor $b ?></td>
            </tr>
            <tr>
            <td><?php $a = 1; echo $a ?></td>
            <td><?php $b = 1; echo $b ?></td>
            <td><?php $a = 1; echo(int)(!$a) ?></td>
            <td><?php $a = 1; $b = 1; echo $a || $b ?></td>
            <td><?php $a = 1; $b = 1; echo $a && $b ?></td>
            <td><?php $a = 1; $b = 1; echo(int)($a xor $b) ?></td>
            </tr>
        </table>
        <div class="title"><h2>Задание 2.<br>Таблица гибкого сравнения в PHP</h2></div>
        <table>
            <tr>
            <th><?php echo '==' ?></th>
            <th><?php echo 'true' ?></th>
            <th><?php echo 'false' ?></th>
            <th><?php echo 1 ?></th>
            <th><?php echo 0 ?></th>
            <th><?php echo -1 ?></th>
            <th><?php echo '"1"' ?></th>
            <th><?php echo 'null' ?></th>
            <th><?php echo '"php"' ?></th>
            </tr>
            <tr>
            <td class="column"><?php echo 'true' ?></td>
            <td><?php $a = true; $b = true; echo $a == $b ?></td>
            <td><?php $a = true; $b = false; echo(int)($a == $b) ?></td>
            <td><?php $a = true; $b = 1; echo $a == $b ?></td>
            <td><?php $a = true; $b = 0; echo(int)($a == $b) ?></td>
            <td><?php $a = true; $b = -1; echo $a == $b ?></td>
            <td><?php $a = true; $b = '1'; echo $a == $b ?></td>
            <td><?php $a = true; $b = null; echo(int)($a == $b) ?></td>
            <td><?php $a = true; $b = 'php'; echo $a == $b ?></td>
            </tr>
            <tr>
            <td class="column"><?php echo 'false' ?></td>
            <td><?php $a = false; $b = true; echo(int)($a == $b) ?></td>
            <td><?php $a = false; $b = false; echo $a == $b ?></td>
            <td><?php $a = false; $b = 1; echo(int)($a == $b) ?></td>
            <td><?php $a = false; $b = 0; echo $a == $b ?></td>
            <td><?php $a = false; $b = -1; echo(int)($a == $b) ?></td>
            <td><?php $a = false; $b = '1'; echo(int)($a == $b) ?></td>
            <td><?php $a = false; $b = null; echo $a == $b ?></td>
            <td><?php $a = false; $b = 'php'; echo(int)($a == $b) ?></td>
            </tr>
            <tr>
            <td class="column"><?php echo 1 ?></td>
            <td><?php $a = 1; $b = true; echo $a == $b ?></td>
            <td><?php $a = 1; $b = false; echo(int)($a == $b) ?></td>
            <td><?php $a = 1; $b = 1; echo $a == $b ?></td>
            <td><?php $a = 1; $b = 0; echo(int)($a == $b) ?></td>
            <td><?php $a = 1; $b = -1; echo(int)($a == $b) ?></td>
            <td><?php $a = 1; $b = '1'; echo $a == $b ?></td>
            <td><?php $a = 1; $b = null; echo(int)($a == $b) ?></td>
            <td><?php $a = 1; $b = 'php'; echo(int)($a == $b) ?></td>
            </tr>
            <tr>
            <td class="column"><?php echo 0 ?></td>
            <td><?php $a = 0; $b = true; echo(int)($a == $b) ?></td>
            <td><?php $a = 0; $b = false; echo $a == $b ?></td>
            <td><?php $a = 0; $b = 1; echo(int)($a == $b) ?></td>
            <td><?php $a = 0; $b = 0; echo $a == $b ?></td>
            <td><?php $a = 0; $b = -1; echo(int)($a == $b) ?></td>
            <td><?php $a = 0; $b = '1'; echo(int)($a == $b) ?></td>
            <td><?php $a = 0; $b = null; echo $a == $b ?></td>
            <td><?php $a = 0; $b = 'php'; echo(int)($a == $b) ?></td>
            </tr>
            <tr>
            <td class="column"><?php echo -1 ?></td>
            <td><?php $a = -1; $b = true; echo $a == $b ?></td>
            <td><?php $a = -1; $b = false; echo(int)($a == $b) ?></td>
            <td><?php $a = -1; $b = 1; echo(int)($a == $b) ?></td>
            <td><?php $a = -1; $b = 0; echo(int)($a == $b) ?></td>
            <td><?php $a = -1; $b = -1; echo $a == $b ?></td>
            <td><?php $a = -1; $b = '1'; echo(int)($a == $b) ?></td>
            <td><?php $a = -1; $b = null; echo(int)($a == $b) ?></td>
            <td><?php $a = -1; $b = 'php'; echo(int)($a == $b) ?></td>
            </tr>
            <tr>
            <td class="column"><?php echo '"1"' ?></td>
            <td><?php $a = '1'; $b = true; echo $a == $b ?></td>
            <td><?php $a = '1'; $b = false; echo(int)($a == $b) ?></td>
            <td><?php $a = '1'; $b = 1; echo $a == $b ?></td>
            <td><?php $a = '1'; $b = 0; echo(int)($a == $b) ?></td>
            <td><?php $a = '1'; $b = -1; echo(int)($a == $b) ?></td>
            <td><?php $a = '1'; $b = '1'; echo $a == $b ?></td>
            <td><?php $a = '1'; $b = null; echo(int)($a == $b) ?></td>
            <td><?php $a = '1'; $b = 'php'; echo(int)($a == $b) ?></td>
            </tr>
            <tr>
            <td class="column"><?php echo 'null' ?></td>
            <td><?php $a = null; $b = true; echo(int)($a == $b) ?></td>
            <td><?php $a = null; $b = false; echo $a == $b ?></td>
            <td><?php $a = null; $b = 1; echo(int)($a == $b) ?></td>
            <td><?php $a = null; $b = 0; echo $a == $b ?></td>
            <td><?php $a = null; $b = -1; echo(int)($a == $b) ?></td>
            <td><?php $a = null; $b = '1'; echo(int)($a == $b) ?></td>
            <td><?php $a = null; $b = null; echo $a == $b ?></td>
            <td><?php $a = null; $b = 'php'; echo(int)($a == $b) ?></td>
            </tr>
            <tr>
            <td class="column"><?php echo '"php"' ?></td>
            <td><?php $a = 'php'; $b = true; echo $a == $b ?></td>
            <td><?php $a = 'php'; $b = false; echo(int)($a == $b) ?></td>
            <td><?php $a = 'php'; $b = 1; echo(int)($a == $b) ?></td>
            <td><?php $a = 'php'; $b = 0; echo(int)($a == $b) ?></td>
            <td><?php $a = 'php'; $b = -1; echo(int)($a == $b) ?></td>
            <td><?php $a = 'php'; $b = '1'; echo(int)($a == $b) ?></td>
            <td><?php $a = 'php'; $b = null; echo(int)($a == $b) ?></td>
            <td><?php $a = 'php'; $b = 'php'; echo $a == $b ?></td>
            </tr>
        </table>
        <div class="title"><h2>Задание 2.<br>Таблица жесткого сравнения в PHP</h2></div>
        <table>
        <tr>
            <th><?php echo '===' ?></th>
            <th><?php echo 'true' ?></th>
            <th><?php echo 'false' ?></th>
            <th><?php echo 1 ?></th>
            <th><?php echo 0 ?></th>
            <th><?php echo -1 ?></th>
            <th><?php echo '"1"' ?></th>
            <th><?php echo 'null' ?></th>
            <th><?php echo '"php"' ?></th>
            </tr>
            <tr>
            <td class="column"><?php echo 'true' ?></td>
            <td><?php $a = true; $b = true; echo $a === $b ?></td>
            <td><?php $a = true; $b = false; echo(int)($a === $b) ?></td>
            <td><?php $a = true; $b = 1; echo(int)($a === $b) ?></td>
            <td><?php $a = true; $b = 0; echo(int)($a === $b) ?></td>
            <td><?php $a = true; $b = -1; echo(int)($a === $b) ?></td>
            <td><?php $a = true; $b = '1'; echo(int)($a === $b) ?></td>
            <td><?php $a = true; $b = null; echo(int)($a === $b) ?></td>
            <td><?php $a = true; $b = 'php'; echo(int)($a === $b) ?></td>
            </tr>
            <tr>
            <td class="column"><?php echo 'false' ?></td>
            <td><?php $a = false; $b = true; echo(int)($a === $b) ?></td>
            <td><?php $a = false; $b = false; echo $a === $b ?></td>
            <td><?php $a = false; $b = 1; echo(int)($a === $b) ?></td>
            <td><?php $a = false; $b = 0; echo(int)($a === $b) ?></td>
            <td><?php $a = false; $b = -1; echo(int)($a === $b) ?></td>
            <td><?php $a = false; $b = '1'; echo(int)($a === $b) ?></td>
            <td><?php $a = false; $b = null; echo(int)($a === $b) ?></td>
            <td><?php $a = false; $b = 'php'; echo(int)($a === $b) ?></td>
            </tr>
            <tr>
            <td class="column"><?php echo 1 ?></td>
            <td><?php $a = 1; $b = true; echo(int)($a === $b) ?></td>
            <td><?php $a = 1; $b = false; echo(int)($a === $b) ?></td>
            <td><?php $a = 1; $b = 1; echo $a === $b ?></td>
            <td><?php $a = 1; $b = 0; echo(int)($a === $b) ?></td>
            <td><?php $a = 1; $b = -1; echo(int)($a === $b) ?></td>
            <td><?php $a = 1; $b = '1'; echo(int)($a === $b) ?></td>
            <td><?php $a = 1; $b = null; echo(int)($a === $b) ?></td>
            <td><?php $a = 1; $b = 'php'; echo(int)($a === $b) ?></td>
            </tr>
            <tr>
            <td class="column"><?php echo 0 ?></td>
            <td><?php $a = 0; $b = true; echo(int)($a === $b) ?></td>
            <td><?php $a = 0; $b = false; echo(int)($a === $b) ?></td>
            <td><?php $a = 0; $b = 1; echo(int)($a === $b) ?></td>
            <td><?php $a = 0; $b = 0; echo $a === $b ?></td>
            <td><?php $a = 0; $b = -1; echo(int)($a === $b) ?></td>
            <td><?php $a = 0; $b = '1'; echo(int)($a === $b) ?></td>
            <td><?php $a = 0; $b = null; echo(int)($a === $b) ?></td>
            <td><?php $a = 0; $b = 'php'; echo(int)($a === $b) ?></td>
            </tr>
            <tr>
            <td class="column"><?php echo -1 ?></td>
            <td><?php $a = -1; $b = true; echo(int)($a === $b) ?></td>
            <td><?php $a = -1; $b = false; echo(int)($a === $b) ?></td>
            <td><?php $a = -1; $b = 1; echo(int)($a === $b) ?></td>
            <td><?php $a = -1; $b = 0; echo(int)($a === $b) ?></td>
            <td><?php $a = -1; $b = -1; echo $a === $b ?></td>
            <td><?php $a = -1; $b = '1'; echo(int)($a === $b) ?></td>
            <td><?php $a = -1; $b = null; echo(int)($a === $b) ?></td>
            <td><?php $a = -1; $b = 'php'; echo(int)($a === $b) ?></td>
            </tr>
            <tr>
            <td class="column"><?php echo '"1"' ?></td>
            <td><?php $a = '1'; $b = true; echo(int)($a === $b) ?></td>
            <td><?php $a = '1'; $b = false; echo(int)($a === $b) ?></td>
            <td><?php $a = '1'; $b = 1; echo(int)($a === $b) ?></td>
            <td><?php $a = '1'; $b = 0; echo(int)($a === $b) ?></td>
            <td><?php $a = '1'; $b = -1; echo(int)($a === $b) ?></td>
            <td><?php $a = '1'; $b = '1'; echo $a === $b ?></td>
            <td><?php $a = '1'; $b = null; echo(int)($a === $b) ?></td>
            <td><?php $a = '1'; $b = 'php'; echo(int)($a === $b) ?></td>
            </tr>
            <tr>
            <td class="column"><?php echo 'null' ?></td>
            <td><?php $a = null; $b = true; echo(int)($a === $b) ?></td>
            <td><?php $a = null; $b = false; echo(int)($a === $b) ?></td>
            <td><?php $a = null; $b = 1; echo(int)($a === $b) ?></td>
            <td><?php $a = null; $b = 0; echo(int)($a === $b) ?></td>
            <td><?php $a = null; $b = -1; echo(int)($a === $b) ?></td>
            <td><?php $a = null; $b = '1'; echo(int)($a === $b) ?></td>
            <td><?php $a = null; $b = null; echo $a === $b ?></td>
            <td><?php $a = null; $b = 'php'; echo(int)($a === $b) ?></td>
            </tr>
            <tr>
            <td class="column"><?php echo '"php"' ?></td>
            <td><?php $a = 'php'; $b = true; echo(int)($a === $b) ?></td>
            <td><?php $a = 'php'; $b = false; echo(int)($a === $b) ?></td>
            <td><?php $a = 'php'; $b = 1; echo(int)($a === $b) ?></td>
            <td><?php $a = 'php'; $b = 0; echo(int)($a === $b) ?></td>
            <td><?php $a = 'php'; $b = -1; echo(int)($a === $b) ?></td>
            <td><?php $a = 'php'; $b = '1'; echo(int)($a === $b) ?></td>
            <td><?php $a = 'php'; $b = null; echo(int)($a === $b) ?></td>
            <td><?php $a = 'php'; $b = 'php'; echo $a === $b ?></td>
            </tr>
        </table>
        <div class="title"><h2>Выводы о сравнении в PHP</h2><br><p>Оператор гибкого сравнения (==) сравнивает операнды по значению без учета их типа.<br><br>Оператор жесткого сравнения (===) справнивает операнды и по значению и по типу.</p></div>
    </body>
</html>