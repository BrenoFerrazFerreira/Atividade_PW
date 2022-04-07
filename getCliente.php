<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        td,
        th {
            border: 1px solid black;
            padding: 5px;
        }

        th {
            text-align: left;
        }
    </style>
</head>

<body>

    <?php
    include "Conexao.php";

    $q = intval($_GET['q']);

    mysqli_select_db($con, "ajax_demo");
    $sql = "SELECT * FROM user WHERE id = '" . $q . "'";
    $result = mysqli_query($con, $sql);

    echo "<table>
<tr>
<th>Nome</th>
<th>Telefone</th>
<th>Altura</th>
<th>Peso</th>
</tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['LastName'] . "</td>";
        echo "<td>" . $row['Age'] . "</td>";
        echo "<td>" . $row['Hometown'] . "</td>";
        echo "<td>" . $row['Job'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>
</body>

</html>