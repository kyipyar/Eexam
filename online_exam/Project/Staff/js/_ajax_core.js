/* Function to perform basic Ajax call to update HTML element.
 * element: "id" attribute value of any HTML element 
 *          that you want to dynamically rewrite by Ajax
 * uri: URI to the server-side technology page (PHP, JSP, etc.)
 *      that returns a fragment of HTML code to rewrite.
 */
function doAjax(element, uri) {
	var ajax;
	if(window.XMLHttpRequest) {
		ajax = new XMLHttpRequest();
	} else if(window.ActiveXObject) {
		try {
			ajax = new ActiveXObject("Msxml2.XMLHTTP");
		} catch(e) {
			ajax = new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	ajax.open("POST", uri);
	ajax.onreadystatechange = function() {
		if (ajax.readyState == 4 && ajax.status == 200) {
			var obj = eval(document).getElementById(element);
			obj.innerHTML = ajax.responseText;
			//eval(document);
		}
	};
	ajax.send("");
}
function suggest() {
	var chars = document.getElementById("search").value;
	if (chars=="") document.getElementById("suggest").innerHTML = "";
	else doAjax("suggest", "PunishNrcSearch.php?search=" + chars);
}
function choose() {
	document.getElementById("search").value	= document.getElementById("suggest").value;
}