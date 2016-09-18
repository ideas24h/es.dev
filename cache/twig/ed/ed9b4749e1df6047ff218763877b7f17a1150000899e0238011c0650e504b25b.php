<?php

/* modules/portfolio.html.twig */
class __TwigTemplate_e3c0c7fe1eb8aa473d7fa350f2ec25c6743d3b5bf98c946a7cea85132056ec30 extends Twig_Template
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
        $this->loadTemplate("modules/portfolio.html.twig", "modules/portfolio.html.twig", 1, "206779138")->display($context);
    }

    public function getTemplateName()
    {
        return "modules/portfolio.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* modules/portfolio.html.twig */
class __TwigTemplate_e3c0c7fe1eb8aa473d7fa350f2ec25c6743d3b5bf98c946a7cea85132056ec30_206779138 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("modules/partials/base_module.html.twig", "modules/portfolio.html.twig", 1);
        $this->blocks = array(
            'module_content' => array($this, 'block_module_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "modules/partials/base_module.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_module_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "        ";
            echo $context["item"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    ";
    }

    public function getTemplateName()
    {
        return "modules/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 6,  66 => 4,  61 => 3,  58 => 2,  19 => 1,);
    }
}
/* {% embed 'modules/partials/base_module.html.twig' %}       */
/*     {% block module_content %}*/
/*     {% for item in items %}*/
/*         {{ item }}*/
/*     {% endfor %}*/
/*     {% endblock %}*/
/* {% endembed %}*/
