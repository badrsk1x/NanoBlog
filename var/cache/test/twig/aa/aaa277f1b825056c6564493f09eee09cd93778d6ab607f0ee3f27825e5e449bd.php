<?php

/* blog/index.xml.twig */
class __TwigTemplate_77f82be3c3aae0cf02c51e638a2c22a146448b5c6be1b96933a7e53e39abf8fc extends Twig_Template
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
        $__internal_62e29aae0cd5476acd82c8beb3a48a5fc66725f184f09c66b49f2466dfe7c9a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62e29aae0cd5476acd82c8beb3a48a5fc66725f184f09c66b49f2466dfe7c9a9->enter($__internal_62e29aae0cd5476acd82c8beb3a48a5fc66725f184f09c66b49f2466dfe7c9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.xml.twig"));

        $__internal_941bd4bca901c8ad80fe746ed849c45e59a93e70ed3efdc7b66084a69fdd9552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_941bd4bca901c8ad80fe746ed849c45e59a93e70ed3efdc7b66084a69fdd9552->enter($__internal_941bd4bca901c8ad80fe746ed849c45e59a93e70ed3efdc7b66084a69fdd9552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<rss version=\"2.0\">
    <channel>
        <title>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("rss.title"), "html", null, true);
        echo "</title>
        <description>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("rss.description"), "html", null, true);
        echo "</description>
        <pubDate>";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "r", "GMT"), "html", null, true);
        echo "</pubDate>
        <lastBuildDate>";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($this->getAttribute(twig_last($this->env, ($context["posts"] ?? $this->getContext($context, "posts"))), "publishedAt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(twig_last($this->env, ($context["posts"] ?? $this->getContext($context, "posts"))), "publishedAt", array()), "now")) : ("now")), "r", "GMT"), "html", null, true);
        echo "</lastBuildDate>
        <link>";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("blog_index");
        echo "</link>
        <language>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "</language>

        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 12
            echo "            <item>
                <title>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</title>
                <description>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "summary", array()), "html", null, true);
            echo "</description>
                <link>";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("blog_post", array("slug" => $this->getAttribute($context["post"], "slug", array()))), "html", null, true);
            echo "</link>
                <guid>";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("blog_post", array("slug" => $this->getAttribute($context["post"], "slug", array()))), "html", null, true);
            echo "</guid>
                <pubDate>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "publishedAt", array()), "r", "GMT"), "html", null, true);
            echo "</pubDate>
                <author>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "author", array()), "email", array()), "html", null, true);
            echo "</author>
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 20
                echo "                    <category>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo "</category>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            </item>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </channel>
</rss>
";
        
        $__internal_62e29aae0cd5476acd82c8beb3a48a5fc66725f184f09c66b49f2466dfe7c9a9->leave($__internal_62e29aae0cd5476acd82c8beb3a48a5fc66725f184f09c66b49f2466dfe7c9a9_prof);

        
        $__internal_941bd4bca901c8ad80fe746ed849c45e59a93e70ed3efdc7b66084a69fdd9552->leave($__internal_941bd4bca901c8ad80fe746ed849c45e59a93e70ed3efdc7b66084a69fdd9552_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 24,  99 => 22,  90 => 20,  86 => 19,  82 => 18,  78 => 17,  74 => 16,  70 => 15,  66 => 14,  62 => 13,  59 => 12,  55 => 11,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<rss version=\"2.0\">
    <channel>
        <title>{{ 'rss.title'|trans }}</title>
        <description>{{ 'rss.description'|trans }}</description>
        <pubDate>{{ 'now'|date('r', timezone='GMT') }}</pubDate>
        <lastBuildDate>{{ (posts|last).publishedAt|default('now')|date('r', timezone='GMT') }}</lastBuildDate>
        <link>{{ url('blog_index') }}</link>
        <language>{{ app.request.locale }}</language>

        {% for post in posts %}
            <item>
                <title>{{ post.title }}</title>
                <description>{{ post.summary }}</description>
                <link>{{ url('blog_post', {'slug': post.slug}) }}</link>
                <guid>{{ url('blog_post', {'slug': post.slug}) }}</guid>
                <pubDate>{{ post.publishedAt|date(format='r', timezone='GMT') }}</pubDate>
                <author>{{ post.author.email }}</author>
                {% for tag in post.tags %}
                    <category>{{ tag.name }}</category>
                {% endfor %}
            </item>
        {% endfor %}
    </channel>
</rss>
", "blog/index.xml.twig", "/var/www/task/app/Resources/views/blog/index.xml.twig");
    }
}
