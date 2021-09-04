var i=0;
var images = [];


//image list
images[0] = '../images/add1.jpg';
images[1] = '../images/add2.png';
images[2] = '../images/add3.jpg';

function changeImage(){
	document.slide.src = images[i];
	
	if(i< images.length - 1){
		i++;
	}
	else{
		i=0;
	}
	
	//setTimeout("changeImage()",5000);
	setInterval("changeImage()",0.5);
}

window.onload =  changeImage;
