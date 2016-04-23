

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
  var x = xmlDoc.getElementsByTagName("organization");
  for (i = 0; i <x.length; i++) { 
    addButton(x[i]);
  }
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

function addButton(org) {
	var i;
	var element;
	var doc = document.getElementById("orglist");

	element = document.createElement("button");
	element.type = "radio";
	element.innerHTML = org.getElementsByTagName("name")[0].childNodes[0].nodeValue;
	element.onclick = function() {
		alert("you clicked the " + element.innerHTML + " button");
	};
	doc.appendChild(element);

}
