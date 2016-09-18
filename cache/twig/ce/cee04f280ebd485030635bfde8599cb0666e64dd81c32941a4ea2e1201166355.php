<?php

/* components.html.twig */
class __TwigTemplate_e9de70f0424f66c227b23f040722587a92b9e54077c7d2b203148f04109953a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("components.html.twig", "components.html.twig", 1, "959000808")->display($context);
    }

    public function getTemplateName()
    {
        return "components.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* components.html.twig */
class __TwigTemplate_e9de70f0424f66c227b23f040722587a92b9e54077c7d2b203148f04109953a0_959000808 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "components.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        // line 3
        echo "    <header id=\"header\">
        ";
        // line 4
        echo (isset($context["jumbotron1"]) ? $context["jumbotron1"] : null);
        echo "
        ";
        // line 5
        echo (isset($context["navbar1"]) ? $context["navbar1"] : null);
        echo "
    </header>
    ";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                ";
        // line 13
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
                </div>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "components.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 13,  79 => 10,  76 => 9,  69 => 5,  65 => 4,  62 => 3,  59 => 2,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/*     {% block header %}*/
/*     <header id="header">*/
/*         {{ jumbotron1 }}*/
/*         {{ navbar1 }}*/
/*     </header>*/
/*     {% endblock %}*/
/* */
/*     {% block content %}*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                 {{ content }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endblock %}*/
/* {% endembed %}*/
