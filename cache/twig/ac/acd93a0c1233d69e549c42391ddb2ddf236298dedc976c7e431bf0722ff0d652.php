<?php

/* bootstrap/partials/_navbar_dropdown.html.twig */
class __TwigTemplate_e74bcc0ce2c1092ac3ab054a1e7adcc123920b699925f5adcaca655c45c7e142 extends Twig_Template
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
        echo "<li class=\"dropdown\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\">";
        // line 2
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo " <span class=\"caret\"></span></a>
    ";
        // line 3
        $this->loadTemplate("bootstrap/partials/_dropdown_items.html.twig", "bootstrap/partials/_navbar_dropdown.html.twig", 3)->display($context);
        // line 4
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "bootstrap/partials/_navbar_dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <li class="dropdown">*/
/*     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">{{ menu }} <span class="caret"></span></a>*/
/*     {% include "bootstrap/partials/_dropdown_items.html.twig" %}*/
/* </li>*/
/* */
