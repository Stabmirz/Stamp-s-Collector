<?php
include 'connection.php';
error_reporting(0);

$query = "SELECT * FROM stamp WHERE glued='no' ORDER BY year DESC";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

include 'partials/header.php';
if ($total!=0){
?>

<div class="wrap" id="text">
    <h1>Collections that are not glued to an Album.</h1>
    <table class="container">
        <thead>
            <tr>
                <th><h1>Image</h1></th>
                <th><h1>Name</h1></th>
                <th><h1>Country</h1></th>
                <th><h1>Year</h1></th>
                <th><h1>Size</h1></th>
                <th><h1>Stock</h1></th>
            </tr>
        </thead>

        <?php
        while($result= mysqli_fetch_assoc($data))
        {
            echo "<tbody>
                <tr>
                    <td><a href='$result[pic_src]'><img src='".$result['pic_src']."'height='100px' width='100px'/></a></td>
                    <td>".$result['name']."</td>
                    <td>".$result['c_name']."</td>
                    <td>".$result['year']."</td>
                    <td>".$result['size']."</td>
                    <td>".$result['count']."</td>
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