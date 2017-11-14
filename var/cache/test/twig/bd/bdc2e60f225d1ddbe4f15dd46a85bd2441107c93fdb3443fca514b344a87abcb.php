<?php

/* admin/blog/edit.html.twig */
class __TwigTemplate_de2997bbb57e7b1dc35376ac908648b86834a1c84f1573a4295b088075b442cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/edit.html.twig", 1);
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
        $__internal_36c2736bbb8dbd6d7fafc9bc6c27de30f0d232632fc47f4145f6f75e632f805e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c2736bbb8dbd6d7fafc9bc6c27de30f0d232632fc47f4145f6f75e632f805e->enter($__internal_36c2736bbb8dbd6d7fafc9bc6c27de30f0d232632fc47f4145f6f75e632f805e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/edit.html.twig"));

        $__internal_f8c37678c89f70086ce51695839366674524186150ae08d26bddafd37967a93d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8c37678c89f70086ce51695839366674524186150ae08d26bddafd37967a93d->enter($__internal_f8c37678c89f70086ce51695839366674524186150ae08d26bddafd37967a93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36c2736bbb8dbd6d7fafc9bc6c27de30f0d232632fc47f4145f6f75e632f805e->leave($__internal_36c2736bbb8dbd6d7fafc9bc6c27de30f0d232632fc47f4145f6f75e632f805e_prof);

        
        $__internal_f8c37678c89f70086ce51695839366674524186150ae08d26bddafd37967a93d->leave($__internal_f8c37678c89f70086ce51695839366674524186150ae08d26bddafd37967a93d_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_f2b4b7f44aee261dc157c2bd2de1dacb3a54ffffb1bd5a07486363c4aae733db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b4b7f44aee261dc157c2bd2de1dacb3a54ffffb1bd5a07486363c4aae733db->enter($__internal_f2b4b7f44aee261dc157c2bd2de1dacb3a54ffffb1bd5a07486363c4aae733db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_3eb07471cfcd0959a4df062ab536b306ee9e30d8d427466013e0616205edfca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb07471cfcd0959a4df062ab536b306ee9e30d8d427466013e0616205edfca7->enter($__internal_3eb07471cfcd0959a4df062ab536b306ee9e30d8d427466013e0616205edfca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_edit";
        
        $__internal_3eb07471cfcd0959a4df062ab536b306ee9e30d8d427466013e0616205edfca7->leave($__internal_3eb07471cfcd0959a4df062ab536b306ee9e30d8d427466013e0616205edfca7_prof);

        
        $__internal_f2b4b7f44aee261dc157c2bd2de1dacb3a54ffffb1bd5a07486363c4aae733db->leave($__internal_f2b4b7f44aee261dc157c2bd2de1dacb3a54ffffb1bd5a07486363c4aae733db_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_3556434576b45c7df1b536fd25bf739aaaad86026ae23e972450e42e3e807ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3556434576b45c7df1b536fd25bf739aaaad86026ae23e972450e42e3e807ec6->enter($__internal_3556434576b45c7df1b536fd25bf739aaaad86026ae23e972450e42e3e807ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_aba8e566874aa0023d65f7d155541cc70306816b0b518ed63e0e9045d495a417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba8e566874aa0023d65f7d155541cc70306816b0b518ed63e0e9045d495a417->enter($__internal_aba8e566874aa0023d65f7d155541cc70306816b0b518ed63e0e9045d495a417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.edit_post", array("%id%" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "</h1>

    ";
        // line 8
        echo twig_include($this->env, $context, "admin/blog/_form.html.twig", array("form" =>         // line 9
($context["form"] ?? $this->getContext($context, "form")), "button_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save"), "include_back_to_home_link" => true), false);
        // line 12
        echo "
";
        
        $__internal_aba8e566874aa0023d65f7d155541cc70306816b0b518ed63e0e9045d495a417->leave($__internal_aba8e566874aa0023d65f7d155541cc70306816b0b518ed63e0e9045d495a417_prof);

        
        $__internal_3556434576b45c7df1b536fd25bf739aaaad86026ae23e972450e42e3e807ec6->leave($__internal_3556434576b45c7df1b536fd25bf739aaaad86026ae23e972450e42e3e807ec6_prof);

    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d8dc8eef4778a32bda408f11c2e72cace570b0bfa7bfb31ac3361bcf5036c614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8dc8eef4778a32bda408f11c2e72cace570b0bfa7bfb31ac3361bcf5036c614->enter($__internal_d8dc8eef4778a32bda408f11c2e72cace570b0bfa7bfb31ac3361bcf5036c614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_7558757ec4f815ed426904a1cf3a1a724d82927679d512d32d64e3ea2cdb5e90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7558757ec4f815ed426904a1cf3a1a724d82927679d512d32d64e3ea2cdb5e90->enter($__internal_7558757ec4f815ed426904a1cf3a1a724d82927679d512d32d64e3ea2cdb5e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 16
        echo "    <div class=\"section\">
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_show", array("id" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.show_post"), "html", null, true);
        echo "
        </a>
    </div>

    <div class=\"section actions\">
        ";
        // line 23
        echo twig_include($this->env, $context, "admin/blog/_delete_form.html.twig", array("post" => ($context["post"] ?? $this->getContext($context, "post"))), false);
        echo "
    </div>

    ";
        // line 26
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 28
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_7558757ec4f815ed426904a1cf3a1a724d82927679d512d32d64e3ea2cdb5e90->leave($__internal_7558757ec4f815ed426904a1cf3a1a724d82927679d512d32d64e3ea2cdb5e90_prof);

        
        $__internal_d8dc8eef4778a32bda408f11c2e72cace570b0bfa7bfb31ac3361bcf5036c614->leave($__internal_d8dc8eef4778a32bda408f11c2e72cace570b0bfa7bfb31ac3361bcf5036c614_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 28,  119 => 26,  113 => 23,  105 => 18,  101 => 17,  98 => 16,  89 => 15,  78 => 12,  76 => 9,  75 => 8,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block body_id 'admin_post_edit' %}

{% block main %}
    <h1>{{ 'title.edit_post'|trans({'%id%': post.id}) }}</h1>

    {{ include('admin/blog/_form.html.twig', {
        form: form,
        button_label: 'action.save'|trans,
        include_back_to_home_link: true,
    }, with_context = false) }}
{% endblock %}

{% block sidebar %}
    <div class=\"section\">
        <a href=\"{{ path('admin_post_show', {id: post.id}) }}\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> {{ 'action.show_post'|trans }}
        </a>
    </div>

    <div class=\"section actions\">
        {{ include('admin/blog/_delete_form.html.twig', {post: post}, with_context = false) }}
    </div>

    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "admin/blog/edit.html.twig", "/var/www/task/app/Resources/views/admin/blog/edit.html.twig");
    }
}
