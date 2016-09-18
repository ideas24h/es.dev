<?php

/* bootstrap/collapse.html.twig */
class __TwigTemplate_b43a96cfecb498bd456dc03d72f95a9773ab23c2075e28cdf7d9313d53bd9053 extends Twig_Template
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
        $context["attributes"] = $this->env->getExtension('GravstrapTwigExtension')->parseAttributes((isset($context["attributes"]) ? $context["attributes"] : null));
        // line 2
        echo "<";
        echo (isset($context["tag"]) ? $context["tag"] : null);
        echo " class=\"btn btn-";
        echo ((array_key_exists("button_type", $context)) ? (_twig_default_filter((isset($context["button_type"]) ? $context["button_type"] : null), "default")) : ("default"));
        echo " ";
        echo $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array());
        echo "\" role=\"button\" data-toggle=\"collapse\" ";
        if (((isset($context["tag"]) ? $context["tag"] : null) == "a")) {
            echo "href=\"#";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\"";
        } elseif (((isset($context["tag"]) ? $context["tag"] : null) == "button")) {
            echo "data-target=\"#";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\"";
        }
        echo " ";
        $this->loadTemplate("partials/_attributes.html.twig", "bootstrap/collapse.html.twig", 2)->display(array_merge($context, array("ignore" => array(0 => "class"))));
        echo ">
  ";
        // line 3
        echo (isset($context["button_label"]) ? $context["button_label"] : null);
        echo "
</";
        // line 4
        echo (isset($context["tag"]) ? $context["tag"] : null);
        echo ">
<div class=\"collapse\" id=\"";
        // line 5
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "        ";
            echo $context["item"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "bootstrap/collapse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 9,  58 => 7,  54 => 6,  50 => 5,  46 => 4,  42 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set attributes = parse_attributes(attributes) %}*/
/* <{{ tag }} class="btn btn-{{ button_type|default('default') }} {{ attributes.class }}" role="button" data-toggle="collapse" {% if tag == 'a' %}href="#{{ id }}"{% elseif tag == 'button' %}data-target="#{{ id }}"{% endif %} {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}>*/
/*   {{ button_label }}*/
/* </{{ tag }}>*/
/* <div class="collapse" id="{{ id }}">*/
/*     {% for item in items %}*/
/*         {{ item }}*/
/*     {% endfor %}*/
/* </div>*/
/* */
