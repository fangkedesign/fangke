<?php

/* product_detail.html */
class __TwigTemplate_fc558e5990100807cac97c5a7284a011fa16b401438dab133f691855c17e3880 extends Twig_Template
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
        echo "<div class=\"container\">
\t<div class=\"product-detail-main\">
\t\t<div class=\"row\">
\t\t\t<div class=\"entry-content\" data-sticky=\"stick-element\">
\t\t\t\t<div class=\"inner-wrap\">
\t\t\t\t\t
\t\t\t\t\t<h3 class=\"subtitle\">
\t\t\t\t\t\t01 敏感肌膚
\t\t\t\t\t</h3>
\t\t\t\t\t<h1 class=\"title\">
\t\t\t\t\t\tmongo萌狗 寵物犬專用沐浴精
\t\t\t\t\t</h1>
\t\t\t\t\t<div class=\"detail-content\">
\t\t\t\t\t\t<span>500ml</span>
\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t木酢原液具分解臭源、深層清潔抗菌
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t平衡油脂、調理毛孔、緩解紅腫、搔癢
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t採用原生樹材提煉精餾木酢液,搭配草本配方,可適用於各種不同膚質的心愛寵物.木酢液通過SGS國際級認證純植物性不流淚配方,溫和無刺激性,寶貝寵物誤食也不擔心.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t擁有除臭抗菌的功能 , 滋潤皮膚 , 亮澤毛髮及消除異味 給寶貝寵物們最頂級的呵護,精心研發無皂配方, 同時照顧飼主的雙手。
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"image\" >
\t\t\t\t<div class=\"slider-pro\" data-sliderpro=\"product-images\">
\t\t\t\t\t<div class=\"sp-slides\">
\t\t\t\t\t\t<div class=\"sp-slide\">
\t\t\t\t\t\t\t<img class=\"sp-image\" src=\"static/images/product/mongo_01_500ml.png\" alt=\"\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sp-slide\">
\t\t\t\t\t\t\t<img class=\"sp-image\" src=\"static/images/product/mongo_01_500ml.png\" alt=\"\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"purchase-action\" data-sticky=\"stick-element\">
\t\t\t\t<div class=\"inner-wrap\">
\t\t\t\t\t<div class=\"price\" data-original-price=\"2100\">
\t\t\t\t\t\tNT\$ 1290
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"quantity\">
\t\t\t\t\t\t<a href=\"#\" class=\"minus\">
\t\t\t\t\t\t\t-
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<input type=\"text\" value=\"1\" class=\"qty\">
\t\t\t\t\t\t<a href=\"#\" class=\"plus\">
\t\t\t\t\t\t\t+
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"spec col-8 offset-2 mt-3\">
\t\t\t\t\t\t<select class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"0\">選擇規格</option>
\t\t\t\t\t\t\t<option value=\"1\">500ml</option>
\t\t\t\t\t\t\t<option value=\"1\">1000ml</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"btn btn-add-to-cart\">
\t\t\t\t\t\t<span>加入</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"back-to-list\">
\t\t\t\t<a href=\"product_list.html\">
\t\t\t\t\t<svg class=\"icon icon-arrow-left\">
\t\t\t\t\t\t<use xlink:href=\"#icon-arrow-left\"></use>
\t\t\t\t\t</svg> 回到上一頁
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"product-detail-introduction\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 col-lg-6 image\">
\t\t\t\t<img src=\"static/images/product/introduce_img_01.png\" />
\t\t\t</div>
\t\t\t<div class=\"col-md-12 col-lg-6 d-flex align-items-center\">
\t\t\t\t<div class=\"col-md-12 col-lg-9\">
\t\t\t\t\t<h1>
\t\t\t\t\t\t你最關心的，
\t\t\t\t\t\t<br /> 狗狗衛生與健康。
\t\t\t\t\t</h1>
\t\t\t\t\t<h6><span>
\t\t\t\t\t\t呵護飼主與寵物
\t\t\t\t\t</span>
\t\t\t\t\t\t<br /><br />
\t\t\t\t\t</h6>
\t\t\t\t\t<p>擁有除臭抗菌的功能 , 滋潤皮膚 , 亮澤毛髮及消除異味給寶貝寵物們最頂級的呵護,精心研發無皂配方, 同時照顧飼主的雙手。</p>
\t\t\t\t\t\t<br /><br />
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row flex-row-reverse\">
\t\t\t<div class=\"col-md-12 col-lg-6 image\">
\t\t\t\t<img src=\"static/images/product/introduce_img_02.png\" />
\t\t\t</div>
\t\t\t<div class=\"col-md-12 col-lg-6  d-flex align-items-center\">
\t\t\t\t<div class=\"col-md-12 col-lg-9 offset-lg-3 offset-md-0\">
\t\t\t\t\t<h1>
\t\t\t\t\t\t同時呵護兼顧<br />
\t\t\t\t\t\t寵物與飼主健康。
\t\t\t\t\t</h1>
\t\t\t\t\t<h6>
\t\t\t\t\t\t呵護飼主與寵物
\t\t\t\t\t</h6>
\t\t\t\t\t<p>擁有除臭抗菌的功能 , 滋潤皮膚 , 亮澤毛髮及消除異味給寶貝寵物們最頂級的呵護,精心研發無皂配方, 同時照顧飼主的雙手。</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"row full-width\">
\t\t\t<div class=\"col-md-12 image\">
\t\t\t\t<img class=\"img-fluid\" src=\"static/images/about/cover_img.jpg\" />
\t\t\t</div>
\t\t\t<div class=\"col-md-12 col-lg-8 offset-lg-2\">
\t\t\t\t\t<h1>
\t\t\t\t\t\t你最關心的， 狗狗衛生與健康。
\t\t\t\t\t</h1>
\t\t\t\t\t<h6><span>
\t\t\t\t\t\t呵護飼主與寵物
\t\t\t\t\t</span>
\t\t\t\t\t\t<br /><br />
\t\t\t\t\t</h6>
\t\t\t\t\t<p>擁有除臭抗菌的功能 , 滋潤皮膚 , 亮澤毛髮及消除異味給寶貝寵物們最頂級的呵護,精心研發無皂配方, 同時照顧飼主的雙手。擁有除臭抗菌的功能 , 滋潤皮膚 , 亮澤毛髮及消除異味給寶貝寵物們最頂級的呵護,精心研發無皂配方, 同時照顧飼主的雙手。擁有除臭抗菌的功能 , 滋潤皮膚 , 亮澤毛髮及消除異味給寶貝寵物們最頂級的呵護,精心研發無皂配方, 同時照顧飼主的雙手。擁有除臭抗菌的功能 , 滋潤皮膚 , 亮澤毛髮及消除異味給寶貝寵物們最頂級的呵護,精心研發無皂配方, 同時照顧飼主的雙手。</p>

\t\t\t\t\t<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/qYSTGfy5TaY\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"product-detail-recommendation\" data-owl=\"owl-carousel\">
\t\t<h3 class=\"section-title\">相關產品</h3>
\t\t<div class=\"owl-carousel recommend-products\">
\t\t\t<div class=\"item\">
\t\t\t\t<a href=\"product_detail.html\">
\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t<img src=\"static/images/product/mongo_01_500ml.png\" alt=\"\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"entry\">
\t\t\t\t\t\t<h6 class=\"title\">mongo萌狗
\t\t\t\t\t\t\t<br />寵物犬專用沐浴精</h6>
\t\t\t\t\t\t<span class=\"number\"></span>
\t\t\t\t\t\t<p class=\"caption\">01 深層清潔</p>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"item\">
\t\t\t\t<a href=\"product_detail.html\">
\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t<img src=\"static/images/product/mongo_02_500ml.png\" alt=\"\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"entry\">
\t\t\t\t\t\t<h6 class=\"title\">mongo萌狗
\t\t\t\t\t\t\t<br />寵物犬專用沐浴精</h6>
\t\t\t\t\t\t<span class=\"number\"></span>
\t\t\t\t\t\t<p class=\"caption\">02 敏感肌膚</p>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"item\">
\t\t\t\t<a href=\"product_detail.html\">
\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t<img src=\"static/images/product/mongo_03_500ml.png\" alt=\"\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"entry\">
\t\t\t\t\t\t<h6 class=\"title\">mongo萌狗
\t\t\t\t\t\t\t<br />寵物犬專用沐浴精</h6>
\t\t\t\t\t\t<span class=\"number\"></span>
\t\t\t\t\t\t<p class=\"caption\">03 驅除蟲蚤</p>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div> ";
    }

    public function getTemplateName()
    {
        return "product_detail.html";
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
