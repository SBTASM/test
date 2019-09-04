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

/* news/index.twig */
class __TwigTemplate_f3b752d20b193f70ac00b36536ddc353550e06cf5ba7543f8961e3bc621bc07d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/main.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layouts/main.twig", "news/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Main page";
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    ";
        // line 5
        if ((twig_length_filter($this->env, ($context["news"] ?? null)) == 0)) {
            // line 6
            echo "        <p class=\"text-center h3\">Sorry, Nothing to display!</p>
    ";
        } else {
            // line 8
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["news"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 9
                echo "        <div class=\"col-md-12\">
            <div class=\"fn2-inner\">
                <div class=\"fn2-meta\">";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 11), "html", null, true);
                echo " </div>
                <em>";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "created_at", [], "any", false, false, false, 12), "html", null, true);
                echo "</em>
                <p>";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 13), "html", null, true);
                echo "</p>
                <div class=\"pull-right\">
                    <a href=\"?r=main/edit&id=";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 15), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-pencil\"></i>&nbsp;Edit</a>
                </div>
            </div>
        </div>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    ";
        }
        // line 22
        echo "
    ";
        // line 23
        if ((($context["pages"] ?? null) > 1)) {
            // line 24
            echo "        <nav aria-label=\"Page navigation example\">
            <ul class=\"pagination\">
                ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["pages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 27
                echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"?page=";
                // line 28
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "            </ul>
        </nav>
    ";
        }
        // line 34
        echo "

";
    }

    public function getTemplateName()
    {
        return "news/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 34,  131 => 31,  120 => 28,  117 => 27,  113 => 26,  109 => 24,  107 => 23,  104 => 22,  101 => 21,  89 => 15,  84 => 13,  80 => 12,  76 => 11,  72 => 9,  67 => 8,  63 => 6,  61 => 5,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/main.twig' %}
{% block title %}Main page{% endblock %}
{% block main %}

    {% if news|length == 0 %}
        <p class=\"text-center h3\">Sorry, Nothing to display!</p>
    {% else %}
        {%  for item in news %}
        <div class=\"col-md-12\">
            <div class=\"fn2-inner\">
                <div class=\"fn2-meta\">{{ item.title }} </div>
                <em>{{ item.created_at }}</em>
                <p>{{ item.content }}</p>
                <div class=\"pull-right\">
                    <a href=\"?r=main/edit&id={{ item.id }}\"><i class=\"glyphicon glyphicon-pencil\"></i>&nbsp;Edit</a>
                </div>
            </div>
        </div>

    {% endfor %}
    {% endif %}

    {% if pages > 1 %}
        <nav aria-label=\"Page navigation example\">
            <ul class=\"pagination\">
                {% for i in 1..pages %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"?page={{ i }}\">{{ i }}</a>
                    </li>
                {% endfor %}
            </ul>
        </nav>
    {% endif %}


{% endblock %}", "news/index.twig", "C:\\OSPanel\\domains\\localhost\\views\\news\\index.twig");
    }
}
