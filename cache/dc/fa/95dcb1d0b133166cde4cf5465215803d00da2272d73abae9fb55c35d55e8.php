<?php

/* index.html */
class __TwigTemplate_dcfa95dcb1d0b133166cde4cf5465215803d00da2272d73abae9fb55c35d55e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_base.html");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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

    // line 1
    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "

<!-- cursor -->
<div class=\"cursor-dot-outline\"></div>
<div class=\"cursor-dot\"></div>
<div class=\"main-title\">
\t<a href=\"index.html\"><img src=\"static/images/logo.svg\" alt=\"\"></a>
</div>

<!-- <div class=\"fangke-cht-text\">
\t芳<br>格
</div> -->
<div class=\"marquee\">
\t<p class=\"one\"> </p>
</div>
<div class=\"index-visual\">
\t<div class=\"intro-text\">
\t\t<p>
\t\t\tI'm a UI web designer with <span>solid frontend knowledge</span>
 \t\t\tand combine a <span>logical thinking</span> approach with a <span>aesthetic-pleasing design.</span>

\t\t</p>
\t</div>
</div>



<div class=\"seleted-works js_fade-in\">
\t<ul class=\"seleted-works-list\">
\t\t<li class=\"case-title\">
\t\t\t<div class=\"work-thumb\">

\t\t\t\t<img  class=\"lazy\"   data-src=\"static/images/seleted_works/nagata.jpg\" alt=\"\">
\t\t\t</div>
\t\t\tNagata Lab
\t\t\t<span class=\"year\">2021</span>
\t\t\t<div class=\"doodle\" style=\"bottom: 20%;right: -40%;\" >
\t\t\t\t<img  src=\"static/images/doddle_01.svg\" alt=\"\">
\t\t\t</div>
\t\t</li>
\t\t<li class=\"line-deco\"></li>
\t\t<li class=\"case-title\">
\t\t\t<div class=\"work-thumb\">
\t\t\t\t<img  class=\"lazy\"   data-src=\"static/images/seleted_works/flowapartment.jpg\" alt=\"\">
\t\t\t</div>
\t\t\tFlow Apartment
\t\t\t<span class=\"year\">2018</span>
\t\t</li>
\t\t<li class=\"case-title\">
\t\t\t<div class=\"work-thumb\">
\t\t\t\t<video class=\"lazy\" id=\"promoVideo\" autoplay loop muted playsinline onclick=\"pauseVid()\">
\t\t\t\t\t<!-- <source src=\"video.webm\" type=\"video/webm\"> -->
\t\t\t\t\t<source data-src=\"static/images/seleted_works/mongo.mp4\" type=\"video/mp4\">
\t\t\t\t\t<!-- <img src=\"animated.gif\"> -->
\t\t\t\t</video>

\t\t\t</div>
\t\t\tMongo
\t\t\t<span class=\"year\">2018</span>
\t\t</li>
\t\t<li class=\"line-deco\"></li>
\t\t<li class=\"case-title\">
\t\t\t<div class=\"work-thumb\">
\t\t\t\t<video class=\"lazy\" id=\"promoVideo\" autoplay loop muted playsinline onclick=\"pauseVid()\">
\t\t\t\t\t<!-- <source src=\"video.webm\" type=\"video/webm\"> -->
\t\t\t\t\t<source data-src=\"static/images/seleted_works/osparks.mp4\" type=\"video/mp4\">
\t\t\t\t\t<!-- <img src=\"animated.gif\"> -->
\t\t\t\t</video>

\t\t\t</div>
\t\t\tOsparks
\t\t\t<span class=\"year\">2017-2018</span>
\t\t</li>
\t\t<li class=\"line-deco\"></li>
\t\t<li class=\"case-title\">
\t\t\t<div class=\"work-thumb\">
\t\t\t\t<img  class=\"lazy\"   data-src=\"static/images/seleted_works/garytu.jpg\"
\t\t\t\t\talt=\"\">
\t\t\t</div>
\t\t\tGaryTu
\t\t\t<span class=\"year\">2018</span>
\t\t\t<div class=\"doodle\" style=\"bottom: 25%;right: -36%;\" >
\t\t\t\t<img  class=\"lazy\"   data-src=\"static/images/doddle_02.svg\" alt=\"\">
\t\t\t</div>
\t\t</li>
\t\t<li class=\"case-title\">
\t\t\t<div class=\"work-thumb\">
\t\t\t\t<img  class=\"lazy\"   data-src=\"static/images/seleted_works/hannahjewelry.jpg\" alt=\"\">
\t\t\t</div>
\t\t\tHannah Jewelry
\t\t\t<span class=\"year\">2018</span>
\t\t</li>
\t\t<li class=\"line-deco\"></li>
\t\t<li class=\"case-title\">
\t\t\t<div class=\"work-thumb\">
\t\t\t\t<img class=\"lazy\"   src=\"https://cdn.dribbble.com/users/1015720/screenshots/14132485/media/13206ab8332d3e02d7af9a4e581ad005.jpg\" alt=\"\">
\t\t\t</div>
\t\t\tCity Smart UI
\t\t\t<span class=\"year\">2018</span>
\t\t\t<div class=\"doodle\" style=\"bottom: -16%;right: 28%;\" >
\t\t\t\t<img  class=\"lazy\"   data-src=\"static/images/doddle_03.svg\" alt=\"\">
\t\t\t</div>
\t\t</li>

\t\t<div class=\"btn-view-more d-flex justify-content-center w-100\"><a href=\"portfolio_list.html\">View More</a></div>
\t</ul>

</div>
<div class=\"swirl\">

</div>
<div class=\"curve\">

</div>
<div class=\"ellipse-float\">

</div>
<!-- <div class=\"ellipse in-view\" data-background=\"#fcf0ed\">

</div> -->
<div class=\"left-box\">

</div>




<script>

</script>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 2,  28 => 1,);
    }
}
