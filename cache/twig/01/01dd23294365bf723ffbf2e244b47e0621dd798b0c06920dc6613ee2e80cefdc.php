<?php

/* bootstrap/modal.html.twig */
class __TwigTemplate_66d5d96428ddbf0ebd63b7d245ac2c5948a453d0bd39404eaa9135722d259f19 extends Twig_Template
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
        $context["close_button_attributes"] = $this->env->getExtension('GravstrapTwigExtension')->parseAttributes((isset($context["close_button_attributes"]) ? $context["close_button_attributes"] : null));
        // line 3
        echo "<div id=\"";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" ";
        $this->loadTemplate("partials/_attributes.html.twig", "bootstrap/modal.html.twig", 3)->display($context);
        echo ">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" ";
        // line 7
        $this->loadTemplate("partials/_attributes.html.twig", "bootstrap/modal.html.twig", 7)->display(array_merge($context, array("attributes" => (isset($context["close_button_attributes"]) ? $context["close_button_attributes"] : null))));
        echo "><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\">";
        // line 8
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
          ";
        // line 11
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
      </div>
      <div class=\"modal-footer\">
          ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["buttons"]) ? $context["buttons"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 15
            echo "          ";
            echo $this->getAttribute($context["button"], "content", array());
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "bootstrap/modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  53 => 15,  49 => 14,  43 => 11,  37 => 8,  33 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set attributes = parse_attributes(attributes) %}*/
/* {% set close_button_attributes = parse_attributes(close_button_attributes) %}*/
/* <div id="{{ id }}" class="modal fade" tabindex="-1" role="dialog" {% include 'partials/_attributes.html.twig' %}>*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal" {% include 'partials/_attributes.html.twig' with{'attributes': close_button_attributes} %}><span aria-hidden="true">&times;</span></button>*/
/*         <h4 class="modal-title">{{ title }}</h4>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*           {{ content }}*/
/*       </div>*/
/*       <div class="modal-footer">*/
/*           {% for button in buttons %}*/
/*           {{ button.content }}*/
/*           {% endfor %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
