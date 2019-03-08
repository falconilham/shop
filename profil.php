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
	$sql = "SELECT id_user, username, email, phone, list_game FROM user WHERE id_user = 1";
	     
	$result = mysqli_query($conn, $sql);
	
	while($row = $result->fetch_assoc()){
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
								<?php 
									$list_game = $row ['list_game'];
									$array =  explode(',', $list_game);
									foreach ($array as $item){
									$query = "SELECT title, picture FROM game WHERE id_game = $item";
									$result1 = mysqli_query($conn, $query);
									while($hasil = $result1->fetch_assoc()){	
								?> 
									
									<td class="listing-name" style="justify-content: space-between;">
										<div class="listing-img">
											<img src="<?php echo $hasil['picture']; ?>" style="width: 80px">
										</div>
										<div class="list-name1">
											<?php echo $hasil['title']; ?>
										</div>
										<div class="button-transaksi">
											<button class="button-sell">Jual</button>
											<button class="button-trade">Tukar</button>
										</div>
									</td>
									<?php } ?>
								</tr>
									<?php } ?>
							</table>
						</div>
					</div>
				</div>
			<?php } ?>
	</body>
	<?php include 'footer.php' ?>
	</div>

			
		
			
			
			
			
					