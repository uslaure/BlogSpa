<?php

/* BlogBundle:Default:index.html.twig */
class __TwigTemplate_0eec8d01678a348498fb9ae6bfd4e086d8d7ab71bb46326ac43e382d6b677321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1abc2d6613e4eac0909bae5ea3b91926157ff2a69dcd5e60faaa5d58fc09990 = $this->env->getExtension("native_profiler");
        $__internal_b1abc2d6613e4eac0909bae5ea3b91926157ff2a69dcd5e60faaa5d58fc09990->enter($__internal_b1abc2d6613e4eac0909bae5ea3b91926157ff2a69dcd5e60faaa5d58fc09990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "- Mon blog</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-slace=1.0\"></meta>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"path/to/font-awesome/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/add.css"), "html", null, true);
        echo "\">
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('nav', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->loadTemplate("::show.html.twig", "BlogBundle:Default:index.html.twig", 17)->display($context);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "        <script src=\"//code.jquery.com/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"jquery/jquery.min.js\"></script>
    </body>
</html>
";
        
        $__internal_b1abc2d6613e4eac0909bae5ea3b91926157ff2a69dcd5e60faaa5d58fc09990->leave($__internal_b1abc2d6613e4eac0909bae5ea3b91926157ff2a69dcd5e60faaa5d58fc09990_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_6906ee6fac6541e1468b6267e65f3ba749d5900759bf8904f2fb943becdcb506 = $this->env->getExtension("native_profiler");
        $__internal_6906ee6fac6541e1468b6267e65f3ba749d5900759bf8904f2fb943becdcb506->enter($__internal_6906ee6fac6541e1468b6267e65f3ba749d5900759bf8904f2fb943becdcb506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6906ee6fac6541e1468b6267e65f3ba749d5900759bf8904f2fb943becdcb506->leave($__internal_6906ee6fac6541e1468b6267e65f3ba749d5900759bf8904f2fb943becdcb506_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1a9c22b09955f9922b334e96dbb527f34ac6e53c69c5eb497562004367ace156 = $this->env->getExtension("native_profiler");
        $__internal_1a9c22b09955f9922b334e96dbb527f34ac6e53c69c5eb497562004367ace156->enter($__internal_1a9c22b09955f9922b334e96dbb527f34ac6e53c69c5eb497562004367ace156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1a9c22b09955f9922b334e96dbb527f34ac6e53c69c5eb497562004367ace156->leave($__internal_1a9c22b09955f9922b334e96dbb527f34ac6e53c69c5eb497562004367ace156_prof);

    }

    // line 15
    public function block_nav($context, array $blocks = array())
    {
        $__internal_562745502530b08626c4c4e0e5a59f71e650eaec1c9f9a4fc65ac40d0346bb00 = $this->env->getExtension("native_profiler");
        $__internal_562745502530b08626c4c4e0e5a59f71e650eaec1c9f9a4fc65ac40d0346bb00->enter($__internal_562745502530b08626c4c4e0e5a59f71e650eaec1c9f9a4fc65ac40d0346bb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("::nav.html.twig", "BlogBundle:Default:index.html.twig", 15)->display($context);
        
        $__internal_562745502530b08626c4c4e0e5a59f71e650eaec1c9f9a4fc65ac40d0346bb00->leave($__internal_562745502530b08626c4c4e0e5a59f71e650eaec1c9f9a4fc65ac40d0346bb00_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_4095a9cd38f0c9f3628fdf5d5188064a36da1db68f785e3f7709435cb9089352 = $this->env->getExtension("native_profiler");
        $__internal_4095a9cd38f0c9f3628fdf5d5188064a36da1db68f785e3f7709435cb9089352->enter($__internal_4095a9cd38f0c9f3628fdf5d5188064a36da1db68f785e3f7709435cb9089352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->loadTemplate("::bodyAcceuil.html.twig", "BlogBundle:Default:index.html.twig", 16)->display($context);
        
        $__internal_4095a9cd38f0c9f3628fdf5d5188064a36da1db68f785e3f7709435cb9089352->leave($__internal_4095a9cd38f0c9f3628fdf5d5188064a36da1db68f785e3f7709435cb9089352_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f7a51e86d8e08914eb734ad55d25d87b17ff26d14220e7097cfec7f25c824fc7 = $this->env->getExtension("native_profiler");
        $__internal_f7a51e86d8e08914eb734ad55d25d87b17ff26d14220e7097cfec7f25c824fc7->enter($__internal_f7a51e86d8e08914eb734ad55d25d87b17ff26d14220e7097cfec7f25c824fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f7a51e86d8e08914eb734ad55d25d87b17ff26d14220e7097cfec7f25c824fc7->leave($__internal_f7a51e86d8e08914eb734ad55d25d87b17ff26d14220e7097cfec7f25c824fc7_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 18,  113 => 16,  101 => 15,  90 => 11,  79 => 6,  68 => 19,  65 => 18,  62 => 17,  59 => 16,  57 => 15,  50 => 12,  48 => 11,  44 => 10,  39 => 8,  34 => 6,  27 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}{% endblock %}- Mon blog</title>*/
/*         <meta name="viewport" content="width=device-width, initial-slace=1.0"></meta>*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('css/add.css')}}">*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block nav %}{%include '::nav.html.twig'%}{% endblock %}*/
/*         {% block body %}{%include '::bodyAcceuil.html.twig'%}{% endblock %}*/
/*         {%include '::show.html.twig'%}*/
/*         {% block javascripts %}{% endblock %}*/
/*         <script src="//code.jquery.com/jquery.min.js"></script>*/
/*         <script type="text/javascript" src="jquery/jquery.min.js"></script>*/
/*     </body>*/
/* </html>*/
/* */
