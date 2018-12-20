<?php
include 'connection.php';
error_reporting(0);

$query = "SELECT * FROM STAMP WHERE glued='no' ORDER BY YEAR DESC";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

include 'partials/header.php';
if ($total!=0){
?>

<div class="wrap" id="text">
    <h2>This is my Album of all my collections that are not glued to Album.</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Country</th>
                <th>Year</th>
                <th>Size</th>
                <th>Image</th>
                <th>Stock</th>
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