/*----------------------------------------------------*/
/* Index More Works Hover 
/*----------------------------------------------------*/
$(document).ready(function () {
	indexCaseHover();
	$(window).on('resize', function () {
		indexCaseHover();
	});
});

var seletedWorks = $('.seleted-works');
function indexCaseHover() {
    if ($(window).outerWidth() <= mobileWidth) {
		TweenMax.staggerTo('.work-thumb', 1, {
			opacity: 1,
		});	
		$("li.case-title").kill();
    } else {
		// let text = document.querySelector("li.case-title");
		// let hoverAnimation = gsap.to(".work-thumb",0.3,{
		// 	opacity: 1,
		// 	delay: 0.3,
		// 	transformPerspective:500,
		// 	y:50
		// })
		// text.addEventListener("mouseenter", () => hoverAnimation.play());
		// text.addEventListener("mouseleave", () => hoverAnimation.reverse());
		TweenMax.staggerTo('.work-thumb', 1, {opacity: 0,});
		TweenMax.set("li.case-title", {});
		TweenLite.set(".work-thumb", {transformStyle:"preserve-3d"});
	
		$("li.case-title").hover(over,out);
		$(".seleted-works").hover(outAll);
		$("li.case-title").mouseout(outAll);

		function over(){
			TweenMax.to(".work-thumb", 0.3, { opacity: 0,transformPerspective:500, y:0,  overwrite:"all"})
			TweenMax.to($(this).find(".work-thumb"), 0.3, { opacity: 1, delay:0.3, transformPerspective:500, y:50})
		}
		
		function out(){
			TweenMax.to($(this).find(".work-thumb"), 0.3, { opacity: 0,transformPerspective:500, y:0,  overwrite:"all"})

		}
		function outAll(){
			TweenMax.to(".work-thumb", 0.3, { opacity: 0,transformPerspective:500, y:0,  overwrite:"all"})

		}
    }
}

window.onload = function() {
	// var timeline = new TimelineMax();
	// timeline.to(".main-title",0.9,{ease:Power1.easeIn, opacity:1, scale:1});
}


/*----------------------------------------------------*/
/* Marquee
/*----------------------------------------------------*/
gsap.to(".marquee p.one", {
    scrollTrigger: {
		trigger: "body",
		scrub: 0.25,
		start: "top bottom",
		end: "bottom top",
		ease: "power2"
	  },
	  xPercent: -50,
	  x: 500
  });


/*----------------------------------------------------*/
/* instagram feed
/*----------------------------------------------------*/


  var feed = new Instafeed({
	//success: function(data) {
	//  console.log('success', data);
	//},
	//after: function() {
	//  console.log('finished!');
	//},
	//error: function(error) {
	//  console.error('instafeed error', error);
	//},
	accessToken: 'IGQVJXc1pLVnIxcnVHd3ZA1THc5M2tRTzBkcWIxVEE3U0d6NmVkbEVwZAkxWNTVnYTE2YnNCQ0x6NDVQcGtuRzFTd2ZAjVndUd0ZANRmM5aHlzek51VjM1YnhMSHBHRHNaMFZAIWmZA5ekdn',
	//debug: true,
//       filter: function(image) {
//         return true;
//       },
//       template: 'value: {{test}}',
//       transform: function(image) {
//         return {
//           test: true
//         };
//       }
	// Maximum number of Images to add. Max of 60.
	limit: 5,
	// Custom rendering template
	template: '<div><a href="{{link}}"><img title="{{caption}}" src="{{image}}" /></a></div>',
templateBoundaries: ['{{','}}']
  });

  feed.run();
  //setTimeout(function() {
  //  feed.run();
  //}, 3000);

