<?php
    include 'config/db_connect.php';
    //check id
    if(isset($_GET['id']))
    {
        $id=mysqli_real_escape_string($conn,$_GET['id']);

        //show detail
        $sql="SELECT * FROM pizza WHERE id=$id";

        $reslut=mysqli_query($conn,$sql);
        $pizz=mysqli_fetch_assoc($reslut);

        mysqli_free_result($reslut);
        mysqli_close($conn);
    }
?>
<html>
    <?php include 'Templates/header.php'; ?>

        <h2 class="center">Details</h2>
        <div class="container center">
            <?php if($pizz): ?>
                <h4><?php echo htmlspecialchars($pizz['title']) ?></h4>
                <p>Created by: <?php echo htmlspecialchars($pizz['email']) ?></p>
                <p>Created at: <?php echo htmlspecialchars($pizz['created']) ?></p>
                <p>Ingredients: <?php echo htmlspecialchars($pizz['ingredients']) ?></p>
                
            <?php else: echo "Nothing with corresponding id found.."; ?>
            <?php endif; ?>
        </div>

    <?php include 'Templates/footer.php'; ?>
</html>