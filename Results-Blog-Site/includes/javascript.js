

 function changeImagea() {
			document.getElementById("imgClickAndChange").src = "img/mens.png";
			}
        
  function changeImageb() {
		      
    
			document.getElementById("imgClickAndChange").src = "img/womens.png" ;
			}
  
	 function changeImagec()
		{
			document.getElementById("imgClickAndChange").src = "img/juniors.png" ;
        }
   
   /*
							function preload(arrayOfImages) {
							$(arrayOfImages).each(function(){
								$('<img/>')[0].src = this;
								// Alternatively you could use:
								// (new Image()).src = this;
							});
						}

						// Usage:

						preload([
							'../img/bg.png',				used this code to have the backgroud changing but found it to be unsuitable.
							'../img/bg1.png',
							'../img/bg2.png'
								]);
					
							var images = [img/bg2.png', 'img/bg3.png', 'img/bg.png'];
						var i = 0;

				setInterval(function(){
					$('html').css('background', function() {
						if (i >= images.length) {
							i=0;
						}
						return 'url(' + images[i++] + ')' + 'no-repeat center center fixed'; 
					});
				}, 1000); */
							