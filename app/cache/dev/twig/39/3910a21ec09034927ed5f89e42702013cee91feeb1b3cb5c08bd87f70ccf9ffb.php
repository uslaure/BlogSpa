<?php

/* ::nav.html.twig */
class __TwigTemplate_6c559459a9bfde037d9edda28d7739ff53044d6a793438f24d4463df0fc5fafd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f29b8c294c63bd0a80a56460e92fa7bb85ba31ff9b7b72bbd492b5285007fc57 = $this->env->getExtension("native_profiler");
        $__internal_f29b8c294c63bd0a80a56460e92fa7bb85ba31ff9b7b72bbd492b5285007fc57->enter($__internal_f29b8c294c63bd0a80a56460e92fa7bb85ba31ff9b7b72bbd492b5285007fc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::nav.html.twig"));

        // line 1
        echo "<head><link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/add.css"), "html", null, true);
        echo "\"></head>
<body>
<nav class=\"navbar navbar-fixed-top navbar-default\">
<div class=\"container\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">Mon blog</a>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
          
      </ul>
    </div>
  </div>
  </div>
</nav>
</body>";
        
        $__internal_f29b8c294c63bd0a80a56460e92fa7bb85ba31ff9b7b72bbd492b5285007fc57->leave($__internal_f29b8c294c63bd0a80a56460e92fa7bb85ba31ff9b7b72bbd492b5285007fc57_prof);

    }

    public function getTemplateName()
    {
        return "::nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <head><link rel="stylesheet" type="text/css" href="{{asset('css/add.css')}}"></head>*/
/* <body>*/
/* <nav class="navbar navbar-fixed-top navbar-default">*/
/* <div class="container">*/
/*   <div class="container-fluid">*/
/*     <!-- Brand and toggle get grouped for better mobile display -->*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       <a class="navbar-brand" href="#">Mon blog</a>*/
/*     </div>*/
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*       <ul class="nav navbar-nav">*/
/*           */
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   </div>*/
/* </nav>*/
/* </body>*/
