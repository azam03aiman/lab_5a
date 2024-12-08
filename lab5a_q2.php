<!DOCTYPE html>

<html lang="en">
<head>
    <title>Lab 5a Q1</title>

    <style>
        table, tr, td {
            border: 1px solid black;
        }

        #head {
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php

$students = [
    [
        'name' => 'Alice',
        'program' => 'BIP',
        'age' => 21
    ],
    [
        'name' => 'Bob',
        'program' => 'BIS',
        'age' => 20
    ],
    [
        'name' => 'Raju',
        'program' => 'BIT',
        'age' => 22
    ]
]
?>
    <table>
            <tr id="head">
                <td>Name</td>
                <td>Program</td>
                <td>Age</td>
            </tr>
        <?php foreach($students as $stdnt) { ?>
            <tr>
                <td><?php echo $stdnt['name']; ?></td>
                <td><?php echo $stdnt['program']; ?></td>
                <td><?php echo $stdnt['age']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>