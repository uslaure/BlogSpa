<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_167e69b1bfbcbea493d6459376e5043e710cd92fed3a3756f90ea50551892838 extends Twig_Template
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
        $__internal_7cdb4f66d3b972e082bc74e92c5d11875522a1f7238bbbb3eda0d733bd099dd0 = $this->env->getExtension("native_profiler");
        $__internal_7cdb4f66d3b972e082bc74e92c5d11875522a1f7238bbbb3eda0d733bd099dd0->enter($__internal_7cdb4f66d3b972e082bc74e92c5d11875522a1f7238bbbb3eda0d733bd099dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_7cdb4f66d3b972e082bc74e92c5d11875522a1f7238bbbb3eda0d733bd099dd0->leave($__internal_7cdb4f66d3b972e082bc74e92c5d11875522a1f7238bbbb3eda0d733bd099dd0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
