var images = new Array()
images[0] = "5.png";
images[1] = "4.png";
images[2] = "3.png";
images[3] = "2.png";
images[4] = "1.png";
var x=0;
var timerid=setInterval("changeImage()", 1000);
function changeImage()
{
document.getElementById("slide").src=images[x];
if(x<4)
	x++;
else
	x=0;
}