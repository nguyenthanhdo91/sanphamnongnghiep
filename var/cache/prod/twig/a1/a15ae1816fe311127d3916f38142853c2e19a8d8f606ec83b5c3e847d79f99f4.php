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

/* Block/footer.twig */
class __TwigTemplate_0f8834edc05bfe078adea0191a3d06193b087d78e3f2f6aec135e69f1322a02e extends \Eccube\Twig\Template
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
        echo "<div class=\"ec-footerRole\">

    <div class =\"footer-img\">
        <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/footer/bg-footer8.jpg"), "html", null, true);
        echo " \">
        <div class =\"foo-content-iterm\" >
            <h1 class =\"iterm-1\">Đăng kí để nhận cập nhật</h1> 
            <p class =\"iterm-2 foo-iterm-2\">Để lại email để không bỏ lỡ bất kì ưu đãi nào</p>  
            <p>
                <span class=\" email-dang-ky\">
                    <input type=\"email\" name=\"email-dang-ky\" value=\"\" class=\"form_dang_ky\" id=\"email-dang-ky\" aria-required=\"true\" aria-invalid=\"false\" placeholder=\"Email ...\">
                    <input type=\"submit\" value=\"Đăng ký\" class=\"form_dang_ky\" id=\"btn-gui\"><span class=\"ajax-loader\"></span></p>
                </span>
                  
                <br>
            </p>
        </div>
    </div>

    <div class=\"ec-footerRole__inner\">
        <div class=\"ec-footerAdress\">
            <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/footer/logo-new.png"), "html", null, true);
        echo " \" style =\" width: 186px;\">
            <p>319 C16 Lý Thường Kiệt, Phường 15, Quận 11, Tp.HCM</p>
            <p> <a href=\"tel:07043864536\">Điện thoại:<span> 070 4386 4536</span></a></p>
            <p><a href=\"mailto:thanhdodpk33@gmail.com\">Mail: <span> thanhdodpk33@gmail.com</span></a></p>
            <p><a href=\"skype:thanhdodpk33@gmail.com?chat\">Skype: <span> thanhdo nguyen</span></a></p>
        </div>
        <div class=\"ec-footermMenu\">
            <h3>MENU</h3>
            <p class =\"sub-ec-footermMenu\"><a href=\"#\">Trang chủ</a></p>
            <p><a href=\"#\">Giới thiệu</a></p>
            <p><a href=\"#\">Cửa hàng</a></p>
            <p><a href=\"#\">Kiến thức</a></p>
            <p><a href=\"#\">Liên hệ</a></p>
        </div>
        <div class=\"ec-footerCatalog\">
            <h3>SẢN PHẨM</h3>
            <p> <a href=\"#\">Rau củ</a></p>
            <p><a href=\"#\">Trái cây</a></p>
            <p><a href=\"#\">Đồ uống</a></p>
            <p><a href=\"#\">Đồ khô</a></p>
        </div>
        <div class=\"ec-footerContact\">
            <h3>INSTAGRAM</h3>
            <p> Instagram has returned invalid data.</p>
        </div>      
    </div>
    <div class=\"ec-footerTitle\">
        <div class=\"ec-footerTitle__copyright\">copyright (c) ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 58), "html", null, true);
        echo " all rights reserved.</div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Block/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 58,  62 => 31,  42 => 14,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/footer.twig", "C:\\wamp64\\www\\sanphamnong nghiep\\src\\Eccube\\Resource\\template\\default\\Block\\footer.twig");
    }
}
