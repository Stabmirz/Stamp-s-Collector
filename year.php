<?php
include 'connection.php';
error_reporting(0);

$query = "SELECT * FROM STAMP ORDER BY YEAR DESC";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
include 'partials/header.php';
if ($total!=0){
?>
<div class="wrap" id="text">
        <table>

            <tr>
                <th>Name</th>
                <th>Country</th>
                <th>Year</th>
                <th>Size</th>
                <th>Image</th>
                <th>Stock</th>
                <th>Glued to Album</th>
            </tr>

            <?php
            while($result= mysqli_fetch_assoc($data))
            {
                echo "<tr>
                        <td>".$result['name']."</td>
                        <td>".$result['country']."</td>
                        <td>".$result['year']."</td>
                        <td>".$result['size']."</td>
                        <td><a href='$result[pic_src]'><img src='".$result['pic_src']."'height='100px' width='100px'/></a></td>
                        <td>".$result['count']."</td>
                        <td>".$result['glued']."</td>

                    </tr>";
            
            }
            } else{
                echo "no record found";
            }
            mysqli_close($conn);
            ?>
        </table>
    </section>
</div>
<?php include 'partials/footer.php';?>