<?php

/* bootstrap/tab.html.twig */
class __TwigTemplate_403d0bd9c28063e1c3b8385073fef98e5d0d33ff6b07a392070dea16a26f0a46 extends Twig_Template
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
        echo "<ul class=\"nav nav-tabs\" role=\"tablist\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "        
    ";
            // line 3
            $context["values"] = $context["item"];
            // line 4
            echo "    ";
            if ($this->env->getExtension('GravstrapTwigExtension')->instance_of((isset($context["values"]) ? $context["values"] : null), "\\Thunder\\Shortcode\\Shortcode\\ProcessedShortcode")) {
                // line 5
                echo "        ";
                $context["values"] = array("name" => $this->getAttribute(                // line 6
$context["item"], "getParameter", array(0 => "name"), "method"));
                // line 7
                echo " 
    ";
            }
            // line 9
            echo "    <li role=\"presentation\"";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " class=\"active\"";
            }
            echo "><a href=\"#";
            echo $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "name", array());
            echo "\" aria-controls=\"";
            echo $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "name", array());
            echo "\" role=\"tab\" data-toggle=\"tab\">";
            echo $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "name", array());
            echo "</a></li>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>

<div class=\"tab-content ";
        // line 13
        echo $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "array");
        echo "\" ";
        $this->loadTemplate("partials/_attributes.html.twig", "bootstrap/tab.html.twig", 13)->display(array_merge($context, array("ignore" => array(0 => "class"))));
        echo ">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "      
        ";
            // line 15
            $context["values"] = $context["item"];
            // line 16
            echo "        ";
            if ($this->env->getExtension('GravstrapTwigExtension')->instance_of((isset($context["values"]) ? $context["values"] : null), "\\Thunder\\Shortcode\\Shortcode\\ProcessedShortcode")) {
                // line 17
                echo "            ";
                $context["values"] = array("name" => $this->getAttribute(                // line 18
$context["item"], "getParameter", array(0 => "name"), "method"), "attributes" => $this->env->getExtension('GravstrapTwigExtension')->parseAttributes($this->getAttribute(                // line 19
$context["item"], "getParameter", array(0 => "attributes"), "method")), "content" => trim($this->getAttribute(                // line 20
$context["item"], "content", array())));
                // line 21
                echo " 
        ";
            }
            // line 23
            echo "        <div id=\"";
            echo $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "name", array());
            echo "\" role=\"tabpanel\" class=\"tab-pane";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " active";
            }
            echo " ";
            echo $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "attributes", array()), "class", array(), "array");
            echo "\" ";
            $this->loadTemplate("partials/_attributes.html.twig", "bootstrap/tab.html.twig", 23)->display(array_merge($context, array("attributes" => $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "attributes", array()), "ignore" => array(0 => "class"))));
            echo ">";
            echo $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "content", array());
            echo "</div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "bootstrap/tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 25,  123 => 23,  119 => 21,  117 => 20,  116 => 19,  115 => 18,  113 => 17,  110 => 16,  108 => 15,  89 => 14,  83 => 13,  79 => 11,  54 => 9,  50 => 7,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="nav nav-tabs" role="tablist">*/
/* {% for item in items %}        */
/*     {% set values = item %}*/
/*     {% if(instanceof(values, '\\Thunder\\Shortcode\\Shortcode\\ProcessedShortcode')) %}*/
/*         {% set values = {*/
/*           'name': item.getParameter('name'), */
/*         } %} */
/*     {% endif %}*/
/*     <li role="presentation"{% if loop.first %} class="active"{% endif %}><a href="#{{ values.name }}" aria-controls="{{ values.name }}" role="tab" data-toggle="tab">{{ values.name }}</a></li>*/
/* {% endfor %}*/
/* </ul>*/
/* */
/* <div class="tab-content {{ attributes['class'] }}" {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}>*/
/*     {% for item in items %}      */
/*         {% set values = item %}*/
/*         {% if(instanceof(values, '\\Thunder\\Shortcode\\Shortcode\\ProcessedShortcode')) %}*/
/*             {% set values = {*/
/*               'name': item.getParameter('name'),              */
/*               'attributes': parse_attributes(item.getParameter('attributes')),*/
/*               'content': item.content|trim,*/
/*             } %} */
/*         {% endif %}*/
/*         <div id="{{ values.name }}" role="tabpanel" class="tab-pane{% if loop.first %} active{% endif %} {{ values.attributes['class'] }}" {% include 'partials/_attributes.html.twig' with {'attributes': values.attributes, 'ignore': ['class']} %}>{{ values.content }}</div>*/
/*     {% endfor %}*/
/* </div>*/
/* */
