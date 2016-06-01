<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a1297dffb1710cb18c1ed19fd3b04f4b9bcddb48f3652ab58a576f39cd225829 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1f8372be250284e5890d276fa2f5d49fb3ce3f0a6c70372857d1bf872d92553c = $this->env->getExtension("native_profiler");
        $__internal_1f8372be250284e5890d276fa2f5d49fb3ce3f0a6c70372857d1bf872d92553c->enter($__internal_1f8372be250284e5890d276fa2f5d49fb3ce3f0a6c70372857d1bf872d92553c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f8372be250284e5890d276fa2f5d49fb3ce3f0a6c70372857d1bf872d92553c->leave($__internal_1f8372be250284e5890d276fa2f5d49fb3ce3f0a6c70372857d1bf872d92553c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e416694b8af0026027f3c8ebbc8910d72f95e9c049b7b25da8a4e7a8054b8abc = $this->env->getExtension("native_profiler");
        $__internal_e416694b8af0026027f3c8ebbc8910d72f95e9c049b7b25da8a4e7a8054b8abc->enter($__internal_e416694b8af0026027f3c8ebbc8910d72f95e9c049b7b25da8a4e7a8054b8abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e416694b8af0026027f3c8ebbc8910d72f95e9c049b7b25da8a4e7a8054b8abc->leave($__internal_e416694b8af0026027f3c8ebbc8910d72f95e9c049b7b25da8a4e7a8054b8abc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b1e19241088f33de757cf14276a3b8f8a99a833068573045def2805f9eccd7e4 = $this->env->getExtension("native_profiler");
        $__internal_b1e19241088f33de757cf14276a3b8f8a99a833068573045def2805f9eccd7e4->enter($__internal_b1e19241088f33de757cf14276a3b8f8a99a833068573045def2805f9eccd7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b1e19241088f33de757cf14276a3b8f8a99a833068573045def2805f9eccd7e4->leave($__internal_b1e19241088f33de757cf14276a3b8f8a99a833068573045def2805f9eccd7e4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_94762931a28af071f308849c9d871f8d64fec6ba4c1fcf3cdbf83b5ab8c9e3a1 = $this->env->getExtension("native_profiler");
        $__internal_94762931a28af071f308849c9d871f8d64fec6ba4c1fcf3cdbf83b5ab8c9e3a1->enter($__internal_94762931a28af071f308849c9d871f8d64fec6ba4c1fcf3cdbf83b5ab8c9e3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_94762931a28af071f308849c9d871f8d64fec6ba4c1fcf3cdbf83b5ab8c9e3a1->leave($__internal_94762931a28af071f308849c9d871f8d64fec6ba4c1fcf3cdbf83b5ab8c9e3a1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
