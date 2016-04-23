

function loadXMLDoc() {
   document.write("poo" + "<br>");

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
  var x = xmlDoc.getElementsByTagName("organization");

  document.write("in myfunction right before add button");
	addButton(x);
  document.write("in myfunction right after add button");
/*
  var table="<div class=\"dropdown\">";
  for (i = 0; i <x.length; i++) { 
    table += "<button type=\"radio\" onclick=\"showContent\" class=\"dropbtn\">" + x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue + "</button>" +
	     "<div id=\"" + x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue  + "\" class=\"dropdown-content\"" +
	     "Advisor: " + x[i].getElementsByTagName("advisor")[0].childNodes[0].nodeValue + "<br>" +
	     "President: " + x[i].getElementsByTagName("president")[0].childNodes[0].nodeValue + "<br>" +
	     "Officers: " + x[i].getElementsByTagName("officers")[0].childNodes[0].nodeValue + "<br>" +
	     "Members: " + x[i].getElementsByTagName("members")[0].childNodes[0].nodeValue + "<br>" +
	     "Description: " + x[i].getElementsByTagName("description")[0].childNodes[0].nodeValue + "<br>";
  }
  table += "</div>";
  document.getElementById("demo").innerHTML = table; */
}

function addButton(org) {
	var i;
	var element;
	var doc = document.getElementById("orglist");
	document.write("in add button function");
	for (i = 0; i < x.length; i++)
	{
		element = document.createElement("button");
		element.type = "radio";
		element.name = org[i].getElementsByTagName("name")[0].childNodes[0].nodeValue;
		element.onclick = function() {'
			alert("you clicked the " + element.name + " button");
		};
		doc.appendChild(element);
	}
    
}
