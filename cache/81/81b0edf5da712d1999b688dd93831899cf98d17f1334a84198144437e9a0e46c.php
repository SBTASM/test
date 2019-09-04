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

/* news/form.twig */
class __TwigTemplate_20b4a4c96e616e98db949d45dae51691a59524fc031b2e74dee47046fd389107 extends \Twig\Template
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
        // line 1
        echo "<form id=\"news-form\" method=\"post\" data-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
    <div class=\"form-group\">
        <label for=\"exampleFormControlInput1\">Title</label>
        <input type=\"title\" name=\"title\" class=\"form-control\" id=\"title\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
    </div>
    <div class=\"form-group\">
        <label for=\"content\">Content</label>
        <textarea class=\"form-control\" name=\"content\" id=\"content\" rows=\"8\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "content", [], "any", false, false, false, 8), "html", null, true);
        echo "</textarea>
    </div>
    <div class=\"text-center\">
        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-save\"></i>&nbsp;Save</button>
        <a id=\"delete\" href=\"?r=main/delete&id=";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["news"] ?? null), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "\" class=\"btn btn-danger\"><i class=\"glyphicon glyphicon-trash\"></i>&nbsp;Delete</a>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "news/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  51 => 8,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form id=\"news-form\" method=\"post\" data-id=\"{{ news.id }}\">
    <div class=\"form-group\">
        <label for=\"exampleFormControlInput1\">Title</label>
        <input type=\"title\" name=\"title\" class=\"form-control\" id=\"title\" value=\"{{ news.title }}\">
    </div>
    <div class=\"form-group\">
        <label for=\"content\">Content</label>
        <textarea class=\"form-control\" name=\"content\" id=\"content\" rows=\"8\">{{ news.content }}</textarea>
    </div>
    <div class=\"text-center\">
        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-save\"></i>&nbsp;Save</button>
        <a id=\"delete\" href=\"?r=main/delete&id={{ news.id }}\" class=\"btn btn-danger\"><i class=\"glyphicon glyphicon-trash\"></i>&nbsp;Delete</a>
    </div>
</form>", "news/form.twig", "C:\\OSPanel\\domains\\localhost\\views\\news\\form.twig");
    }
}
