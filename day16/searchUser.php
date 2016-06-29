<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fetch manually</title>
</head>
<body>
	<form>
		<div>
			username
			<input type="text" name="username">
		</div>
		
		<div>
			<input onclick="getRequest()" type="button" value="fetch">
		</div>
	</form>
	<div id="result"></div>
	<script type="text/javascript" src="../includes/jquery.js"></script>
	<script type="text/javascript">

		function getRequest()
		{
			var xhr=new XMLHttpRequest();
			var name=document.querySelector('input[name=username').value;
			
			var url='usernameProcess.php?name='+name
			console.log(url);
			xhr.open('GET',url,true);
			xhr.send();
			xhr.onreadystatechange=function(){
				if(xhr.readyState==4 && xhr.status==200){
					var resp=(xhr.responseText);
					document.querySelector("#result").innerHTML=resp;
				}else{
					document.querySelector("#result").innerHTML='loading.....';
				}
			}
		}

	</script>







</body>
</html>