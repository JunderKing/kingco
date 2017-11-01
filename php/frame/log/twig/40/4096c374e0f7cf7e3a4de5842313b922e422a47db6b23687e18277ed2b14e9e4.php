<?php

/* layout.html */
class __TwigTemplate_3c5c8a268a46d1a3eb14b6ab7caeec2281610ec984f22341d9100e79b8a9a38a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width\" />
        <title></title>
    </head>
    <body>
        <header> header </header>
        <content>
            ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "        </content>
        <footer> footer </footer>
    </body>
</html>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "            ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  42 => 11,  34 => 13,  32 => 11,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width\" />
        <title></title>
    </head>
    <body>
        <header> header </header>
        <content>
            {% block content %}
            {% endblock %}
        </content>
        <footer> footer </footer>
    </body>
</html>
", "layout.html", "/Users/JunK/kingco/php/frame/app/view/layout.html");
    }
}
