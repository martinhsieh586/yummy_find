<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery UI 選項</title>
	<link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.9.1.js"></script>
	<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/chroma-js/2.1.0/chroma.min.js" integrity="sha512-yocoLferfPbcwpCMr8v/B0AB4SWpJlouBwgE0D3ZHaiP1nuu5djZclFEIj9znuqghaZ3tdCMRrreLoM8km+jIQ==" crossorigin="anonymous"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js'></script>
	
	<style>
		#myProgress {
			position: relative;
			width: 100%;
			height: 30px;
			background-color: #ddd;
		}
		#progressbar {
			position: absolute;
			width: 0%;
			height: 100%;
			background-color: #ff0000;
		}
		#progressbar2 {
			position: absolute;
			width: 0%;
			height: 100%;
			background-color: #ffff00;
		}	  
		#progressbar3  {
			position: absolute;
			width: 0%;
			height: 100%;
			background-color: #008000;
		}	  
	  
		

 

.progress-bar-info {

  background-color: #5bc0de;

}

 

.progress-bar-warning {

  background-color: #f0ad4e;

}

 

.progress-bar-danger {

  background-color: #d9534f;

}
		
		
	</style>
	
</head>	
<body>
	
	<script>
	
		function move() {
			
			var elem3 = document.getElementById("progressbar3");
			var elem2 = document.getElementById("progressbar2");
			var elem = document.getElementById("progressbar");	
			var val = 100;
			
			elem2.style.width = 0 + '%'; 
			elem3.style.width = 0 + '%'; 
			if ( val>=0 && val<60) {
				elem.style.width = val + '%'; 
			}
			else if ( val>=60 && val<90) {
				//程序圖參數設定	
				elem.style.width = val + '%'; 
				elem2.style.width = (val-60) + '%'; 	
			}
			else if ( val>=90 && val<=100) {
				//程序圖參數設定		
				elem.style.width = val + '%'; 		
				elem2.style.width = (val-60) + '%';				
				elem3.style.width = (val-90) + '%'; 				
			}
			
		}
		
		
	</script>
	
	
	
	
	<button type="button"  class="btn btn-primary">
		猜數字 <span class="badge badge-light"><a href="https://tw.yahoo.com/"><?php echo rand(0,100) ?></a></span>
	</button>
	<button type="button" class="btn btn-primary">
		猜數字 <span class="badge badge-light"></span>
	</button>
	<button type="button" class="btn btn-primary">
		猜數字 <span class="badge badge-light"></span>
	</button>
	<button type="button" class="btn btn-primary">
		猜數字 <span class="badge badge-light"></span>
	</button>
	<button type="button" class="btn btn-primary">
		猜數字 <span class="badge badge-light"></span>
	</button>
	
	<button onclick="move()">Click Me</button> 

	<div id="myProgress">
		<div id="progressbar"></div>
		<div id="progressbar2"></div>
		<div id="progressbar3"></div>
	</div>
	
	<div class="progress">

		<div class="progress-bar progress-bar-info" style="width:60%"></div>

		<div class="progress-bar progress-bar-warning" style="width:30%"></div>

		<div class="progress-bar progress-bar-danger" style="width:10%"></div>

	</div>
	
</body>	
</html>