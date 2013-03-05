function showDiv(d) {
	var node = document.getElementById("page_content");
	for(x in node.childNodes){
		node.childNodes[x].className = "off_content";
	}
	document.getElementById(d).className = "on_content";
}
function selectSidebar(d){
	var sidebar = document.getElementById("sidebar_ul");
	for(x in sidebar.childNodes){
		sidebar.childNodes[x].className = "off_sidebar";
	}
	d.parentNode.className="on_sidebar";
}
function setMainMenu(){
	var page = location.href.split('/');
	page = page[page.length-1];
	page = page.split('.')[0];
	if(page == "")
		page = "index";
	var source = document[page].src.split('.');
	source = source[source.length-2];
	source = source.split('/');
	source = source[source.length-1].split('_')[0]+'_hover.png';
	document[page].parentNode.onmouseout = "document."+page+".src="+source;
	document[page].src = "images/"+source;
}