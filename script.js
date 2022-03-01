sideDis.addEventListener("mouseover",function(){
		sideBr.style.left = "0";
		sideBr.className = "";
		sideBr.className = "shw";
	});
	sideBr.addEventListener("mouseover",function(){
		sideBr.style.left = "0";
		sideBr.className = "";
		sideBr.className = "shw";
	});
	sideBr.addEventListener("mouseout",function(){
		sideBr.style.left = "-240px";
		sideBr.className = "";
		sideBr.className = "dsh";
	});

	s1.addEventListener("click",function(){
		d1.style.display = "block";
		d2.style.display = "none";
		d3.style.display = "none";
		d4.style.display = "none";
		smlDis.style.top = "-125px";
	});
	s2.addEventListener("click",function(){
		d1.style.display = "none";
		d2.style.display = "block";
		d3.style.display = "none";
		d4.style.display = "none";
		smlDis.style.top = "-175px";
	});
	s3.addEventListener("click",function(){
		d1.style.display = "none";
		d2.style.display = "none";
		d3.style.display = "block";
		d4.style.display = "none";
		smlDis.style.top = "-125px";
	});
	s4.addEventListener("click",function(){
		d1.style.display = "none";
		d2.style.display = "none";
		d3.style.display = "none";
		d4.style.display = "block";
		smlDis.style.top = "-125px";
	});	