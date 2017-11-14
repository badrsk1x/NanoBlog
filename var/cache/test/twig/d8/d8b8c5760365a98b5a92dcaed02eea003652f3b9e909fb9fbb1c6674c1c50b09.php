<?php

/* admin/blog/new.html.twig */
class __TwigTemplate_9bce9a416577cd36f3f8b85ac623c5ff2f350d3d88f1bf3802d314a5453e2601 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/new.html.twig", 1);
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
        $__internal_6357153d78f6cb32d498e579d798c5e1be0b16c0af0a362d79fda6c54c7cc387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6357153d78f6cb32d498e579d798c5e1be0b16c0af0a362d79fda6c54c7cc387->enter($__internal_6357153d78f6cb32d498e579d798c5e1be0b16c0af0a362d79fda6c54c7cc387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/new.html.twig"));

        $__internal_ab8da8da47b5c9bfcf61d3ed8208bf016e6bff7ba1a95c1a00181273463fbedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8da8da47b5c9bfcf61d3ed8208bf016e6bff7ba1a95c1a00181273463fbedf->enter($__internal_ab8da8da47b5c9bfcf61d3ed8208bf016e6bff7ba1a95c1a00181273463fbedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6357153d78f6cb32d498e579d798c5e1be0b16c0af0a362d79fda6c54c7cc387->leave($__internal_6357153d78f6cb32d498e579d798c5e1be0b16c0af0a362d79fda6c54c7cc387_prof);

        
        $__internal_ab8da8da47b5c9bfcf61d3ed8208bf016e6bff7ba1a95c1a00181273463fbedf->leave($__internal_ab8da8da47b5c9bfcf61d3ed8208bf016e6bff7ba1a95c1a00181273463fbedf_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_b83a6e5638a0a48ebad7c6814c037bf679c21e3e7db1d1261488d9a7c6a74de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b83a6e5638a0a48ebad7c6814c037bf679c21e3e7db1d1261488d9a7c6a74de6->enter($__internal_b83a6e5638a0a48ebad7c6814c037bf679c21e3e7db1d1261488d9a7c6a74de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_2417cd9bd6ff43fa796f0aa76e964bcf8692afbf657cd3390150b9e23a72c1fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2417cd9bd6ff43fa796f0aa76e964bcf8692afbf657cd3390150b9e23a72c1fc->enter($__internal_2417cd9bd6ff43fa796f0aa76e964bcf8692afbf657cd3390150b9e23a72c1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_new";
        
        $__internal_2417cd9bd6ff43fa796f0aa76e964bcf8692afbf657cd3390150b9e23a72c1fc->leave($__internal_2417cd9bd6ff43fa796f0aa76e964bcf8692afbf657cd3390150b9e23a72c1fc_prof);

        
        $__internal_b83a6e5638a0a48ebad7c6814c037bf679c21e3e7db1d1261488d9a7c6a74de6->leave($__internal_b83a6e5638a0a48ebad7c6814c037bf679c21e3e7db1d1261488d9a7c6a74de6_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_5faba17a081989112864e3b3cb299a9161c85f3113d965d6fe991274da2f6873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5faba17a081989112864e3b3cb299a9161c85f3113d965d6fe991274da2f6873->enter($__internal_5faba17a081989112864e3b3cb299a9161c85f3113d965d6fe991274da2f6873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_b7396a516122dc79221ae186878c79eea881f33424bf7da3f3bf422f0c200a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7396a516122dc79221ae186878c79eea881f33424bf7da3f3bf422f0c200a8c->enter($__internal_b7396a516122dc79221ae186878c79eea881f33424bf7da3f3bf422f0c200a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.post_new"), "html", null, true);
        echo "</h1>

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "summary", array()), 'row');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'row');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "publishedAt", array()), 'row');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tags", array()), 'row');
        echo "

        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.create_post"), "html", null, true);
        echo "
        </button>
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "saveAndCreateNew", array()), 'widget', array("label" => "label.save_and_create_new", "attr" => array("class" => "btn btn-primary")));
        echo "
        <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_index");
        echo "\" class=\"btn btn-link\">
            <i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i> ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.back_to_list"), "html", null, true);
        echo "
        </a>
    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_b7396a516122dc79221ae186878c79eea881f33424bf7da3f3bf422f0c200a8c->leave($__internal_b7396a516122dc79221ae186878c79eea881f33424bf7da3f3bf422f0c200a8c_prof);

        
        $__internal_5faba17a081989112864e3b3cb299a9161c85f3113d965d6fe991274da2f6873->leave($__internal_5faba17a081989112864e3b3cb299a9161c85f3113d965d6fe991274da2f6873_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4964eba6465aa73a5929d2132ca33e437fc70c64d9032d93c45be5d8b0bade34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4964eba6465aa73a5929d2132ca33e437fc70c64d9032d93c45be5d8b0bade34->enter($__internal_4964eba6465aa73a5929d2132ca33e437fc70c64d9032d93c45be5d8b0bade34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_28c7b3137d142c7aa6cce99a91f4002fce6cdf199049ef7d656a9db199fdce8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c7b3137d142c7aa6cce99a91f4002fce6cdf199049ef7d656a9db199fdce8c->enter($__internal_28c7b3137d142c7aa6cce99a91f4002fce6cdf199049ef7d656a9db199fdce8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 28
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_28c7b3137d142c7aa6cce99a91f4002fce6cdf199049ef7d656a9db199fdce8c->leave($__internal_28c7b3137d142c7aa6cce99a91f4002fce6cdf199049ef7d656a9db199fdce8c_prof);

        
        $__internal_4964eba6465aa73a5929d2132ca33e437fc70c64d9032d93c45be5d8b0bade34->leave($__internal_4964eba6465aa73a5929d2132ca33e437fc70c64d9032d93c45be5d8b0bade34_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 28,  140 => 26,  131 => 25,  119 => 22,  114 => 20,  110 => 19,  106 => 18,  101 => 16,  95 => 13,  91 => 12,  87 => 11,  83 => 10,  79 => 9,  75 => 8,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block body_id 'admin_post_new' %}

{% block main %}
    <h1>{{ 'title.post_new'|trans }}</h1>

    {{ form_start(form) }}
        {{ form_row(form.title) }}
        {{ form_row(form.summary) }}
        {{ form_row(form.content) }}
        {{ form_row(form.publishedAt) }}
        {{ form_row(form.tags) }}

        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'label.create_post'|trans }}
        </button>
        {{ form_widget(form.saveAndCreateNew, {label: 'label.save_and_create_new', attr: {class: 'btn btn-primary'}}) }}
        <a href=\"{{ path('admin_post_index') }}\" class=\"btn btn-link\">
            <i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i> {{ 'action.back_to_list'|trans }}
        </a>
    {{ form_end(form) }}
{% endblock %}

{% block sidebar %}
    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "admin/blog/new.html.twig", "/var/www/task/app/Resources/views/admin/blog/new.html.twig");
    }
}
