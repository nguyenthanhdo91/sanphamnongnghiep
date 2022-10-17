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

/* Block/new_item.twig */
class __TwigTemplate_749f66361c137853950564a29c1faffe208dcf7d4cd79973fd18d5d7d871321f extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 137
        echo "
 ";
        // line 138
        $this->displayBlock('javascript', $context, $blocks);
        // line 150
        echo "

<div class=\"ec-role\">
    <div class=\"ec-newItemRole\">
            <div class=\"ItemRole__listItem column-content autoplay \"> 
                <div class =\"cart-style sub-cart\" style=\"width: 272px \"  >
                    <figure>
                        <a href=\"";
        // line 157
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "3"]);
        echo "\">
                            <img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product-1-470x470.jpg", "save_image"), "html", null, true);
        echo "\">
                            <p class=\"ec-newItemRole__listItemTitle sub-listItemTitle\">";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Táo Xanh"), "html", null, true);
        echo "</p>
                            <p class=\"ec-newItemRole__listItemPrice sub-listItemPrice\">";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥1,200(税込)"), "html", null, true);
        echo "</p>
                        </a>
                    </figure>                
                </div>        
                <div class =\"cart-style sub-cart\" style=\"width: 272px \" >
                    <figure>
                        <a href=\"";
        // line 166
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "4"]);
        echo "\">
                            <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("nhoxanh.jpg", "save_image"), "html", null, true);
        echo "\">
                            <p class=\"ec-newItemRole__listItemTitle sub-listItemTitle\">";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nho Xanh"), "html", null, true);
        echo "</p>
                            <p class=\"ec-newItemRole__listItemPrice sub-listItemPrice\">";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥800(税込)"), "html", null, true);
        echo "</p>
                        </a>
                    </figure>
                </div>
                <div class =\"cart-style sub-cart\" style=\"width: 272px \">
                    <figure>
                        <a href=\"";
        // line 175
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "4"]);
        echo "\">
                            <img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product-7-470x470.jpg", "save_image"), "html", null, true);
        echo "\">
                            <p class=\"ec-newItemRole__listItemTitle sub-listItemTitle\">";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Chanh"), "html", null, true);
        echo "</p>
                            <p class=\"ec-newItemRole__listItemPrice sub-listItemPrice\">";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥800(税込)"), "html", null, true);
        echo "</p>
                        </a>
                    </figure>
                </div>
                <div class =\"cart-style sub-cart\" style=\"width: 272px \" >
                    <figure>
                        <a href=\"";
        // line 184
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "4"]);
        echo "\">
                            <img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product-23-470x470.jpg", "save_image"), "html", null, true);
        echo "\">
                            <p class=\"ec-newItemRole__listItemTitle sub-listItemTitle\">";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dứa"), "html", null, true);
        echo "</p>
                            <p class=\"ec-newItemRole__listItemPrice sub-listItemPrice\">";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥800(税込)"), "html", null, true);
        echo "</p>
                        </a>
                    </figure>
                </div>  
                <div class =\"cart-style sub-cart\" style=\"width: 272px \"  >
                    <figure>
                        <a href=\"";
        // line 193
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "3"]);
        echo "\">
                            <img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product-1-470x470.jpg", "save_image"), "html", null, true);
        echo "\">
                            <p class=\"ec-newItemRole__listItemTitle sub-listItemTitle\">";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Táo Xanh"), "html", null, true);
        echo "</p>
                            <p class=\"ec-newItemRole__listItemPrice sub-listItemPrice\">";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥1,200(税込)"), "html", null, true);
        echo "</p>
                        </a>
                    </figure>                
                </div>        
                <div class =\"cart-style sub-cart\"  style=\"width: 272px \">
                    <figure>
                        <a href=\"";
        // line 202
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "4"]);
        echo "\">
                            <img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("nhoxanh.jpg", "save_image"), "html", null, true);
        echo "\">
                            <p class=\"ec-newItemRole__listItemTitle sub-listItemTitle\">";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nho Xanh"), "html", null, true);
        echo "</p>
                            <p class=\"ec-newItemRole__listItemPrice sub-listItemPrice\">";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥800(税込)"), "html", null, true);
        echo "</p>
                        </a>
                    </figure>
                </div>
                <div class =\"cart-style sub-cart\" style=\"width: 272px \" >
                    <figure>
                        <a href=\"";
        // line 211
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "4"]);
        echo "\">
                            <img src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product-7-470x470.jpg", "save_image"), "html", null, true);
        echo "\">
                            <p class=\"ec-newItemRole__listItemTitle sub-listItemTitle\">";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Chanh"), "html", null, true);
        echo "</p>
                            <p class=\"ec-newItemRole__listItemPrice sub-listItemPrice\">";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥800(税込)"), "html", null, true);
        echo "</p>
                        </a>
                    </figure>
                </div>
                <div class =\"cart-style sub-cart\"  style=\"width: 272px \">
                    <figure>
                        <a href=\"";
        // line 220
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "4"]);
        echo "\">
                            <img src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product-23-470x470.jpg", "save_image"), "html", null, true);
        echo "\">
                            <p class=\"ec-newItemRole__listItemTitle sub-listItemTitle\">";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dứa"), "html", null, true);
        echo "</p>
                            <p class=\"ec-newItemRole__listItemPrice sub-listItemPrice\">";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥800(税込)"), "html", null, true);
        echo "</p>
                        </a>
                    </figure>
                </div>
                <div class =\"cart-style sub-cart\" style=\"width: 272px \" >
                    <figure>
                        <a href=\"";
        // line 229
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "3"]);
        echo "\">
                            <img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product-2-470x470.jpg", "save_image"), "html", null, true);
        echo "\">
                            <p class=\"ec-newItemRole__listItemTitle sub-listItemTitle\">";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Xoài"), "html", null, true);
        echo "</p>
                            <p class=\"ec-newItemRole__listItemPrice sub-listItemPrice\">";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥1,200(税込)"), "html", null, true);
        echo "</p>
                        </a>
                    </figure>                
                </div>        
                <div class =\"cart-style sub-cart\" style=\"width: 272px \">
                    <figure>
                        <a href=\"";
        // line 238
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "4"]);
        echo "\">
                            <img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product-4-470x470.jpg", "save_image"), "html", null, true);
        echo "\">
                            <p class=\"ec-newItemRole__listItemTitle sub-listItemTitle\">";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Bông cải"), "html", null, true);
        echo "</p>
                            <p class=\"ec-newItemRole__listItemPrice sub-listItemPrice\">";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥800(税込)"), "html", null, true);
        echo "</p>
                        </a>
                    </figure>
                </div>
                <div class =\"cart-style sub-cart\" style=\"width: 272px \">
                    <figure>
                        <a href=\"";
        // line 247
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "4"]);
        echo "\">
                            <img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product-15-470x470.jpg", "save_image"), "html", null, true);
        echo "\">
                            <p class=\"ec-newItemRole__listItemTitle sub-listItemTitle\">";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Chanh dây"), "html", null, true);
        echo "</p>
                            <p class=\"ec-newItemRole__listItemPrice sub-listItemPrice\">";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥800(税込)"), "html", null, true);
        echo "</p>
                        </a>
                    </figure>
                </div>
                <div class =\"cart-style sub-cart\" style=\"width: 272px \">
                    <figure>
                        <a href=\"";
        // line 256
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "4"]);
        echo "\">
                            <img src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("product-25-470x470.jpg", "save_image"), "html", null, true);
        echo "\">
                            <p class=\"ec-newItemRole__listItemTitle sub-listItemTitle\">";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("lựu"), "html", null, true);
        echo "</p>
                            <p class=\"ec-newItemRole__listItemPrice sub-listItemPrice\">";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥800(税込)"), "html", null, true);
        echo "</p>
                        </a>
                    </figure>
                </div>
            </div>  
    </div>
    
</div>
";
    }

    // line 12
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    <style>
       .slick-prev .slick-arrow {
            display: none;
       }

       .ec-newItemRole__list .cart-style {
            border: 1px solid rgba(173, 171, 171, 0.2);
            width: 270px;
            height: 382px ;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }
        .cart-style img {
            width: 270px ;
            height: 270px;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            width :calc(100%/4);
                  
        }
        

          .cart-style:hover{
            border: 1px solid rgba(173, 171, 171, 0.6);
            cursor: pointer;
            box-shadow:3px 3px 3px rgba(205, 203, 203, 0.2), -3px -3px 3px rgba(205, 203, 203, 0.2);
            /* box-shadow: 1px 1px 1px 1px rgba(173, 171, 171, 0.4); */
              }
        
                
        .ItemRole__listItem figure img {
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transition: .3s ease-in-out;
            transition: .3s ease-in-out;
                      
        }
        .ItemRole__listItem figure:hover img {
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }
        
        .column-content {
            /* margin: 15px 15px 0; */
            padding: 0;
            margin-top: 24px;
        }
        .column-content:last-child {
            padding-bottom: 60px;
        }
        .column-content::after {
            content: '';
            clear: both;
            display: block;
        }
        .column-content div {
            position: relative;
            float: left;
            margin: 14px;    
            /* margin: -10px 10em 10em 10em; */
            padding: 0;
        }
        .ec-role .column-content div:first-child {
            margin-left: 0;
        }
        
        .ItemRole__listItem figure {
            width: 270px !important;
            height: 270px;
            margin: 0;
            padding: 0;
            /* background: #fff; */
            overflow: hidden;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
         
        }
        .newItemRole__listItem {
            margin-top: -4px;
        }
        .autoplay{
           
            display: flex;
            
        }
        p.ec-newItemRole__listItemTitle.sub-listItemTitle {
            margin-left: 85px;
            font-weight: 600;
            position: absolute;
            padding: 10px;
            margin-top: 20px;
            font-size:16px; 
        }
          ";
        // line 120
        echo "        button.slick-prev.slick-arrow {
            display: none;
        }
         ";
        // line 127
        echo "         .ItemRole__listItem.column-content.newItemRole__listItem.slick-initialized.slick-slider {
            margin-top: -2.3em;
        }
        ";
        // line 134
        echo "
    </style>
";
    }

    // line 138
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 139
        echo "    ";
    }

    public function getTemplateName()
    {
        return "Block/new_item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 139,  435 => 138,  429 => 134,  424 => 127,  419 => 120,  318 => 13,  314 => 12,  301 => 259,  297 => 258,  293 => 257,  289 => 256,  280 => 250,  276 => 249,  272 => 248,  268 => 247,  259 => 241,  255 => 240,  251 => 239,  247 => 238,  238 => 232,  234 => 231,  230 => 230,  226 => 229,  217 => 223,  213 => 222,  209 => 221,  205 => 220,  196 => 214,  192 => 213,  188 => 212,  184 => 211,  175 => 205,  171 => 204,  167 => 203,  163 => 202,  154 => 196,  150 => 195,  146 => 194,  142 => 193,  133 => 187,  129 => 186,  125 => 185,  121 => 184,  112 => 178,  108 => 177,  104 => 176,  100 => 175,  91 => 169,  87 => 168,  83 => 167,  79 => 166,  70 => 160,  66 => 159,  62 => 158,  58 => 157,  49 => 150,  47 => 138,  44 => 137,  42 => 12,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/new_item.twig", "C:\\wamp64\\www\\sanphamnong nghiep\\src\\Eccube\\Resource\\template\\default\\Block\\new_item.twig");
    }
}
