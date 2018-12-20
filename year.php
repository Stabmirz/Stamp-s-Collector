<?php
include 'connection.php';
error_reporting(0);

$query = "SELECT * FROM STAMP A LEFT JOIN USER B ON A.COLLECTOR_FK=B.A_ID LEFT JOIN COUNTRIES C on A.COUNTRY_FK =C.CODE ORDER BY YEAR DESC";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
include 'partials/header.php';
if ($total!=0){
?>
<div class="wrap" id="text">
<table class="container">
    <h1>Collections Sorted By Recent Years</h1>
        <thead>
            <tr>
                <th><h1>Image</h1></th>
                <th><h1>Name</h1></th>
                <th><h1>Country</h1></th>
                <th><h1>Size</h1></th>
                <th><h1>Glued to Album</h1></th>
                <th><h1>Stock</h1></th>
                <th><h1>Collector</h1></th>
            </tr>
        </thead>

        <?php
        while($result= mysqli_fetch_assoc($data))
        {
            echo "<tbody>
                <tr>
                    <td><a href='$result[pic_src]'><img src='".$result['pic_src']."'height='200px' width='200px'/></a></td>
                    <td>".$result['name']."</td>
                    <td>".$result['c_name']."</td>
                    <td>".$result['size']."</td>
                    <td>".$result['glued']."</td>
                    <td>".$result['count']."</td>
                    <td>".$result['a_name']."</td>
                </tr>
            <tbody>";
        }
        } else{
            echo "no record found";
        }
        mysqli_close($conn);
        ?>
    </table>
</div>
<?php include 'partials/footer.php';?>