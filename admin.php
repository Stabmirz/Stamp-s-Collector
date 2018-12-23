<?php
include 'connection.php';
session_start();
$userprofile =$_SESSION['email'];
if($userprofile == TRUE) {

} else {
   header('location:login.php');
}

$query = "SELECT * FROM stamp A JOIN `user` B ON A.collector=B.a_id WHERE B.email='$userprofile' ";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

include 'partials/aheader.php';
if ($total!=0){
?>

<div class="wrap" id="text">
    <section>
        <h1>Welcom <?php echo $userprofile?></h1>
        <table class="container">
            <thead>
                <tr>
                    <th><h1>Id</h1></th>
                    <th><h1>Image</h1></th>
                    <th><h1>Name</h1></th>
                    <th><h1>Country</h1></th>
                    <th><h1>Year</h1></th>
                    <th><h1>Size</h1></th>
                    <th><h1>Glued to Album</h1></th>
                    <th><h1>Stock</h1></th>
                    <th colspan="2"><h1 padding="2px">Operations</h1></th>
                </tr>
            </thead>

            <?php
            while($result= mysqli_fetch_assoc($data))
            {
                echo "<tbody>
                    <tr>
                        <td>".$result['id']."</td>
                        <td><a href='$result[pic_src]'><img src='".$result['pic_src']."'height='100px' width='100px'/></a></td>
                        <td>".$result['name']."</td>
                        <td>".$result['country']."</td>
                        <td>".$result['year']."</td>
                        <td>".$result['size']."</td>
                        <td>".$result['glued']."</td>
                        <td>".$result['count']."</td>
                        <td><a href='update.php?id=$result[id]&name=$result[name]&country=$result[country]&year=$result[year]&size=$result[size]&count=$result[count]&glued=$result[glued]'>Edit</a></td>
                        <td><a href='delete.php?id=$result[id]&name=$result[name]&country=$result[country]&year=$result[year]&size=$result[size]&count=$result[count]&glued=$result[glued]' onclick='return checkdelete()'>Delete</a></td>
                    </tr>
                </tbody>";
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
