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

/* Block/eyecatch.twig */
class __TwigTemplate_8fbfced902cde545eb54bb0fdb98d3e9b955c7522bd079befcd3706600c5710b extends \Eccube\Twig\Template
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
        echo "
<div class=\"ec-role\">
    <div class=\"ec-eyecatchRole\">
        ";
        // line 39
        echo "        <div class=\"hover01 column\">
          <div class=\"row-item1\">
                <div>
                    <figure> <a href =\"#\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/banner28.jpg"), "html", null, true);
        echo "\" alt=\"\" role=\"presentation\" style=\"height:300px;  \"/></a></figure>
                    
                </div>
                <div>
                    <figure> <a href =\"#\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/banner34.jpg"), "html", null, true);
        echo "\" alt=\"\" role=\"presentation\" style=\"height:300px;  \"/></a></figure>
                    
                </div>
            </div>
            <div class=\"row-item2\">
                <div>
                    <figure> <a href =\"#\"><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/banner35.jpg"), "html", null, true);
        echo "\" alt=\"\" role=\"presentation\" style=\"height:300px;  \"/></a></figure>
                
                </div>
                <div >
                    <figure> <a href =\"#\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/banner36.jpg"), "html", null, true);
        echo "\" alt=\"\" role=\"presentation\" style=\"height:300px;  \"/></a></figure>
                
                </div>
            </div>
        </div>

    </div>
        
</div>
";
    }

    public function getTemplateName()
    {
        return "Block/eyecatch.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 56,  63 => 52,  54 => 46,  47 => 42,  42 => 39,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/eyecatch.twig", "C:\\wamp64\\www\\sanphamnong nghiep\\src\\Eccube\\Resource\\template\\default\\Block\\eyecatch.twig");
    }
}
