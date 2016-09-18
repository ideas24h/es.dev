<?php

/* modular/header.html.twig */
class __TwigTemplate_b7ef459a683accfc7f169648a56df60878efcb026fe01a9fdf900fc1d67d895e extends Twig_Template
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
        echo "<header id=\"header\">
    ";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["shortcode"]) ? $context["shortcode"] : null), "g-jumbotron", array(), "array"), "jumbotron1", array());
        echo "
    ";
        // line 3
        echo $this->getAttribute($this->getAttribute((isset($context["shortcode"]) ? $context["shortcode"] : null), "g-navbar", array(), "array"), "navbar2", array());
        echo "
</header>
";
    }

    public function getTemplateName()
    {
        return "modular/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <header id="header">*/
/*     {{ shortcode["g-jumbotron"].jumbotron1 }}*/
/*     {{ shortcode["g-navbar"].navbar2 }}*/
/* </header>*/
/* */
