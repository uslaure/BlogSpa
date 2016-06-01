<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_060e19c3c08b2af0fbc1180c9496576ec86d13aa6d50414b9d9572b3b757f061 extends Twig_Template
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
        $__internal_49936a085e806adc2f4bfcbf4fc5e4fbf919a2155d6d0a36b6f3993168cb4a5a = $this->env->getExtension("native_profiler");
        $__internal_49936a085e806adc2f4bfcbf4fc5e4fbf919a2155d6d0a36b6f3993168cb4a5a->enter($__internal_49936a085e806adc2f4bfcbf4fc5e4fbf919a2155d6d0a36b6f3993168cb4a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49936a085e806adc2f4bfcbf4fc5e4fbf919a2155d6d0a36b6f3993168cb4a5a->leave($__internal_49936a085e806adc2f4bfcbf4fc5e4fbf919a2155d6d0a36b6f3993168cb4a5a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9147202fa6ab9f168e51238bad85a6aa33c81245046fa8781d27ee18d42657aa = $this->env->getExtension("native_profiler");
        $__internal_9147202fa6ab9f168e51238bad85a6aa33c81245046fa8781d27ee18d42657aa->enter($__internal_9147202fa6ab9f168e51238bad85a6aa33c81245046fa8781d27ee18d42657aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9147202fa6ab9f168e51238bad85a6aa33c81245046fa8781d27ee18d42657aa->leave($__internal_9147202fa6ab9f168e51238bad85a6aa33c81245046fa8781d27ee18d42657aa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_71c2c34195061bae63a0953ce98815014da345974da78cb1af5475c73104b079 = $this->env->getExtension("native_profiler");
        $__internal_71c2c34195061bae63a0953ce98815014da345974da78cb1af5475c73104b079->enter($__internal_71c2c34195061bae63a0953ce98815014da345974da78cb1af5475c73104b079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_71c2c34195061bae63a0953ce98815014da345974da78cb1af5475c73104b079->leave($__internal_71c2c34195061bae63a0953ce98815014da345974da78cb1af5475c73104b079_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e83d67c9f10c525fa18ac424fb6e533656b1de1aa98926e9f2d4f9f9fb02d946 = $this->env->getExtension("native_profiler");
        $__internal_e83d67c9f10c525fa18ac424fb6e533656b1de1aa98926e9f2d4f9f9fb02d946->enter($__internal_e83d67c9f10c525fa18ac424fb6e533656b1de1aa98926e9f2d4f9f9fb02d946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e83d67c9f10c525fa18ac424fb6e533656b1de1aa98926e9f2d4f9f9fb02d946->leave($__internal_e83d67c9f10c525fa18ac424fb6e533656b1de1aa98926e9f2d4f9f9fb02d946_prof);

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
