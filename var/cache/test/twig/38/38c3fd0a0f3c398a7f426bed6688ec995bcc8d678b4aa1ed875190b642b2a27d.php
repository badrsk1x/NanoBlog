<?php

/* form/layout.html.twig */
class __TwigTemplate_079070ee497b815ea1ea928b2272304c7aebfbb6f9abc5369523cb817bbd1168 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap_3_layout.html.twig", "form/layout.html.twig", 1);
        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap_3_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3dadcba4b7f2fc4f29bf2d6e5f762effeaff9d654681c482fb49ff67fa5bca34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dadcba4b7f2fc4f29bf2d6e5f762effeaff9d654681c482fb49ff67fa5bca34->enter($__internal_3dadcba4b7f2fc4f29bf2d6e5f762effeaff9d654681c482fb49ff67fa5bca34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/layout.html.twig"));

        $__internal_1aa83a46da186749dd591aaedf741becc7cf19474c20317e706af3cb6eff8c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa83a46da186749dd591aaedf741becc7cf19474c20317e706af3cb6eff8c38->enter($__internal_1aa83a46da186749dd591aaedf741becc7cf19474c20317e706af3cb6eff8c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dadcba4b7f2fc4f29bf2d6e5f762effeaff9d654681c482fb49ff67fa5bca34->leave($__internal_3dadcba4b7f2fc4f29bf2d6e5f762effeaff9d654681c482fb49ff67fa5bca34_prof);

        
        $__internal_1aa83a46da186749dd591aaedf741becc7cf19474c20317e706af3cb6eff8c38->leave($__internal_1aa83a46da186749dd591aaedf741becc7cf19474c20317e706af3cb6eff8c38_prof);

    }

    // line 5
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_112d8cd7f0dbff0580c23dc096e0db824547b1efa61483957a1e3826e3951562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_112d8cd7f0dbff0580c23dc096e0db824547b1efa61483957a1e3826e3951562->enter($__internal_112d8cd7f0dbff0580c23dc096e0db824547b1efa61483957a1e3826e3951562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_3444a79163e6cc0220a7eb8d598fdfb891b2da9da8332722cab685f561414c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3444a79163e6cc0220a7eb8d598fdfb891b2da9da8332722cab685f561414c65->enter($__internal_3444a79163e6cc0220a7eb8d598fdfb891b2da9da8332722cab685f561414c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 6
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 7
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 8
            echo "        <ul class=\"list-unstyled\">";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 11
                echo "            <li><span class=\"fa fa-exclamation-triangle\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "</ul>
        ";
            // line 14
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_3444a79163e6cc0220a7eb8d598fdfb891b2da9da8332722cab685f561414c65->leave($__internal_3444a79163e6cc0220a7eb8d598fdfb891b2da9da8332722cab685f561414c65_prof);

        
        $__internal_112d8cd7f0dbff0580c23dc096e0db824547b1efa61483957a1e3826e3951562->leave($__internal_112d8cd7f0dbff0580c23dc096e0db824547b1efa61483957a1e3826e3951562_prof);

    }

    public function getTemplateName()
    {
        return "form/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 14,  71 => 13,  63 => 11,  59 => 9,  57 => 8,  51 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'bootstrap_3_layout.html.twig' %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
        <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            {# use font-awesome icon library #}
            <li><span class=\"fa fa-exclamation-triangle\"></span> {{ error.message }}</li>
        {%- endfor -%}
        </ul>
        {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "form/layout.html.twig", "/var/www/task/app/Resources/views/form/layout.html.twig");
    }
}
