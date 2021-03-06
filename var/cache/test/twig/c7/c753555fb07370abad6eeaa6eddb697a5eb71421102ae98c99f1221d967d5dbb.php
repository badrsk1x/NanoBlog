<?php

/* blog/_comment_form.html.twig */
class __TwigTemplate_8f82e3c747ac86d5738e60e34529f1bdddacd572d9185ff3282fe8f93cf0fdcd extends Twig_Template
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
        $__internal_2c5cd61a06a9f36da56d35354e86212915435e59a999ecdeb86a97d31b182cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c5cd61a06a9f36da56d35354e86212915435e59a999ecdeb86a97d31b182cd3->enter($__internal_2c5cd61a06a9f36da56d35354e86212915435e59a999ecdeb86a97d31b182cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_comment_form.html.twig"));

        $__internal_6426cda3d82c64a067b8da011a817866bc3a1483eb02982da1029a0d46027333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6426cda3d82c64a067b8da011a817866bc3a1483eb02982da1029a0d46027333->enter($__internal_6426cda3d82c64a067b8da011a817866bc3a1483eb02982da1029a0d46027333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_comment_form.html.twig"));

        // line 8
        echo "
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "POST", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_new", array("postSlug" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "slug", array())))));
        echo "
    ";
        // line 15
        echo "
    <fieldset>
        <legend>
            <i class=\"fa fa-comment\" aria-hidden=\"true\"></i> ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.add_comment"), "html", null, true);
        echo "
        </legend>

        ";
        // line 22
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

        <div class=\"form-group ";
        // line 24
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), "vars", array()), "valid", array())) {
            echo "has-error";
        }
        echo "\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "hidden"), "label" => "label.content"));
        echo "

            ";
        // line 28
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'errors');
        echo "

            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("rows" => 10)));
        echo "
        </div>

        <div class=\"form-group\">
            <button class=\"btn btn-primary pull-right\" type=\"submit\">
                <i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.publish_comment"), "html", null, true);
        echo "
            </button>
        </div>
    </fieldset>
";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_2c5cd61a06a9f36da56d35354e86212915435e59a999ecdeb86a97d31b182cd3->leave($__internal_2c5cd61a06a9f36da56d35354e86212915435e59a999ecdeb86a97d31b182cd3_prof);

        
        $__internal_6426cda3d82c64a067b8da011a817866bc3a1483eb02982da1029a0d46027333->leave($__internal_6426cda3d82c64a067b8da011a817866bc3a1483eb02982da1029a0d46027333_prof);

    }

    public function getTemplateName()
    {
        return "blog/_comment_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 39,  74 => 35,  66 => 30,  60 => 28,  55 => 25,  49 => 24,  43 => 22,  37 => 18,  32 => 15,  28 => 9,  25 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
    By default, forms enable client-side validation. This means that you can't
    test the server-side validation errors from the browser. To temporarily
    disable this validation, add the 'novalidate' attribute:

    {{ form_start(form, {method: ..., action: ..., attr: {novalidate: 'novalidate'}}) }}
#}

{{ form_start(form, {method: 'POST', action: path('comment_new', {'postSlug': post.slug})}) }}
    {#  instead of displaying form fields one by one, you can also display them
        all with their default options and styles just by calling to this function:

        {{ form_widget(form) }}
    #}

    <fieldset>
        <legend>
            <i class=\"fa fa-comment\" aria-hidden=\"true\"></i> {{ 'title.add_comment'|trans }}
        </legend>

        {# Render any global form error (e.g. when a constraint on a public getter method failed) #}
        {{ form_errors(form) }}

        <div class=\"form-group {% if not form.content.vars.valid %}has-error{% endif %}\">
            {{ form_label(form.content, 'label.content', {label_attr: {class: 'hidden'}}) }}

            {# Render any errors for the \"content\" field (e.g. when a class property constraint failed) #}
            {{ form_errors(form.content) }}

            {{ form_widget(form.content, {attr: {rows: 10}}) }}
        </div>

        <div class=\"form-group\">
            <button class=\"btn btn-primary pull-right\" type=\"submit\">
                <i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i> {{ 'action.publish_comment'|trans }}
            </button>
        </div>
    </fieldset>
{{ form_end(form) }}
", "blog/_comment_form.html.twig", "/var/www/task/app/Resources/views/blog/_comment_form.html.twig");
    }
}
