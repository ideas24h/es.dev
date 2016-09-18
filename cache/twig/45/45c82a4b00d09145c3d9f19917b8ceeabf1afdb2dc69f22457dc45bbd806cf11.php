<?php

/* author.html.twig */
class __TwigTemplate_72e5dbe5c5c7be50fe1f965423c8f6cc8384fc96bf2adf9f13a11fb616445e0e extends Twig_Template
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
        $this->loadTemplate("author.html.twig", "author.html.twig", 1, "452650094")->display($context);
    }

    public function getTemplateName()
    {
        return "author.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* author.html.twig */
class __TwigTemplate_72e5dbe5c5c7be50fe1f965423c8f6cc8384fc96bf2adf9f13a11fb616445e0e_452650094 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "author.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->loadTemplate("modular/author.html.twig", "author.html.twig", 3)->display($context);
        // line 4
        echo "    ";
    }

    public function getTemplateName()
    {
        return "author.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 4,  61 => 3,  58 => 2,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/*     {% block content %}*/
/*     {% include 'modular/author.html.twig' %}*/
/*     {% endblock %}*/
/* {% endembed %}*/
