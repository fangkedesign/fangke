<?php

/* info.html */
class __TwigTemplate_31f659058b95b9378cc34008ccdf3fad07b70267387b57a9e5e6dcb48e9a3ac5 extends Twig_Template
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
<div class=\"info-wrap  js_fade-in\">
\t<div class=\"row\">
\t\t<div class=\"info-image col-md-6 col-12\">
\t\t\t<img src=\"static/images/info/portrait.png\" alt=\"\">

\t\t</div>
\t\t<div class=\"info-text col-md-6 col-12\">
\t\t\t<h2>
\t\t\t\t<br><br>
\t\t\t\tI'm a UI web designer who has strong frontend knowledge
\t\t\t\tand combines a logical thinking approach with a detailed aesthetic.</h2>

\t\t\t<img class=\"white-oval\" src=\"static/images/info/oval.svg\" alt=\"\">
\t\t</div>
\t</div>
\t<div class=\"row info-trivia\">
\t\t<h3>
\t\t\tFreelancer <span>Dec 2018 - Present</span>
\t\t</h3>
\t\t<p>・Collaborated with oversea product manager and developer to build custom app and website.<br>
            ・Take part in multiple web UI design for local brand e-commerce.<br>
\t\t\t・Lead frontend e-commerce online designer at MUJI Taiwan branch</p>
\t\t<br><br>
\t\t<p>
\t\t\tI want to bring my experience in web development and my passion for finding creative solutions to help businesses excel and eventually assists in those businesses improving the quality of life and society.

\t\t</p>
\t\t<p>
            Besides design, I also like walking around new places taking film photos.
\t\t</p>
\t</div>
</div>

<div id=\"instafeed\"></div>




<script>

</script>
";
    }

    public function getTemplateName()
    {
        return "info.html";
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
