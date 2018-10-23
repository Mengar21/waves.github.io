//<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>

var js = document.createElement("script");
js.type = "text/javascript";
js.src = "https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js";
//document.appendChild(js); or document.body.appendChild(js);

function getPoints(){
	//spreadsheet
	return Cookies.get('points');
}

function getName(){
	//get name
	return Cookies.get('name');
}

function addPoints(name, points){
	//add points onto old points on spreadsheet
	points += Cookies.get('points');
	Cookies.set('points', points.toString(), { expires: 1 });	
}

function establish(name){
	//if name exists on spreadsheet
	document.getElementsByClassName("dropbtn").innerHTML = name;
	Cookies.set('name', name, { expires: 1 });
	Cookies.set('points', '0', { expires: 1 });	
}

function kill(){
	//cookies.remove if need be
}

function display(){
	var header = "Hello " + getName() + "\t\t  Points: " + getPoints();
	document.body.GetElementById("display").innerHTML = header;
}