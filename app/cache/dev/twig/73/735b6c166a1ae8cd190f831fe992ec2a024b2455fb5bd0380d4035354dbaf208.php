<?php

/* BlogBundle:Default:index.html.twig */
class __TwigTemplate_ac20681148d969426a918c07468f628589447b0cf2592b2cace9fb63ab51ada3 extends Twig_Template
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
        $__internal_2fdb1769b00839083b2ec0a8ee7a667833de54b41e11337d4617a633d546a23d = $this->env->getExtension("native_profiler");
        $__internal_2fdb1769b00839083b2ec0a8ee7a667833de54b41e11337d4617a633d546a23d->enter($__internal_2fdb1769b00839083b2ec0a8ee7a667833de54b41e11337d4617a633d546a23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

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
        
        $__internal_2fdb1769b00839083b2ec0a8ee7a667833de54b41e11337d4617a633d546a23d->leave($__internal_2fdb1769b00839083b2ec0a8ee7a667833de54b41e11337d4617a633d546a23d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa7ee944941d1baf41b00e3b854332202001e5bdad62c2275a502db297309cd1 = $this->env->getExtension("native_profiler");
        $__internal_fa7ee944941d1baf41b00e3b854332202001e5bdad62c2275a502db297309cd1->enter($__internal_fa7ee944941d1baf41b00e3b854332202001e5bdad62c2275a502db297309cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fa7ee944941d1baf41b00e3b854332202001e5bdad62c2275a502db297309cd1->leave($__internal_fa7ee944941d1baf41b00e3b854332202001e5bdad62c2275a502db297309cd1_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_af090048ce24bb43efff55fd1ab0325a267fa2d31a6037116dfcd4dc572a64ac = $this->env->getExtension("native_profiler");
        $__internal_af090048ce24bb43efff55fd1ab0325a267fa2d31a6037116dfcd4dc572a64ac->enter($__internal_af090048ce24bb43efff55fd1ab0325a267fa2d31a6037116dfcd4dc572a64ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_af090048ce24bb43efff55fd1ab0325a267fa2d31a6037116dfcd4dc572a64ac->leave($__internal_af090048ce24bb43efff55fd1ab0325a267fa2d31a6037116dfcd4dc572a64ac_prof);

    }

    // line 15
    public function block_nav($context, array $blocks = array())
    {
        $__internal_d3389745b5815015d4e7297dba76e73dd73c4ee21a302f3380b2032cff8f8b9a = $this->env->getExtension("native_profiler");
        $__internal_d3389745b5815015d4e7297dba76e73dd73c4ee21a302f3380b2032cff8f8b9a->enter($__internal_d3389745b5815015d4e7297dba76e73dd73c4ee21a302f3380b2032cff8f8b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("::nav.html.twig", "BlogBundle:Default:index.html.twig", 15)->display($context);
        
        $__internal_d3389745b5815015d4e7297dba76e73dd73c4ee21a302f3380b2032cff8f8b9a->leave($__internal_d3389745b5815015d4e7297dba76e73dd73c4ee21a302f3380b2032cff8f8b9a_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_be0662b441d8b6f6b92bd19218d01198524ae7f9a2bd389f345187d86056d337 = $this->env->getExtension("native_profiler");
        $__internal_be0662b441d8b6f6b92bd19218d01198524ae7f9a2bd389f345187d86056d337->enter($__internal_be0662b441d8b6f6b92bd19218d01198524ae7f9a2bd389f345187d86056d337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->loadTemplate("::bodyAccueil.html.twig", "BlogBundle:Default:index.html.twig", 16)->display($context);
        
        $__internal_be0662b441d8b6f6b92bd19218d01198524ae7f9a2bd389f345187d86056d337->leave($__internal_be0662b441d8b6f6b92bd19218d01198524ae7f9a2bd389f345187d86056d337_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_61db1603013861df8143a6d7c8de79c023bbf2635679f78aae3658bf6c331ece = $this->env->getExtension("native_profiler");
        $__internal_61db1603013861df8143a6d7c8de79c023bbf2635679f78aae3658bf6c331ece->enter($__internal_61db1603013861df8143a6d7c8de79c023bbf2635679f78aae3658bf6c331ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_61db1603013861df8143a6d7c8de79c023bbf2635679f78aae3658bf6c331ece->leave($__internal_61db1603013861df8143a6d7c8de79c023bbf2635679f78aae3658bf6c331ece_prof);

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
/*         {% block body %}{%include '::bodyAccueil.html.twig'%}{% endblock %}*/
/*         {%include '::show.html.twig'%}*/
/*         {% block javascripts %}{% endblock %}*/
/*         <script src="//code.jquery.com/jquery.min.js"></script>*/
/*         <script type="text/javascript" src="jquery/jquery.min.js"></script>*/
/*     </body>*/
/* </html>*/
/* */
