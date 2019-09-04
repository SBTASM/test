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

/* errors/bad_data.twig */
class __TwigTemplate_aff7d9af83744cbe3f310de73a13649024a90a89fca6994efbb65b67e59ce466 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <center><h2>Bad data!</h2></center>
";
    }

    public function getTemplateName()
    {
        return "errors/bad_data.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block content %}
    <center><h2>Bad data!</h2></center>
{% endblock %}", "errors/bad_data.twig", "C:\\OSPanel\\domains\\localhost\\views\\errors\\bad_data.twig");
    }
}
