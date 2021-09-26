<?php

/* play_stickytitle.html */
class __TwigTemplate_f9c8738129bffdff0482402239daf3501160f7c0d78565f8673a5bde1a94ce1e extends Twig_Template
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
        echo "


<div class=\"sticky-wrap\">
    <section class=\"sticky-title\">
            <h1>Lucid Dreams</h1>
            <h5>In partnership with Uniqlo, a Copenhagen designer talks style, efficiency and comfort.</h5>
    </section>

    <img src=\"https://kinfolk.com/wp-content/uploads/2019/01/Uniqlo-6.jpg\" alt=\"\" style=\"width: 100%;\">

</div>
<section class=\"parallax-content\">
    Johanne Aurebekk has a fondness for simplicity. As one of four co-founders of Copenhagen-based design studio Aure, whose output encompasses clothing, art and interiors, her professional emphasis has always been on creating items of enduring appeal. This preference for minimalist chic translates into the way she approaches life, from a wardrobe stocked with reliable basics to taking a considered approach to consumption. In partnership with Uniqlo, the Norwegian-born designer talks to Pip Usher about collaboration, what makes certain clothes so easy to “throw on” in the morning, and why she’d rather make do than rush decisions. 

    Since moving to Denmark, how have you been influenced by the design scene?
    Denmark has always been very good with minimalist design. They create timeless classics and I’ve definitely been inspired by this. I like wearing and designing things that you can look back on over the years and think, “That still works.”
    
    A widely-held aspiration is to live a more stylish life, but with minimal effort. What’s the secret?
    Build up a wardrobe that consists of good basics where most items can be combined. That way you rarely need something new—in the mornings it’s easy because you can throw something on and most things go together.
</section>



<!-- 
    來源參考：https://isabellefox.com/
    練習心得：不用javascript就可以達到sticky的效果
            如果上層div有做此設定-- overflow: hidden;
            就會失效，必須讓overflow都是visible;
 -->
";
    }

    // line 34
    public function block_pageScript($context, array $blocks = array())
    {
        // line 35
        echo "
";
    }

    public function getTemplateName()
    {
        return "play_stickytitle.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 35,  66 => 34,  32 => 3,  29 => 2,);
    }
}
