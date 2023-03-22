 jQuery(document).ready(function(){
	   $(".partners").slick({
    	infinite: true,
    	slidesToShow: 4,
    	slidesToScroll: 1,
    	arrows: false,
		autoplay: true,
    	autoplaySpeed : 3000,
    	responsive: [
      	{
        	breakpoint: 1024,
        	settings: {
          	slidesToShow: 3,
          	slidesToScroll: 1,
          	infinite: true,
        },
      },
      {
        	breakpoint: 600,
        	settings: {
          	slidesToShow: 2,
          	slidesToScroll: 1,
        },
      },
      {
        	breakpoint: 480,
        	settings: {
          	slidesToShow: 2,
          	slidesToScroll: 1,
        },
      },
    ],
  });
      $('.review-parent').slick({
        slidesToShow:   2,
        slidesToScroll: 1,
		prevArrow: $(".slick-prev"),
		nextArrow: $(".slick-next"),
  		responsive: [ 
			{
				breakpoint:1024,
				settings:{
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			},
		{
      	breakpoint: 600,
      	settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    	{
      		breakpoint: 480,
      		settings: {
        	slidesToShow: 1,
        	slidesToScroll: 1
      		}
    	}
  	]
      });
    });
