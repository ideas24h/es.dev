<?php

/* bootstrap/partials/_navbar_dropdown.html.twig */
class __TwigTemplate_a409936a62b978d2f343b986d25188c850f5f3cf16e7d7add4cf0a4263049a01 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["menu"]) ? $context["menu"] : null), "html", null, true);
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
