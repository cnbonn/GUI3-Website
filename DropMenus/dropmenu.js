/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
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