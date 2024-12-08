<!DOCTYPE html>

<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
<?php
$name = "Muhammad Azam Aiman bin Mohd Azmi";
$matric_num = "AI220193";
$course = "BIP";
$year_of_study = "2022 - 2026";
$address = "No. 27, Laluan Meru Permai 9, Halaman Meru Permai, Bandar Meru Raya, 30020, Ipoh, Perak";
?>
    <table>
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo "$matric_num"; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo "$year_of_study"; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>
</body>
</html>