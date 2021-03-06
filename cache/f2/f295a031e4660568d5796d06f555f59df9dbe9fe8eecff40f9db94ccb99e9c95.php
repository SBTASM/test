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

/* layouts/main.twig */
class __TwigTemplate_14a37e3ece92c81c92e424fd12e9547d1c40bb836734dff8a84a7c185378c969 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]>\t\t\t<html class=\"ie ie8\"> <![endif]-->
<!--[if IE 9]>\t\t\t<html class=\"ie ie9\"> <![endif]-->
<!--[if gt IE 9]><!-->\t<html> <!--<![endif]-->
<head>

    <!-- Meta -->
    <meta charset=\"utf-8\">
    <meta name=\"keywords\" content=\"Test\" />
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Mobile Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- Favicons -->
    <link rel=\"shortcut icon\" href=\"views/assets/img/favicon.ico\">

    <!-- Google Fonts & Fontawesome -->
    <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,100,300,300italic,100italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"views/assets/css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"views/assets/js/vendor/slick/slick.css\">
    <link rel=\"stylesheet\" href=\"views/assets/css/style.css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- JS - MEDIAQUERIES -->
    <script src=\"views/assets/js/css3-mediaqueries.js\"></script>

</head>
<body>

<div class=\"container wrapper\">

    <!-- Main Content -->
    <div class=\"main-content container\">
        <div class=\"col-md-8 block-1\">
            <!-- Category Blocks -->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"cat-blocks\">
                        <h4><span>News</span></h4>
                        <div class=\"row\">
                            ";
        // line 56
        $this->displayBlock('main', $context, $blocks);
        // line 57
        echo "                        </div>
                        <div class=\"space40\"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <aside class=\"col-md-4\">

            <!-- Popular News -->
            <div class=\"side-widget p-news\">
                <h5><span>Popular news</span></h5>
                <div class=\"sw-inner\">
                    <ul>
                        <li>
                            <img src=\"views/assets/images/aside/1.jpg\" alt=\"\"/>
                            <div class=\"pn-info\">
                                <span>Unauthorized</span>
                                <h4><a href=\"#\">Lorem Ipsum Dolor Sit Amet, Consetetuer Adipiscing Elit</a></h4>
                            </div>
                        </li>
                        <li>
                            <img src=\"views/assets/images/aside/2.jpg\" alt=\"\"/>
                            <div class=\"pn-info\">
                                <span>Unauthorized</span>
                                <h4><a href=\"#\">Lorem Ipsum Dolor Sit Amet, Consetetuer Adipiscing Elit</a></h4>
                            </div>
                        </li>
                        <li>
                            <img src=\"views/assets/images/aside/3.jpg\" alt=\"\"/>
                            <div class=\"pn-info\">
                                <span>Unauthorized</span>
                                <h4><a href=\"#\">Lorem Ipsum Dolor Sit Amet, Consetetuer Adipiscing Elit</a></h4>
                            </div>
                        </li>
                        <li>
                            <img src=\"views/assets/images/aside/4.jpg\" alt=\"\"/>
                            <div class=\"pn-info\">
                                <span>Unauthorized</span>
                                <h4><a href=\"#\">Lorem Ipsum Dolor Sit Amet, Consetetuer Adipiscing Elit</a></h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Banner -->
            <div class=\"side-widget sw-banner\">
                <a href=\"#\"><img src=\"views/assets/images/banner/2.jpg\" class=\"img-responsive\" alt=\"\"/></a>
            </div>
        </aside>
    </div>

    <!-- Footer - Fixed -->
    <div class=\"footer-fixed\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <ul class=\"footer-nav\">
                    <li><a href=\"/\"><i class=\"glyphicon glyphicon-home\"></i>&nbsp;Home</a></li>
                    <li><a href=\"?r=main/create\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;Create news</a></li>
                </ul>
            </div>
            <div class=\"col-md-6\">
                <!-- Оригинальный копирайт темы -->
                <p class=\"copy1\">Copyright &copy; 2014 Gazeta. Web Design by PremiumLayersi <a href=\"#\" class=\"fa fa-arrow-up\"></a></p>
            </div>
        </div>
    </div>
</div>

<div class=\"clearfix space30\"></div>

<!-- Javascript -->
<script src=\"views/assets/js/jquery.min.js\"></script>
<script src=\"views/assets/js/bootstrap.min.js\"></script>
<script src=\"views/assets/js/vendor/slick/slick.js\"></script>
<script src=\"views/assets/js/jquery.nicescroll.js\"></script>
<script src=\"views/assets/js/main.js\"></script>
<script src=\"http://code.jquery.com/jquery-1.11.0.min.js\"></script>
<script src=\"views/assets/js/jquery.loading.min.js\"></script>

</body>
</html>
";
    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 56
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layouts/main.twig";
    }

    public function getDebugInfo()
    {
        return array (  195 => 56,  189 => 13,  101 => 57,  99 => 56,  53 => 13,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--[if IE 8]>\t\t\t<html class=\"ie ie8\"> <![endif]-->
<!--[if IE 9]>\t\t\t<html class=\"ie ie9\"> <![endif]-->
<!--[if gt IE 9]><!-->\t<html> <!--<![endif]-->
<head>

    <!-- Meta -->
    <meta charset=\"utf-8\">
    <meta name=\"keywords\" content=\"Test\" />
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>{% block title %}{% endblock %}</title>

    <!-- Mobile Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- Favicons -->
    <link rel=\"shortcut icon\" href=\"views/assets/img/favicon.ico\">

    <!-- Google Fonts & Fontawesome -->
    <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,100,300,300italic,100italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"views/assets/css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"views/assets/js/vendor/slick/slick.css\">
    <link rel=\"stylesheet\" href=\"views/assets/css/style.css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- JS - MEDIAQUERIES -->
    <script src=\"views/assets/js/css3-mediaqueries.js\"></script>

</head>
<body>

<div class=\"container wrapper\">

    <!-- Main Content -->
    <div class=\"main-content container\">
        <div class=\"col-md-8 block-1\">
            <!-- Category Blocks -->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"cat-blocks\">
                        <h4><span>News</span></h4>
                        <div class=\"row\">
                            {% block main %}{%  endblock %}
                        </div>
                        <div class=\"space40\"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <aside class=\"col-md-4\">

            <!-- Popular News -->
            <div class=\"side-widget p-news\">
                <h5><span>Popular news</span></h5>
                <div class=\"sw-inner\">
                    <ul>
                        <li>
                            <img src=\"views/assets/images/aside/1.jpg\" alt=\"\"/>
                            <div class=\"pn-info\">
                                <span>Unauthorized</span>
                                <h4><a href=\"#\">Lorem Ipsum Dolor Sit Amet, Consetetuer Adipiscing Elit</a></h4>
                            </div>
                        </li>
                        <li>
                            <img src=\"views/assets/images/aside/2.jpg\" alt=\"\"/>
                            <div class=\"pn-info\">
                                <span>Unauthorized</span>
                                <h4><a href=\"#\">Lorem Ipsum Dolor Sit Amet, Consetetuer Adipiscing Elit</a></h4>
                            </div>
                        </li>
                        <li>
                            <img src=\"views/assets/images/aside/3.jpg\" alt=\"\"/>
                            <div class=\"pn-info\">
                                <span>Unauthorized</span>
                                <h4><a href=\"#\">Lorem Ipsum Dolor Sit Amet, Consetetuer Adipiscing Elit</a></h4>
                            </div>
                        </li>
                        <li>
                            <img src=\"views/assets/images/aside/4.jpg\" alt=\"\"/>
                            <div class=\"pn-info\">
                                <span>Unauthorized</span>
                                <h4><a href=\"#\">Lorem Ipsum Dolor Sit Amet, Consetetuer Adipiscing Elit</a></h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Banner -->
            <div class=\"side-widget sw-banner\">
                <a href=\"#\"><img src=\"views/assets/images/banner/2.jpg\" class=\"img-responsive\" alt=\"\"/></a>
            </div>
        </aside>
    </div>

    <!-- Footer - Fixed -->
    <div class=\"footer-fixed\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <ul class=\"footer-nav\">
                    <li><a href=\"/\"><i class=\"glyphicon glyphicon-home\"></i>&nbsp;Home</a></li>
                    <li><a href=\"?r=main/create\"><i class=\"glyphicon glyphicon-plus\"></i>&nbsp;Create news</a></li>
                </ul>
            </div>
            <div class=\"col-md-6\">
                <!-- Оригинальный копирайт темы -->
                <p class=\"copy1\">Copyright &copy; 2014 Gazeta. Web Design by PremiumLayersi <a href=\"#\" class=\"fa fa-arrow-up\"></a></p>
            </div>
        </div>
    </div>
</div>

<div class=\"clearfix space30\"></div>

<!-- Javascript -->
<script src=\"views/assets/js/jquery.min.js\"></script>
<script src=\"views/assets/js/bootstrap.min.js\"></script>
<script src=\"views/assets/js/vendor/slick/slick.js\"></script>
<script src=\"views/assets/js/jquery.nicescroll.js\"></script>
<script src=\"views/assets/js/main.js\"></script>
<script src=\"http://code.jquery.com/jquery-1.11.0.min.js\"></script>
<script src=\"views/assets/js/jquery.loading.min.js\"></script>

</body>
</html>
", "layouts/main.twig", "C:\\OSPanel\\domains\\localhost\\views\\layouts\\main.twig");
    }
}
