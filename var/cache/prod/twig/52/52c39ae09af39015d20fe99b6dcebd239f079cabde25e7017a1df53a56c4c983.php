<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_846e9d5abfcb7210b0fef648cf684ee89876f7e91ba4a6a5896ad6db8ff89722 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'nav' => [$this, 'block_nav'],
            'banner' => [$this, 'block_banner'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\" class=\"no-js\">
    <head>
        ";
        // line 4
        $this->displayBlock('meta', $context, $blocks);
        // line 21
        echo "
        <title>";
        // line 22
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 42
        $this->displayBlock('nav', $context, $blocks);
        // line 65
        echo "
        ";
        // line 66
        $this->displayBlock('banner', $context, $blocks);
        // line 68
        echo "
        ";
        // line 69
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "
        ";
        // line 72
        $this->displayBlock('footer', $context, $blocks);
        // line 79
        echo "
        ";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 96
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_meta($context, array $blocks = [])
    {
        // line 5
        echo "            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            <!-- Favicon-->
            <link rel=\"shortcut icon\" href=\"img/fav.png\">
            <!-- Author Meta -->
            <meta name=\"author\" content=\"codepixer\">
            <!-- Meta Description -->
            <meta name=\"description\" content=\"\">
            <!-- Meta Keyword -->
            <meta name=\"keywords\" content=\"\">
            <!-- meta character set -->
            <meta charset=\"UTF-8\">
            <!-- Site Title -->
            <title>Job Listing</title>

            <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700\" rel=\"stylesheet\">
        ";
    }

    // line 22
    public function block_title($context, array $blocks = [])
    {
        echo "Welcome!";
    }

    // line 24
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 25
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/linearicons.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap2.css.map"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main2.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/common.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 42
    public function block_nav($context, array $blocks = [])
    {
        // line 43
        echo "            <header id=\"header\" id=\"home\">
                <div class=\"container\">
                    <div class=\"row align-items-center justify-content-between d-flex\">
                        <div id=\"logo\">
                            <a href=";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "><img src=\"img/logo.png\" alt=\"\" title=\"\" style=\"width:158px;height:30px;\"/></a>
                        </div>
                        <nav id=\"nav-menu-container\">
                            <ul class=\"nav-menu\">
                                <li class=\"menu-active\"><a href=";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo ">Home</a></li>
                                <li class=\"menu-active\"><a href=";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo ">Les Offres</a></li>
                                <li class=\"menu-active\"><a href=";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo ">Les Formations</a></li>
                                <li class=\"menu-active\"><a href=";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo ">Crowdfundings</a></li>
                                <li class=\"menu-active\"><a href=";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo ">Forum</a></li>

                                <li><a class=\"ticker-btn\" href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Signup</a></li>
                                <li><a class=\"ticker-btn\" href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Login</a></li>
                            </ul>
                        </nav><!-- #nav-menu-container -->
                    </div>
                </div>
            </header><!-- #header -->
        ";
    }

    // line 66
    public function block_banner($context, array $blocks = [])
    {
        // line 67
        echo "        ";
    }

    // line 69
    public function block_content($context, array $blocks = [])
    {
        // line 70
        echo "        ";
    }

    // line 72
    public function block_footer($context, array $blocks = [])
    {
        // line 73
        echo "            <footer class=\"footer-area section-gap\">
                        <p class=\"footer-text text-white\" align=\"center\">
                           Copyright All rights reserved <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"\" target=\"_blank\">Shadowteam</a>
                        </p>
            </footer>
        ";
    }

    // line 80
    public function block_javascripts($context, array $blocks = [])
    {
        // line 81
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/superfish.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 92,  296 => 91,  292 => 90,  288 => 89,  284 => 88,  280 => 87,  276 => 86,  272 => 85,  268 => 84,  264 => 83,  260 => 82,  255 => 81,  252 => 80,  243 => 73,  240 => 72,  236 => 70,  233 => 69,  229 => 67,  226 => 66,  215 => 58,  211 => 57,  206 => 55,  202 => 54,  198 => 53,  194 => 52,  190 => 51,  183 => 47,  177 => 43,  174 => 42,  168 => 36,  164 => 35,  160 => 34,  156 => 33,  152 => 32,  148 => 31,  144 => 30,  140 => 29,  136 => 28,  132 => 27,  128 => 26,  123 => 25,  120 => 24,  114 => 22,  95 => 5,  92 => 4,  86 => 96,  84 => 80,  81 => 79,  79 => 72,  76 => 71,  74 => 69,  71 => 68,  69 => 66,  66 => 65,  64 => 42,  58 => 39,  55 => 38,  53 => 24,  48 => 22,  45 => 21,  43 => 4,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\wamp64\\www\\SmartStartWEB\\app\\Resources\\views\\base.html.twig");
    }
}
