<?php 
include 'header.php';
include 'db.php';
$id = $_GET['id_game'];
$sql = "SELECT * from game where id_game = '$id'";
$result = mysqli_query($conn, $sql);
while($row = $result->fetch_assoc()) {
 ?>

	<body>
		<div class="body">
			<div class="product">
				<div class="nav-product">
					<span class="text-nav">Product</span>
					<span class=""><a href="./"> Home</a> / Product</span>
				</div>
				<div class="body-product">
					
						<div class="product-img">
							<img src="<?php echo $row ['picture']?>">
						</div>

					<div class="product-desc">
						<div class="product-name">
							<span><?php echo $row ['title']?></span>
						</div>
						
						<div class="product-price">
							<span><?php echo $row ['harga']?></span>
						</div>

						<div class="product-deskripsi">
							<span>Mauris lobortis augue ex, ut faucibus nisi mollis ac. Sed volutpat scelerisque ex ut ullamcorper. Cras at velit quis sapien dapibus laoreet a class odio. Sed sit amet accumsan ante, eu congue metus. Aenean eros tortor, cursus quis feugiat sed vestibulum.</span>
						</div>

						<div class="tab-product">
							<div class="nav-tabs">
								<li class="nav-item1">
									<a href="#tab-content1">detail</a>
								</li>
								<li class="nav-item2 nav-item-active">
									<a href="#tab-content2">trailer</a>
								</li>
								<li class="nav-item3">
									<a href="#tab-content3">description</a>
								</li>
							</div>

							<div class="product-tab">
								<div class="tab-content1">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incclassclassunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</div>
								<div class="tab-content2 active">
									<iframe width="100%" height="100%" src="<?php echo $row ['trailer']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
								<div class="tab-content3">
									Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
								</div>
								<div class="tab-content4">
									Sed do eiusmod tempor incclassclassunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
				<div class="listing">
					<table id="list-game">
						<tr>
							<th>Name</th>
							<th>Price</th>
							<th>Seller</th>
							<th>Lokasi</th>
							<th>type</th>
							<th></th>
						</tr>
						<tr>
							<td class="listing-name">
								<div class="listing-img">
									<img src="img/ffxv.jpg"nstyle="width: 80px">
								</div>
								<div class="list-name1">
									Final Fantasy XV
								</div>
							</td>
							<td>RP.250.000</td>
							<td class="listing-name">
								<div class="listing-img">
									<img src="img/ffxv.jpg" style="width: 80px">
								</div>
								<div class="list-name1">
									Final Fantasy XV
								</div>
							</td>
							<td>Jakarta</td>
							<td>Second</td>
							<td><button class="button-buy">Buy</button></td>
						</tr>
						<tr>
							<td class="listing-name">
								<div class="listing-img">
									<img src="img/ffxv.jpg" style="width: 80px">
								</div>
								<div class="list-name1">
									Final Fantasy XV
								</div>
							</td>
							<td>RP.250.000</td>
							<td class="listing-name">
								<div class="listing-img">
									<img src="img/ffxv.jpg" style="width: 80px">
								</div>
								<div class="list-name1">
									Final Fantasy XV
								</div>
							</td>
							<td>Jakarta</td>
							<td>Second</td>
							<td><button class="button-buy">Buy</button></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="feature">
					<h2>Mungkin Anda Sukai Berdasarkan Genre</h2>
				</div>
				<div class="content">
					<div class="content-product">
						<a href="#"><img src="img/ffxv.jpg"></a>
					</div>
					<div class="content-product">
						<a href="#"><img src="img/re2.jpg"></a>
					</div>
					<div class="content-product">
						<a href="#"><img src="img/re7.jpg"></a>
					</div>
					<div class="content-product">
						<a href="#"><img src="img/nier.jpg"></a>
					</div>
					<div class="content-product">
						<a href="#"><img src="img/ffxv.jpg"></a>
					</div>
				</div>
		</div>
	</body>
<?php include 'footer.php'; ?>