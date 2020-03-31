<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Simon Lervad">
	<meta name="email" content="lervad1996@gmail.com">
	<title>Frontend assignment</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<script src="script.js"></script>
	<script src="https://kit.fontawesome.com/9f34627289.js"></script>
</head>
<body id="body">
	<div id="hidden-menu">
		<div class="flex space-between w100">
			<h2 class="monts medium">MENU</h2>
			<button class="mb" id="exit-menu">
				<img src="images/exit.png">
			</button>
		</div>
		<div>
			<a class="row link upper" href="">Sunglasses <img src="images/arrow.png"></a>
			<a class="row link upper" href="">Shirt & tops <img src="images/arrow.png"></a>
			<a class="row link upper" href="">Designer tops <img src="images/arrow.png"></a>
			<a class="row link upper" href="">Blouses <img src="images/arrow.png"></a>
			<a class="row link upper"  href="">Socks & tights <img src="images/arrow.png"></a>
			<a class="row link upper" href="">Going out <img src="images/arrow.png"></a>
		</div>
	</div>
	<div id="wrapper">
		<header>
			<div id="desktop" class="row">
				<div class="flex center" id="title">
					<div>
						<img class="title" src="images/i.png">
						<img class="title" src="images/m.png">
						<img class="title" src="images/p.png">
						<img class="title" src="images/r.png">
						<img class="title" src="images/o.png">
						<img class="title" src="images/v.png">
						<img class="title" src="images/i.png">
						<img class="title" src="images/n.png">
						<img class="title" src="images/g.png">
					</div>
					<p class="store">store</p>
				</div>
				<div class="desktop">
					<form action="/search.php" method="POST">
						<input type="text" name="search" placeholder="Indtast søgeord">
						<button type="submit" name="submit">
							<img src="images/search.png">
						</button>
					</form>
				</div>
				<div class="desktop">
					<div class="row">
						<div>
							<p class="hind" id="pricetag">0,00 DKK</p>
						</div>
						<button id="cart-dropdown">
							<p>4</p>
							<img src="images/cart.png">
						</button>
					</div>
				</div>
			</div>
		</header>
		<div class="flex center" id="submenu">
			<div class="max-w1500 row">
				<div class="hide-desktop" id="mobile">
					<button id="menu">
						<span></span>
						<span></span>
						<span></span>
					</button>
				</div>
				<div class="hide-desktop">
					<button class="mb" id="search">
						<img src="images/search-white.png">
					</button>
				</div>
				<div class="hide-desktop">
					<button class="mb" id="cart">
						<img src="images/cart-white.png">
					</button>
				</div>
				<div id="menu-links">
					<div class="upper dropdown">
						<a class="dropdown-link">Woman</a>
						<div class="dropdown-content">
							<a class="row link upper" href="">Sunglasses <img src="images/arrow.png"></a>
							<a class="row link upper" href="">Shirt & tops <img src="images/arrow.png"></a>
							<a class="row link upper" href="">Designer tops <img src="images/arrow.png"></a>
							<a class="row link upper" href="">Blouses <img src="images/arrow.png"></a>
							<a class="row link upper"  href="">Socks & tights <img src="images/arrow.png"></a>
							<a class="row link upper" href="">Going out <img src="images/arrow.png"></a>
						</div>
					</div>
					<div class="upper dropdown">
						<a class="dropdown-link">Men</a>
						<div class="dropdown-content">
							<a class="row link upper" href="">Sunglasses <img src="images/arrow.png"></a>
							<a class="row link upper" href="">Shirt & tops <img src="images/arrow.png"></a>
							<a class="row link upper" href="">Designer tops <img src="images/arrow.png"></a>
							<a class="row link upper" href="">Blouses <img src="images/arrow.png"></a>
							<a class="row link upper"  href="">Socks & tights <img src="images/arrow.png"></a>
							<a class="row link upper" href="">Going out <img src="images/arrow.png"></a>
						</div>
					</div>
					<div class="upper dropdown">
						<a class="dropdown-link">Junior</a>
						<div class="dropdown-content">
							<a class="row link upper" href="">Sunglasses <img src="images/arrow.png"></a>
							<a class="row link upper" href="">Shirt & tops <img src="images/arrow.png"></a>
							<a class="row link upper" href="">Designer tops <img src="images/arrow.png"></a>
							<a class="row link upper" href="">Blouses <img src="images/arrow.png"></a>
							<a class="row link upper"  href="">Socks & tights <img src="images/arrow.png"></a>
							<a class="row link upper" href="">Going out <img src="images/arrow.png"></a>
						</div>
					</div>
					<a class="upper dropdown-link" href="">accessories</a>
					<a class="upper dropdown-link"  href="">Collections</a>
				</div>
			</div>
		</div>
		<section id="shopping-cart">
			<div id="recipt">
				<div class="row">
					<p class="close hind upper" id="cart-count"><label class="bold">1</label> varer</p>
					<div>
						<p class="right close hind upper">Kurv total:</p>
						<p class="right close bold hind upper" id="price">1.300,00 DKK</p>
					</div>
				</div>
				<a style="width:100%;" class="button close" href="">gå til checkout</a>
				<span></span>
				<div id="items">
					<div class="row">
						<div class="w50">
							<img src="images/skjorte.png">
						</div>
						<div style="margin-left:20px" class="w50 flex space-between column">
							<div class="upper hind">
								<p class="close">Bruun & stengade</p>
								<p class="close">Nicky - skjorter</p>
								<p class="bold">599,00 DKK</p>
							</div>
							<div>
								<p class="hind">Antal 1</p>
							</div>
						</div>
					</div>
				</div>
				<span></span>
				<a class="hind grey text-center close" href="">Se eller rediger din kurv</a>
			</div>
		</section>
		<section>
			<div id="banner">
				<h1>Fashion </h1><h1> Collection</h1>
				<h2>AW17</h2>
				<a class="button bb" href="">View more</a>
			</div>
		</section>
		<section id="shop">
			<div>
				<div class="row">
					<div>
						<h2 class="upper monts close">Our Featured products</h2>
					</div>
					<div>
						<button id="prev">
							<img src="images/arrow.png">
						</button>
						<button id="next">
							<img src="images/arrow.png">
						</button>
					</div>
				</div>
				<div id="product-slider" class="row product-list">
					<div class="product">
						<div>
							<img src="images/skjorte1.png">
						</div>
						<div class="upper hind">
							<p class="close">Bruun & stengade</p>
							<p class="close">Nicky - skjorter</p>
							<p class="bold">599,00 DKK</p>
							<button class="button fill">
								Buy now
							</button>
						</div>
					</div>
					<div class="product">
						<div>
							<img src="images/skjorte.png">
						</div>
						<div class="upper hind">
							<p class="close">Bruun & stengade</p>
							<p class="close">Nicky - skjorter</p>
							<p class="bold">599,00 DKK</p>
							<button class="button fill">
								Buy now
							</button>
						</div>
					</div>
					<div class="product">
						<div>
							<img src="images/skjorte2.png">
						</div>
						<div class="upper hind">
							<p class="close">Bruun & stengade</p>
							<p class="close">Nicky - skjorter</p>
							<p class="bold">599,00 DKK</p>
							<button class="button fill">
								Buy now
							</button>
						</div>
					</div>
					<div class="product">
						<div>
							<img src="images/skjorte3.png">
						</div>
						<div class="upper hind">
							<p class="close">Bruun & stengade</p>
							<p class="close">Nicky - skjorter</p>
							<p class="bold">599,00 DKK</p>
							<button class="button fill">
								Buy now
							</button>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include 'footer.php' ?>
	</div>
</body>
</html>