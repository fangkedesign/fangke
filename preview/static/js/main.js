/*----------------------------------------------------*/
/*  main.js 
/*----------------------------------------------------*/

// global variable
var mobileWidth = 767;


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



/*
	Index More Works Hover 
*/

var moreWorksImageContainer = $('.more-works-container');


$(function () {

	// TweenMax.staggerTo('.hover-image', 1, {
	// 	opacity: 0,
	// });
	TweenMax.set("li.project-item", {perspective:200});
	TweenLite.set(".hover-image", {transformStyle:"preserve-3d"});

	$("li.project-item").hover(over, out);
	function over(){
		TweenMax.to($(this).find(".hover-image"), 0.3, { opacity: 1, delay:0.3, transformPerspective:500,  y:50})
	}
	
	function out(){
		TweenMax.to($(this).find(".hover-image"), 0.3, { opacity: 0,  overwrite:"all"})
	}
})


/*----------------------------------------------------*/
/* marquee 
/*----------------------------------------------------*/
var $tickerWrapper = $(".tickerwrapper");
var $list = $tickerWrapper.find("ul.list");
var $clonedList = $list.clone();
var listWidth = 10;

$list.find("li").each(function (i) {
            listWidth += $(this, i).outerWidth(true);
});

var endPos = $tickerWrapper.width() - listWidth;

$list.add($clonedList).css({
    "width" : listWidth + "px"
});

$clonedList.addClass("cloned").appendTo($tickerWrapper);

//TimelineMax
var infinite = new TimelineMax({repeat: -1, paused: true});
var time = 40;

infinite
  .fromTo($list, time, {rotation:0.01,x:0}, {force3D:true, x: -listWidth, ease: Linear.easeNone}, 0)
  .fromTo($clonedList, time, {rotation:0.01, x:listWidth}, {force3D:true, x:0, ease: Linear.easeNone}, 0)
  .set($list, {force3D:true, rotation:0.01, x: listWidth})
  .to($clonedList, time, {force3D:true, rotation:0.01, x: -listWidth, ease: Linear.easeNone}, time)
  .to($list, time, {force3D:true, rotation:0.01, x: 0, ease: Linear.easeNone}, time)
  .progress(1).progress(0)
  .play();

//Pause/Play        
$tickerWrapper.on("mouseenter", function(){
    infinite.pause();
}).on("mouseleave", function(){
    infinite.play();
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
/*----------------------------------------------------*/

! function (a) {
	"function" == typeof define && define.amd ? define(["jquery"], a) : "object" == typeof exports ? module.exports = a(require("jquery")) : a(jQuery)
}(function (a) {
	function i() {
		var b, c, d = {
			height: f.innerHeight,
			width: f.innerWidth
		};
		return d.height || (b = e.compatMode, (b || !a.support.boxModel) && (c = "CSS1Compat" === b ? g : e.body, d = {
			height: c.clientHeight,
			width: c.clientWidth
		})), d
	}

	function j() {
		return {
			top: f.pageYOffset || g.scrollTop || e.body.scrollTop,
			left: f.pageXOffset || g.scrollLeft || e.body.scrollLeft
		}
	}

	function k() {
		if (b.length) {
			var e = 0,
				f = a.map(b, function (a) {
					var b = a.data.selector,
						c = a.$element;
					return b ? c.find(b) : c
				});
			for (c = c || i(), d = d || j(); e < b.length; e++)
				if (a.contains(g, f[e][0])) {
					var h = a(f[e]),
						k = {
							height: h[0].offsetHeight,
							width: h[0].offsetWidth
						},
						l = h.offset(),
						m = h.data("inview");
					if (!d || !c) return;
					l.top + k.height > d.top && l.top < d.top + c.height && l.left + k.width > d.left && l.left < d.left + c.width ? m || h.data("inview", !0).trigger("inview", [!0]) : m && h.data("inview", !1).trigger("inview", [!1])
				}
		}
	}
	var c, d, h, b = [],
		e = document,
		f = window,
		g = e.documentElement;
	a.event.special.inview = {
		add: function (c) {
			b.push({
				data: c,
				$element: a(this),
				element: this
			}), !h && b.length && (h = setInterval(k, 250))
		},
		remove: function (a) {
			for (var c = 0; c < b.length; c++) {
				var d = b[c];
				if (d.element === this && d.data.guid === a.guid) {
					b.splice(c, 1);
					break
				}
			}
			b.length || (clearInterval(h), h = null)
		}
	}, a(f).on("scroll resize scrollstop", function () {
		c = d = null
	}), !g.addEventListener && g.attachEvent && g.attachEvent("onfocusin", function () {
		d = null
	})
});



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

