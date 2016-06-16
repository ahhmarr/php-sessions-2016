function generate()
{
	// getting the reference of the form controls
	var x=document.querySelector("#x");
	var y=document.querySelector("#y");
	var blur=document.querySelector("#blur");
	var color=document.querySelector("#color");

	// storing the values of the form control
	var xValue=x.value;
	var yValue=y.value;
	var blurValue=blur.value;
	var colorValue=color.value;
	console.log('text printed from the js');
	var rule='';
	rule=rule+xValue+'px ';
	debugger;
	rule=rule+yValue+'px ';
	rule=rule+blurValue+'px ';
	rule=rule+colorValue;

	var r=document.querySelector("#rule");
	r.innerHTML='box-shadow:'+rule;

	var div=document.querySelector("#dummy-div");

	div.style.boxShadow=rule;







}