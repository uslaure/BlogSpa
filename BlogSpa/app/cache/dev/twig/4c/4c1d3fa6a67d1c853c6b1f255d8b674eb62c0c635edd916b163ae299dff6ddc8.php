<?php

/* BlogSpaUserBundle::layout.html.twig */
class __TwigTemplate_1cafde893e37c5de541df46de57aa5f4542eb0526383eb2d73bc70f63143b406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BlogSpaUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51cb5ee4896393d98640ecb1c90b4f7d4a5753b372bd84ef5bc759a0a119dc48 = $this->env->getExtension("native_profiler");
        $__internal_51cb5ee4896393d98640ecb1c90b4f7d4a5753b372bd84ef5bc759a0a119dc48->enter($__internal_51cb5ee4896393d98640ecb1c90b4f7d4a5753b372bd84ef5bc759a0a119dc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogSpaUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51cb5ee4896393d98640ecb1c90b4f7d4a5753b372bd84ef5bc759a0a119dc48->leave($__internal_51cb5ee4896393d98640ecb1c90b4f7d4a5753b372bd84ef5bc759a0a119dc48_prof);

    }

    // line 3
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_163e79e66eed3a7e4e472bbe083ed168ae451f32b5bd1bb97fe2e1451710367b = $this->env->getExtension("native_profiler");
        $__internal_163e79e66eed3a7e4e472bbe083ed168ae451f32b5bd1bb97fe2e1451710367b->enter($__internal_163e79e66eed3a7e4e472bbe083ed168ae451f32b5bd1bb97fe2e1451710367b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("BloggerBlogBundle_sidebar"), array());
        
        $__internal_163e79e66eed3a7e4e472bbe083ed168ae451f32b5bd1bb97fe2e1451710367b->leave($__internal_163e79e66eed3a7e4e472bbe083ed168ae451f32b5bd1bb97fe2e1451710367b_prof);

    }

    public function getTemplateName()
    {
        return "BlogSpaUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block sidebar %}*/
/*     {% render url('BloggerBlogBundle_sidebar') %}*/
/* {% endblock %}*/
