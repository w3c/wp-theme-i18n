



function expandall (ename, cname) {
	// Expands all instances of nodes where the toggle node has element 
	// name ename and, optionally, class name cname
		var nodes = document.getElementsByTagName(ename); 

		// for each node, remove following content
		var i = 0; var node;
		while (i < nodes.length) {
		 	node = nodes.item(i); 
			if (cname) {
				if (node.className == cname) {
					displayFollowingSiblingsOnScreen(node); 
					}
				}
			else {
				displayFollowingSiblingsOnScreen(node);
				}
   			i ++;
			}      
		}



function expandallin (section, ename, cname) {
	// Expands all instances of nodes where the toggle node has element 
	// name ename and, optionally, class name cname
		var nodes = section.getElementsByTagName(ename); 
		// for each node, remove following content
		var i = 0; var node;
		while (i < nodes.length) {
		 	node = nodes.item(i); 
			if (cname) {
				if (node.className == cname) {
					displayFollowingSiblingsOnScreen(node); 
					}
				}
			else {
				displayFollowingSiblingsOnScreen(node);
				}
   			i ++;
			}      
		}




function collapseall (ename, cname) {
	// Collapses all instances of nodes where the toggle node has element 
	// name ename and, optionally, class name cname
		var nodes = document.getElementsByTagName(ename); 

		// for each node, remove following content
		var i = 0; var node;
		while (i < nodes.length) {
		 	node = nodes.item(i); 
			if (cname) {
				if (node.className == cname) {
					removeFollowingSiblingsFromScreen(node); 
					}
				}
			else {
				removeFollowingSiblingsFromScreen(node);
				}
   			i ++;
			}      
		}



function collapseallin (section, ename, cname) {
	// Collapses all instances of nodes where the toggle node has element 
	// name ename and, optionally, class name cname
		var nodes = section.getElementsByTagName(ename); 

		// for each node, remove following content
		var i = 0; var node;
		while (i < nodes.length) {
		 	node = nodes.item(i); 
			if (cname) {
				if (node.className == cname) {
					removeFollowingSiblingsFromScreen(node); 
					}
				}
			else {
				removeFollowingSiblingsFromScreen(node);
				}
   			i ++;
			}      
		}



function displayFollowingSiblingsOnScreen(e) {
	// Redisplay the elements following the target node on the screen
	// and set the event handlers appropriately
	// and change the graphic
	var node = e.nextSibling;
	while (node != null) {
	   	if (node.nodeType == 1) {
			node.style.display = "block";
	   		}
	  	node = node.nextSibling;
		}
	 
	// add the activation of removeFollowingSiblingsFromScreen
	e.onmousedown = function() { removeFollowingSiblingsFromScreen(this); };

	// change the graphic
	imgs = e.getElementsByTagName("IMG");
	imgs[0].setAttribute('src', closeIMG); 
	}


function removeFollowingSiblingsFromScreen(e) { 
	// Remove the elements following the target node from the screen
	// and set the event handlers appropriately
	// and change the graphic
	var node = e.nextSibling; 
	while (node != null) { 
	   	if (node.nodeType == 1) { 
			node.style.display = "none"; 
	   		}
	   	node = node.nextSibling;
		}

	// add the activation of addChildrenOnScreen
	e.onmousedown = function() {displayFollowingSiblingsOnScreen(this);};
	
	// change the graphic
	imgs = e.getElementsByTagName("IMG");
	imgs[0].setAttribute('src', openIMG);
	}

function addgraphic ( node ) {
	// adds graphic to show expandability during intial setup
	var img = document.createElement( 'IMG' );
	var text = document.createTextNode( ' ' );
	img.setAttribute('src', openIMG);
	node.insertBefore(text, node.firstChild);
	node.insertBefore(img, node.firstChild);
	}

function initialhide (ename, cname) {
		// hides all content between elements specified by ename, with class of cname
		// also adds + graphic before the text of the element ename
		// ename: name of the elements to look for, eg 'H3'
		// cname: name of the class to look for, can be '' if ename specified
		
		var nodes = document.getElementsByTagName(ename); 

		// for each node, remove following content
		var i = 0; var node;
		while (i < nodes.length) {
		 	node = nodes.item(i); 
			if (cname) {
				if (node.className == cname) {
					addgraphic(node);
					removeFollowingSiblingsFromScreen(node); 
		   			node.style.cursor = node.style.cursor + "pointer";
					}
				}
			else {
				addgraphic(node);
				removeFollowingSiblingsFromScreen(node);
	   			node.style.cursor = node.style.cursor + "pointer";
				}
   			i ++;
			}      
		}
		
function initialhide2 (ename, cname) {
		// hides all content between elements specified by ename, with class of cname
		// also adds + graphic before the text of the element ename
		// ename: name of the elements to look for, eg 'H3'
		// cname: name of the class to look for, can be '' if ename specified
		
		var nodes = document.getElementsByTagName(ename); 

		// for each node, remove following content
		var i = 0; var node;
		while (i < nodes.length) {
		 	node = nodes.item(i); 
			if (cname) {
				if (node.className == cname) {
					addgraphic(node);
					//removeFollowingSiblingsFromScreen(node); 
		   			node.style.cursor = node.style.cursor + "pointer";
					}
				}
			else {
				addgraphic(node);
				//removeFollowingSiblingsFromScreen(node);
	   			node.style.cursor = node.style.cursor + "pointer";
				}
   			i ++;
			}      
		}
		
function revealall (ename, cname, display) {
	// Used to reveal markup that is hidden until it is ascertained that 
	// JavaScript is supported.
		var nodes = document.getElementsByTagName(ename);

		// for each node, remove following content
		var i = 0; var node;
		while (i < nodes.length) {
		 	node = nodes.item(i); 
			if (node.className == cname) {
	   			node.style.display = display;
				}
   			i ++;
			}      
		}


// HTML SETUP

// In the HTML the block that toggles the display and the content to be hidden
// should be inside a single div.  All the siblings after the toggle block will
// be displayed/hidden.
// To initialise the page by hiding information, use the following function calls
// from the HTML document, specifying the appropriate element and, optionally,
// attribute names of the blocks that will toggle following content on or off.
//	if (document.getElementById) { 
//		initialhide('H5', 'howto');
//		initialhide('H5', 'refs');
//		initialhide('H2', '');
//		initialhide('DIV', 'toc1');
// A small + graphic will be added to the beginning of the toggle block.
// You may also want to add buttons or explanations to the HTML, but apply 
// style="display:none" to render them invisible.  As part of the initialisation
// process reveal those, eg.
//		document.getElementById('expandall').style.display = 'block';
//		}
// You also need to assign the location of the graphic as follows:
// openIMG = '/International/icons/open.gif';
// closeIMG = '/International/icons/close.gif';


	
	
	
	
	
	
	

	
		
