<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a0fc8974af1a0168ab52bf8a21db0550b43a49a329b4973e3347beb79435cf26 extends Twig_Template
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
        $__internal_85920e9657d7e5e01233d8de6d6fd809120b32a4309df14b6236f8ceb54288ac = $this->env->getExtension("native_profiler");
        $__internal_85920e9657d7e5e01233d8de6d6fd809120b32a4309df14b6236f8ceb54288ac->enter($__internal_85920e9657d7e5e01233d8de6d6fd809120b32a4309df14b6236f8ceb54288ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85920e9657d7e5e01233d8de6d6fd809120b32a4309df14b6236f8ceb54288ac->leave($__internal_85920e9657d7e5e01233d8de6d6fd809120b32a4309df14b6236f8ceb54288ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c938cd399cb160107f97caae631e9defc7a69500b0b34c7acbfb18d5cb877d01 = $this->env->getExtension("native_profiler");
        $__internal_c938cd399cb160107f97caae631e9defc7a69500b0b34c7acbfb18d5cb877d01->enter($__internal_c938cd399cb160107f97caae631e9defc7a69500b0b34c7acbfb18d5cb877d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c938cd399cb160107f97caae631e9defc7a69500b0b34c7acbfb18d5cb877d01->leave($__internal_c938cd399cb160107f97caae631e9defc7a69500b0b34c7acbfb18d5cb877d01_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_04a6ae3356132386866f2e3041511cb79059e5137a8646df13184629576c5612 = $this->env->getExtension("native_profiler");
        $__internal_04a6ae3356132386866f2e3041511cb79059e5137a8646df13184629576c5612->enter($__internal_04a6ae3356132386866f2e3041511cb79059e5137a8646df13184629576c5612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_04a6ae3356132386866f2e3041511cb79059e5137a8646df13184629576c5612->leave($__internal_04a6ae3356132386866f2e3041511cb79059e5137a8646df13184629576c5612_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_44444666fee6b3c851b54cee6585f6824e3b6664dd411c594609470c3504c514 = $this->env->getExtension("native_profiler");
        $__internal_44444666fee6b3c851b54cee6585f6824e3b6664dd411c594609470c3504c514->enter($__internal_44444666fee6b3c851b54cee6585f6824e3b6664dd411c594609470c3504c514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_44444666fee6b3c851b54cee6585f6824e3b6664dd411c594609470c3504c514->leave($__internal_44444666fee6b3c851b54cee6585f6824e3b6664dd411c594609470c3504c514_prof);

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
