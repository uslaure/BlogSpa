<?php

/* ::bodyAccueil.html.twig */
class __TwigTemplate_1914b17948f672f835b3d33dc2c09f67c2a92fd0a99189ce326e4fd8d0b1f958 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogSpaUserBundle::layout.html.twig", "::bodyAccueil.html.twig", 1);
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
        $__internal_2ad221ab66494c8dc52f14f4eb4ad582f7bc832a37f461b774bac572b4cf6d86 = $this->env->getExtension("native_profiler");
        $__internal_2ad221ab66494c8dc52f14f4eb4ad582f7bc832a37f461b774bac572b4cf6d86->enter($__internal_2ad221ab66494c8dc52f14f4eb4ad582f7bc832a37f461b774bac572b4cf6d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::bodyAccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ad221ab66494c8dc52f14f4eb4ad582f7bc832a37f461b774bac572b4cf6d86->leave($__internal_2ad221ab66494c8dc52f14f4eb4ad582f7bc832a37f461b774bac572b4cf6d86_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6afef1d98261924f1623f3e0ba1a3c14ac3b643853f8f9e79bbf6d14a1269fc7 = $this->env->getExtension("native_profiler");
        $__internal_6afef1d98261924f1623f3e0ba1a3c14ac3b643853f8f9e79bbf6d14a1269fc7->enter($__internal_6afef1d98261924f1623f3e0ba1a3c14ac3b643853f8f9e79bbf6d14a1269fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6afef1d98261924f1623f3e0ba1a3c14ac3b643853f8f9e79bbf6d14a1269fc7->leave($__internal_6afef1d98261924f1623f3e0ba1a3c14ac3b643853f8f9e79bbf6d14a1269fc7_prof);

    }

    public function getTemplateName()
    {
        return "::bodyAccueil.html.twig";
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
