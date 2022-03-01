<!DOCTYPE html>
<html>
<head>
	<title>hello</title>
	<style type="text/css">
	

.login {
  margin: 40px auto;
  width: 307px;
  padding: 26px 20px;
  background:black;
 
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
}input {
  background-color: black;
}
.login:hover{
    box-shadow: 0px 10px 60px rgba(0,0,0,0.7);
    transition:box-shadow .4s; 
}


.headCover {
    background:url("img/books.jpg");
    background-size: 100%;
    background-position:  0em;
    height: 170px;
 }


#fback{
  display: none;
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100;
  background-color: rgba(0,0,0,0.3);
} #fall {
  box-shadow: 10px 10px 15px rgba(0,0,0,0.5);
  background-color: white;
  position: fixed;
  top: 20%;
  left: 30%;
  width: 575px;
  height: 275px;
  z-index: 150;
  animation: fdwn .6s;
  border-radius: 0 0 5px 5px;
} @keyframes fdwn{
  from{
    top: -50%;
  } to {
    top: 20%;
  }
}.fhdr {
  color: white;
  position: relative;
  width: 100%;
  height: 35px;
  background-color: rgb(175,185,150);
} #crs {
  display: block;
  background-color: rgb(200,220,150);
  color: white;
  float: right;
  height: 100%;
  width: 30px;
  font-size: 20pt;
  cursor: pointer;
  text-align: center;
}.flcnt{
  text-align: justify;
  position: relative;
  top: 10px;
  width: 95%;
  padding-left: 10px;
  padding-right: 10px;
  overflow: scroll;
  height: 175px;
  overflow-x: hidden;
}#OK {
  position: absolute;
  bottom: 10px;
  right: 15px;  
  background-color: rgb(175,185,150);
  color: white;
  border-style: none;
  border-radius: 10px;
  width: 50px;
  height: 30px;
  cursor: pointer;
  outline: none;
}.flcnt::-webkit-scrollbar{
   width: 10px;
} .flcnt::-webkit-scrollbar-thumb {
  background:  rgba(0,0,0,0);
  border-radius: 15px;
} .flcnt::-webkit-scrollbar-track{
  background: white;
  border-radius: 15px;
} .flcnt:hover::-webkit-scrollbar-thumb {
  background-color: rgba(0,0,0,0.4);
} select {
  width: 100px;
  padding: 5px;
  color: white;
  background-color: black;
  border-radius: 5px;
  margin-bottom: 10px;
} select:focus {
  border-color: blue;
}
		

	</style>

  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body id="bdd">
<?php 
  include 'head.php';
 ?>

<div style="position: absolute; left:10px; top: 375px;" class="sdimg">
  <img src="img/books.jpg" height="500px" width="350px">
</div>
<div style="position: absolute; right: 10px;  top: 375px;" class="sdimg">
  <img src="img/books.jpg"  height="500px" width="350px">
</div>

<div id="fback">
  <div id="fall">
    <div class="fhdr">
      <div style="position: absolute;top: 10px;left: 10px;">
        Terms and Policy!
      </div>
      <div id="crs">
        &times;
      </div>
    </div>
   <div class="flcnt">
        <font style="padding-left: 50px;">By</font> loggin in to our site you can connect with the people with same interest as you on regards to different types of books. By sharing and receiving some knowledge you can grow your knowledge about different genres .You can also purchase Bookmarks.This site is licensed by all the book companies.loggin in to our site you can connect with the people with same interest as you on regards to different types of books.<br><br><font style="padding-left: 50px;">You</font> loggin in to our site you can connect with the people with same interest as you on regards to different types of books.By sharing and receiving some knowledge you can grow your knowledge about different genres .You can also purchase Bookmarks.This site is licensed by all the book companies<br>
        <font style="color: red; text-decoration: underline;">Do you agree with our terms and condition? <input type="checkbox" name="agree"></font>
    </div>
    <button id="OK">ok</button>
  </div>
</div>


		<form class="login" action = 'inc/signup.inc.php' method = 'POST'>
    <h1 class="titles">Create Your Account</h1>
    <input type="text" class="in" placeholder="username" autofocus autocomplete="none" name='unm'>
     <input type="text" class="in" placeholder="phone number" autofocus autocomplete="none" name='phn'>
    <input type="email" class="in" placeholder="Email" autocomplete="none" name='eml'>
    <input type="password" class="in" placeholder="Password" autocomplete="none" name='pwd'>
    <select name="typ">
      <option>Seller</option>
      <option>Buyer</option>
    </select> <br>
    <a href="#" id="trms" style="text-decoration: underline; color: white; margin-left: 30%;">Terms & Policy!</a>
    <input type="submit" value="Sign Up!!" class="out" style="margin-top: 15px;" name="submit">
<p class="for"><a href="Login.php">Already have account?Sign In</a></p>
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


<script type="text/javascript">
  trms.addEventListener("click",function(){
    fback.style.display = "block";
    bdd.style.overflow = "hidden"; 
  });
  OK.addEventListener("click",function(){
    fback.style.display = "none";

    bdd.style.overflow = "inherit"; 
  });
  crs.addEventListener("click",function(){
    fback.style.display = "none";

    bdd.style.overflow = "inherit"; 
  });
</script>
<script type="text/javascript" src="script.js"></script>



	</body>
</html>