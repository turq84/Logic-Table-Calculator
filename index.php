<!-- ######### Created by Kayla Gordon on May 5th, 2017 ############ -->

<!DOCTYPE html>
<html>
	<head>
		<title>Challenge 1</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
		<script type="text/javascript">
			function enable(){
				document.getElementById("b").disabled = false;
			}
			
			function calculate(){
				var c = document.getElementById("gate").value;
				
				var a = document.getElementById("a").value;
				var b = document.getElementById("b").value;
				
				if(c == "and"){
					if(a == "0" && b == "0"){
						document.getElementById("ans").innerHTML = 0;
					} else if(a == "0" && b == "1"){
						document.getElementById("ans").innerHTML = 0;
					} else if(a == "1" && b == "0"){
						document.getElementById("ans").innerHTML = 0;
					} else if(a == "1" && b == "1"){
						document.getElementById("ans").innerHTML = 1;
					}	
				}
				
				else if(c == "or"){	
					if(a == "1" || b == "1"){
						document.getElementById("ans").innerHTML = 1;
					} else{
						document.getElementById("ans").innerHTML = 0;
					}
				}
				
				else if(c == "not"){								
					document.getElementById("b").disabled = true;
					
					if(a !== "0"){
						document.getElementById("ans").innerHTML = 0;
					} else if(a !== "1"){
						document.getElementById("ans").innerHTML = 1;
					} 	
				}
				
				else if(c == "xor"){
					if(a == "0" && b == "0"){
						document.getElementById("ans").innerHTML = 0;
					} else if(a == "1" && b == "1"){
						document.getElementById("ans").innerHTML = 0;
					} else{
						document.getElementById("ans").innerHTML = 1;
					}					
				}
				
				else{
					document.getElementById("ans").innerHTML = "Please choose a logic table...";
				}
			}		
		</script>
	</head>
	<body>
		<div class="container">
			<h1>Challenge One</h1>
			<h4>The Logic Table Challenge</h4>
			<br />
			<p>This solution was developed using JavaScript.</p>
			<br />		
			<fieldset>
				<legend>The Logic Table Calculator</legend>	
				<p>Please make your selections below. The results will be dependent on your selction for Choice C.</p>
				<p><b>Note:</b> Your selection for choice <b>B</b> will be not used if you choose the <b>NOT</b> logic table.</p>
				<form id="and_form">
					<div class="form-group">
						<label for="sel1">Choice A:</label>
						<select class="form-control" id="a" onfocus="emptyElement('ans')">
							<option>0</option>
							<option>1</option>
						</select>
						
						<label for="sel1">Choice B:</label>
						<select class="form-control" id="b" onfocus="emptyElement('ans')">
							<option value="0">0</option>
							<option value="1">1</option>
						</select>
						<label for="sel1">Choice C:</label>
						<select class="form-control" id="gate" onfocus="emptyElement('ans')" onclick="enable()">
							<option value="">Select Logic Table...</option>
							<option value="and">AND</option>
							<option value="or">OR</option>
							<option value="not">NOT</option>
							<option value="xor">XOR</option>
						</select>						
						<br />
						<button id="and_btn" type="button" class="btn btn-info" onclick="calculate()">Submit</button>
						<br />
						<p>Your Answer is: <b><span id="ans"></span></b></p>
					</div>
				</form>
			<br />
		</div>		
	</body>
</html>