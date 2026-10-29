<!DOCTYPE html>
<html>
<head>
    <title>Movies Database</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: lightgray;
        }
    </style>
</head>
<body>

<h2>Movies List</h2>

<?php
include("db.php");

$sql = "SELECT * FROM movies";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {

    echo "<table>";
    echo "<tr>
            <th>Movie Name</th>
            <th>Genre</th>
            <th>Price</th>
            <th>Date of Release</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {

        echo "<tr>";
        echo "<td>" . $row['movie_name'] . "</td>";
        echo "<td>" . $row['genre'] . "</td>";
        echo "<td>£" . number_format($row['price'], 2) . "</td>";
        echo "<td>" . date("d/m/Y", strtotime($row['date_of_release'])) . "</td>";
        echo "</tr>";
    }

    echo "</table>";

} else {
    echo "No movies found.";
}

$mysqli->close();
?>

</body>
</html>