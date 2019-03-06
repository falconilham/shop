<?php 
include 'header.php';
include_once 'select_profil.php';
 ?>
	<body>
		<div class="body">
			<div class="profil">
				<div class="nav-product">
					<span class="text-nav">Profile</span>
					<span class=""><a href="./"> Home</a> / Profile</span>
				</div>
			</div>
<?php 
	$sql = "SELECT user.id_user, user.username, user.email, user.phone, game.title, game.picture FROM user INNER JOIN game ON user.list_game = game.id_game";
	     
	$result = mysqli_query($conn, $sql);
	
	while($row = $result->fetch_assoc())
	{ 
	$list_game = $row['list_game'];
	var_dump($list_game);
	die();
	$exp = explode(",", $list_game);
	foreach ($exp as $list) {
	echo $list;
}
 ?> 
				<div class="body-product">
					<div class="profile-left">	
						<div class="pp">
							<img src="img/user/ilham.jpg">
						</div>
						<div class="nama">
							<span><?php echo $row['username']; ?></span>
						</div>
					</div>
					
					<div class="profile-right">
						<h3>Your Star</h3>
						<div class="rate-star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>

						<div class="list-game-invent">
							<table id="list-game">
								<tr>
									<th>Your List Game</th>
								</tr>
								<tr>
									<td class="listing-name" style="justify-content: space-between;">
										<div class="listing-img">
											<img src="<?php echo $row['picture']; ?>" style="width: 80px">
										</div>
										<div class="list-name1">
											<?php echo $row['title']; ?>
										</div>
										<div class="button-transaksi">
											<button class="button-sell">Jual</button>
											<button class="button-trade">Tukar</button>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</body>
	<?php include 'footer.php' ?>

			
		
			
			
			
			
					