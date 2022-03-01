<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<style type="text/css">
	

.login {
  margin: 40px auto;
  width: 307px;
  padding: 26px 20px;
  background: black;
 
  border-radius: 10px;

}

h1.titles {
  margin:  10px;
  padding: 15px 25px;
 
  font-size: 25px;
  font-weight: 300;
  color: white;
  text-align:center;
 
 
}

.in {
  width: 280px;
  height: 50px;
  margin-bottom: 24px;
  padding-left: 18px;
  font-size: 15px;
  
  border: 1px solid #999;

  border-radius: 4px;
}
.in:focus {
    border-color:blue;
    
  }
.out {
  width: 100%;
  height: 50px;
  
  font-size: 20px;
  color: white;
  text-align: center;
  background: linear-gradient(90deg,#A31531,#C2F016,#CA98EE,#A31531);
  background-size: 400%;
  border-radius: 10px;

  cursor: pointer; 
 
}

.login:hover{
    box-shadow: 0px 10px 60px rgba(0,0,0,0.7);
    transition:box-shadow .4s; 
}

.out:hover{
	animation: animate 8s linear infinite;
}
@keyframes animate{
	0%{
		background-position: 0%;
	}
	100%{
		background-position: 400%;
	}
}
input{
  background-color: black;
}
.for
{
  text-align:center;
  margin-bottom:0px;
}

.for a
{
  color:white;
  text-decoration:none;
  font-size:15px;
}

.headCover {
    background:url("img/books.jpg");
    background-size: 100%;
    background-position:  0em;
    height: 170px;

 }
		  
		

	</style>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<?php 
  include 'head.php';
 ?>



  <div style="position: absolute; left:10px; top: 375px;" class="sdimg">
  <img src="img/books.jpg" height="400px" width="300px">
</div>
<div style="position: absolute; right: 10px;  top: 375px;" class="sdimg">
  <img src="img/books.jpg"  height="400px" width="300px">
</div>

		<form class="login" action="inc/login.inc.php" method='POST'>
    <h1 class="titles">User Login</h1>
    <input type="text" class="in" placeholder="username" name="unm" autofocus>
    <input type="password" class="in" placeholder="Password" name="pwd">
    <input type="submit" value="Log In" class="out" name="submit">
  <p class="for"><a href="">Forgot Password?</a>/
  	<a href="Signup.php">Create a Account.</a></p>
  </form>


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
                      This is not a official company but a bunch of people who shares a special bond working together.<br><br>
                      PrimeUnited<br>
                      Nayabazar<br>
                      Kathmandu<br><br>
                      Tel: 014412412<br>
                      Fax: 69940030<br>
                      email:primium@utd.com
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
                    <form>
                        <input type="text" name="name" placeholder="Name"><br>
                        <input type="email" name="eml" placeholder="Email"><br>
                        <textarea rows="6" cols="36" placeholder="Messege" ></textarea> <br>
                        <button type="submit" name="submit">SUBMIT</button>
                    </form>
            </div>  
        </div>
      </div>
    </div>
    <div class="ft">
      <div class="cpy">
          Copyright &copy; 2019 Domain Name - All rights Reserved
      </div>
      <div class="by">
        Template by PrimeUnited
      </div>
    </div>
</div>



<script type="text/javascript" src="script.js"></script>


	</body>
</html>