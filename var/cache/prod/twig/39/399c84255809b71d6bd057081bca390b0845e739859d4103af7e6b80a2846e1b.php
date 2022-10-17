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

/* index.twig */
class __TwigTemplate_061442435ff4e4b6f67d431a8f021ac9cd749388806ec015d47c0c7d8ec08d4d extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["body_class"] = "front_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <style>
        ";
        // line 20
        echo "        .slick-slider img {       
          
          height:650px;
          width:100%;   
          margin-bottom:68px;
          margin-bottom:4em;
             
        }
       
        .slick-dots {
    
            list-style: none;
            display:none;
    
        }
";
        // line 85
        echo "
        ";
        // line 95
        echo "        .buton-stylist{
        font-size: 20px;
        color: #fff;
        margin-top: -8em;
        position: absolute;

      }
    
    .previous{
        border: 2px solid #fff;
        border-radius: 50%;
        padding: 4px 12px;
        margin-top: -18em;
        margin-left: 19px;
        position: absolute;
        font-size: 20px;
        color: #FFF;    

      }
    .next{
        border: 2px solid #fff;
        border-radius: 50%;
        padding: 4px 12px;
        margin-top: -18em;
        position: absolute;
        font-size: 20px;
        color: #fff;
        margin-left: 60em;
       
      }
    .next:hover{
        background-color: rgb(134, 186, 9);
        border:none;
        cursor:pointer;
    }
    .previous:hover{
        background-color: rgb(134, 186, 9);
        border:none;
        cursor:pointer;
    }
         
  #slick-slide00, #slick-slide01 {
    display:none;
  }
</style>
";
    }

    // line 142
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "    <script>
        \$(function() {
            \$('.main_visual').slick({
                dots: true,
                arrows: true,
                autoplay: true,
                autoplaySpeed: 4000,
                prevArrow: \$('.previous'),
                nextArrow: \$('.next'),
            });
        });
        
   </script>
";
    }

    // line 158
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 159
        echo "   
   <div class=\"ec-sliderRole\">
        <div class=\"main_visual\">
            <div class=\"item slick-slide\"><img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/slider28.jpg"), "html", null, true);
        echo "\" >
                <div class=\"sub-item\">
                    <h4 class=\"green\"><span>Walnuts</span></h4>
                    <h2>100% tự nhiên</h2>
                    <p>Giảm giá khi đặt mua ngay hôm nay</p>
                    <a href=\"#\">mua ngay</a>
                </div>
                <div class=\"sub-item-img\"><img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/imgslide13.png"), "html", null, true);
        echo " \" style=\"height:450px;\"></div>
            </div>
           <div class=\"item slick-slide\" ><img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/slider26.jpg"), "html", null, true);
        echo "\" >
                <div class=\"sub-item\">
                    <h4 class=\"green sub-green\"><span>Apple Juicea<span></h4>
                    <h2>100% tự nhiên</h2>
                    <p>Giảm giá khi đặt mua ngay hôm nay</p>
                    <a href=\"＃\" >mua ngay</a>
                </div>
                <div class=\"sub-item-img\"><img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/imgslide22.png"), "html", null, true);
        echo " \" style=\"height:450px;\"></div> 
            </div> 
        </div>   
        ";
        // line 182
        echo "            <div class=\"previous\"><i class=\"fas fa-chevron-left\"></i></div>
            <div class=\"next\"><i class=\"fas fa-chevron-right\"></i></div>
        ";
        // line 185
        echo "        
        <div
             class =\"fb-messenger\"><img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/fb-messenger.png"), "html", null, true);
        echo " \">
        </div>    
        <div class=\"ec-cartNavi\">
            <a href=\"";
        // line 190
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
        echo "\">
                ";
        // line 191
        echo twig_include($this->env, $context, "Block/cart.twig");
        echo "
            </a>    
        </div>  

    </div>


";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 191,  202 => 190,  196 => 187,  192 => 185,  188 => 182,  182 => 178,  172 => 171,  167 => 169,  157 => 162,  152 => 159,  148 => 158,  131 => 143,  127 => 142,  78 => 95,  75 => 85,  58 => 20,  55 => 16,  51 => 15,  46 => 11,  44 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "C:\\wamp64\\www\\sanphamnong nghiep\\src\\Eccube\\Resource\\template\\default\\index.twig");
    }
}
