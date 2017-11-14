<?php

/* blog/index.html.twig */
class __TwigTemplate_4b655f0edd0e567e2df9ce51d00d45ac90afdbf2b45f46b56a2e8504173ae5be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f00652a21289478fefbccaf51a1f80923b4f806b5f2752b4c1a7d43d889de796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f00652a21289478fefbccaf51a1f80923b4f806b5f2752b4c1a7d43d889de796->enter($__internal_f00652a21289478fefbccaf51a1f80923b4f806b5f2752b4c1a7d43d889de796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_f751233731441b88274bc2d21716811934d5957b31ab14eaa90e686496209167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f751233731441b88274bc2d21716811934d5957b31ab14eaa90e686496209167->enter($__internal_f751233731441b88274bc2d21716811934d5957b31ab14eaa90e686496209167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f00652a21289478fefbccaf51a1f80923b4f806b5f2752b4c1a7d43d889de796->leave($__internal_f00652a21289478fefbccaf51a1f80923b4f806b5f2752b4c1a7d43d889de796_prof);

        
        $__internal_f751233731441b88274bc2d21716811934d5957b31ab14eaa90e686496209167->leave($__internal_f751233731441b88274bc2d21716811934d5957b31ab14eaa90e686496209167_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a7bc697e5691d5556b17afff2364eedb0223206c16bcad484e44fcf17c41588e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7bc697e5691d5556b17afff2364eedb0223206c16bcad484e44fcf17c41588e->enter($__internal_a7bc697e5691d5556b17afff2364eedb0223206c16bcad484e44fcf17c41588e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_e560372d9d15efbd128536d800ada36f721fdf93df28f4b5cfe966b5324d5c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e560372d9d15efbd128536d800ada36f721fdf93df28f4b5cfe966b5324d5c5b->enter($__internal_e560372d9d15efbd128536d800ada36f721fdf93df28f4b5cfe966b5324d5c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_index";
        
        $__internal_e560372d9d15efbd128536d800ada36f721fdf93df28f4b5cfe966b5324d5c5b->leave($__internal_e560372d9d15efbd128536d800ada36f721fdf93df28f4b5cfe966b5324d5c5b_prof);

        
        $__internal_a7bc697e5691d5556b17afff2364eedb0223206c16bcad484e44fcf17c41588e->leave($__internal_a7bc697e5691d5556b17afff2364eedb0223206c16bcad484e44fcf17c41588e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_a2336b52e9ba18bf51154eceee2135c4f37f85fd93af161e2c6eedb9dae91ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2336b52e9ba18bf51154eceee2135c4f37f85fd93af161e2c6eedb9dae91ffa->enter($__internal_a2336b52e9ba18bf51154eceee2135c4f37f85fd93af161e2c6eedb9dae91ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_4a55e9bb92c58ee3a5235d4734c59e43e78f9ddaa31e57c6c39015aac4538f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a55e9bb92c58ee3a5235d4734c59e43e78f9ddaa31e57c6c39015aac4538f1e->enter($__internal_4a55e9bb92c58ee3a5235d4734c59e43e78f9ddaa31e57c6c39015aac4538f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <article class=\"post\">
            <h2>
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_post", array("slug" => $this->getAttribute($context["post"], "slug", array()))), "html", null, true);
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "
                </a>
            </h2>

            <p class=\"post-metadata\">
                <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> ";
            // line 15
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["post"], "publishedAt", array()), "long", "medium", null, "UTC"), "html", null, true);
            echo "</span>
                <span class=\"metadata\"><i class=\"fa fa-user\"></i> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "author", array()), "fullName", array()), "html", null, true);
            echo "</span>
            </p>

            ";
            // line 19
            echo $this->env->getExtension('AppBundle\Twig\AppExtension')->markdownToHtml($this->getAttribute($context["post"], "summary", array()));
            echo "

            ";
            // line 21
            echo twig_include($this->env, $context, "blog/_post_tags.html.twig");
            echo "
        </article>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 24
            echo "        <div class=\"well\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("post.no_posts_found"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
    ";
        // line 27
        if ($this->getAttribute(($context["posts"] ?? $this->getContext($context, "posts")), "haveToPaginate", array())) {
            // line 28
            echo "        <div class=\"navigation text-center\">
            ";
            // line 29
            echo $this->env->getExtension('WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension')->renderPagerfanta(($context["posts"] ?? $this->getContext($context, "posts")), "twitter_bootstrap3_translated", array("routeName" => "blog_index_paginated"));
            echo "
        </div>
    ";
        }
        
        $__internal_4a55e9bb92c58ee3a5235d4734c59e43e78f9ddaa31e57c6c39015aac4538f1e->leave($__internal_4a55e9bb92c58ee3a5235d4734c59e43e78f9ddaa31e57c6c39015aac4538f1e_prof);

        
        $__internal_a2336b52e9ba18bf51154eceee2135c4f37f85fd93af161e2c6eedb9dae91ffa->leave($__internal_a2336b52e9ba18bf51154eceee2135c4f37f85fd93af161e2c6eedb9dae91ffa_prof);

    }

    // line 34
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_36c8bc2fcb28acfd7baa2801fb368105cfa392fc2c28589c7e29df1812becc66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c8bc2fcb28acfd7baa2801fb368105cfa392fc2c28589c7e29df1812becc66->enter($__internal_36c8bc2fcb28acfd7baa2801fb368105cfa392fc2c28589c7e29df1812becc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_5fe1169cd0e8dbdf4fd699d2715835878e31bac99ad518c4bbd740fab39cb380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe1169cd0e8dbdf4fd699d2715835878e31bac99ad518c4bbd740fab39cb380->enter($__internal_5fe1169cd0e8dbdf4fd699d2715835878e31bac99ad518c4bbd740fab39cb380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 35
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 37
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
    ";
        // line 38
        echo twig_include($this->env, $context, "blog/_rss.html.twig");
        echo "
";
        
        $__internal_5fe1169cd0e8dbdf4fd699d2715835878e31bac99ad518c4bbd740fab39cb380->leave($__internal_5fe1169cd0e8dbdf4fd699d2715835878e31bac99ad518c4bbd740fab39cb380_prof);

        
        $__internal_36c8bc2fcb28acfd7baa2801fb368105cfa392fc2c28589c7e29df1812becc66->leave($__internal_36c8bc2fcb28acfd7baa2801fb368105cfa392fc2c28589c7e29df1812becc66_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 38,  181 => 37,  175 => 35,  166 => 34,  152 => 29,  149 => 28,  147 => 27,  144 => 26,  135 => 24,  119 => 21,  114 => 19,  108 => 16,  104 => 15,  96 => 10,  92 => 9,  88 => 7,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body_id 'blog_index' %}

{% block main %}
    {% for post in posts %}
        <article class=\"post\">
            <h2>
                <a href=\"{{ path('blog_post', {slug: post.slug}) }}\">
                    {{ post.title }}
                </a>
            </h2>

            <p class=\"post-metadata\">
                <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> {{ post.publishedAt|localizeddate('long', 'medium', null, 'UTC') }}</span>
                <span class=\"metadata\"><i class=\"fa fa-user\"></i> {{ post.author.fullName }}</span>
            </p>

            {{ post.summary|md2html }}

            {{ include('blog/_post_tags.html.twig') }}
        </article>
    {% else %}
        <div class=\"well\">{{ 'post.no_posts_found'|trans }}</div>
    {% endfor %}

    {% if posts.haveToPaginate %}
        <div class=\"navigation text-center\">
            {{ pagerfanta(posts, 'twitter_bootstrap3_translated', {routeName: 'blog_index_paginated'}) }}
        </div>
    {% endif %}
{% endblock %}

{% block sidebar %}
    {{ parent() }}

    {{ show_source_code(_self) }}
    {{ include('blog/_rss.html.twig') }}
{% endblock %}
", "blog/index.html.twig", "/var/www/task/app/Resources/views/blog/index.html.twig");
    }
}
