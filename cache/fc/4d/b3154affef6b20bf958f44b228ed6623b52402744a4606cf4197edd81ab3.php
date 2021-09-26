<?php

/* play_hoverproduct.html */
class __TwigTemplate_fc4db3154affef6b20bf958f44b228ed6623b52402744a4606cf4197edd81ab3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_base.html");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'pageScript' => array($this, 'block_pageScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"hoverproduct-wrap\">
    <div class=\"gallery-box\">
        <figure>
            <img id=\"main-image\" src=\"https://static.pullandbear.net/2/photos//2019/V/0/1/p/5470/349/250/5470349250_4_1_8.jpg?imwidth=900&t=1553093977578\"
                alt=\"\">
        </figure>
    </div>
    <div id=\"colorway\">
        <div class=\"color-box\">
            <img data-main=\"https://static.pullandbear.net/2/photos//2019/V/0/1/p/5470/349/250/5470349250_4_1_8.jpg?imwidth=900&t=1553093977578\" 
            src=\"https://static.pullandbear.net/2/photos//2019/V/0/1/p/5470/349/250/5470349250_3_1_8.jpg\" alt=\"\">
        </div>
        <div class=\"color-box\">
                <img data-main=\"https://static.pullandbear.net/2/photos//2019/V/0/1/p/5470/349/711/5470349711_2_2_8.jpg?imwidth=900&t=1553093924004\" 
                src=\"https://static.pullandbear.net/2/photos//2019/V/0/1/p/5470/349/711/5470349711_3_1_8.jpg\" alt=\"\">
        </div>
        <div class=\"color-box\">
                <img data-main=\"https://static.pullandbear.net/2/photos//2019/V/0/1/p/5470/349/800/5470349800_4_1_8.jpg?imwidth=900&t=1553185554515\" 
                src=\"https://static.pullandbear.net/2/photos//2019/V/0/1/p/5470/349/800/5470349800_3_1_8.jpg\" alt=\"\">
        </div>
    </div>
</div>

<div class=\"cursor-dot-outline\"></div>
<div class=\"cursor-dot\"></div>
";
    }

    // line 29
    public function block_pageScript($context, array $blocks = array())
    {
        // line 30
        echo "<script src=\"https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js\"></script>
<script>
    // function d() {
    //     if (\"object\" == typeof productGallery) {
    //         for (var d = 0; d < productGallery.length; d++) b += '<div><img alt=\"Product\" src=\"' + productGallery[d] +
    //             '\" /></div>', c += \"<li><a>&bull;</a></li>\";
    //         a(\".product-thumbs li\").on(\"mouseenter\", function () {
    //             var b = document.getElementById(\"product-image\");
    //             b.src = productGallery[a(this).index()]
    //         })
    //     }
    // }
    
    
    \$('#colorway img').hover(function(){
        \$('#main-image').attr('src',\$(this).attr('data-main').replace());
        // \$('#description').html(\$(this).attr('alt'));
    });

    var cursor = {
    delay: 8,
    _x: 0,
    _y: 0,
    endX: (window.innerWidth / 2),
    endY: (window.innerHeight / 2),
    cursorVisible: true,
    cursorEnlarged: false,
    \$dot: document.querySelector('.cursor-dot'),
    \$outline: document.querySelector('.cursor-dot-outline'),
    
    init: function() {
        // Set up element sizes
        this.dotSize = this.\$dot.offsetWidth;
        this.outlineSize = this.\$outline.offsetWidth;
        
        this.setupEventListeners();
        this.animateDotOutline();
    },
    
    setupEventListeners: function() {
        var self = this;
        
        // Anchor hovering
        document.querySelectorAll('a').forEach(function(el) {
            el.addEventListener('mouseover', function() {
                self.cursorEnlarged = true;
                self.toggleCursorSize();
            });
            el.addEventListener('mouseout', function() {
                self.cursorEnlarged = false;
                self.toggleCursorSize();
            });
        });
        
        // Click events
        document.addEventListener('mousedown', function() {
            self.cursorEnlarged = true;
            self.toggleCursorSize();
        });
        document.addEventListener('mouseup', function() {
            self.cursorEnlarged = false;
            self.toggleCursorSize();
        });
  
        document.addEventListener('mousemove', function(e) {
            // Show the cursor
            self.cursorVisible = true;
            self.toggleCursorVisibility();

            // Position the dot
            self.endX = e.pageX;
            self.endY = e.pageY;
            self.\$dot.style.top = self.endY + 'px';
            self.\$dot.style.left = self.endX + 'px';
        });
        
        // Hide/show cursor
        document.addEventListener('mouseenter', function(e) {
            self.cursorVisible = true;
            self.toggleCursorVisibility();
            self.\$dot.style.opacity = 1;
            self.\$outline.style.opacity = 1;
        });
        
        document.addEventListener('mouseleave', function(e) {
            self.cursorVisible = true;
            self.toggleCursorVisibility();
            self.\$dot.style.opacity = 0;
            self.\$outline.style.opacity = 0;
        });
    },
    
    animateDotOutline: function() {
        var self = this;
        
        self._x += (self.endX - self._x) / self.delay;
        self._y += (self.endY - self._y) / self.delay;
        self.\$outline.style.top = self._y + 'px';
        self.\$outline.style.left = self._x + 'px';
        
        requestAnimationFrame(this.animateDotOutline.bind(self));
    },
    
    toggleCursorSize: function() {
        var self = this;
        
        if (self.cursorEnlarged) {
            self.\$dot.style.transform = 'translate(-50%, -50%) scale(0.75)';
            self.\$outline.style.transform = 'translate(-50%, -50%) scale(1.5)';
        } else {
            self.\$dot.style.transform = 'translate(-50%, -50%) scale(1)';
            self.\$outline.style.transform = 'translate(-50%, -50%) scale(1)';
        }
    },
    
    toggleCursorVisibility: function() {
        var self = this;
        
        if (self.cursorVisible) {
            self.\$dot.style.opacity = 1;
            self.\$outline.style.opacity = 1;
        } else {
            self.\$dot.style.opacity = 0;
            self.\$outline.style.opacity = 0;
        }
    }
}

cursor.init();
</script>
";
    }

    public function getTemplateName()
    {
        return "play_hoverproduct.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 30,  61 => 29,  32 => 3,  29 => 2,);
    }
}
