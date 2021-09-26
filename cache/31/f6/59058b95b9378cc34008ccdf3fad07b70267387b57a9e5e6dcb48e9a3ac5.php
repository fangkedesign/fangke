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
<div class=\"about-text\">
<p>\t我是芳格Kate，在台北地區專職專職網頁/UI設計、網頁前端切版的撰寫，過去四年職位為前端設計師。
</p>
<p></p>
<p>喜歡新穎創新的風格，目前提供以下服務：(⁎⁍̴̛ᴗ⁍̴̛⁎)<br>
    /// 網頁設計<br>
    /// App UI設計<br>
    /// Shopline電商改造設計<br>
</p>
</div>



<!-- cursor -->
<!-- <div class=\"cursor-dot-outline\"></div>
<div class=\"cursor-dot\"></div> -->

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
