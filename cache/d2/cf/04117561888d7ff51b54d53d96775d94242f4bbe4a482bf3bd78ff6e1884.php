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
\t<link rel=\"stylesheet\" href=\"static/css/bootstrap.css\">
\t<link rel=\"stylesheet\" href=\"static/css/style.css\">
\t
\t<!-- Core -->
\t
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
\t<script src=\"static/js/jquery.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js\"></script>
\t<script src=\"static/js/bootstrap/bootstrap.min.js\"></script>

\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/three.js/103/three.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/zingtouch/1.0.6/zingtouch.min.js\"></script>
\t<script src=\"http://afarkas.github.io/lazysizes/lazysizes.min.js\"></script>
\t
</head>

<body>
\t";
        // line 36
        $this->env->loadTemplate("static/svg/icomoon/symbol-defs.svg")->display($context);
        // line 37
        echo "\t
\t<div class=\"loader\" ></div>
\t<div class=\"site-cavas scroll-container\">
\t\t";
        // line 40
        $this->env->loadTemplate("_header.html")->display($context);
        // line 41
        echo "
\t\t<main>
\t\t\t";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "\t\t</main>\t 
\t\t";
        // line 45
        $this->env->loadTemplate("_footer.html")->display($context);
        // line 46
        echo "
\t\t";
        // line 47
        $this->env->loadTemplate("_mobile_menu.html")->display($context);
        // line 48
        echo "\t</div>


\t    
\t<!-- Jquery Plugins  -->
\t<script src=\"static/js/vendor.min.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.0/dist/lazyload.min.js\"></script>
\t<!-- Customized Script -->
\t<script src=\"static/js/main.js\"></script>
\t\t";
        // line 57
        $this->displayBlock('pageScript', $context, $blocks);
        // line 62
        echo "\t\t<script>

\t\tvar lazyLoadInstance = new LazyLoad({
\t\t\t// Your custom settings go here
\t\t});

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

    // line 43
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 57
    public function block_pageScript($context, array $blocks = array())
    {
        // line 58
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
        return array (  147 => 58,  144 => 57,  138 => 43,  133 => 9,  128 => 8,  122 => 7,  108 => 62,  106 => 57,  95 => 48,  93 => 47,  90 => 46,  88 => 45,  85 => 44,  83 => 43,  79 => 41,  77 => 40,  72 => 37,  70 => 36,  40 => 9,  36 => 8,  32 => 7,  24 => 1,);
    }
}
