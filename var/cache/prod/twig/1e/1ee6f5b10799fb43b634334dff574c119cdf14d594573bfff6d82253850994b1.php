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

/* Block/header.twig */
class __TwigTemplate_49712f6c79f39f057395e68adca831f3c8ae2e77ae624ecf144df6f5f905b606 extends \Eccube\Twig\Template
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
        echo "<div class=\"ec-headerNaviRole \">
    <div class=\"ec-headerNaviRole__left\">
        <h1>
            <a href=\"";
        // line 14
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\">
                CLEVERFOOD
            </a>
        </h1>
         <div class=\"ec-headerNaviRole__search\">
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("block_search_product"));
        echo "
        </div>
        <div class=\"ec-headerRole__navSP\">
            ";
        // line 22
        echo twig_include($this->env, $context, "Block/nav_sp.twig");
        echo "
        </div>
    </div>
    <div class=\"ec-headerNaviRole__right\">
        <ul class=\"nav\">
            <li class =\"nav-stylist\"><a href=\"#\">Trang chủ</a></li>
            <li><a href=\"#\">giới thiệu</a></li>
            <li>
                <a href=\"#\">cửa hàng</a>
                <ul class=\"sub-menu\">
                <li><a href=\"#\">rau củ </a></li>
                    <li><a href=\"#\">trái cây </a></li>
                    <li><a href=\"#\">đồ uống</a></li>
                    <li><a href=\"#\">đồ khô</a></li>
                </ul>
            </li>
            <li><a href=\"\">kiến thức </a></li>
            <li><a href=\"\">liên hệ </a></li>
        </ul>   
        <div class =\"icon-iterm\">
            <div class=\"seach-icon\"><i class=\"fas fa-search\"></i></div>
            <a href=\"";
        // line 43
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_login");
        echo "\">
                <div class=\"user-icon\"><i class=\"fas fa-user\"></i></div>
            </a>
        </div> 
        
    </div>
</div> ";
    }

    public function getTemplateName()
    {
        return "Block/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 43,  56 => 22,  50 => 19,  42 => 14,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/header.twig", "C:\\wamp64\\www\\sanphamnong nghiep\\src\\Eccube\\Resource\\template\\default\\Block\\header.twig");
    }
}
