
// global variable
var mobileWidth = 991;

/*----------------------------------------------------*/
/* Global Function
/*----------------------------------------------------*/
$(function () {
	$(window).on('load', function () {
        $('.loader').fadeOut();
    });
})
/*----------------------------------------------------*/
/* smooth scroll
/*----------------------------------------------------*/
/*----------------------------------------------------*/
/* Header Scroll Hide
/*----------------------------------------------------*/
const showAnim = gsap.from('header', { 
	yPercent: -100,
	paused: true,
	duration: 0.4
  }).progress(1);
  
  ScrollTrigger.create({
	start: "top top",
	end: 99999,
	onUpdate: (self) => {
	  self.direction === -1 ? showAnim.play() : showAnim.reverse()
	}
  });

/*----------------------------------------------------*/
/* Cursor
/*----------------------------------------------------*/


var cursor = {
	delay: 8,
	_x: 0,
	_y: 0,
	endX: (window.innerWidth / 2),
	endY: (window.innerHeight / 2),
	cursorVisible: true,
	cursorEnlarged: false,
	$dot: document.querySelector('.cursor-dot'),
	$outline: document.querySelector('.cursor-dot-outline'),
	init: function () {
		// Set up element sizes
		this.dotSize = this.$dot.offsetWidth;
		this.outlineSize = this.$outline.offsetWidth;

		this.setupEventListeners();
		this.animateDotOutline();
	},

	setupEventListeners: function () {
		var self = this;

		// Anchor hovering
		document.querySelectorAll('a').forEach(function (el) {
			el.addEventListener('mouseover', function () {
				self.cursorEnlarged = true;
				self.toggleCursorSize();
			});
			el.addEventListener('mouseout', function () {
				self.cursorEnlarged = false;
				self.toggleCursorSize();
			});
		});

		// Click events
		document.addEventListener('mousedown', function () {
			self.cursorEnlarged = true;
			self.toggleCursorSize();
		});
		document.addEventListener('mouseup', function () {
			self.cursorEnlarged = false;
			self.toggleCursorSize();
		});

		document.addEventListener('mousemove', function (e) {
			// Show the cursor
			self.cursorVisible = true;
			self.toggleCursorVisibility();

			// Position the dot
			self.endX = e.pageX;
			self.endY = e.pageY;
			self.$dot.style.top = self.endY + 'px';
			self.$dot.style.left = self.endX + 'px';
		});

		// Hide/show cursor
		document.addEventListener('mouseenter', function (e) {
			self.cursorVisible = true;
			self.toggleCursorVisibility();
			self.$dot.style.opacity = 1;
			self.$outline.style.opacity = 1;
		});

		document.addEventListener('mouseleave', function (e) {
			self.cursorVisible = true;
			self.toggleCursorVisibility();
			self.$dot.style.opacity = 0;
			self.$outline.style.opacity = 0;
		});
	},

	animateDotOutline: function () {
		var self = this;

		self._x += (self.endX - self._x) / self.delay;
		self._y += (self.endY - self._y) / self.delay;
		self.$outline.style.top = self._y + 'px';
		self.$outline.style.left = self._x + 'px';

		requestAnimationFrame(this.animateDotOutline.bind(self));
	},

	toggleCursorSize: function () {
		var self = this;

		if (self.cursorEnlarged) {
			self.$dot.style.transform = 'translate(-50%, -50%) scale(0.75)';
			self.$outline.style.transform = 'translate(-50%, -50%) scale(1.5)';
		} else {
			self.$dot.style.transform = 'translate(-50%, -50%) scale(1)';
			self.$outline.style.transform = 'translate(-50%, -50%) scale(1)';
		}
	},

	toggleCursorVisibility: function () {
		var self = this;

		if (self.cursorVisible) {
			self.$dot.style.opacity = 1;
			self.$outline.style.opacity = 1;
		} else {
			self.$dot.style.opacity = 0;
			self.$outline.style.opacity = 0;
		}
	}
}

cursor.init();






/*----------------------------------------------------*/
/* Cursor
// source: https://github.com/verlok/vanilla-lazyload
/*----------------------------------------------------*/

var lazyLoadInstance = new LazyLoad({
	// Your custom settings go here
  });



/*----------------------------------------------------*/
/* Contents Fade-in
/*----------------------------------------------------*/

$(function() {
    $(window).on('scroll load', function() {
        $('.js_fade-in').each(function() {
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var deviceAdjust = 120;
            if( $(window).width() < 767 ){
                deviceAdjust = windowHeight / 10;
            }
            if (scroll > (elemPos - windowHeight + deviceAdjust)) {
				$(this).addClass('js_scrollin');
			}
			
        });
    });
});


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

