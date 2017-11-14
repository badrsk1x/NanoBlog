<?php

/* blog/about.html.twig */
class __TwigTemplate_d415ae8decbf3d0b3e64f89f8cf0c311e011c30fab087b3abf25594ce0ea8122 extends Twig_Template
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
        $__internal_1cc10a05c61a3b9108c31c14e6bdd6231b5886c1fb4de3a9123ce03eeff709a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cc10a05c61a3b9108c31c14e6bdd6231b5886c1fb4de3a9123ce03eeff709a9->enter($__internal_1cc10a05c61a3b9108c31c14e6bdd6231b5886c1fb4de3a9123ce03eeff709a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/about.html.twig"));

        $__internal_fc4e89c0104aba526b50ae98e0be67cbebf9b71c889f4cebe04b3bc6efb36b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4e89c0104aba526b50ae98e0be67cbebf9b71c889f4cebe04b3bc6efb36b49->enter($__internal_fc4e89c0104aba526b50ae98e0be67cbebf9b71c889f4cebe04b3bc6efb36b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/about.html.twig"));

        // line 1
        echo "<div class=\"section about\">
    <div class=\"well well-lg\">
        <p>
            ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.app_description");
        echo "
        </p>
        <p>
            ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.more_information");
        echo "
        </p>
    </div>
</div>

";
        // line 15
        echo "<!-- Fragment rendered on ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "long", "long", null, "UTC"), "html", null, true);
        echo " -->
";
        
        $__internal_1cc10a05c61a3b9108c31c14e6bdd6231b5886c1fb4de3a9123ce03eeff709a9->leave($__internal_1cc10a05c61a3b9108c31c14e6bdd6231b5886c1fb4de3a9123ce03eeff709a9_prof);

        
        $__internal_fc4e89c0104aba526b50ae98e0be67cbebf9b71c889f4cebe04b3bc6efb36b49->leave($__internal_fc4e89c0104aba526b50ae98e0be67cbebf9b71c889f4cebe04b3bc6efb36b49_prof);

    }

    public function getTemplateName()
    {
        return "blog/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  36 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section about\">
    <div class=\"well well-lg\">
        <p>
            {{ 'help.app_description'|trans|raw }}
        </p>
        <p>
            {{ 'help.more_information'|trans|raw }}
        </p>
    </div>
</div>

{# it's not mandatory to set the timezone in localizeddate(). This is done to
   avoid errors when the 'intl' PHP extension is not available and the application
   is forced to use the limited \"intl polyfill\", which only supports UTC and GMT #}
<!-- Fragment rendered on {{ 'now'|localizeddate('long', 'long', null, 'UTC') }} -->
", "blog/about.html.twig", "/var/www/task/app/Resources/views/blog/about.html.twig");
    }
}
