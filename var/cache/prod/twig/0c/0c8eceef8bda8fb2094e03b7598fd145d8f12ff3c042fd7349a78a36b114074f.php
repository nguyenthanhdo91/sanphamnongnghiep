<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Block/topic.twig */
class __TwigTemplate_0df34e9465ffa8eded6b34d63c421858299c3368bec5a23a681c84edfc3f8c2c extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "<div class=\"ec-topicRole\">
    <div class=\"ec-role\">
        <div class=\"ec-secHeading\">
            <h1>Sản phẩm nổi bật</h1>
            <span class=\"ec-secHeading__en style-color \"><a href=\"#moinhat\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mới nhất  "), "html", null, true);
        echo "</a></span>
            <span class=\"ec-secHeading__en\"><a href=\"#giamgia\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("giảm giá  "), "html", null, true);
        echo "</a></span>
            <span class=\"ec-secHeading__en\"><a href=\"#banchay\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bán chạy"), "html", null, true);
        echo "</a></span>
        </div>

        <div class=\"ItemRole__listItem column-content\" id =\"moinhat\">          
            <div class =\"cart-style\">
                <figure>
                    <a href=\"";
        // line 23
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "3"]);
        echo "\">
                        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product-1-470x470.jpg", "save_image"), "html", null, true);
        echo "\">
                        <p class=\"ec-newItemRole__listItemTitle\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Táo Xanh"), "html", null, true);
        echo "</p>
                        <p class=\"ec-newItemRole__listItemPrice\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥1,200(税込)"), "html", null, true);
        echo "</p>
                    </a>
                </figure>                
            </div>        
            <div class =\"cart-style\">
                <figure>
                    <a href=\"";
        // line 32
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "17"]);
        echo "\">
                        <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("nhoxanh.jpg", "save_image"), "html", null, true);
        echo "\">
                        <p class=\"ec-newItemRole__listItemTitle\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nho Xanh"), "html", null, true);
        echo "</p>
                        <p class=\"ec-newItemRole__listItemPrice\">";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥800(税込)"), "html", null, true);
        echo "</p>
                    </a>
                </figure>
            </div>
            <div class =\"cart-style\">
                <figure>
                    <a href=\"";
        // line 41
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "4"]);
        echo "\">
                        <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product-7-470x470.jpg", "save_image"), "html", null, true);
        echo "\">
                        <p class=\"ec-newItemRole__listItemTitle\">";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Chanh"), "html", null, true);
        echo "</p>
                        <p class=\"ec-newItemRole__listItemPrice\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥800(税込)"), "html", null, true);
        echo "</p>
                    </a>
                </figure>
             </div>
            <div class =\"cart-style\">
                <figure>
                    <a href=\"";
        // line 50
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "4"]);
        echo "\">
                        <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product-23-470x470.jpg", "save_image"), "html", null, true);
        echo "\">
                        <p class=\"ec-newItemRole__listItemTitle\">";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dứa"), "html", null, true);
        echo "</p>
                        <p class=\"ec-newItemRole__listItemPrice\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥800(税込)"), "html", null, true);
        echo "</p>
                    </a>
                </figure>
            </div>
           
        </div>
        <div class=\"ItemRole__listItem column-content\" id =\"giamgia\">          
            <div class =\"cart-style\">
                <figure>
                    <a href=\"";
        // line 62
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "3"]);
        echo "\">
                        <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product-6-470x470.jpg", "save_image"), "html", null, true);
        echo "\">
                        <p class=\"ec-newItemRole__listItemTitle\">";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Óc Chó"), "html", null, true);
        echo "</p>
                        <p class=\"ec-newItemRole__listItemPrice\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥1,200(税込)"), "html", null, true);
        echo "</p>
                    </a>
                </figure>                
            </div>        
            <div class =\"cart-style\">
                <figure>
                    <a href=\"";
        // line 71
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "4"]);
        echo "\">
                        <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product-24-470x470.jpg", "save_image"), "html", null, true);
        echo "\">
                        <p class=\"ec-newItemRole__listItemTitle\">";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Đào"), "html", null, true);
        echo "</p>
                        <p class=\"ec-newItemRole__listItemPrice\">";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥800(税込)"), "html", null, true);
        echo "</p>
                    </a>
                </figure>
            </div>
            <div class =\"cart-style\">
                <figure>
                    <a href=\"";
        // line 80
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "4"]);
        echo "\">
                        <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product-22-470x470.jpg", "save_image"), "html", null, true);
        echo "\">
                        <p class=\"ec-newItemRole__listItemTitle\">";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cà Chua"), "html", null, true);
        echo "</p>
                        <p class=\"ec-newItemRole__listItemPrice\">";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥800(税込)"), "html", null, true);
        echo "</p>
                    </a>
                </figure>
             </div>
            <div class =\"cart-style\">
                <figure>
                    <a href=\"";
        // line 89
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "4"]);
        echo "\">
                        <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product-11-470x470.jpg", "save_image"), "html", null, true);
        echo "\">
                        <p class=\"ec-newItemRole__listItemTitle\">";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dừa Sáp"), "html", null, true);
        echo "</p>
                        <p class=\"ec-newItemRole__listItemPrice\">";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥800(税込)"), "html", null, true);
        echo "</p>
                    </a>
                </figure>
            </div>
           
        </div>
        <div class=\"ItemRole__listItem column-content\" id =\"banchay\">          
            <div class =\"cart-style\">
                <figure>
                    <a href=\"";
        // line 101
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "3"]);
        echo "\">
                        <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product-2-470x470.jpg", "save_image"), "html", null, true);
        echo "\">
                        <p class=\"ec-newItemRole__listItemTitle\">";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Xoài"), "html", null, true);
        echo "</p>
                        <p class=\"ec-newItemRole__listItemPrice\">";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥1,200(税込)"), "html", null, true);
        echo "</p>
                    </a>
                </figure>                
            </div>        
            <div class =\"cart-style\">
                <figure>
                    <a href=\"";
        // line 110
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "4"]);
        echo "\">
                        <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product-4-470x470.jpg", "save_image"), "html", null, true);
        echo "\">
                        <p class=\"ec-newItemRole__listItemTitle\">";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Bông Cải"), "html", null, true);
        echo "</p>
                        <p class=\"ec-newItemRole__listItemPrice\">";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥800(税込)"), "html", null, true);
        echo "</p>
                    </a>
                </figure>
            </div>
            <div class =\"cart-style\">
                <figure>
                    <a href=\"";
        // line 119
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "4"]);
        echo "\">
                        <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product-15-470x470.jpg", "save_image"), "html", null, true);
        echo "\">
                        <p class=\"ec-newItemRole__listItemTitle\">";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Chanh Dây"), "html", null, true);
        echo "</p>
                        <p class=\"ec-newItemRole__listItemPrice\">";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥800(税込)"), "html", null, true);
        echo "</p>
                    </a>
                </figure>
             </div>
            <div class =\"cart-style\">
                <figure>
                    <a href=\"";
        // line 128
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "4"]);
        echo "\">
                        <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product-25-470x470.jpg", "save_image"), "html", null, true);
        echo "\">
                        <p class=\"ec-newItemRole__listItemTitle\">";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Lựu"), "html", null, true);
        echo "</p>
                        <p class=\"ec-newItemRole__listItemPrice\">";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥800(税込)"), "html", null, true);
        echo "</p>
                    </a>
                </figure>
            </div>
           
        </div>
         <div class=\"ec-newItemRole__listItem\">
                <div class=\"ec-newItemRole__listItemHeading ec-secHeading--tandem\">
                    <span class=\"ec-secHeading__en\">";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("NEW ITEM"), "html", null, true);
        echo "</span>
                    <span class=\"ec-secHeading__line\"></span>
                    <span class=\"ec-secHeading__ja\">";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新着商品"), "html", null, true);
        echo "</span>
                    <a class=\"ec-inlineBtn--top\" href=\"";
        // line 142
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("more"), "html", null, true);
        echo "</a>
                </div>
            </div>
                
    </div>
    <div class=\"ec-banner\">             
        <img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("banner25.jpg", "save_image"), "html", null, true);
        echo "\">  
        <div class =\"content-iterm\" >
            <h1 class =\"iterm-1\">Khuyến Mãi Trong Tuần</h1> 
            <p class =\"iterm-2\">Cơ hội để gia đình bạn sở hữu những sản phẩm ưu đãi</p>  
        </div>
        <div class =\"text-content\" >
            <div class =\"sub-content-iterm\" >
                <p class =\"sub-iterm-1\">0</P> 
                <p class =\"sub-iterm-2\">giờ</p>  
            </div>     
           <div class =\"sub-content-iterm\" >
                <p class =\"sub-iterm-1\">0</P> 
                <p class =\"sub-iterm-2\">phút</p>  
            </div> 
            <div class =\"sub-content-iterm\" >
                <p class =\"sub-iterm-1\">0</P> 
                <p class =\"sub-iterm-2\">giây</p>  
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "Block/topic.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 148,  329 => 142,  325 => 141,  320 => 139,  309 => 131,  305 => 130,  301 => 129,  297 => 128,  288 => 122,  284 => 121,  280 => 120,  276 => 119,  267 => 113,  263 => 112,  259 => 111,  255 => 110,  246 => 104,  242 => 103,  238 => 102,  234 => 101,  222 => 92,  218 => 91,  214 => 90,  210 => 89,  201 => 83,  197 => 82,  193 => 81,  189 => 80,  180 => 74,  176 => 73,  172 => 72,  168 => 71,  159 => 65,  155 => 64,  151 => 63,  147 => 62,  135 => 53,  131 => 52,  127 => 51,  123 => 50,  114 => 44,  110 => 43,  106 => 42,  102 => 41,  93 => 35,  89 => 34,  85 => 33,  81 => 32,  72 => 26,  68 => 25,  64 => 24,  60 => 23,  51 => 17,  47 => 16,  43 => 15,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/topic.twig", "C:\\wamp64\\www\\sanphamnong nghiep\\app\\template\\default\\Block\\topic.twig");
    }
}
