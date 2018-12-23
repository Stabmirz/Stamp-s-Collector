<?php include 'partials/header.php';
include 'connection.php';
?>

    <div class="wrap white">
        <section id="hello">
            <h1 style="margin-top:-10px">Hello</h1>
            <h2>Welcome to my World of Stamps.</h2>
        </section>
        
        <?php
        $query = "SELECT * FROM stamp";
        $data = mysqli_query($conn, $query);
        $total = mysqli_num_rows($data);
        if ($total!=0){
        while($result= mysqli_fetch_assoc($data))
        {?>
        <div class="album">
            <div class="album__image"><?php echo "<a href='$result[pic_src]'><img src='".$result['pic_src']." 'height='200px' width='200px'/></a>"?></div>

        </div>
        <?php }
        }else{ echo "no data found";}?>
    </div>
<?php include 'partials/footer.php';?>