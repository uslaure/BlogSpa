<?php

/* BlogSpaUserBundle:Blog:show.html.twig */
class __TwigTemplate_e70b73695cdb9601e7da15cf0bf59080f465d12111947621575d9752a2de2cc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_100d5a52f46cb767b83e6c04b98c2177dcb17275f4abac8b7a5aa7a2fb866f46 = $this->env->getExtension("native_profiler");
        $__internal_100d5a52f46cb767b83e6c04b98c2177dcb17275f4abac8b7a5aa7a2fb866f46->enter($__internal_100d5a52f46cb767b83e6c04b98c2177dcb17275f4abac8b7a5aa7a2fb866f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogSpaUserBundle:Blog:show.html.twig"));

        // line 1
        echo "<style>.date { margin-bottom: 20px; border-bottom: 1px solid #ccc; font-size: 24px; color: #666; line-height: 30px }
.blog { margin-bottom: 20px; }
.blog img { width: 190px; float: left; padding: 5px; border: 1px solid #ccc; margin: 0 10px 10px 0; }
.blog .meta { clear: left; margin-bottom: 20px; }
.blog .snippet p.continue { margin-bottom: 0; text-align: right; }
.blog .meta { font-style: italic; font-size: 12px; color: #666; }
.blog .meta p { margin-bottom: 5px; line-height: 1.2em; }
.blog img.large { width: 300px; min-height: 165px; }</style>

";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "
";
        
        $__internal_100d5a52f46cb767b83e6c04b98c2177dcb17275f4abac8b7a5aa7a2fb866f46->leave($__internal_100d5a52f46cb767b83e6c04b98c2177dcb17275f4abac8b7a5aa7a2fb866f46_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_054b676e1fa509b8e65f00679c2c265f3b2bd413d1e65bd945a29c7aff3f108a = $this->env->getExtension("native_profiler");
        $__internal_054b676e1fa509b8e65f00679c2c265f3b2bd413d1e65bd945a29c7aff3f108a->enter($__internal_054b676e1fa509b8e65f00679c2c265f3b2bd413d1e65bd945a29c7aff3f108a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<article class=\"blog\">
  <header>
    <div class=\"date\"><time datetime=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "l, F j, Y"), "html", null, true);
        echo "</time></div>
    <h2>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo "</h2>
  </header>
  <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "img/", 1 => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "image", array())))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo " image not found\" class=\"large\" />
  <div>
    <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "blog", array()), "html", null, true);
        echo "</p>
  </div>
</article>
";
        
        $__internal_054b676e1fa509b8e65f00679c2c265f3b2bd413d1e65bd945a29c7aff3f108a->leave($__internal_054b676e1fa509b8e65f00679c2c265f3b2bd413d1e65bd945a29c7aff3f108a_prof);

    }

    public function getTemplateName()
    {
        return "BlogSpaUserBundle:Blog:show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  65 => 16,  60 => 14,  54 => 13,  50 => 11,  44 => 10,  36 => 22,  34 => 10,  23 => 1,);
    }
}
/* <style>.date { margin-bottom: 20px; border-bottom: 1px solid #ccc; font-size: 24px; color: #666; line-height: 30px }*/
/* .blog { margin-bottom: 20px; }*/
/* .blog img { width: 190px; float: left; padding: 5px; border: 1px solid #ccc; margin: 0 10px 10px 0; }*/
/* .blog .meta { clear: left; margin-bottom: 20px; }*/
/* .blog .snippet p.continue { margin-bottom: 0; text-align: right; }*/
/* .blog .meta { font-style: italic; font-size: 12px; color: #666; }*/
/* .blog .meta p { margin-bottom: 5px; line-height: 1.2em; }*/
/* .blog img.large { width: 300px; min-height: 165px; }</style>*/
/* */
/* {% block body %}*/
/* <article class="blog">*/
/*   <header>*/
/*     <div class="date"><time datetime="{{ blog.created|date('c') }}">{{ blog.created|date('l, F j, Y') }}</time></div>*/
/*     <h2>{{ blog.title }}</h2>*/
/*   </header>*/
/*   <img src="{{ asset(['img/', blog.image]|join) }}" alt="{{ blog.title }} image not found" class="large" />*/
/*   <div>*/
/*     <p>{{ blog.blog }}</p>*/
/*   </div>*/
/* </article>*/
/* {% endblock %}*/
/* */
/* */
