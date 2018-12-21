<?php
 include 'connection.php';
 error_reporting(0);

 $query = "SELECT * FROM stamp A LEFT JOIN `user` B ON A.collector_fk=B.a_id LEFT JOIN countries C on A.country_fk =C.code WHERE A.country_fk='USA'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

include 'partials/header.php';
if ($total!=0){
?>

<div class="wrap" id="text">
    <h1>Collections of United States.</h1>
    <table class="container">
        <thead>
            <tr>
                <th><h1>Image</h1></th>
                <th><h1>Name</h1></th>
                <th><h1>Year</h1></th>
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
                    <td><a href='$result[pic_src]'><img src='".$result['pic_src']."'height='100px' width='100px'/></a></td>
                    <td>".$result['name']."</td>
                    <td>".$result['year']."</td>
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