<?php

/* admin/blog/index.html.twig */
class __TwigTemplate_cc935aa52c68003e539007a9de486f63a9c19dddfb794fe122b36f0a67279128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/index.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_973074726f9b7b945311957c9309004ad233c5e576aa941db066d752011c2f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_973074726f9b7b945311957c9309004ad233c5e576aa941db066d752011c2f45->enter($__internal_973074726f9b7b945311957c9309004ad233c5e576aa941db066d752011c2f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/index.html.twig"));

        $__internal_7b4ae04478171f1c771d224d61bed5df1815e7fba7d7bdccf725b7c78f250413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4ae04478171f1c771d224d61bed5df1815e7fba7d7bdccf725b7c78f250413->enter($__internal_7b4ae04478171f1c771d224d61bed5df1815e7fba7d7bdccf725b7c78f250413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_973074726f9b7b945311957c9309004ad233c5e576aa941db066d752011c2f45->leave($__internal_973074726f9b7b945311957c9309004ad233c5e576aa941db066d752011c2f45_prof);

        
        $__internal_7b4ae04478171f1c771d224d61bed5df1815e7fba7d7bdccf725b7c78f250413->leave($__internal_7b4ae04478171f1c771d224d61bed5df1815e7fba7d7bdccf725b7c78f250413_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1718dbc5c0e1475f8326b6172336a825c5cd071632ccef537ef770a8b6379e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1718dbc5c0e1475f8326b6172336a825c5cd071632ccef537ef770a8b6379e89->enter($__internal_1718dbc5c0e1475f8326b6172336a825c5cd071632ccef537ef770a8b6379e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_accfad017c9d4e9241f640e7aab2732c6c7c489378e112e6b3d581a22c8576c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_accfad017c9d4e9241f640e7aab2732c6c7c489378e112e6b3d581a22c8576c4->enter($__internal_accfad017c9d4e9241f640e7aab2732c6c7c489378e112e6b3d581a22c8576c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_index";
        
        $__internal_accfad017c9d4e9241f640e7aab2732c6c7c489378e112e6b3d581a22c8576c4->leave($__internal_accfad017c9d4e9241f640e7aab2732c6c7c489378e112e6b3d581a22c8576c4_prof);

        
        $__internal_1718dbc5c0e1475f8326b6172336a825c5cd071632ccef537ef770a8b6379e89->leave($__internal_1718dbc5c0e1475f8326b6172336a825c5cd071632ccef537ef770a8b6379e89_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_68f85cd03899e1a5d79043ccac2f860da8136691fbb9a0c40eacfeed2e9344aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68f85cd03899e1a5d79043ccac2f860da8136691fbb9a0c40eacfeed2e9344aa->enter($__internal_68f85cd03899e1a5d79043ccac2f860da8136691fbb9a0c40eacfeed2e9344aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_3a7bd091c6258a3472d07bfd3595a24a9c3b486cfa392adbc542fe261e8957a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7bd091c6258a3472d07bfd3595a24a9c3b486cfa392adbc542fe261e8957a1->enter($__internal_3a7bd091c6258a3472d07bfd3595a24a9c3b486cfa392adbc542fe261e8957a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.post_list"), "html", null, true);
        echo "</h1>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.title"), "html", null, true);
        echo "</th>
                <th scope=\"col\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.published_at"), "html", null, true);
        echo "</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</td>
                ";
            // line 23
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["post"], "publishedAt", array()), "medium", "short", null, "UTC"), "html", null, true);
            echo "</td>
                <td class=\"text-right\">
                    <div class=\"item-actions\">
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.show"), "html", null, true);
            echo "
                        </a>

                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.edit"), "html", null, true);
            echo "
                        </a>
                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "            <tr>
                <td colspan=\"4\" align=\"center\">";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("post.no_posts_found"), "html", null, true);
            echo "</td>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>
";
        
        $__internal_3a7bd091c6258a3472d07bfd3595a24a9c3b486cfa392adbc542fe261e8957a1->leave($__internal_3a7bd091c6258a3472d07bfd3595a24a9c3b486cfa392adbc542fe261e8957a1_prof);

        
        $__internal_68f85cd03899e1a5d79043ccac2f860da8136691fbb9a0c40eacfeed2e9344aa->leave($__internal_68f85cd03899e1a5d79043ccac2f860da8136691fbb9a0c40eacfeed2e9344aa_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_312253d680b2433d566c8b8efd2855549a0c52592ccde14496394581707ac768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_312253d680b2433d566c8b8efd2855549a0c52592ccde14496394581707ac768->enter($__internal_312253d680b2433d566c8b8efd2855549a0c52592ccde14496394581707ac768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_40681cd0476561bc8ce8e211f287e996cd2b3da9f9816e973079a6e744ce46c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40681cd0476561bc8ce8e211f287e996cd2b3da9f9816e973079a6e744ce46c7->enter($__internal_40681cd0476561bc8ce8e211f287e996cd2b3da9f9816e973079a6e744ce46c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 46
        echo "    <div class=\"section actions\">
        <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_new");
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.create_post"), "html", null, true);
        echo "
        </a>
    </div>

    ";
        // line 52
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 54
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_40681cd0476561bc8ce8e211f287e996cd2b3da9f9816e973079a6e744ce46c7->leave($__internal_40681cd0476561bc8ce8e211f287e996cd2b3da9f9816e973079a6e744ce46c7_prof);

        
        $__internal_312253d680b2433d566c8b8efd2855549a0c52592ccde14496394581707ac768->leave($__internal_312253d680b2433d566c8b8efd2855549a0c52592ccde14496394581707ac768_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 54,  184 => 52,  177 => 48,  173 => 47,  170 => 46,  161 => 45,  149 => 41,  140 => 38,  137 => 37,  126 => 31,  122 => 30,  116 => 27,  112 => 26,  105 => 23,  101 => 19,  98 => 18,  93 => 17,  86 => 13,  82 => 12,  78 => 11,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/layout.html.twig' %}

{% block body_id 'admin_post_index' %}

{% block main %}
    <h1>{{ 'title.post_list'|trans }}</h1>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">{{ 'label.title'|trans }}</th>
                <th scope=\"col\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> {{ 'label.published_at'|trans }}</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> {{ 'label.actions'|trans }}</th>
            </tr>
        </thead>
        <tbody>
        {% for post in posts %}
            <tr>
                <td>{{ post.title }}</td>
                {# it's not mandatory to set the timezone in localizeddate(). This is done to
                   avoid errors when the 'intl' PHP extension is not available and the application
                   is forced to use the limited \"intl polyfill\", which only supports UTC and GMT #}
                <td>{{ post.publishedAt|localizeddate('medium', 'short', null, 'UTC') }}</td>
                <td class=\"text-right\">
                    <div class=\"item-actions\">
                        <a href=\"{{ path('admin_post_show', {id: post.id}) }}\" class=\"btn btn-sm btn-default\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> {{ 'action.show'|trans }}
                        </a>

                        <a href=\"{{ path('admin_post_edit', {id: post.id}) }}\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> {{ 'action.edit'|trans }}
                        </a>
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\" align=\"center\">{{ 'post.no_posts_found'|trans }}</td>
           </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}

{% block sidebar %}
    <div class=\"section actions\">
        <a href=\"{{ path('admin_post_new') }}\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> {{ 'action.create_post'|trans }}
        </a>
    </div>

    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "admin/blog/index.html.twig", "/var/www/task/app/Resources/views/admin/blog/index.html.twig");
    }
}
