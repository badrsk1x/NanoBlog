<?php

/* form/fields.html.twig */
class __TwigTemplate_7d3b19467dfcbd278b504e13574442163656593fb5ba489631daad63935d6837 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
            'tags_input_widget' => array($this, 'block_tags_input_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5851a60142bfc5cb9ef22b299de65b8cbf951115062478d531c38564732286e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5851a60142bfc5cb9ef22b299de65b8cbf951115062478d531c38564732286e->enter($__internal_b5851a60142bfc5cb9ef22b299de65b8cbf951115062478d531c38564732286e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        $__internal_06f318219266782b2fa4cc5675d849240ae36901641d72c4b8beaf384ff724c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f318219266782b2fa4cc5675d849240ae36901641d72c4b8beaf384ff724c9->enter($__internal_06f318219266782b2fa4cc5675d849240ae36901641d72c4b8beaf384ff724c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('tags_input_widget', $context, $blocks);
        
        $__internal_b5851a60142bfc5cb9ef22b299de65b8cbf951115062478d531c38564732286e->leave($__internal_b5851a60142bfc5cb9ef22b299de65b8cbf951115062478d531c38564732286e_prof);

        
        $__internal_06f318219266782b2fa4cc5675d849240ae36901641d72c4b8beaf384ff724c9->leave($__internal_06f318219266782b2fa4cc5675d849240ae36901641d72c4b8beaf384ff724c9_prof);

    }

    // line 10
    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_395689e9480d888f887809136381a3b98e1fb52674ce1be3550572cfea3ecd46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395689e9480d888f887809136381a3b98e1fb52674ce1be3550572cfea3ecd46->enter($__internal_395689e9480d888f887809136381a3b98e1fb52674ce1be3550572cfea3ecd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        $__internal_cd9120b43bbd07060bf35e292fe76c9fe21e642cc1157d262e3e1b7d822b1e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9120b43bbd07060bf35e292fe76c9fe21e642cc1157d262e3e1b7d822b1e4e->enter($__internal_cd9120b43bbd07060bf35e292fe76c9fe21e642cc1157d262e3e1b7d822b1e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    <div class=\"input-group date\" data-toggle=\"datetimepicker\">
        ";
        // line 12
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
        <span class=\"input-group-addon\">
            <span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>
        </span>
    </div>
";
        
        $__internal_cd9120b43bbd07060bf35e292fe76c9fe21e642cc1157d262e3e1b7d822b1e4e->leave($__internal_cd9120b43bbd07060bf35e292fe76c9fe21e642cc1157d262e3e1b7d822b1e4e_prof);

        
        $__internal_395689e9480d888f887809136381a3b98e1fb52674ce1be3550572cfea3ecd46->leave($__internal_395689e9480d888f887809136381a3b98e1fb52674ce1be3550572cfea3ecd46_prof);

    }

    // line 19
    public function block_tags_input_widget($context, array $blocks = array())
    {
        $__internal_25d115f2163917986a1795f33b0a134d7c860e8e27c1c456d76e166cef2ff8b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d115f2163917986a1795f33b0a134d7c860e8e27c1c456d76e166cef2ff8b2->enter($__internal_25d115f2163917986a1795f33b0a134d7c860e8e27c1c456d76e166cef2ff8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tags_input_widget"));

        $__internal_1a190d38971396832a431b185fd3014e5bcacf6f4bc7829e07b16aff271b749d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a190d38971396832a431b185fd3014e5bcacf6f4bc7829e07b16aff271b749d->enter($__internal_1a190d38971396832a431b185fd3014e5bcacf6f4bc7829e07b16aff271b749d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tags_input_widget"));

        // line 20
        echo "    <div class=\"input-group\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("attr" => array("data-toggle" => "tagsinput", "data-tags" => twig_jsonencode_filter(($context["tags"] ?? $this->getContext($context, "tags"))))));
        echo "
        <span class=\"input-group-addon\">
            <span class=\"fa fa-tags\" aria-hidden=\"true\"></span>
        </span>
    </div>
";
        
        $__internal_1a190d38971396832a431b185fd3014e5bcacf6f4bc7829e07b16aff271b749d->leave($__internal_1a190d38971396832a431b185fd3014e5bcacf6f4bc7829e07b16aff271b749d_prof);

        
        $__internal_25d115f2163917986a1795f33b0a134d7c860e8e27c1c456d76e166cef2ff8b2->leave($__internal_25d115f2163917986a1795f33b0a134d7c860e8e27c1c456d76e166cef2ff8b2_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  82 => 20,  73 => 19,  57 => 12,  54 => 11,  45 => 10,  35 => 19,  32 => 18,  30 => 10,  27 => 9,);
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
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See https://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    <div class=\"input-group date\" data-toggle=\"datetimepicker\">
        {{ block('datetime_widget') }}
        <span class=\"input-group-addon\">
            <span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>
        </span>
    </div>
{% endblock %}

{% block tags_input_widget %}
    <div class=\"input-group\">
        {{ form_widget(form, {'attr': {'data-toggle': 'tagsinput', 'data-tags': tags|json_encode}}) }}
        <span class=\"input-group-addon\">
            <span class=\"fa fa-tags\" aria-hidden=\"true\"></span>
        </span>
    </div>
{% endblock %}
", "form/fields.html.twig", "/var/www/task/app/Resources/views/form/fields.html.twig");
    }
}
