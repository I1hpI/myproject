<?php 
		session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>BookBazar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div class="topBar" id="top">
		<div class="soMi">
			
			
			<div class="slog" align="center">
				<img src="img/twitter.png" width="15px" height="15px">
			</div>
			<div class="slog" align="center">
				<img src="img/pinterest.png" width="15px" height="15px">
			</div>
			
			<div class="slog" align="center">
				<img src="img/rss.png" width="15px" height="15px">
			</div>
			
		</div>
		<div class="usrMnu">
			<ul>
				<?php 
					if (!isset($_SESSION['unm'])) {
						echo '
							<li><a href="Signup.php">Sign Up</a></li>
							<li><a href="Login.php">Login</a></li>
						';
					} else {
						echo '
							<li><a href=# style = "color:yellow ;">'.$_SESSION['unm'].'</a></li>
							<li><a href="inc/logout.inc.php">Logout</a></li>
						';
					}
				 ?>
				
			</ul>			
		</div>

	</div>

	<div class="headCover">
		<div class="logo"><font style="font-size: 26pt;"><font style="font-size: 45pt">Book</font>Bazar</font><div style="font-size: 12pt; display: inline-block; padding-left: 15px; border-left:1.5px #999 solid; margin-left: 15px; opacity: 0.5;">
			<br> E-Market
		</div></div>

		<div class="headForm">
			<form action="search.php" method="GET">
				<input type="text" name="search" placeholder="Search Our website"><button type="submit" name="submit">Search</button>				
			</form>
		</div>
		<div class="navigation">
			<ul style="float:left;">
				<li style="
	border-bottom: 2.5px #2AA2D4 solid;"><a href="home.php?page=home" style="color:white;">Home</a></li>
				<li><a href="gallery.php?page=items">ITEMS</a></li>
			</ul>
			
			<?php

				if(!isset($_SESSION['id'])){
					echo '
					<ul style="float:right; display:inline-block;margin-right:5px;" id="chrtUl">
						<li><a href="cart.php?page=cart">Cart</a></li>
					</ul>
					';
				} else {
					if($_SESSION['id'] == 1) {
						echo'
						<ul style="float:right; display:inline-block;margin-right:5px;" id="chrtUl">
							<li><a href="adminpanel.php">Adminpanel</a></li>
						</ul>
						';
						
					} else {
						echo '
						<ul style="float:right; display:inline-block;margin-right:5px;" id="chrtUl">
							<li><a href="cart.php?page=cart">Cart</a></li>		
						</ul>
						';
					}
				}
					
			?>
			<div class="invv" id="sideDis">
				<img src="img/opt.png">
			</div>
		</div>
	</div>

	<nav id="sideBr">
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="gallery.php">ITEMS</a></li>
		</ul>
	</nav>

	<div class="container">
		
		<div class="coverPic" id="slideShow">
			<div class="slider" id="slider">
				<div id="dt1"></div>
				<div id="dt2"></div>
				<div id="dt3"></div>
				<div id="dt4"></div>
				<div id="dt5"></div>
			</div>

			<div id="lar">
				<img src="img/lar.png">
			</div>
			<div id="rar">
				<img src="img/rar.png">
			</div>

			<div class="cvrShd">
				
			</div>
			<div class="cvrCnt">
				<h1>Second Hand Books</h1>

				We sell all kinds of books to the users. Second hand books are also available in cheap prices.  
			</div>
		</div>
		
		<div style="padding:15px;">
		<h1>About Us</h1>
			<p style="font-size:15pt;line-height:1.5em;">
			
			This project is based on e-commerce. Our website name will be BookBazar where we will be selling all the types of books like classic, fantasy,horror,romance ,comedy ,etc. We will also be using automation where user can take advantage of selecting their product.

So, here we are going to introduce some of our concepts such as software development process, what our objective are, what are the problems we faced during the project and its scope and limitation.
			</p>		
		</div>

		<div class="facility">
			<h1>Genres</h1>
			<div class="faCont">
				<div class="imgg">
				<img src="img/horror.png" width="48px" height="48px">
				</div>
				<div>
				<font style="font-size: 16pt; color: #2AA2D4;">Horror</font><br>
				we provide you with awesome responsive web designs quickly	and in no time.
				</div> 
			</div>
			<div class="faCont">
				<div class="imgg">
				<img src="img/fiction.png" width="48px" height="48px">
				</div>
				<div>
				<font style="font-size: 16pt; color: #2AA2D4;">Fiction</font><br>
				we provide you with awesome responsive web designs quickly	and in no time.
				</div> 
			</div>
			<div class="faCont">
				<div class="imgg">
				<img src="img/romance.png" width="48px" height="48px">
				</div>
				<div>
				<font style="font-size: 16pt; color: #2AA2D4;">Romance </font><br>
				we provide you with awesome responsive web designs quickly	and in no time.
				</div> 
			</div>
			<div class="faCont">
				<div class="imgg">
				<img src="img/com.png" width="48px" height="48px">
				</div>
				<div>
				<font style="font-size: 16pt; color: #2AA2D4;">Classic</font><br>
				we provide you with awesome responsive web designs quickly	and in no time.
				</div> 
			</div>
		</div>





		


</div>		
<div class="footer">
		<div class="scroll" align="center">
			<a href="#top"><img src="img/Arrow.png" width="110px" height="40px"></a><br>
			<font style="font-size: 12pt;position: absolute; bottom: 7.5px; right: 49%;">Top</font>
		</div>
		<div class="ftdvs">
			<div class="fd">
				Company Details<br><br>
				<div class="dtls">
					This is not a official company but a bunch of people who shares a special bond working together.<br><br>
					PrimeUnited<br>
					Nayabazar<br>
					Kathmandu<br><br>
					Tel: 014412412<br>
					Fax: 69940030<br>
					email:primium@utd.com
				</div>
			</div>
			<div class="fd">
				Latest Brand Available<br>
				<div class="fdDv">
					<img src="img/o1.jpg" width="48px" height="48px">
					Nulla facilisi. Ut fringilla.Suspendisse potenti.<br>
					friday,6th april 2000
				</div>
				<div class="fdDv">
					<img src="img/o1.jpg" width="48px" height="48px">
					Nulla facilisi. Ut fringilla.Suspendisse potenti.<br>
					friday,6th april 2000
				</div>
				<div class="fdDv">
					<img src="img/o1.jpg" width="48px" height="48px">
					Nulla facilisi. Ut fringilla.Suspendisse potenti.<br>
					friday,6th april 2000
				</div>
			</div>
			<div class="fd">
				Quick <br><br>
				<ul type="circle">
					<li><a href="#">ICT MEETUP 8</a></li>
					<li><a href="#">ICT MEETUP 7</a></li>
					<li><a href="#">AI convension</a></li>
					<li><a href="#">Sports week</a></li>
					<li><a href="#">Winter School</a></li>
					<li><a href="#">Cyber Security</a></li>
				</ul>
			</div>
			<div class="fd">
				Contact us<br><br>
				<form>
						<input type="text" name="name" placeholder="Name"><br>
						<input type="email" name="eml" placeholder="Email"><br>
						<textarea rows="6" cols="36" placeholder="Messege" ></textarea> <br>
						<button type="submit" name="submit">SUBMIT</button>
				</form>
			</div>
			<div class="fd" id="smlDis">
				<font style="cursor: pointer;" id="s1">Company Details</font><br>
				<font style="cursor: pointer;" id="s2">Latest Blog Post</font><br>
				<font style="cursor: pointer;" id="s3">Ouick</font><br>
				<font style="cursor: pointer;" id="s4">contact us</font><br>
			</div>
			<div class="fd" id="smlDis2">
				<div>
					<div id="d1">
							Company Details<br><br>
										<div class="dtls">
											This is not a official company but a some one who likes working in web developing.<br><br>
											Prime<br>
											Nayabazar<br>
											Kathmandu<br><br>
											Tel: 014412412<br>
											Fax: 69940030<br>
											email:prime@gmail.com
										</div>
						</div>

						<div id="d2">
							Latest Blog Post<br>
										<div class="fdDv">
											<img src="img/o1.jpg" width="48px" height="48px">
											Nulla facilisi. Ut fringilla.Suspendisse potenti.<br>
											friday,6th april 2000
										</div>
										<div class="fdDv">
											<img src="img/o1.jpg" width="48px" height="48px">
											Nulla facilisi. Ut fringilla.Suspendisse potenti.<br>
											friday,6th april 2000
										</div>
										<div class="fdDv">
											<img src="img/o1.jpg" width="48px" height="48px">
											Nulla facilisi. Ut fringilla.Suspendisse potenti.<br>
											friday,6th april 2000
										</div>
						</div>

						<div id="d3">
							Quick <br><br>
										<ul type="circle">
											<li><a href="#">ICT MEETUP 8</a></li>
											<li><a href="#">ICT MEETUP 7</a></li>
											<li><a href="#">AI convension</a></li>
											<li><a href="#">Sports week</a></li>
											<li><a href="#">Winter School</a></li>
											<li><a href="#">Cyber Security</a></li>
										</ul>
						</div>

						<div id="d4">
							Contact us<br><br>
										<form action ="inc/contact.inc.php" method="POST">
												<input type="text" name="name" placeholder="Name"><br>
												<input type="email" name="email" placeholder="Email"><br>
												<textarea rows="6" cols="36" placeholder="Messege" name="cmnt"></textarea> <br>
												<button type="submit" name="submit">SUBMIT</button>
										</form>
						</div>	
				</div>
			</div>
		</div>
		<div class="ft">
			<div class="cpy">
					Copyright &copy;
			</div>
			<div class="by">
				Bookbazar
			</div>
		</div>
</div>



<script type="text/javascript" src="script.js"></script>
<script type="text/javascript">
	var i = 1;
	var ss = [dt1, dt2, dt3, dt4, dt5];
	ss[0].style.backgroundColor="white";
	function Schng(a) {
		for(var j = 0;j<5;j++){
			ss[j].style.backgroundColor = "";
		}
		ss[a-1].style.backgroundColor = "white";
	}
	setInterval(function(){
		if(i<=5){
			slideShow.style.backgroundImage = "url('slide/"+i+".jpg')";
			Schng(i);
		} else {
			i = 1;
			slideShow.style.backgroundImage = "url('slide/"+i+".jpg')";
			Schng(i);
		}
		i= i +1;
	},4000);

ss[0].addEventListener("click",function(){
	slideShow.style.backgroundImage = "url('slide/1.jpg')";
	for(m=0;m<5;m++){
		ss[m].style.backgroundColor = "";
	}
	ss[0].style.backgroundColor = "white";
	  
	i=1;
});

ss[1].addEventListener("click",function(){
	slideShow.style.backgroundImage = "url('slide/2.jpg')";
	for(m=0;m<5;m++){
		ss[m].style.backgroundColor = "";
	}
	ss[1].style.backgroundColor = "white";
	 
	i=2;
});

ss[2].addEventListener("click",function(){
	slideShow.style.backgroundImage = "url('slide/3.jpg')";
	for(m=0;m<5;m++){
		ss[m].style.backgroundColor = "";
	}
	ss[2].style.backgroundColor = "white";
	 
	i=3;
});

ss[3].addEventListener("click",function(){
	slideShow.style.backgroundImage = "url('slide/4.jpg')";
	for(m=0;m<5;m++){
		ss[m].style.backgroundColor = "";
	}
	ss[3].style.backgroundColor = "white";
	 
	i=4;
});

ss[4].addEventListener("click",function(){
	slideShow.style.backgroundImage = "url('slide/5.jpg')";
	for(m=0;m<5;m++){
		ss[m].style.backgroundColor = "";
	}

	ss[4].style.backgroundColor = "white"; 
	i=5;
});

rar.addEventListener("click",function(){
	if(i < 5) {
		i = i + 1;
		slideShow.style.backgroundImage = "url('slide/"+i+".jpg')";
		Schng(i);
	} else {
		i=1;
		slideShow.style.backgroundImage = "url('slide/"+i+".jpg')";
		Schng(i);
	}
});

lar.addEventListener("click",function(){
	if(i > 1) {
		i = i - 1;
		slideShow.style.backgroundImage = "url('slide/"+i+".jpg')";
		Schng(i);
	} else {
		i=5;
		slideShow.style.backgroundImage = "url('slide/"+i+".jpg')";
		Schng(i);
	}
});



</script>
</body>
</html>