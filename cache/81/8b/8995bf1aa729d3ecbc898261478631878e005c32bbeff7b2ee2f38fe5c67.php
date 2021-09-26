<?php

/* portfolio.html */
class __TwigTemplate_818b8995bf1aa729d3ecbc898261478631878e005c32bbeff7b2ee2f38fe5c67 extends Twig_Template
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
<div class=\"main-title\">
\t<a href=\"index.html\"><img src=\"static/images/logo.svg\" alt=\"\"></a>
</div>


<div class=\"portfolio-list\">

\t<!-- golddigger -->
\t<div class=\"sticky-wrap portfolio-block\" >
\t\t<section class=\"sticky-title portfolio-header\" >
\t\t\t\t<h1 class=\"center\">GOLDDIGGER</h1>
\t\t\t\t<div class=\"tag\">
\t\t\t\t\t<ul class=\"portfolio-tag-list\">
\t\t\t\t\t\t<li>ecommerce</li>
\t\t\t\t\t\t<li>Website UI</li>
\t\t\t\t\t\t<li>Shopline</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t</section>
\t\t<div class=\"portfolio-images\" >
\t\t\t<img src=\"static/images/seleted_works/golddiggers/01.jpg\" alt=\"\">
\t\t\t<img src=\"static/images/seleted_works/golddiggers/02.jpg\" alt=\"\">
\t\t</div>
\t</div>

\t<!-- Flowapartment -->
\t<div class=\"sticky-wrap portfolio-block\" >
\t\t<div class=\"portfolio-images\" >
\t\t\t<img src=\"static/images/seleted_works/work_flow.jpg\" alt=\"\">
\t\t</div>
\t\t<section class=\"sticky-title portfolio-header\" >
\t\t\t\t<h1 class=\"center\">Flowapartment</h1>
\t\t\t\t<div class=\"tag\">
\t\t\t\t\t<ul class=\"portfolio-tag-list\">
\t\t\t\t\t\t<li>ecommerce</li>
\t\t\t\t\t\t<li>Website UI</li>
\t\t\t\t\t\t<li>Shopline</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t</section>
\t</div>
</div>



<!-- cursor -->
<!-- <div class=\"cursor-dot-outline\"></div>
<div class=\"cursor-dot\"></div> -->

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
        return "portfolio.html";
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
