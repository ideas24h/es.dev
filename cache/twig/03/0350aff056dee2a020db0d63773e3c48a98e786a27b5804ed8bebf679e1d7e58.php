<?php

/* bootstrap/progressbar.html.twig */
class __TwigTemplate_352e7d86451e8cdc5563836be75c04805d8e3c58dcc2467315739eb482a0a3d1 extends Twig_Template
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
        if (array_key_exists("label", $context)) {
            // line 2
            echo "<div class=\"progress-label";
            if ((isset($context["fixed"]) ? $context["fixed"] : null)) {
                echo " fixed";
            }
            if ((isset($context["right"]) ? $context["right"] : null)) {
                echo " right";
            }
            echo "\">";
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "</div>
";
        }
        // line 4
        echo "
";
        // line 5
        $context["attributes"] = $this->env->getExtension('GravstrapTwigExtension')->parseAttributes((isset($context["attributes"]) ? $context["attributes"] : null));
        // line 6
        echo "<div class=\"progress\">
    <div class=\"progress-bar progress-bar-";
        // line 7
        echo ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "default")) : ("default"));
        if ((isset($context["striped"]) ? $context["striped"] : null)) {
            echo " progress-bar-striped";
        }
        if ((isset($context["animated"]) ? $context["animated"] : null)) {
            echo " active";
        }
        echo " ";
        echo $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "array");
        echo "\" role=\"progressbar\" aria-valuenow=\"";
        echo (isset($context["value"]) ? $context["value"] : null);
        echo "\" aria-valuemin=\"";
        echo (isset($context["min"]) ? $context["min"] : null);
        echo "\" aria-valuemax=\"";
        echo (isset($context["max"]) ? $context["max"] : null);
        echo "\" style=\"";
        if ((isset($context["show_label"]) ? $context["show_label"] : null)) {
            echo "min-width: 2em; ";
        }
        echo "width: ";
        echo (isset($context["value"]) ? $context["value"] : null);
        echo "%\" ";
        $this->loadTemplate("partials/_attributes.html.twig", "bootstrap/progressbar.html.twig", 7)->display(array_merge($context, array("ignore" => array(0 => "class"))));
        echo ">";
        if ((isset($context["show_label"]) ? $context["show_label"] : null)) {
            echo (isset($context["value"]) ? $context["value"] : null);
            echo "%";
        }
        // line 8
        echo "    <span class=\"sr-only\">";
        echo (isset($context["value"]) ? $context["value"] : null);
        echo "% Complete</span>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap/progressbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 8,  42 => 7,  39 => 6,  37 => 5,  34 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if label is defined %}*/
/* <div class="progress-label{% if fixed %} fixed{% endif %}{% if right %} right{% endif %}">{{ label }}</div>*/
/* {% endif %}*/
/* */
/* {% set attributes = parse_attributes(attributes) %}*/
/* <div class="progress">*/
/*     <div class="progress-bar progress-bar-{{ type|default('default') }}{% if striped %} progress-bar-striped{% endif %}{% if animated %} active{% endif %} {{ attributes['class'] }}" role="progressbar" aria-valuenow="{{ value }}" aria-valuemin="{{ min }}" aria-valuemax="{{ max }}" style="{% if show_label %}min-width: 2em; {% endif %}width: {{ value }}%" {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}>{% if show_label %}{{ value }}%{% endif %}*/
/*     <span class="sr-only">{{ value }}% Complete</span>*/
/*   </div>*/
/* </div>*/
