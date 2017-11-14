<?php

/* blog/_delete_post_confirmation.html.twig */
class __TwigTemplate_a77f0dcb24a314fe86d22bef9f27c20d354e5e2725b1fc8f2a95c654d98bd819 extends Twig_Template
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
        $__internal_f0bde321b32b535bc857bacbc573d88e2f33c713b56882e1ad6bf84653873924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0bde321b32b535bc857bacbc573d88e2f33c713b56882e1ad6bf84653873924->enter($__internal_f0bde321b32b535bc857bacbc573d88e2f33c713b56882e1ad6bf84653873924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_delete_post_confirmation.html.twig"));

        $__internal_7c55f4ac3d0ca3a8204ee069c2067b45e700e37bd695b22421d97ff2f55257e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c55f4ac3d0ca3a8204ee069c2067b45e700e37bd695b22421d97ff2f55257e1->enter($__internal_7c55f4ac3d0ca3a8204ee069c2067b45e700e37bd695b22421d97ff2f55257e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_delete_post_confirmation.html.twig"));

        // line 2
        echo "<div class=\"modal fade\" id=\"confirmationModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_post_modal.title"), "html", null, true);
        echo "</h4>
                <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_post_modal.body"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" id=\"btnNo\" data-dismiss=\"modal\">
                    <i class=\"fa fa-ban\" aria-hidden=\"true\"></i> ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.cancel"), "html", null, true);
        echo "
                </button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"btnYes\" data-dismiss=\"modal\">
                    <i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.delete_post"), "html", null, true);
        echo "
                </button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_f0bde321b32b535bc857bacbc573d88e2f33c713b56882e1ad6bf84653873924->leave($__internal_f0bde321b32b535bc857bacbc573d88e2f33c713b56882e1ad6bf84653873924_prof);

        
        $__internal_7c55f4ac3d0ca3a8204ee069c2067b45e700e37bd695b22421d97ff2f55257e1->leave($__internal_7c55f4ac3d0ca3a8204ee069c2067b45e700e37bd695b22421d97ff2f55257e1_prof);

    }

    public function getTemplateName()
    {
        return "blog/_delete_post_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  42 => 11,  35 => 7,  31 => 6,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Bootstrap modal, see http://getbootstrap.com/javascript/#modals #}
<div class=\"modal fade\" id=\"confirmationModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4>{{ 'delete_post_modal.title'|trans }}</h4>
                <p>{{ 'delete_post_modal.body'|trans }}</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" id=\"btnNo\" data-dismiss=\"modal\">
                    <i class=\"fa fa-ban\" aria-hidden=\"true\"></i> {{ 'label.cancel'|trans }}
                </button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"btnYes\" data-dismiss=\"modal\">
                    <i class=\"fa fa-trash\" aria-hidden=\"true\"></i> {{ 'label.delete_post'|trans }}
                </button>
            </div>
        </div>
    </div>
</div>
", "blog/_delete_post_confirmation.html.twig", "/var/www/task/app/Resources/views/blog/_delete_post_confirmation.html.twig");
    }
}
