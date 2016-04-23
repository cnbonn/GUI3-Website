

function loadXMLDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      myFunction(xmlhttp);
    }
  };
  xmlhttp.open("GET", "organization-list.XML", true);
  xmlhttp.send();
}

function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Artist</th><th>Title</th></tr>";
  var x = xmlDoc.getElementsByTagName("organization");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("icon")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
} 

/*function display-divs(){
	var orgs = ["org1", "org2", "org3"];
	for(var i in orgs)
	{
		var newElement = document.createElement('div');
		newElement.id = orgs[i]; newElement.className = "dropdown";
		newElement.innerHTML = orgs[i];
		document.body.appendChild(newElement);
	}
}

/*function get-orgs-list() {
    document.getElementById("demo").innerHTML = "Paragraph changed.";
	var orgs = new XMLHttpRequest();
	orgs.onreadystatechange = function() {
		if (orgs.readyState == 4 && orgs.status == 200) {
		  print-orgs-list(orgs);
		}
	};
	orgs.open("GET", "organization-list.xml", true);
	orgs.send();
}


function print-orgs-list(xml) {
	var i;
	var xmlDoc = xml.responseXML;
	var x = xmlDoc.getElementsByTagName("organization");
	document.write(x);
	document.getElementById("demo").innerHTML = table;
}*/
