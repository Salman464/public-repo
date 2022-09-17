<?php
	include 'config/db_connect.php';

    $email=$title=$ingredients='';
    $errors=array("email"=>"","title"=>"","ingredients"=>"");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['email'])){
            $errors['email']="Email required...";
        }
        else{
            $email=$_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email']='Invalid Email...';
            }
        }
        if(empty($_POST['title'])){
            $errors['title']="Title required...";
        }
        else{
            $title=$_POST['title'];
            if(!preg_match("/^[A-Za-z\s]+$/",$title)){
                $errors['title']='Title must b letters only.';
            }
        }
        if(empty($_POST['ingredients'])){
            $errors['ingredients']="ingredients required...";
        }
        else{
            $ingredients=$_POST['ingredients'];
            if(!preg_match("/^[0-9a-zA-Z\s]+(,[0-9a-zA-Z\s]+)*$/",$ingredients)){
                $errors['ingredients']="Ingredients must be comma seprated...";
            }
        }
        if(array_filter($errors)){
            echo "Errors in form";
        }
        else{
            $email= mysqli_real_escape_string($conn,$_POST['email']);
            $title= mysqli_real_escape_string($conn,$_POST['title']);
            $ingredients= mysqli_real_escape_string($conn,$_POST['ingredients']);

            //Isert data
            $sql="INSERT INTO pizza(email,title,ingredients) VALUES('$email','$title','$ingredients')";
            if(mysqli_query($conn,$sql)){
                header('location:index.php');
            }
            else{
                echo mysqli_error();
            }

            
        }
    }
    

 ?>
 <!DOCTYPE html>
 <html>
	<?php include "Templates/header.php" ?>

    <section class="container grey-text">
        <h4 class='center'>Add a Pizza</h4>
        <form action="add.php" class="white" method="POST">
            <label>Email</label>
            <input type="text" name="email" value="<?php echo $email ?>">
            <div class="red-text"><?php echo $errors['email']; ?></div>

            <label>Pizza title</label>
            <input type="text" name="title" value="<?php echo $title ?>">
            <div class="red-text"><?php echo $errors['title']; ?></div>


            <label>ingrediants (comma separated)</label>
            <input type="text" name="ingredients" value="<?php echo $ingredients ?>">
            <div class="red-text"><?php echo $errors['ingredients']; ?></div>


            <div class="center">
                <button type="submit" name="submit" value="submit" class="btn center brand z-depth-0">Submit</button>
            </div>
        </form>
    </section>

	<?php include "Templates/footer.php" ?>
 </html>