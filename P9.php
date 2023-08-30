<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "studentdata";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM student ORDER BY USN";
$result = mysqli_query($conn, $sql);

echo"<table border = '1'>";
echo"<tr>
        <th>USN</th>
        <th>Name</th>
        <th>Address</th>
    </tr>";

    if(mysqli_num_rows($result)>0) {
        while($row = mysqli_fetch_assoc($result)){
            echo"<tr>
                    <td>". $row["USN"]."</td><td>" . $row["Name"]."</td><td>". $row["Address"]. "</td></td>";
        }
    }
    else{
        echo"No data found";
    }
echo"</table>";

mysqli_close($conn);
?>