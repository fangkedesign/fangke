<?php

/* _base.html */
class __TwigTemplate_d2cf04117561888d7ff51b54d53d96775d94242f4bbe4a482bf3bd78ff6e1884 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'body' => array($this, 'block_body'),
            'pageScript' => array($this, 'block_pageScript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\">

<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<meta name=\"description\" content=\"";
        // line 8
        $this->displayBlock('description', $context, $blocks);
        echo "\">
\t<meta name=\"keywords\" content=\"";
        // line 9
        $this->displayBlock('keywords', $context, $blocks);
        echo "\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">
\t<link rel=\"shortcut icon\" href=\"favicon/favicon.ico\" />

\t<!-- Optmization  -->
\t<!-- Plugins  -->
\t<!-- Form -->
\t<!-- Core -->
\t<link rel=\"stylesheet\" href=\"static/svg/icomoon/style.css\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" href=\"static/css/style.css\">
\t
\t<!-- Core -->
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
\t<script src=\"static/js/jquery.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/three.js/103/three.min.js\"></script>

\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/zingtouch/1.0.6/zingtouch.min.js\"></script>
\t<script src=\"http://afarkas.github.io/lazysizes/lazysizes.min.js\"></script>
\t
</head>

<body>
\t";
        // line 35
        $this->env->loadTemplate("static/svg/icomoon/symbol-defs.svg")->display($context);
        // line 36
        echo "\t
\t<div class=\"loader\" ></div>
\t<div class=\"site-cavas scroll-container\">
\t\t";
        // line 39
        $this->env->loadTemplate("_header.html")->display($context);
        // line 40
        echo "
\t\t<main>
\t\t\t";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "\t\t</main>\t 
\t\t";
        // line 44
        $this->env->loadTemplate("_footer.html")->display($context);
        // line 45
        echo "
\t\t";
        // line 46
        $this->env->loadTemplate("_mobile_menu.html")->display($context);
        // line 47
        echo "\t</div>
\t    
\t<!-- Jquery Plugins  -->

\t<!-- <script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script> -->
\t<script src=\"static/js/vendor.js\"></script>
\t
\t<script src=\"https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.0/dist/lazyload.min.js\"></script>

\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.0.3/tilt.jquery.min.js\"></script>
\t<script src=\"https://www.cssscript.com/demo/add-instagram-photos-to-your-website-using-instafeed-js/src/instafeed.js\"></script>
\t<!-- Customized Script -->
\t<script src=\"static/js/main.js\"></script>

\t
\t\t";
        // line 62
        $this->displayBlock('pageScript', $context, $blocks);
        // line 67
        echo "\t\t<script>
\t\t\tvar lazyLoadInstance = new LazyLoad({
\t\t\t// Your custom settings go here
\t\t\t});

\t\t\$('.tilt').tilt();
\t\t</script>
</body>

</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Fangke Hsieh 謝芳格 ";
    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
    }

    // line 9
    public function block_keywords($context, array $blocks = array())
    {
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 62
    public function block_pageScript($context, array $blocks = array())
    {
        // line 63
        echo "

\t
\t\t";
    }

    public function getTemplateName()
    {
        return "_base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 63,  149 => 62,  143 => 42,  138 => 9,  133 => 8,  127 => 7,  113 => 67,  111 => 62,  94 => 47,  92 => 46,  89 => 45,  87 => 44,  84 => 43,  82 => 42,  78 => 40,  76 => 39,  71 => 36,  69 => 35,  40 => 9,  36 => 8,  32 => 7,  24 => 1,);
    }
}
