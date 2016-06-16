function changeURL()
{
	var txt=document.querySelector("#url");
	var image=document.querySelector('#image');
	image.setAttribute('src',txt.value);
}
