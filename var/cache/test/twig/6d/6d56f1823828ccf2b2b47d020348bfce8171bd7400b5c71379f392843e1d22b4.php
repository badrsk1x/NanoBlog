<?php

/* admin/blog/show.html.twig */
class __TwigTemplate_dd014cd1ae3b5937dcc96d6029092fe98b244fc5f7e1bb86601e9a35a39b522b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/show.html.twig", 1);
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
        $__internal_ce29113bce6fbde48c9504c5a252fb58afaced78365323261255d0cb8d668de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce29113bce6fbde48c9504c5a252fb58afaced78365323261255d0cb8d668de7->enter($__internal_ce29113bce6fbde48c9504c5a252fb58afaced78365323261255d0cb8d668de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/show.html.twig"));

        $__internal_a4292da482dbf89b1ebabeb13e5565b3baaccdc3691d92110b99c514333dee4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4292da482dbf89b1ebabeb13e5565b3baaccdc3691d92110b99c514333dee4c->enter($__internal_a4292da482dbf89b1ebabeb13e5565b3baaccdc3691d92110b99c514333dee4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce29113bce6fbde48c9504c5a252fb58afaced78365323261255d0cb8d668de7->leave($__internal_ce29113bce6fbde48c9504c5a252fb58afaced78365323261255d0cb8d668de7_prof);

        
        $__internal_a4292da482dbf89b1ebabeb13e5565b3baaccdc3691d92110b99c514333dee4c->leave($__internal_a4292da482dbf89b1ebabeb13e5565b3baaccdc3691d92110b99c514333dee4c_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_5db37648d9d9b976ea2a2a61f1b307da4d3e46f94f2573f9b4df22a9b968d02c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db37648d9d9b976ea2a2a61f1b307da4d3e46f94f2573f9b4df22a9b968d02c->enter($__internal_5db37648d9d9b976ea2a2a61f1b307da4d3e46f94f2573f9b4df22a9b968d02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_1c31abda06bc83c5838694d5334f8fef1ca1bc534a09d6a0ca30d44f63f61cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c31abda06bc83c5838694d5334f8fef1ca1bc534a09d6a0ca30d44f63f61cb0->enter($__internal_1c31abda06bc83c5838694d5334f8fef1ca1bc534a09d6a0ca30d44f63f61cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_show";
        
        $__internal_1c31abda06bc83c5838694d5334f8fef1ca1bc534a09d6a0ca30d44f63f61cb0->leave($__internal_1c31abda06bc83c5838694d5334f8fef1ca1bc534a09d6a0ca30d44f63f61cb0_prof);

        
        $__internal_5db37648d9d9b976ea2a2a61f1b307da4d3e46f94f2573f9b4df22a9b968d02c->leave($__internal_5db37648d9d9b976ea2a2a61f1b307da4d3e46f94f2573f9b4df22a9b968d02c_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_0c373f1cb4382c114968e5528654d1c1cb91739b22b3d3f4fe998ebc20282b0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c373f1cb4382c114968e5528654d1c1cb91739b22b3d3f4fe998ebc20282b0d->enter($__internal_0c373f1cb4382c114968e5528654d1c1cb91739b22b3d3f4fe998ebc20282b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_250a51cce74be09996e32dbf3b0a4071db842db445b46887e653061b81745f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250a51cce74be09996e32dbf3b0a4071db842db445b46887e653061b81745f35->enter($__internal_250a51cce74be09996e32dbf3b0a4071db842db445b46887e653061b81745f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h1>

    <p class=\"post-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> ";
        // line 9
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "publishedAt", array()), "long", "medium", null, "UTC"), "html", null, true);
        echo "</span>
        <span class=\"metadata\"><i class=\"fa fa-user\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "author", array()), "fullName", array()), "html", null, true);
        echo "</span>
    </p>

    <div class=\"well\">
        <p class=\"m-b-0\"><strong>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.summary"), "html", null, true);
        echo "</strong>: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "summary", array()), "html", null, true);
        echo "</p>
    </div>

    ";
        // line 17
        echo $this->env->getExtension('AppBundle\Twig\AppExtension')->markdownToHtml($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "content", array()));
        echo "

    ";
        // line 19
        echo twig_include($this->env, $context, "blog/_post_tags.html.twig");
        echo "
";
        
        $__internal_250a51cce74be09996e32dbf3b0a4071db842db445b46887e653061b81745f35->leave($__internal_250a51cce74be09996e32dbf3b0a4071db842db445b46887e653061b81745f35_prof);

        
        $__internal_0c373f1cb4382c114968e5528654d1c1cb91739b22b3d3f4fe998ebc20282b0d->leave($__internal_0c373f1cb4382c114968e5528654d1c1cb91739b22b3d3f4fe998ebc20282b0d_prof);

    }

    // line 22
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4ac6f6faf3ba5910ad16a0dd25db0b021bd20a47be5a3c352f82e6172e46d513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac6f6faf3ba5910ad16a0dd25db0b021bd20a47be5a3c352f82e6172e46d513->enter($__internal_4ac6f6faf3ba5910ad16a0dd25db0b021bd20a47be5a3c352f82e6172e46d513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_232c1b6f09cd5bf0f84085095ae64d2512ea708515300a8c75053965a268c3d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232c1b6f09cd5bf0f84085095ae64d2512ea708515300a8c75053965a268c3d8->enter($__internal_232c1b6f09cd5bf0f84085095ae64d2512ea708515300a8c75053965a268c3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 23
        echo "    <div class=\"section\">
        <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_edit", array("id" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.edit_contents"), "html", null, true);
        echo "
        </a>
    </div>

    <div class=\"section\">
        ";
        // line 30
        echo twig_include($this->env, $context, "admin/blog/_delete_form.html.twig", array("post" => ($context["post"] ?? $this->getContext($context, "post"))), false);
        echo "
    </div>

    ";
        // line 33
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 35
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_232c1b6f09cd5bf0f84085095ae64d2512ea708515300a8c75053965a268c3d8->leave($__internal_232c1b6f09cd5bf0f84085095ae64d2512ea708515300a8c75053965a268c3d8_prof);

        
        $__internal_4ac6f6faf3ba5910ad16a0dd25db0b021bd20a47be5a3c352f82e6172e46d513->leave($__internal_4ac6f6faf3ba5910ad16a0dd25db0b021bd20a47be5a3c352f82e6172e46d513_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 35,  142 => 33,  136 => 30,  128 => 25,  124 => 24,  121 => 23,  112 => 22,  100 => 19,  95 => 17,  87 => 14,  80 => 10,  76 => 9,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block body_id 'admin_post_show' %}

{% block main %}
    <h1>{{ post.title }}</h1>

    <p class=\"post-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> {{ post.publishedAt|localizeddate('long', 'medium', null, 'UTC') }}</span>
        <span class=\"metadata\"><i class=\"fa fa-user\"></i> {{ post.author.fullName }}</span>
    </p>

    <div class=\"well\">
        <p class=\"m-b-0\"><strong>{{ 'label.summary'|trans }}</strong>: {{ post.summary }}</p>
    </div>

    {{ post.content|md2html }}

    {{ include('blog/_post_tags.html.twig') }}
{% endblock %}

{% block sidebar %}
    <div class=\"section\">
        <a href=\"{{ path('admin_post_edit', {id: post.id}) }}\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> {{ 'action.edit_contents'|trans }}
        </a>
    </div>

    <div class=\"section\">
        {{ include('admin/blog/_delete_form.html.twig', {post: post}, with_context = false) }}
    </div>

    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "admin/blog/show.html.twig", "/var/www/task/app/Resources/views/admin/blog/show.html.twig");
    }
}
