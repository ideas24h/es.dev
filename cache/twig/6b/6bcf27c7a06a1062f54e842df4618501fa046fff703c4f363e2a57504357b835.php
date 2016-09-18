<?php

/* bootstrap/partials/_navbar_item_alignment.html.twig */
class __TwigTemplate_a99cddb32b56febc90b30970b72cd9ea890020e321a3e41f8b5896f39cf0fe26 extends Twig_Template
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
        $context["align"] = ((array_key_exists("alignment", $context)) ? (_twig_default_filter((isset($context["alignment"]) ? $context["alignment"] : null), "left")) : ("left"));
        // line 2
        echo "navbar-";
        echo (isset($context["align"]) ? $context["align"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "bootstrap/partials/_navbar_item_alignment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
/* {% set align = alignment|default('left') %}*/
/* navbar-{{ align }}*/
/* */
