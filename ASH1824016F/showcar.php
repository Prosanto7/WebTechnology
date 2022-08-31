<?php 

require('dbconn.php');

$sql = "SELECT * FROM car;";

    $result = $connection->query($sql);

    echo "<div style='margin: auto;'>
            <table>";
    while ($row = $result->fetch_assoc()) {
            //echo $row['id']." ".$row['vehicle_title']." ".$row['brand']." ".$row['model_year']." ".$row['price']."<br>";
            echo "<tr>
                    <th colspan='2'>Car</th>
                </tr>
        <tr>
            <td>
                <label>ID</label>
            </td>
            <td>
                ".$row['id']."
            </td>
        </tr>
        <tr>
            <td>
                <label>Vehicle_Title</label>
            </td>
            <td>
                ".$row['vehicle_title']."
            </td>
        </tr>
        <tr>
            <td>
                <label>Brand</label>
            </td>
            <td>
                ".$row['brand']."
            </td>
        </tr>

        <tr>
            <td>
                <label>Model Year</label>
            </td>
            <td>
                ".$row['model_year']."
            </td>
        </tr>

        <tr>
            <td>
                <label>Model Year</label>
            </td>
            <td>
                ".$row['price']."
            </td>
        </tr>
        
        ";
    
    }

    
    echo "</table>
        </form>
    </div>";

     
?>