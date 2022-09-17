<?php 
	include 'config/db_connect.php';

	//Get data
	$sql="SELECT title,ingredients,id FROM pizza ORDER BY created";
	$result=mysqli_query($conn,$sql);
	$pizzas=mysqli_fetch_all($result,MYSQLI_ASSOC);

	//closing..
	mysqli_free_result($result);
	mysqli_close($conn);

 ?>
 <!DOCTYPE html>
 <html>
	<?php include "Templates/header.php" ?>
	<h4 class="grey-text center">Pizzas!</h4>
	<div class="container">
		<div class="row">
			<?php foreach($pizzas as $pizza): ?>
				<div class="col s6 md3">
					<div class="card z-depth-0">
						<div class="card-content">
							<h5> <?php echo htmlspecialchars($pizza['title']) ?></h6>
							<div>
								<ul>Ingredients:
									<?php foreach(explode(',',$pizza['ingredients']) as $ingred): ?>
										<li class="center"><?php echo htmlspecialchars($ingred)." "; ?></li>
									<?php endforeach; ?>
								</ul>
							</div>
							<div class="card-action right-align">
								<a href="details.php?id= <?php echo $pizza['id']; ?>" class="brand-text">more info</a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<?php include "Templates/footer.php" ?>
 </html>