		function hidedesc() {
    		node = document.getElementById('p1');
    		node.style.display = 'none';
    		return false;
		}

		function showdesc() {
    		node = document.getElementById('p1');
    		node.style.display = 'block';
    		return false;
		}

		function toggledesc() {
    		node = document.getElementById('p1');
   			var currentdisplay = node.style.display;
    		if(currentdisplay == 'none')
    			showdesc();
    		else
      			hidedesc();
		}

		function centerText(val) {
			node = document.getElementById('p1');
			node.style.textAlign = val;
			return false;
		}