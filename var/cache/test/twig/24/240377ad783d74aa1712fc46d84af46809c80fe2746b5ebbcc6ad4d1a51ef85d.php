<?php

/* admin/blog/_form.html.twig */
class __TwigTemplate_2cea81f0bcd7befdcf665c53ffe3154266c2ccdcbda22ecfccd1c57acf1e88f8 extends Twig_Template
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
        $__internal_679b5f971ce1d8345349e4554d0c5a5ca6de26043bddb036f03a2adc34526bf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_679b5f971ce1d8345349e4554d0c5a5ca6de26043bddb036f03a2adc34526bf4->enter($__internal_679b5f971ce1d8345349e4554d0c5a5ca6de26043bddb036f03a2adc34526bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/_form.html.twig"));

        $__internal_61c1f22747b3ed0be467ecdec1694800d896a607d9834c9e322428c138b8abda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c1f22747b3ed0be467ecdec1694800d896a607d9834c9e322428c138b8abda->enter($__internal_61c1f22747b3ed0be467ecdec1694800d896a607d9834c9e322428c138b8abda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/_form.html.twig"));

        // line 8
        echo "
";
        // line 9
        if (((array_key_exists("show_confirmation", $context)) ? (_twig_default_filter(($context["show_confirmation"] ?? $this->getContext($context, "show_confirmation")), false)) : (false))) {
            // line 10
            echo "    ";
            $context["attr"] = array("data-confirmation" => "true");
            // line 11
            echo "    ";
            echo twig_include($this->env, $context, "blog/_delete_post_confirmation.html.twig");
            echo "
";
        }
        // line 13
        echo "
";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => ((array_key_exists("attr", $context)) ? (_twig_default_filter(($context["attr"] ?? $this->getContext($context, "attr")), array())) : (array()))));
        echo "
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

    <button type=\"submit\" class=\"";
        // line 17
        echo twig_escape_filter($this->env, ((array_key_exists("button_css", $context)) ? (_twig_default_filter(($context["button_css"] ?? $this->getContext($context, "button_css")), "btn btn-primary")) : ("btn btn-primary")), "html", null, true);
        echo "\">
        <i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
        // line 18
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter(($context["button_label"] ?? $this->getContext($context, "button_label")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.create_post"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.create_post"))), "html", null, true);
        echo "
    </button>

    ";
        // line 21
        if (((array_key_exists("include_back_to_home_link", $context)) ? (_twig_default_filter(($context["include_back_to_home_link"] ?? $this->getContext($context, "include_back_to_home_link")), false)) : (false))) {
            // line 22
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_index");
            echo "\" class=\"btn btn-link\">
            <i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i> ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.back_to_list"), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_679b5f971ce1d8345349e4554d0c5a5ca6de26043bddb036f03a2adc34526bf4->leave($__internal_679b5f971ce1d8345349e4554d0c5a5ca6de26043bddb036f03a2adc34526bf4_prof);

        
        $__internal_61c1f22747b3ed0be467ecdec1694800d896a607d9834c9e322428c138b8abda->leave($__internal_61c1f22747b3ed0be467ecdec1694800d896a607d9834c9e322428c138b8abda_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 26,  68 => 23,  63 => 22,  61 => 21,  55 => 18,  51 => 17,  46 => 15,  42 => 14,  39 => 13,  33 => 11,  30 => 10,  28 => 9,  25 => 8,);
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

    {{ form_start(form, {attr: {novalidate: 'novalidate'}}) }}
#}

{% if show_confirmation|default(false) %}
    {% set attr = {'data-confirmation': 'true'} %}
    {{ include('blog/_delete_post_confirmation.html.twig') }}
{% endif %}

{{ form_start(form, {attr: attr|default({})}) }}
    {{ form_widget(form) }}

    <button type=\"submit\" class=\"{{ button_css|default(\"btn btn-primary\") }}\">
        <i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ button_label|default('label.create_post'|trans) }}
    </button>

    {% if include_back_to_home_link|default(false) %}
        <a href=\"{{ path('admin_post_index') }}\" class=\"btn btn-link\">
            <i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i> {{ 'action.back_to_list'|trans }}
        </a>
    {% endif %}
{{ form_end(form) }}
", "admin/blog/_form.html.twig", "/var/www/task/app/Resources/views/admin/blog/_form.html.twig");
    }
}
