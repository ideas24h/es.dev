<?php

/* bootstrap/well.html.twig */
class __TwigTemplate_d662478b36b059c251881ee980ff8b29ce49f03ab98745fcb8f2c276d8fb38d6 extends Twig_Template
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
        echo "<div class=\"well";
        if ( !(null === (isset($context["size"]) ? $context["size"] : null))) {
            echo " well-";
            echo (isset($context["size"]) ? $context["size"] : null);
        }
        echo " ";
        echo $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "array");
        echo "\" ";
        $this->loadTemplate("partials/_attributes.html.twig", "bootstrap/well.html.twig", 1)->display(array_merge($context, array("ignore" => array(0 => "class"))));
        echo ">
    ";
        // line 2
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap/well.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 2,  19 => 1,);
    }
}
/* <div class="well{% if size is not null %} well-{{ size }}{% endif %} {{ attributes['class'] }}" {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}>*/
/*     {{ content }}*/
/* </div>*/
