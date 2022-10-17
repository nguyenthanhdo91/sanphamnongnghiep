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

/* Block/cart.twig */
class __TwigTemplate_05708642b2d49f4ea89f990046bc44b6ef96f2ea47efe1bf8ffa106c7bd044ec extends \Eccube\Twig\Template
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
        $context["Carts"] = $this->extensions['Eccube\Twig\Extension\CartServiceExtension']->get_all_carts();
        // line 12
        $context["totalPrice"] = $this->extensions['Eccube\Twig\Extension\CartServiceExtension']->get_carts_total_price();
        // line 13
        $context["totalQuantity"] = $this->extensions['Eccube\Twig\Extension\CartServiceExtension']->get_carts_total_quantity();
        // line 14
        echo "<div class=\"ec-cartNaviWrap\">
    <div class=\"ec-cartNavi\">
        
        <i class=\"ec-cartNavi__icon fas fa-shopping-cart\">
            <span class=\"ec-cartNavi__badge\">";
        // line 18
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["totalQuantity"] ?? null)), "html", null, true);
        echo "</span>
        </i>
        <div class=\"ec-cartNavi__label\">
            <div class=\"ec-cartNavi__price\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(($context["totalPrice"] ?? null)), "html", null, true);
        echo "</div>
        </div>
    </div>
    ";
        // line 24
        if ((($context["totalQuantity"] ?? null) > 0)) {
            // line 25
            echo "        <div class=\"ec-cartNaviIsset\">
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Carts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Cart"]) {
                // line 27
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Cart"], "CartItems", [], "any", false, false, false, 27));
                foreach ($context['_seq'] as $context["_key"] => $context["CartItem"]) {
                    // line 28
                    echo "                    ";
                    $context["ProductClass"] = twig_get_attribute($this->env, $this->source, $context["CartItem"], "ProductClass", [], "any", false, false, false, 28);
                    // line 29
                    echo "                    ";
                    $context["Product"] = twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "Product", [], "any", false, false, false, 29);
                    // line 30
                    echo "                    <div class=\"ec-cartNaviIsset__cart\">
                        <div class=\"ec-cartNaviIsset__cartImage\">
                            <img src=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "MainListImage", [], "any", false, false, false, 32)), "save_image"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, false, 32), "html", null, true);
                    echo "\">
                        </div>
                        <div class=\"ec-cartNaviIsset__cartContent\">
                            <div class=\"ec-cartNaviIsset__cartContentTitle\">";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, false, 35), "html", null, true);
                    echo "
                                <div class=\"ec-font-size-1\">
                                    ";
                    // line 37
                    if ((twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory1", [], "any", false, false, false, 37) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory1", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37))) {
                        // line 38
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory1", [], "any", false, false, false, 38), "ClassName", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory1", [], "any", false, false, false, 38), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 40
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory2", [], "any", false, false, false, 40) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory2", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40))) {
                        // line 41
                        echo "                                        <br>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory2", [], "any", false, false, false, 41), "ClassName", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory2", [], "any", false, false, false, 41), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 43
                    echo "                                </div>
                            </div>
                            <div class=\"ec-cartNaviIsset__cartContentPrice\">
                                ";
                    // line 46
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["CartItem"], "price", [], "any", false, false, false, 46)), "html", null, true);
                    echo "
                                <div class=\"ec-cartNaviIsset__cartContentTax\">";
                    // line 47
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Thuế"), "html", null, true);
                    echo "</div>
                            </div>
                            <div class=\"ec-cartNaviIsset__cartContentNumber\">";
                    // line 49
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Số lượng"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CartItem"], "quantity", [], "any", false, false, false, 49)), "html", null, true);
                    echo "</div>
                        </div>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CartItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Cart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "            <div class=\"ec-cartNaviIsset__action\">
                <a class=\"ec-blockBtn--action\" href=\"";
            // line 55
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Thanh toán"), "html", null, true);
            echo "</a>
                <a class=\"ec-blockBtn ec-cartNavi--cancel\">";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Hủy"), "html", null, true);
            echo "</a>
            </div>
        </div>
    ";
        } else {
            // line 60
            echo "        <div class=\"ec-cartNaviNull\">
            <div class=\"ec-cartNaviNull__message\">
                <p>";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Hiện tại trong giỏ hàng không có sản phẩm"), "html", null, true);
            echo "</p>
            </div>
        </div>
    ";
        }
        // line 66
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "Block/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 66,  171 => 62,  167 => 60,  160 => 56,  154 => 55,  151 => 54,  145 => 53,  133 => 49,  128 => 47,  124 => 46,  119 => 43,  111 => 41,  108 => 40,  100 => 38,  98 => 37,  93 => 35,  85 => 32,  81 => 30,  78 => 29,  75 => 28,  70 => 27,  66 => 26,  63 => 25,  61 => 24,  55 => 21,  49 => 18,  43 => 14,  41 => 13,  39 => 12,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/cart.twig", "C:\\wamp64\\www\\sanphamnong nghiep\\src\\Eccube\\Resource\\template\\default\\Block\\cart.twig");
    }
}
