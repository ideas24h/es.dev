<?php

/* partials/dashboard-notifications.html.twig */
class __TwigTemplate_f71c38b723c648667c22356343015ae8bd71c1b17c3e5d5e405b468e67a6a93e extends Twig_Template
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
        echo "<div id=\"notifications\" class=\"dashboard-item admin-block default-box-shadow\">
    <h1>
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NOTIFICATIONS"), "html", null, true);
        echo "
        <span class=\"right\">
            <a href=\"#\" class=\"button button-small\" data-refresh=\"notifications\"><i class=\"fa fa-refresh\"></i></a>
        </span>
    </h1>
    <div class=\"widget-content\">
        <div class=\"widget-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
        <ul></ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/dashboard-notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* <div id="notifications" class="dashboard-item admin-block default-box-shadow">*/
/*     <h1>*/
/*         {{ "PLUGIN_ADMIN.NOTIFICATIONS"|tu }}*/
/*         <span class="right">*/
/*             <a href="#" class="button button-small" data-refresh="notifications"><i class="fa fa-refresh"></i></a>*/
/*         </span>*/
/*     </h1>*/
/*     <div class="widget-content">*/
/*         <div class="widget-loader"><i class="fa fa-refresh fa-spin"></i></div>*/
/*         <ul></ul>*/
/*     </div>*/
/* </div>*/
/* */
