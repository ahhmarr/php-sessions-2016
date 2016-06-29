<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fetch manually</title>
</head>
<body>
	<form action="process.php">
		<div>
			man
			<input type="text" name="man">
		</div>
		<div>
			woman
			<input type="text" name="woman">
		</div>
		<div>
			<input onclick="getRequest()" type="button" value="fetch">
		</div>
	</form>
	<div id="certificate"></div>
	<script type="text/javascript">
		function getRequest()
		{
			var xhr=new XMLHttpRequest();
			var man=document.querySelector('input[name=man').value;
			var woman=document.querySelector('input[name=woman').value;
			var url='process.php?man='+man+'&woman='+woman;
			console.log(url);
			xhr.open('GET',url,true);
			xhr.send();
			xhr.onreadystatechange=function(){
				if(xhr.readyState==4 && xhr.status==200){
					var resp=(xhr.responseText);
					document.querySelector("#certificate").innerHTML=resp;
				}else{
					document.querySelector("#certificate").innerHTML='loading.....';
				}
			}
		}

	</script>







</body>
</html>