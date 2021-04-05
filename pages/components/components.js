class header extends HTMLElement {



	constructor(args) {
		super();
		console.log(this.getAttribute("count"));
	}

	connectedCallback() {

		var count = this.getAttribute("count")

		this.innerHTML = `

        <header class="header-v4">

		<div class="container-menu-desktop trans-03">
			<div class="wrap-menu-desktop  how-shadow1" style = "background-color:white;">
				<nav class="limiter-menu-desktop container">


					<a href="index.php" class="logo">
						<img src="../images/icons/logo-01.png" alt="IMG-LOGO">
					</a>

					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="product.php?type=all">Shop</a>
							</li>
							<li>
								<a href="about.php">About</a>
							</li>
							<li>
								<a href="contact.php">Contact</a>
							</li>
						</ul>
					</div>

					<div class="wrap-icon-header flex-w flex-r-m h-full">
						<div class="flex-c-m h-full p-r-25 bor6">
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
								data-notify=${count}>
								<a class="zmdi zmdi-shopping-cart" href="shoping-cart.php" style = "color:black"></a>
							</div>
						</div>

					</div>
				</nav>
			</div>
		</div>

		<div class="wrap-header-mobile">

			<div class="logo-mobile">
				<a href="index.php"><img src="../images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
				<div class="flex-c-m h-full p-r-5">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart"
						data-notify=${count}>
						
						<i class="zmdi zmdi-shopping-cart" style = "color: black"></i>

					</div>
				</div>
			</div>

			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>

		<div class="menu-mobile">
			<ul class="main-menu-m">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="product.php?type=all">Shop</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>

	</header>
        `
	}
}

class footer extends HTMLElement {
	connectedCallback() {
		this.innerHTML = `
        <center>
		<footer class="bg3 p-t-75 p-b-32">
			<div class="container">
				<div class="row flex-c-m">
					<div class="col-sm-6 col-lg-3 p-b-50 ">
						<h4 class="stext-301 cl0 p-b-30">
							Categories
						</h4>
						<ul>
							<li class="p-b-10">
								<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
									Women
								</a>
							</li>
							<li class="p-b-10">
								<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
									Men
								</a>
							</li>
							<li class="p-b-10">
								<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
									Shoes
								</a>
							</li>
							<li class="p-b-10">
								<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
									Watches
								</a>
							</li>
						</ul>
					</div>
					<div class="col-sm-6 col-lg-3 p-b-50">
						<h4 class="stext-301 cl0 p-b-30">
							Help
						</h4>
						<ul>
							<li class="p-b-10">
								<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
									About
								</a>
							</li>
							<li class="p-b-10">
								<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
									Contact
								</a>
							</li>
							<li class="p-b-10">
								<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
									History
								</a>
							</li>
							<li class="p-b-10">
								<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
									FAQs
								</a>
							</li>
						</ul>
					</div>
					<div class="col-sm-6 col-lg-3 p-b-50">
						<h4 class="stext-301 cl0 p-b-30">
							GET IN TOUCH
						</h4>
						<p class="stext-107 cl7 size-201">
							Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call
							us
							on (+1) 96 716 6879
						</p>
						<div class="p-t-27">
							<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
								<i class="fa fa-instagram"></i>
							</a>
							<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
								<i class="fa fa-pinterest-p"></i>
							</a>
						</div>
					</div>

				</div>
				<div class="p-t-40">
					<p class="stext-107 cl6 txt-center">

						Copyright &copy;
						2021 All rights reserved | COZA STORE
					</p>
				</div>
			</div>
		</footer>
	</center>
        `
	}
}

customElements.define('app-header', header);
customElements.define('app-footer', footer);