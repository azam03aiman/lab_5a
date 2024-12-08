<?php

function multiplication($multiplier) {
    $results = [];
    for ($i = 1; $i <= 12; $i++) {
        $results[] = [
            'no' => $i,
            'multiplier' => $multiplier,
            'answer' => $i * $multiplier
        ];
    }
    return $results;
}

$answers = multiplication(2);

?>

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

?>
    <table>
            <tr id="head">
                <td>No</td>
                <td>Multiplier</td>
                <td>Answer</td>
            </tr>
        <?php foreach($answers as $answer) { ?>
            <tr>
                <td><?php echo $answer['no']; ?></td>
                <td><?php echo $answer['multiplier']; ?></td>
                <td><?php echo $answer['answer']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>