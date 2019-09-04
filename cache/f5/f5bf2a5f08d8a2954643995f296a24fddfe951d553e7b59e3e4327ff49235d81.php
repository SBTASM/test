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

/* layouts/errors.twig */
class __TwigTemplate_a04691490450f9182e92570566f71a44825f591194c72586c3535ea18e1db725 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>Error!</title>
        <style type=\"text/css\">
            * {
                border: 0;
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }
            body {
                background: currentColor;
            }
            /* I. Containers */
            figure {
                font-size: 6px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                width: 64em;
            }
            figcaption {
                color: #fff;
                display: flex;
                align-content: space-between;
                flex-wrap: wrap;
                height: 17em;
            }
            figcaption span:before, .sad-mac:before {
                content: \"\";
                display: block;
                width: 1em;
                height: 1em;
                transform: translate(-1em,-1em);
            }
            figcaption span {
                display: inline-block;
                margin: 0 2em;
                width: 4em;
                height: 6em;
            }
            .sr-text {
                overflow: hidden;
                position: absolute;
                width: 0;
                height: 0;
            }
            /* II. Sprites */
            /* 1. Sad Mac */
            .sad-mac {
                background: #fff;
                margin: 0 auto 7em auto;
                width: 23em;
                height: 30em;
            }
            .sad-mac:before {
                box-shadow: 1em 1em, 23em 1em, 4em 3em, 5em 3em, 6em 3em, 7em 3em, 8em 3em, 9em 3em, 10em 3em, 11em 3em, 12em 3em, 13em 3em, 14em 3em, 15em 3em, 16em 3em, 17em 3em, 18em 3em, 19em 3em, 20em 3em, 3em 4em, 21em 4em, 3em 5em, 21em 5em, 3em 6em, 7em 6em, 9em 6em, 15em 6em, 17em 6em, 21em 6em, 3em 7em, 8em 7em, 16em 7em, 21em 7em, 3em 8em, 7em 8em, 9em 8em, 15em 8em, 17em 8em, 21em 8em, 3em 9em, 21em 9em, 3em 10em, 10em 10em, 13em 10em, 21em 10em, 3em 11em, 11em 11em, 12em 11em, 21em 11em, 3em 12em, 21em 12em, 3em 13em, 10em 13em, 11em 13em, 12em 13em, 13em 13em, 14em 13em, 21em 13em, 3em 14em, 9em 14em, 15em 14em, 16em 14em, 21em 14em, 3em 15em, 17em 15em, 21em 15em, 3em 16em, 21em 16em, 4em 17em, 5em 17em, 6em 17em, 7em 17em, 8em 17em, 9em 17em, 10em 17em, 11em 17em, 12em 17em, 13em 17em, 14em 17em, 15em 17em, 16em 17em, 17em 17em, 18em 17em, 19em 17em, 20em 17em, 3em 22em, 4em 22em, 5em 22em, 14em 22em, 15em 22em, 16em 22em, 17em 22em, 18em 22em, 19em 22em, 20em 22em, 1em 27em, 2em 27em, 3em 27em, 4em 27em, 5em 27em, 6em 27em, 7em 27em, 8em 27em, 9em 27em, 10em 27em, 11em 27em, 12em 27em, 13em 27em, 14em 27em, 15em 27em, 16em 27em, 17em 27em, 18em 27em, 19em 27em, 20em 27em, 21em 27em, 22em 27em, 23em 27em, 1em 28em, 23em 28em, 1em 29em, 23em 29em, 1em 30em, 23em 30em;
            }
            /* 2. Letters */
            ._0:before {
                box-shadow: 2em 1em, 3em 1em, 1em 2em, 1em 3em, 1em 4em, 1em 5em, 4em 2em, 4em 3em, 4em 4em, 4em 5em, 2em 4em, 3em 3em, 2em 6em, 3em 6em;
            }
            ._4:before {
                box-shadow: 1em 1em, 1em 2em, 1em 3em, 1em 4em, 4em 1em, 4em 2em, 4em 3em, 4em 4em, 2em 4em, 3em 4em, 4em 5em, 4em 6em;
            }
            .d:before {
                box-shadow: 1em 1em, 2em 1em, 3em 1em, 1em 2em, 4em 2em, 1em 3em, 4em 3em, 1em 4em, 4em 4em, 1em 5em, 4em 5em, 1em 6em, 2em 6em, 3em 6em;
            }
            .e:before {
                box-shadow: 1em 1em, 2em 1em, 3em 1em, 4em 1em, 1em 2em, 1em 3em, 2em 3em, 3em 3em, 1em 4em, 1em 5em, 1em 6em, 2em 6em, 3em 6em, 4em 6em;
            }
            .f:before {
                box-shadow: 1em 1em, 2em 1em, 3em 1em, 4em 1em, 1em 2em, 1em 3em, 2em 3em, 3em 3em, 1em 4em, 1em 5em, 1em 6em;
            }
            .n:before {
                box-shadow: 1em 1em, 1em 2em, 1em 3em, 1em 4em, 1em 5em, 1em 6em, 4em 1em, 4em 2em, 4em 3em, 4em 4em, 4em 5em, 4em 6em, 2em 3em, 3em 4em;
            }
            .o:before {
                box-shadow: 2em 1em, 3em 1em, 1em 2em, 1em 3em, 1em 4em, 1em 5em, 4em 2em, 4em 3em, 4em 4em, 4em 5em, 2em 6em, 3em 6em;
            }
            .r:before {
                box-shadow: 1em 1em, 2em 1em, 3em 1em, 4em 2em, 1em 2em, 1em 3em, 1em 4em, 2em 3em, 3em 3em, 1em 5em, 1em 6em, 4em 4em, 4em 5em, 4em 6em;
            }
            .t:before {
                box-shadow: 1em 1em, 2em 1em, 3em 1em, 2em 2em, 2em 3em, 2em 4em, 2em 5em, 2em 6em;
            }
            .u:before {
                box-shadow: 1em 1em, 1em 2em, 1em 3em, 1em 4em, 1em 5em, 4em 1em, 4em 2em, 4em 3em, 4em 4em, 4em 5em, 2em 6em, 3em 6em;
            }
            /* III. Responsiveness */
            /* This cannot be smoothly done using viewport units; sprite pixels will look divided when font size is a floating point. */
            @media screen and (min-width: 720px) {
                figure {
                    font-size: 7px;
                }
            }
            @media screen and (min-width: 1440px) {
                figure {
                    font-size: 8px;
                }
            }
        </style>
    </head>
    <body>
        ";
        // line 107
        $this->displayBlock('content', $context, $blocks);
        // line 108
        echo "    </body>
</html>";
    }

    // line 107
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layouts/errors.twig";
    }

    public function getDebugInfo()
    {
        return array (  153 => 107,  148 => 108,  146 => 107,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>Error!</title>
        <style type=\"text/css\">
            * {
                border: 0;
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }
            body {
                background: currentColor;
            }
            /* I. Containers */
            figure {
                font-size: 6px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                width: 64em;
            }
            figcaption {
                color: #fff;
                display: flex;
                align-content: space-between;
                flex-wrap: wrap;
                height: 17em;
            }
            figcaption span:before, .sad-mac:before {
                content: \"\";
                display: block;
                width: 1em;
                height: 1em;
                transform: translate(-1em,-1em);
            }
            figcaption span {
                display: inline-block;
                margin: 0 2em;
                width: 4em;
                height: 6em;
            }
            .sr-text {
                overflow: hidden;
                position: absolute;
                width: 0;
                height: 0;
            }
            /* II. Sprites */
            /* 1. Sad Mac */
            .sad-mac {
                background: #fff;
                margin: 0 auto 7em auto;
                width: 23em;
                height: 30em;
            }
            .sad-mac:before {
                box-shadow: 1em 1em, 23em 1em, 4em 3em, 5em 3em, 6em 3em, 7em 3em, 8em 3em, 9em 3em, 10em 3em, 11em 3em, 12em 3em, 13em 3em, 14em 3em, 15em 3em, 16em 3em, 17em 3em, 18em 3em, 19em 3em, 20em 3em, 3em 4em, 21em 4em, 3em 5em, 21em 5em, 3em 6em, 7em 6em, 9em 6em, 15em 6em, 17em 6em, 21em 6em, 3em 7em, 8em 7em, 16em 7em, 21em 7em, 3em 8em, 7em 8em, 9em 8em, 15em 8em, 17em 8em, 21em 8em, 3em 9em, 21em 9em, 3em 10em, 10em 10em, 13em 10em, 21em 10em, 3em 11em, 11em 11em, 12em 11em, 21em 11em, 3em 12em, 21em 12em, 3em 13em, 10em 13em, 11em 13em, 12em 13em, 13em 13em, 14em 13em, 21em 13em, 3em 14em, 9em 14em, 15em 14em, 16em 14em, 21em 14em, 3em 15em, 17em 15em, 21em 15em, 3em 16em, 21em 16em, 4em 17em, 5em 17em, 6em 17em, 7em 17em, 8em 17em, 9em 17em, 10em 17em, 11em 17em, 12em 17em, 13em 17em, 14em 17em, 15em 17em, 16em 17em, 17em 17em, 18em 17em, 19em 17em, 20em 17em, 3em 22em, 4em 22em, 5em 22em, 14em 22em, 15em 22em, 16em 22em, 17em 22em, 18em 22em, 19em 22em, 20em 22em, 1em 27em, 2em 27em, 3em 27em, 4em 27em, 5em 27em, 6em 27em, 7em 27em, 8em 27em, 9em 27em, 10em 27em, 11em 27em, 12em 27em, 13em 27em, 14em 27em, 15em 27em, 16em 27em, 17em 27em, 18em 27em, 19em 27em, 20em 27em, 21em 27em, 22em 27em, 23em 27em, 1em 28em, 23em 28em, 1em 29em, 23em 29em, 1em 30em, 23em 30em;
            }
            /* 2. Letters */
            ._0:before {
                box-shadow: 2em 1em, 3em 1em, 1em 2em, 1em 3em, 1em 4em, 1em 5em, 4em 2em, 4em 3em, 4em 4em, 4em 5em, 2em 4em, 3em 3em, 2em 6em, 3em 6em;
            }
            ._4:before {
                box-shadow: 1em 1em, 1em 2em, 1em 3em, 1em 4em, 4em 1em, 4em 2em, 4em 3em, 4em 4em, 2em 4em, 3em 4em, 4em 5em, 4em 6em;
            }
            .d:before {
                box-shadow: 1em 1em, 2em 1em, 3em 1em, 1em 2em, 4em 2em, 1em 3em, 4em 3em, 1em 4em, 4em 4em, 1em 5em, 4em 5em, 1em 6em, 2em 6em, 3em 6em;
            }
            .e:before {
                box-shadow: 1em 1em, 2em 1em, 3em 1em, 4em 1em, 1em 2em, 1em 3em, 2em 3em, 3em 3em, 1em 4em, 1em 5em, 1em 6em, 2em 6em, 3em 6em, 4em 6em;
            }
            .f:before {
                box-shadow: 1em 1em, 2em 1em, 3em 1em, 4em 1em, 1em 2em, 1em 3em, 2em 3em, 3em 3em, 1em 4em, 1em 5em, 1em 6em;
            }
            .n:before {
                box-shadow: 1em 1em, 1em 2em, 1em 3em, 1em 4em, 1em 5em, 1em 6em, 4em 1em, 4em 2em, 4em 3em, 4em 4em, 4em 5em, 4em 6em, 2em 3em, 3em 4em;
            }
            .o:before {
                box-shadow: 2em 1em, 3em 1em, 1em 2em, 1em 3em, 1em 4em, 1em 5em, 4em 2em, 4em 3em, 4em 4em, 4em 5em, 2em 6em, 3em 6em;
            }
            .r:before {
                box-shadow: 1em 1em, 2em 1em, 3em 1em, 4em 2em, 1em 2em, 1em 3em, 1em 4em, 2em 3em, 3em 3em, 1em 5em, 1em 6em, 4em 4em, 4em 5em, 4em 6em;
            }
            .t:before {
                box-shadow: 1em 1em, 2em 1em, 3em 1em, 2em 2em, 2em 3em, 2em 4em, 2em 5em, 2em 6em;
            }
            .u:before {
                box-shadow: 1em 1em, 1em 2em, 1em 3em, 1em 4em, 1em 5em, 4em 1em, 4em 2em, 4em 3em, 4em 4em, 4em 5em, 2em 6em, 3em 6em;
            }
            /* III. Responsiveness */
            /* This cannot be smoothly done using viewport units; sprite pixels will look divided when font size is a floating point. */
            @media screen and (min-width: 720px) {
                figure {
                    font-size: 7px;
                }
            }
            @media screen and (min-width: 1440px) {
                figure {
                    font-size: 8px;
                }
            }
        </style>
    </head>
    <body>
        {% block content %}{% endblock %}
    </body>
</html>", "layouts/errors.twig", "C:\\OSPanel\\domains\\localhost\\views\\layouts\\errors.twig");
    }
}