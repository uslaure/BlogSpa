<?php

/* ::base.html.twig */
class __TwigTemplate_2e475ac2cfb964fd48f1bdaabb4b1d895880386d949f90f34a64334414cf98f9 extends Twig_Template
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
        $__internal_694c5c769e1f8cb5716cdcc98e1abf4351b169ae806dba38d1172531b14ba5c3 = $this->env->getExtension("native_profiler");
        $__internal_694c5c769e1f8cb5716cdcc98e1abf4351b169ae806dba38d1172531b14ba5c3->enter($__internal_694c5c769e1f8cb5716cdcc98e1abf4351b169ae806dba38d1172531b14ba5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - Mon blog</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-slace=1.0\"></meta>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"path/to/font-awesome/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/add.css"), "html", null, true);
        echo "\">
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('nav', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "        <script src=\"//code.jquery.com/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"jquery/jquery.min.js\"></script>
    </body>
</html>
";
        
        $__internal_694c5c769e1f8cb5716cdcc98e1abf4351b169ae806dba38d1172531b14ba5c3->leave($__internal_694c5c769e1f8cb5716cdcc98e1abf4351b169ae806dba38d1172531b14ba5c3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_28f49b0e8a50eeb5fc4bdfec170673392c11a32f1218a4eb44a7e31b0f3d270a = $this->env->getExtension("native_profiler");
        $__internal_28f49b0e8a50eeb5fc4bdfec170673392c11a32f1218a4eb44a7e31b0f3d270a->enter($__internal_28f49b0e8a50eeb5fc4bdfec170673392c11a32f1218a4eb44a7e31b0f3d270a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_28f49b0e8a50eeb5fc4bdfec170673392c11a32f1218a4eb44a7e31b0f3d270a->leave($__internal_28f49b0e8a50eeb5fc4bdfec170673392c11a32f1218a4eb44a7e31b0f3d270a_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_474b5fb72f64d9c7c311cd96b82a6e26f19f7c2b7d2a97f25cc16a4fa06efb2b = $this->env->getExtension("native_profiler");
        $__internal_474b5fb72f64d9c7c311cd96b82a6e26f19f7c2b7d2a97f25cc16a4fa06efb2b->enter($__internal_474b5fb72f64d9c7c311cd96b82a6e26f19f7c2b7d2a97f25cc16a4fa06efb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_474b5fb72f64d9c7c311cd96b82a6e26f19f7c2b7d2a97f25cc16a4fa06efb2b->leave($__internal_474b5fb72f64d9c7c311cd96b82a6e26f19f7c2b7d2a97f25cc16a4fa06efb2b_prof);

    }

    // line 14
    public function block_nav($context, array $blocks = array())
    {
        $__internal_4d3b1c7d9eda3c05752229b0d3ee3252da8ee508b42f1dcb05434e72860ca957 = $this->env->getExtension("native_profiler");
        $__internal_4d3b1c7d9eda3c05752229b0d3ee3252da8ee508b42f1dcb05434e72860ca957->enter($__internal_4d3b1c7d9eda3c05752229b0d3ee3252da8ee508b42f1dcb05434e72860ca957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("::nav.html.twig", "::base.html.twig", 14)->display($context);
        
        $__internal_4d3b1c7d9eda3c05752229b0d3ee3252da8ee508b42f1dcb05434e72860ca957->leave($__internal_4d3b1c7d9eda3c05752229b0d3ee3252da8ee508b42f1dcb05434e72860ca957_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_375dba90cb3338309722d46aea72136a4be3de8d9ab95999db154f4c6aadc706 = $this->env->getExtension("native_profiler");
        $__internal_375dba90cb3338309722d46aea72136a4be3de8d9ab95999db154f4c6aadc706->enter($__internal_375dba90cb3338309722d46aea72136a4be3de8d9ab95999db154f4c6aadc706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->loadTemplate("::bodyAccueil.html.twig", "::base.html.twig", 15)->display($context);
        
        $__internal_375dba90cb3338309722d46aea72136a4be3de8d9ab95999db154f4c6aadc706->leave($__internal_375dba90cb3338309722d46aea72136a4be3de8d9ab95999db154f4c6aadc706_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f85e72d4a7a0873c56222ed3369d7d2f5ac4df814ab37be2f7b3fc321d81c901 = $this->env->getExtension("native_profiler");
        $__internal_f85e72d4a7a0873c56222ed3369d7d2f5ac4df814ab37be2f7b3fc321d81c901->enter($__internal_f85e72d4a7a0873c56222ed3369d7d2f5ac4df814ab37be2f7b3fc321d81c901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f85e72d4a7a0873c56222ed3369d7d2f5ac4df814ab37be2f7b3fc321d81c901->leave($__internal_f85e72d4a7a0873c56222ed3369d7d2f5ac4df814ab37be2f7b3fc321d81c901_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 16,  109 => 15,  97 => 14,  86 => 10,  75 => 5,  64 => 17,  61 => 16,  58 => 15,  56 => 14,  49 => 11,  47 => 10,  43 => 9,  38 => 7,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}{% endblock %} - Mon blog</title>*/
/*         <meta name="viewport" content="width=device-width, initial-slace=1.0"></meta>*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('css/add.css')}}">*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block nav %}{%include '::nav.html.twig'%}{% endblock %}*/
/*         {% block body %}{%include '::bodyAccueil.html.twig'%}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*         <script src="//code.jquery.com/jquery.min.js"></script>*/
/*         <script type="text/javascript" src="jquery/jquery.min.js"></script>*/
/*     </body>*/
/* </html>*/
/* */
