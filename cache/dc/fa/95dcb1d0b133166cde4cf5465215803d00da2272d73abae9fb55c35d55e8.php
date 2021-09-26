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
        echo "<div class=\"main-title\">
\t<a href=\"index.html\"><img src=\"static/images/logo.svg\" alt=\"\"></a>
</div>

<!-- <div class=\"fangke-cht-text\">
\t芳<br>格
</div> -->
<div class=\"index-visual\">
\t<div class=\"intro-text\">
\t\t<p>
\t\t\tI'm a UI web designer who has  <span>strongfrontend knowledge</span>
 \t\t\tand combines a <span>logical thinking</span> approach with a <span>detailed aesthetic.</span>

\t\t</p>
\t</div>
\t
\t\t
</div>


<div class=\"index-about-text js_fade-in\">
\t<p>\t我是芳格Kate，在台北地區專職網頁/UI設計、及網頁前端切版的撰寫，過去四年任職為前端設計師，主要參與服飾電商網站、形象網站、APP UI等設計，
\t\t不只是在產出視覺設計、也擁有編程基礎的前端設計技能，能夠為您指導網站風格。
\t\t<br><br><br>
\t\t喜歡新穎創新的風格，目前提供以下服務：(⁎⁍̴̛ᴗ⁍̴̛⁎)<br>
    /// 網頁設計<br>
    /// App UI設計<br>
    /// Shopline電商改造設計
\t</p>
</div>
<div class=\"seleted-works js_fade-in\">
\t<ul class=\"seleted-works-list\">
\t\t<li class=\"case-title\">
\t\t\t<div class=\"work-thumb\">
\t\t\t\t<video class=\"lazy\" id=\"promoVideo\" autoplay loop muted playsinline onclick=\"pauseVid()\">
\t\t\t\t\t<!-- <source src=\"video.webm\" type=\"video/webm\"> -->
\t\t\t\t\t<source data-src=\"static/images/seleted_works/golddigger.mp4\" type=\"video/mp4\">
\t\t\t\t\t<!-- <img src=\"animated.gif\"> -->
\t\t\t\t</video>
\t\t\t</div>
\t\t\tGolddigger
\t\t\t<span class=\"year\">2019</span>
\t\t\t<div class=\"doodle\" style=\"bottom: 20%;right: -40%;\" >
\t\t\t\t<img  src=\"static/images/doddle_01.svg\" alt=\"\">
\t\t\t</div>
\t\t</li>
\t\t<li class=\"line-deco\"></li>
\t\t<li class=\"case-title\">
\t\t\t<div class=\"work-thumb\">
\t\t\t\t<img  class=\"lazy\"   data-src=\"static/images/seleted_works/flowapartment.jpg\" alt=\"\">
\t\t\t</div>
\t\t\tFlowapartment
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
\t\t\t<span class=\"year\">2015</span>
\t\t\t<div class=\"doodle\" style=\"bottom: 25%;right: -36%;\" >
\t\t\t\t<img  class=\"lazy\"   data-src=\"static/images/doddle_02.svg\" alt=\"\">
\t\t\t</div>
\t\t</li>
\t\t<li class=\"case-title\">
\t\t\t<div class=\"work-thumb\">
\t\t\t\t<img  class=\"lazy\"   data-src=\"static/images/seleted_works/hannahjewelry.jpg\" alt=\"\">
\t\t\t</div>
\t\t\tHannah Jewelry
\t\t\t<span class=\"year\">2017</span>
\t\t</li>
\t\t<li class=\"line-deco\"></li>
\t\t<li class=\"case-title\">
\t\t\t<div class=\"work-thumb\">
\t\t\t</div>
\t\t\tDresscode
\t\t\t<span class=\"year\">2017</span>
\t\t\t<div class=\"doodle\" style=\"bottom: -16%;right: 28%;\" >
\t\t\t\t<img  class=\"lazy\"   data-src=\"static/images/doddle_03.svg\" alt=\"\">
\t\t\t</div>
\t\t</li>
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



<!-- cursor -->
<div class=\"cursor-dot-outline\"></div>
<div class=\"cursor-dot\"></div>

<!-- <ul class=\"seleted-works-list\">
\t<li>
\t\t<img src=\"static/images/works/mongo.png\" alt=\"\">
\t\t<div class=\"works-des\">
\t\t\t<span>Mongo</span>
\t\t\t<p class=\"des\">
\t\t\t\tPet’s cleaning supplies ecommerce site, the goal in this project was to elevate the brand visual and
\t\t\t\tcomp up with a
\t\t\t\teasy naviate shopping interface. My role was visual design and front end development.
\t\t\t</p>
\t\t</div>
\t</li>
\t<li>
\t\t<img src=\"static/images/works/mongo.png\" alt=\"\">
\t\t<div class=\"works-des\">
\t\t\t<span>Hannah Jewelry</span>
\t\t\t<p class=\"des\">
\t\t\t\tDesigner’s jewelry collectoin ecommerce shop, the goal is to intergate client’s product store with her
\t\t\t\tfashion
\t\t\t\tblog, my role is deliver a visual match with branding and front-end develping.
\t\t\t</p>
\t\t</div>
\t</li>
</ul> -->

<!-- <div class=\"more-works-container\">
\t<h1 class=\"title\">More Works</h1>
\t<ul class=\"more-works-list\">
\t\t<li class=\"project-item\">
\t\t\t<span class=\"text-wrap\"> <span class=\"project-name\">2young Clinic</span>
\t\t\t\tCosmetic Sugery Clinic</span>
\t\t\t<div class=\"hover-image\">
\t\t\t\t<img src=\"static/images/works/project_cover_xinan.png\" alt=\"\">
\t\t\t</div>

\t\t</li>
\t\t<li class=\"project-item\"><span class=\"text-wrap\">
\t\t\t\t<span class=\"project-name\">HandyAge</span>
\t\t\t\tCoporate Catalogue sites</span>
\t\t\t<div class=\"hover-image\">
\t\t\t\t<img src=\"static/images/works/project_cover_handyage.png\" alt=\"\">
\t\t\t</div>
\t\t</li>
\t\t<li class=\"project-item\"><span class=\"text-wrap\">
\t\t\t\t<span class=\"project-name\">Dresscode</span>
\t\t\t\tClothing brand online ecommerce</span>
\t\t\t<div class=\"hover-image\">
\t\t\t\t<img src=\"static/images/works/project_cover_drsscode.png\" alt=\"\">
\t\t\t</div>
\t\t</li>
\t\t<li class=\"project-item\"><span class=\"text-wrap\">
\t\t\t\t<span class=\"project-name\">TeamLuck</span>
\t\t\t\tVR Company Coporate site</span>
\t\t\t<div class=\"hover-image\">
\t\t\t\t<img src=\"static/images/works/project_cover_teamluck.jpg\" alt=\"\">
\t\t\t</div>
\t\t</li>
\t\t<li class=\"project-item\"><span class=\"text-wrap\">
\t\t\t\t<span class=\"project-name\">Osparks</span>
\t\t\t\tdigital platform startup interface collebrate</span>
\t\t\t<div class=\"hover-image\">
\t\t\t\t<img src=\"static/images/works/project_cover_osparks.jpg\" alt=\"\">
\t\t\t</div>
\t\t</li>
\t</ul>
</div> -->

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
