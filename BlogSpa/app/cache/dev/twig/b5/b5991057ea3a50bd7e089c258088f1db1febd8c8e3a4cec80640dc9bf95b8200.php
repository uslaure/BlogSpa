<?php

/* ::bodyAcceuil.html.twig */
class __TwigTemplate_89862e01a688957972a1b51ae720e93ec52855235d276c863763b144393bc4f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogSpaUserBundle::layout.html.twig", "::bodyAcceuil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogSpaUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_563280c134d2db12c00207c510c91994831c5fb29134149ff97a0713da1aeac9 = $this->env->getExtension("native_profiler");
        $__internal_563280c134d2db12c00207c510c91994831c5fb29134149ff97a0713da1aeac9->enter($__internal_563280c134d2db12c00207c510c91994831c5fb29134149ff97a0713da1aeac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::bodyAcceuil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_563280c134d2db12c00207c510c91994831c5fb29134149ff97a0713da1aeac9->leave($__internal_563280c134d2db12c00207c510c91994831c5fb29134149ff97a0713da1aeac9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3a13628aec5c13930083bb4a00537b8c7127297ef26239ed4e12e0c70312181 = $this->env->getExtension("native_profiler");
        $__internal_d3a13628aec5c13930083bb4a00537b8c7127297ef26239ed4e12e0c70312181->enter($__internal_d3a13628aec5c13930083bb4a00537b8c7127297ef26239ed4e12e0c70312181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 5
            echo "        <article class=\"blog\">
            <div class=\"date\"><time datetime=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "created", array()), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "created", array()), "l, F j, Y"), "html", null, true);
            echo "</time></div>
            <header>
                <h2><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()), "slug" => $this->getAttribute($context["blog"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "title", array()), "html", null, true);
            echo "</a></h2>
            </header>

            <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute($context["blog"], "image", array())))), "html", null, true);
            echo "\" />
            <div class=\"snippet\">
                <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "blog", array(0 => 500), "method"), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()), "slug" => $this->getAttribute($context["blog"], "slug", array()))), "html", null, true);
            echo "\">Continue reading...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comments: <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()), "slug" => $this->getAttribute($context["blog"], "slug", array()))), "html", null, true);
            echo "#comments\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["blog"], "comments", array())), "html", null, true);
            echo "</a></p>
                <p>Posted by <span class=\"highlight\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "author", array()), "html", null, true);
            echo "</span> at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "created", array()), "h:iA"), "html", null, true);
            echo "</p>
                <p>Tags: <span class=\"highlight\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "tags", array()), "html", null, true);
            echo "</span></p>
            </footer>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "        <p>There are no blog entries for symblog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d3a13628aec5c13930083bb4a00537b8c7127297ef26239ed4e12e0c70312181->leave($__internal_d3a13628aec5c13930083bb4a00537b8c7127297ef26239ed4e12e0c70312181_prof);

    }

    public function getTemplateName()
    {
        return "::bodyAcceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 24,  92 => 20,  86 => 19,  80 => 18,  73 => 14,  69 => 13,  64 => 11,  56 => 8,  49 => 6,  46 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'BlogSpaUserBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% for blog in blogs %}*/
/*         <article class="blog">*/
/*             <div class="date"><time datetime="{{ blog.created|date('c') }}">{{ blog.created|date('l, F j, Y') }}</time></div>*/
/*             <header>*/
/*                 <h2><a href="{{ path('BloggerBlogBundle_blog_show', { 'id': blog.id, 'slug': blog.slug }) }}">{{ blog.title }}</a></h2>*/
/*             </header>*/
/* */
/*             <img src="{{ asset(['images/', blog.image]|join) }}" />*/
/*             <div class="snippet">*/
/*                 <p>{{ blog.blog(500) }}</p>*/
/*                 <p class="continue"><a href="{{ path('BloggerBlogBundle_blog_show', { 'id': blog.id, 'slug': blog.slug }) }}">Continue reading...</a></p>*/
/*             </div>*/
/* */
/*             <footer class="meta">*/
/*                 <p>Comments: <a href="{{ path('BloggerBlogBundle_blog_show', { 'id': blog.id, 'slug': blog.slug }) }}#comments">{{ blog.comments|length }}</a></p>*/
/*                 <p>Posted by <span class="highlight">{{ blog.author }}</span> at {{ blog.created|date('h:iA') }}</p>*/
/*                 <p>Tags: <span class="highlight">{{ blog.tags }}</span></p>*/
/*             </footer>*/
/*         </article>*/
/*     {% else %}*/
/*         <p>There are no blog entries for symblog</p>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
