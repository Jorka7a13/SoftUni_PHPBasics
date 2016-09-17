<?php
generateTable('Gosho', '0882-321-423', 24, 'Hadji Dimitar');

echo '<br/>';
echo '<br/>';
echo '<br/>';

generateTable('Pesho', '0884-888-888', 267, 'Suhata Reka');

function generateTable($name, $phoneNum, $age, $address) {
    echo "
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            width: 120px;
            padding: 2px 5px;
        }
        td:first-child {
            font-weight: bold;
            background-color: #FFA500;
        }
        td:last-child {
            text-align: right;
        }
    </style>

    <table>
        <tbody>
            <tr>
                <td>Name</td>
                <td>$name</td>
            </tr>
            <tr>
                <td>Phone number</td>
                <td>$phoneNum</td>
            </tr>
            <tr>
                <td>Age</td>
                <td>$age</td>
            </tr>
            <tr>
                <td>Address</td>
                <td>$address</td>
            </tr>
        </tbody>
    </table>";
}
?>