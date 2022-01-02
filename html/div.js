function loadMenu(){
	var xhttp = new XMLHttpRequest();
	alert("Hämtar meny när du klickar på OK");
	xhttp.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200){
			document.getElementById("div1").innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "meny.html", true);
	xhttp.send();
}

function loadImage(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200){
			document.getElementById("div2").innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "bild.html", true);
	xhttp.send();
}

function setTimer(){
	window.setInterval(getLottoAndTime, 60000);
	getLottoAndTime();
}
function getLottoAndTime(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200){
			var obj = JSON.parse(this.responseText);
			document.getElementById("Lotto").innerHTML=obj.Lotto;
			document.getElementById("tid").innerHTML=obj.ServerTime;
		}
	};
	xhttp.open("GET", "lotto.php", true);
	xhttp.send();
}

//Funktionen hämtar de namn som matchar inmatade tecken och visar dem i div
function loadNames(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200){
			document.getElementById("divNames").innerHTML = this.responseText;
		}	
	};

	data="namn=" + document.getElementById("nameSearch").value;
	xhttp.open("POST", "names.php", true);
	xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhttp.send(data);
}