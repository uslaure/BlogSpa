<?php

/* BlogSpaUserBundle::layout.html.twig */
class __TwigTemplate_b29842c85ac20d8a9f4d0252eab7b5236593b86de94492a4606412fa992c08ea extends Twig_Template
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
        $__internal_efa94bdff756469b36ad4e606df3ca3302fde7a0c9ba0b3338848b8b8d3573f4 = $this->env->getExtension("native_profiler");
        $__internal_efa94bdff756469b36ad4e606df3ca3302fde7a0c9ba0b3338848b8b8d3573f4->enter($__internal_efa94bdff756469b36ad4e606df3ca3302fde7a0c9ba0b3338848b8b8d3573f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogSpaUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efa94bdff756469b36ad4e606df3ca3302fde7a0c9ba0b3338848b8b8d3573f4->leave($__internal_efa94bdff756469b36ad4e606df3ca3302fde7a0c9ba0b3338848b8b8d3573f4_prof);

    }

    // line 3
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6d1085a04508ac9bc6ffd507af24265cdceb8e4f85095b601a081b18326f2641 = $this->env->getExtension("native_profiler");
        $__internal_6d1085a04508ac9bc6ffd507af24265cdceb8e4f85095b601a081b18326f2641->enter($__internal_6d1085a04508ac9bc6ffd507af24265cdceb8e4f85095b601a081b18326f2641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("BloggerBlogBundle_sidebar"), array());
        
        $__internal_6d1085a04508ac9bc6ffd507af24265cdceb8e4f85095b601a081b18326f2641->leave($__internal_6d1085a04508ac9bc6ffd507af24265cdceb8e4f85095b601a081b18326f2641_prof);

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
