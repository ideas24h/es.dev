<?php

/* bootstrap/alert.html.twig */
class __TwigTemplate_d9a6d6b024339ab40512f1b17d72c9a1b5fbabcb6c634dde6fa0ed960ce52abd extends Twig_Template
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
        echo "<div class=\"alert alert-";
        echo ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "danger")) : ("danger"));
        echo " ";
        echo $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "array");
        echo "\" role=\"alert\" ";
        $this->loadTemplate("partials/_attributes.html.twig", "bootstrap/alert.html.twig", 2)->display(array_merge($context, array("ignore" => array(0 => "class"))));
        echo ">
    ";
        // line 3
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap/alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set attributes = parse_attributes(attributes) %}*/
/* <div class="alert alert-{{ type|default('danger') }} {{ attributes['class'] }}" role="alert" {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}>*/
/*     {{ content }}*/
/* </div>*/
