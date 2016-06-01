<?php

/* ::base.html.twig */
class __TwigTemplate_a70d8cf399e7698a374f18f7aac72f6faaa6bc04fcd49efd59266e95178c3e9a extends Twig_Template
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
        $__internal_cc8721b56e03fcba6cbb72ee9531eb02866a35e9e457d3983d3da662254b464f = $this->env->getExtension("native_profiler");
        $__internal_cc8721b56e03fcba6cbb72ee9531eb02866a35e9e457d3983d3da662254b464f->enter($__internal_cc8721b56e03fcba6cbb72ee9531eb02866a35e9e457d3983d3da662254b464f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_cc8721b56e03fcba6cbb72ee9531eb02866a35e9e457d3983d3da662254b464f->leave($__internal_cc8721b56e03fcba6cbb72ee9531eb02866a35e9e457d3983d3da662254b464f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5c4a23b974a9f23f2feb0ba1b8b78e6213f753b82c6df654ed62a55b330a22c = $this->env->getExtension("native_profiler");
        $__internal_c5c4a23b974a9f23f2feb0ba1b8b78e6213f753b82c6df654ed62a55b330a22c->enter($__internal_c5c4a23b974a9f23f2feb0ba1b8b78e6213f753b82c6df654ed62a55b330a22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c5c4a23b974a9f23f2feb0ba1b8b78e6213f753b82c6df654ed62a55b330a22c->leave($__internal_c5c4a23b974a9f23f2feb0ba1b8b78e6213f753b82c6df654ed62a55b330a22c_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_27750ec18c223fff394f6771df4ec3fac4d7678b31a8cccc2c7a394431bc6242 = $this->env->getExtension("native_profiler");
        $__internal_27750ec18c223fff394f6771df4ec3fac4d7678b31a8cccc2c7a394431bc6242->enter($__internal_27750ec18c223fff394f6771df4ec3fac4d7678b31a8cccc2c7a394431bc6242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_27750ec18c223fff394f6771df4ec3fac4d7678b31a8cccc2c7a394431bc6242->leave($__internal_27750ec18c223fff394f6771df4ec3fac4d7678b31a8cccc2c7a394431bc6242_prof);

    }

    // line 14
    public function block_nav($context, array $blocks = array())
    {
        $__internal_314736eaf3e1f73352a0a2e10ca823a254a47c235a3c9f97a6d1435648447287 = $this->env->getExtension("native_profiler");
        $__internal_314736eaf3e1f73352a0a2e10ca823a254a47c235a3c9f97a6d1435648447287->enter($__internal_314736eaf3e1f73352a0a2e10ca823a254a47c235a3c9f97a6d1435648447287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("::nav.html.twig", "::base.html.twig", 14)->display($context);
        
        $__internal_314736eaf3e1f73352a0a2e10ca823a254a47c235a3c9f97a6d1435648447287->leave($__internal_314736eaf3e1f73352a0a2e10ca823a254a47c235a3c9f97a6d1435648447287_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5cdd5b5849f479983e9f0e5172e4e1078bccc3ddce402aae07a4efbb7c15189 = $this->env->getExtension("native_profiler");
        $__internal_a5cdd5b5849f479983e9f0e5172e4e1078bccc3ddce402aae07a4efbb7c15189->enter($__internal_a5cdd5b5849f479983e9f0e5172e4e1078bccc3ddce402aae07a4efbb7c15189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->loadTemplate("::bodyAcceuil.html.twig", "::base.html.twig", 15)->display($context);
        
        $__internal_a5cdd5b5849f479983e9f0e5172e4e1078bccc3ddce402aae07a4efbb7c15189->leave($__internal_a5cdd5b5849f479983e9f0e5172e4e1078bccc3ddce402aae07a4efbb7c15189_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5bfa6a9b89b295541f2b516b580160028824411d8ae099d31379e5c78707c87a = $this->env->getExtension("native_profiler");
        $__internal_5bfa6a9b89b295541f2b516b580160028824411d8ae099d31379e5c78707c87a->enter($__internal_5bfa6a9b89b295541f2b516b580160028824411d8ae099d31379e5c78707c87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5bfa6a9b89b295541f2b516b580160028824411d8ae099d31379e5c78707c87a->leave($__internal_5bfa6a9b89b295541f2b516b580160028824411d8ae099d31379e5c78707c87a_prof);

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
/*         {% block body %}{%include '::bodyAcceuil.html.twig'%}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*         <script src="//code.jquery.com/jquery.min.js"></script>*/
/*         <script type="text/javascript" src="jquery/jquery.min.js"></script>*/
/*     </body>*/
/* </html>*/
/* */
