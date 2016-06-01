<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f3268a9e2e6b64df51f5f756f94f45b49798a3cb792e7276900da11140e63fdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a7a718d7825c938f5b791d3a22c68b9ac3e1e9f59b0788ef17637fc78f5d716 = $this->env->getExtension("native_profiler");
        $__internal_3a7a718d7825c938f5b791d3a22c68b9ac3e1e9f59b0788ef17637fc78f5d716->enter($__internal_3a7a718d7825c938f5b791d3a22c68b9ac3e1e9f59b0788ef17637fc78f5d716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a7a718d7825c938f5b791d3a22c68b9ac3e1e9f59b0788ef17637fc78f5d716->leave($__internal_3a7a718d7825c938f5b791d3a22c68b9ac3e1e9f59b0788ef17637fc78f5d716_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_25e99901a388de6769bc057ee43575b68d0f3396d4bf6106f0065825c99cf8fb = $this->env->getExtension("native_profiler");
        $__internal_25e99901a388de6769bc057ee43575b68d0f3396d4bf6106f0065825c99cf8fb->enter($__internal_25e99901a388de6769bc057ee43575b68d0f3396d4bf6106f0065825c99cf8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_25e99901a388de6769bc057ee43575b68d0f3396d4bf6106f0065825c99cf8fb->leave($__internal_25e99901a388de6769bc057ee43575b68d0f3396d4bf6106f0065825c99cf8fb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4878f24a58cd10852c166610b11a016fd1853ce2625792c368c99bb8fd6419b5 = $this->env->getExtension("native_profiler");
        $__internal_4878f24a58cd10852c166610b11a016fd1853ce2625792c368c99bb8fd6419b5->enter($__internal_4878f24a58cd10852c166610b11a016fd1853ce2625792c368c99bb8fd6419b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4878f24a58cd10852c166610b11a016fd1853ce2625792c368c99bb8fd6419b5->leave($__internal_4878f24a58cd10852c166610b11a016fd1853ce2625792c368c99bb8fd6419b5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_588f110354194e7b3ab14093dca84f340ff6f5859455100b69fad8baff32250a = $this->env->getExtension("native_profiler");
        $__internal_588f110354194e7b3ab14093dca84f340ff6f5859455100b69fad8baff32250a->enter($__internal_588f110354194e7b3ab14093dca84f340ff6f5859455100b69fad8baff32250a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_588f110354194e7b3ab14093dca84f340ff6f5859455100b69fad8baff32250a->leave($__internal_588f110354194e7b3ab14093dca84f340ff6f5859455100b69fad8baff32250a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
