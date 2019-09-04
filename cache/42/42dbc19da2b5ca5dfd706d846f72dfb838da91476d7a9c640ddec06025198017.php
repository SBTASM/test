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

/* errors/404.twig */
class __TwigTemplate_e0617200b19565a26d729903731e021e5b1dea7e715a7acd056f770a5b14c646 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/errors.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layouts/errors.twig", "errors/404.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <figure>
    <div class=\"sad-mac\"></div>
    <figcaption>
        <span class=\"sr-text\">Error 404: Not Found</span>
        <span class=\"e\"></span>
        <span class=\"r\"></span>
        <span class=\"r\"></span>
        <span class=\"o\"></span>
        <span class=\"r\"></span>
        <span class=\"_4\"></span>
        <span class=\"_0\"></span>
        <span class=\"_4\"></span>
        <span class=\"n\"></span>
        <span class=\"o\"></span>
        <span class=\"t\"></span>
        <span class=\"f\"></span>
        <span class=\"o\"></span>
        <span class=\"u\"></span>
        <span class=\"n\"></span>
        <span class=\"d\"></span>
    </figcaption>
</figure>
";
    }

    public function getTemplateName()
    {
        return "errors/404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/errors.twig' %}
{% block content %}
    <figure>
    <div class=\"sad-mac\"></div>
    <figcaption>
        <span class=\"sr-text\">Error 404: Not Found</span>
        <span class=\"e\"></span>
        <span class=\"r\"></span>
        <span class=\"r\"></span>
        <span class=\"o\"></span>
        <span class=\"r\"></span>
        <span class=\"_4\"></span>
        <span class=\"_0\"></span>
        <span class=\"_4\"></span>
        <span class=\"n\"></span>
        <span class=\"o\"></span>
        <span class=\"t\"></span>
        <span class=\"f\"></span>
        <span class=\"o\"></span>
        <span class=\"u\"></span>
        <span class=\"n\"></span>
        <span class=\"d\"></span>
    </figcaption>
</figure>
{% endblock %}", "errors/404.twig", "C:\\OSPanel\\domains\\localhost\\views\\errors\\404.twig");
    }
}
