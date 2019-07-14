//tlačítko UP při scrollování
window.onscroll = function(){scrollFunction()};

function scrollFunction(){
	if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
		document.getElementById("scroll_btn").style.display = "block";
	} else {
		document.getElementById("scroll_btn").style.display = "none";
	}
}

function scrolltop (){
	document.body.scrolltop = 0;
	document.documentElement.scrollTop = 0;
}

//funkce na otevření sidebaru
function opensidebar() {
	if(document.getElementById("sidebar").style.width == "250px"){
		document.getElementById("sidebar").style.width = "0px";
		document.getElementById("divbody").style.marginRight = "0px";
	}else{
	document.getElementById("sidebar").style.width = "250px";
	document.getElementById("divbody").style.marginRight = "250px";
	}
}
function closesidebar() {
	document.getElementById("sidebar").style.width = "0px";
	document.getElementById("divbody").style.marginRight = "0px";
}

//funkce na přepínaní mezi formulářem na registraci nebo přihlášení
function showreg(){
	document.getElementById("register").style.display = "block";
	document.getElementById("login").style.display = "none";
}
function showlog(){
	document.getElementById("register").style.display = "none";
	document.getElementById("login").style.display = "block";
}
