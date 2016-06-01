<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_58a661a3f7ac0e32b689e3c3bd9b7b0bffe30008d546c556b9d1c954c4b8db59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_791f48f3ca1f2deed17f159868b78a321e0cdf36a86f424dce53817426578fa8 = $this->env->getExtension("native_profiler");
        $__internal_791f48f3ca1f2deed17f159868b78a321e0cdf36a86f424dce53817426578fa8->enter($__internal_791f48f3ca1f2deed17f159868b78a321e0cdf36a86f424dce53817426578fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_791f48f3ca1f2deed17f159868b78a321e0cdf36a86f424dce53817426578fa8->leave($__internal_791f48f3ca1f2deed17f159868b78a321e0cdf36a86f424dce53817426578fa8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_68be120c138d0c9339b09198efd9c5690744055dcd4742c38f892f247eb2387a = $this->env->getExtension("native_profiler");
        $__internal_68be120c138d0c9339b09198efd9c5690744055dcd4742c38f892f247eb2387a->enter($__internal_68be120c138d0c9339b09198efd9c5690744055dcd4742c38f892f247eb2387a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_68be120c138d0c9339b09198efd9c5690744055dcd4742c38f892f247eb2387a->leave($__internal_68be120c138d0c9339b09198efd9c5690744055dcd4742c38f892f247eb2387a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4dd1e334890cbbbdf5e4f93aac30c44b6e5d505ae58e9e7aed1d02ee59301d8b = $this->env->getExtension("native_profiler");
        $__internal_4dd1e334890cbbbdf5e4f93aac30c44b6e5d505ae58e9e7aed1d02ee59301d8b->enter($__internal_4dd1e334890cbbbdf5e4f93aac30c44b6e5d505ae58e9e7aed1d02ee59301d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4dd1e334890cbbbdf5e4f93aac30c44b6e5d505ae58e9e7aed1d02ee59301d8b->leave($__internal_4dd1e334890cbbbdf5e4f93aac30c44b6e5d505ae58e9e7aed1d02ee59301d8b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bda5084f6631ab3e8cb8033b7ad8598de97ab528d984976d1ca46639d73e4f36 = $this->env->getExtension("native_profiler");
        $__internal_bda5084f6631ab3e8cb8033b7ad8598de97ab528d984976d1ca46639d73e4f36->enter($__internal_bda5084f6631ab3e8cb8033b7ad8598de97ab528d984976d1ca46639d73e4f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bda5084f6631ab3e8cb8033b7ad8598de97ab528d984976d1ca46639d73e4f36->leave($__internal_bda5084f6631ab3e8cb8033b7ad8598de97ab528d984976d1ca46639d73e4f36_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
