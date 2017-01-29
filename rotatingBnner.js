 var rotatingImages = new Array(2);
       //var rotatingmastheadImages = new Array(3);

       for (var i = 0; i < rotatingImages.length; i++) {
           rotatingImages[i] = i + '.jpg';
       }
       //for (var j = 0; j < rotatingmastheadImages.length; j++) {
         //  rotatingmastheadImages[j] = j + '.jpg';
       //}

       var indx = 0;
       //var indx1 = 0;

       var len = rotatingImages.length;
       //var len1 = rotatingmastheadImages.length;

       function rotateBanners() {

           document.banner.src = 'images/rotatingBanners/' + rotatingImages[indx];
          // document.mastheadbanner.src = 'images/masthead/' + rotatingmastheadImages[indx1];
           setTimeout("rotateBanners()", 5000);

           if (++indx == len) {
               indx = 0;
           }
           //if (++indx1 == len1) {
            //   indx1 = 0;
           //}
       }
	   $(document).ready(function(){
                     $("#Expobtn").css(
                     {
                     "background-color": "#0000ff",
                     "width": "100px",
                      "margin": "10px 10px",
                      "padding": "5px",
                      "text-align": "center",
                      "color": "#fff"
                     });
                  
                  });
	   
      
