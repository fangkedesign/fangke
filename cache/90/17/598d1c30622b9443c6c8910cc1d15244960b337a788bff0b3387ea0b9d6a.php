<?php

/* _footer.html */
class __TwigTemplate_9017598d1c30622b9443c6c8910cc1d15244960b337a788bff0b3387ea0b9d6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!--Footer-->
<div class=\"sunflower js_fade-in\">
\t<img src=\"static/images/sunflower.svg\" alt=\"\">
</div>

<!-- <div class=\"tickerwrapper\">
   <ul class='list'>
      <li class='listitem' style='font-size: 40px'>
        <span>Let's Talk More Here</span>
        <span>Let's Talk More Here</span>
        <span>Let's Talk More Here</span>
        <span>Let's Talk More Here</span>
        <span>Let's Talk More Here</span>
        <span>Let's Talk More Here</span>
        <span>Let's Talk More Here</span>
        <span>Let's Talk More Here</span>
        <span>Let's Talk More Here</span>
      </li>
  </ul>
</div> -->

<footer class=\"in-view js_fade-in\" data-background=\"#f56b4a\">
\t<div class=\"footer-container\">
\t\t<div class=\"footer-icon\">
\t\t\t<img src=\"static/images/footer_icon.png\" alt=\"\">
\t\t</div>
\t\t<div>
\t\t\t<h1 class=\"title\">
\t\t\t\tLet's Make It Interesting 
\t\t\t</h1>
\t\t\t<a href=\"mailto:hsiehfangke@gmail.com\">hsiehfangke@gmail.com</a>
\t\t</div>
\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "_footer.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
