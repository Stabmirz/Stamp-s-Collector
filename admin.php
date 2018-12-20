<?php
include 'connection.php';

$userprofile =$_SESSION['email'];
if($userprofile == TRUE) {

} else {
   header('location:login.php');
}

$query = "SELECT * FROM STAMP";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

include 'partials/aheader.php';
if ($total!=0){
?>

<div class="wrap" id="text">
    <section id="album">
        <h1>Album</h1>
        <h2>This is my Album of all my collections.</h2>
        <table>

            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Country</th>
                <th>Year</th>
                <th>Size</th>
                <th>Image</th>
                <th>Stock</th>
                <th>Glued to Album</th>
                <th colspan="2">Operations</th>

            </tr>

            <?php
            while($result= mysqli_fetch_assoc($data))
            {
                echo "<tr>
                        <td>".$result['id']."</td>
                        <td>".$result['name']."</td>
                        <td>".$result['country']."</td>
                        <td>".$result['year']."</td>
                        <td>".$result['size']."</td>
                        <td><a href='$result[pic_src]'><img src='".$result['pic_src']."'height='100px' width='100px'/></a></td>
                        <td>".$result['count']."</td>
                        <td>".$result['glued']."</td>
                        <td><a href='update.php?id=$result[id]&name=$result[name]&country=$result[country]&year=$result[year]&size=$result[size]&count=$result[count]&glued=$result[glued]'>Edit</a></td>
                        <td><a href='delete.php?id=$result[id]&name=$result[name]&country=$result[country]&year=$result[year]&size=$result[size]&count=$result[count]&glued=$result[glued]' onclick='return checkdelete()'>Delete</a></td>
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
<script>
function checkdelete(){
    var x = confirm("Are you sure you want to delete?");
  if (x)
      return true;
  else
    return false;
}

</script>


<?php include 'partials/footer.php';?>
