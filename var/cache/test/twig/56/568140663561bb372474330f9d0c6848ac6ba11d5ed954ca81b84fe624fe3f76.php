<?php

/* default/homepage.html.twig */
class __TwigTemplate_8e29a75c3558feea5e2ac8293ac2406ebf86b065004a134ce4b0f851dda9c66c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/homepage.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb3e92fb9a1b65b46fd93cadfb492b831d8ed09779b9796959b0366b954c18ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb3e92fb9a1b65b46fd93cadfb492b831d8ed09779b9796959b0366b954c18ca->enter($__internal_fb3e92fb9a1b65b46fd93cadfb492b831d8ed09779b9796959b0366b954c18ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $__internal_51f31d3328df03385737230b27aba0dc133de9d1e31fc9799fd4607cd2e0ce20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f31d3328df03385737230b27aba0dc133de9d1e31fc9799fd4607cd2e0ce20->enter($__internal_51f31d3328df03385737230b27aba0dc133de9d1e31fc9799fd4607cd2e0ce20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb3e92fb9a1b65b46fd93cadfb492b831d8ed09779b9796959b0366b954c18ca->leave($__internal_fb3e92fb9a1b65b46fd93cadfb492b831d8ed09779b9796959b0366b954c18ca_prof);

        
        $__internal_51f31d3328df03385737230b27aba0dc133de9d1e31fc9799fd4607cd2e0ce20->leave($__internal_51f31d3328df03385737230b27aba0dc133de9d1e31fc9799fd4607cd2e0ce20_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_596a72be0528155d2f9f86376b989927e5718967a653c610858a73e01a8777fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_596a72be0528155d2f9f86376b989927e5718967a653c610858a73e01a8777fc->enter($__internal_596a72be0528155d2f9f86376b989927e5718967a653c610858a73e01a8777fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_0b700275b056741b61c239d38649183b6a328749e01f0bf491e3e89377177450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b700275b056741b61c239d38649183b6a328749e01f0bf491e3e89377177450->enter($__internal_0b700275b056741b61c239d38649183b6a328749e01f0bf491e3e89377177450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "homepage";
        
        $__internal_0b700275b056741b61c239d38649183b6a328749e01f0bf491e3e89377177450->leave($__internal_0b700275b056741b61c239d38649183b6a328749e01f0bf491e3e89377177450_prof);

        
        $__internal_596a72be0528155d2f9f86376b989927e5718967a653c610858a73e01a8777fc->leave($__internal_596a72be0528155d2f9f86376b989927e5718967a653c610858a73e01a8777fc_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_8fdd2de44d9365a94868ca09281ab4d3ab64b3cabbecaf5ff0441c5d1782b615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fdd2de44d9365a94868ca09281ab4d3ab64b3cabbecaf5ff0441c5d1782b615->enter($__internal_8fdd2de44d9365a94868ca09281ab4d3ab64b3cabbecaf5ff0441c5d1782b615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_25cfe52c249ac772d4715f5b889b917186a9e2dbfd3f8df3885a17547dc95253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25cfe52c249ac772d4715f5b889b917186a9e2dbfd3f8df3885a17547dc95253->enter($__internal_25cfe52c249ac772d4715f5b889b917186a9e2dbfd3f8df3885a17547dc95253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_25cfe52c249ac772d4715f5b889b917186a9e2dbfd3f8df3885a17547dc95253->leave($__internal_25cfe52c249ac772d4715f5b889b917186a9e2dbfd3f8df3885a17547dc95253_prof);

        
        $__internal_8fdd2de44d9365a94868ca09281ab4d3ab64b3cabbecaf5ff0441c5d1782b615->leave($__internal_8fdd2de44d9365a94868ca09281ab4d3ab64b3cabbecaf5ff0441c5d1782b615_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1889526143208191cdda2fd281c5f87a77fd8d0960d21631258bbd8575d56415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1889526143208191cdda2fd281c5f87a77fd8d0960d21631258bbd8575d56415->enter($__internal_1889526143208191cdda2fd281c5f87a77fd8d0960d21631258bbd8575d56415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_32b845db9acb4b7fbacfe8459dca47e783d268c26177003d8bf6ad6afeed6814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b845db9acb4b7fbacfe8459dca47e783d268c26177003d8bf6ad6afeed6814->enter($__internal_32b845db9acb4b7fbacfe8459dca47e783d268c26177003d8bf6ad6afeed6814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_32b845db9acb4b7fbacfe8459dca47e783d268c26177003d8bf6ad6afeed6814->leave($__internal_32b845db9acb4b7fbacfe8459dca47e783d268c26177003d8bf6ad6afeed6814_prof);

        
        $__internal_1889526143208191cdda2fd281c5f87a77fd8d0960d21631258bbd8575d56415->leave($__internal_1889526143208191cdda2fd281c5f87a77fd8d0960d21631258bbd8575d56415_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdfd6bc5a9dfd6aa0b1053438a75d6f42f0b2e235524ff13293f2ff54d31c501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdfd6bc5a9dfd6aa0b1053438a75d6f42f0b2e235524ff13293f2ff54d31c501->enter($__internal_bdfd6bc5a9dfd6aa0b1053438a75d6f42f0b2e235524ff13293f2ff54d31c501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ba21a0d11fc0f5a00daf40c432c1b235ec075d9a65a99ca3d989bf6f7d78af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba21a0d11fc0f5a00daf40c432c1b235ec075d9a65a99ca3d989bf6f7d78af0->enter($__internal_5ba21a0d11fc0f5a00daf40c432c1b235ec075d9a65a99ca3d989bf6f7d78af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"page-header\">
        <h1>";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.homepage");
        echo "</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.browse_app");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">
                        <i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.browse_app"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.browse_admin");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\">
                        <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.browse_admin"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_5ba21a0d11fc0f5a00daf40c432c1b235ec075d9a65a99ca3d989bf6f7d78af0->leave($__internal_5ba21a0d11fc0f5a00daf40c432c1b235ec075d9a65a99ca3d989bf6f7d78af0_prof);

        
        $__internal_bdfd6bc5a9dfd6aa0b1053438a75d6f42f0b2e235524ff13293f2ff54d31c501->leave($__internal_bdfd6bc5a9dfd6aa0b1053438a75d6f42f0b2e235524ff13293f2ff54d31c501_prof);

    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 38,  145 => 37,  139 => 34,  127 => 25,  123 => 24,  117 => 21,  107 => 14,  104 => 13,  95 => 12,  78 => 10,  61 => 9,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body_id 'homepage' %}

{#
    the homepage is a special page which displays neither a header nor a footer.
    this is done with the 'trick' of defining empty Twig blocks without any content
#}
{% block header %}{% endblock %}
{% block footer %}{% endblock %}

{% block body %}
    <div class=\"page-header\">
        <h1>{{ 'title.homepage'|trans|raw }}</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    {{ 'help.browse_app'|trans|raw }}
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"{{ path('blog_index') }}\">
                        <i class=\"fa fa-users\" aria-hidden=\"true\"></i> {{ 'action.browse_app'|trans }}
                    </a>
                </p>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    {{ 'help.browse_admin'|trans|raw }}
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"{{ path('admin_index') }}\">
                        <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> {{ 'action.browse_admin'|trans }}
                    </a>
                </p>
            </div>
        </div>
    </div>
{% endblock %}
", "default/homepage.html.twig", "/var/www/task/app/Resources/views/default/homepage.html.twig");
    }
}
