<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Square Root Sum</title>
    <style>
        table, td {
            border: 1px solid #000000;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>Number</td>
                <td>Square</td>
            </tr>
        </thead>
        <tbody>
            <?php generateContent();?>
        </tbody>
        <tfoot>
            <tr>
                <td>Total:</td>
                <td><?php echo $total;?></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>

<?php
$total = 0;

function generateContent() {
        for ($i = 0; $i <= 100; $i += 2) {
            global $total;
            $root = round(sqrt($i), 2);
            echo '<tr>';
            echo "<td>$i</td>";
            echo "<td>$root</td>";
            echo '</tr>';
            $total += $root;
        }
}
?>