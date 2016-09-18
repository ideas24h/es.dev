<?php

/* bootstrap/partials/_navbar_form.html.twig */
class __TwigTemplate_e50b5e704600110411df43d28ce99a4ec2ef0707b46e7044149ad235a673da7e extends Twig_Template
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
        echo "<form class=\"navbar-form ";
        $this->loadTemplate("bootstrap/partials/_navbar_item_alignment.html.twig", "bootstrap/partials/_navbar_form.html.twig", 1)->display($context);
        echo "\" role=\"";
        echo (isset($context["role"]) ? $context["role"] : null);
        echo "\">
    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 3
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\">
    </div>
    ";
        // line 5
        if ((isset($context["button_visible"]) ? $context["button_visible"] : null)) {
            // line 6
            echo "    ";
            $context["attributes"] = $this->env->getExtension('GravstrapTwigExtension')->parseAttributes((isset($context["button_attributes"]) ? $context["button_attributes"] : null));
            // line 7
            echo "    ";
            $this->loadTemplate("basic/button.html.twig", "bootstrap/partials/_navbar_form.html.twig", 7)->display($context);
            // line 8
            echo "    ";
        }
        // line 9
        echo "</form>";
    }

    public function getTemplateName()
    {
        return "bootstrap/partials/_navbar_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  40 => 8,  37 => 7,  34 => 6,  32 => 5,  27 => 3,  19 => 1,);
    }
}
/* <form class="navbar-form {% include 'bootstrap/partials/_navbar_item_alignment.html.twig' %}" role="{{ role }}">*/
/*     <div class="form-group">*/
/*         <input type="text" class="form-control" placeholder="{{ placeholder }}">*/
/*     </div>*/
/*     {% if button_visible %}*/
/*     {% set attributes = parse_attributes(button_attributes) %}*/
/*     {% include 'basic/button.html.twig' %}*/
/*     {% endif %}*/
/* </form>*/
