<?php

/* admin/layout.html.twig */
class __TwigTemplate_b3d5c429904e0af32716eb7116134673601ebc5d40fc733deee6d1ab737c8cb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("base.html.twig", "admin/layout.html.twig", 8);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75659693684ccefd12fcbcf7514e443c11a5d7a372b4c15719c308b9a630678d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75659693684ccefd12fcbcf7514e443c11a5d7a372b4c15719c308b9a630678d->enter($__internal_75659693684ccefd12fcbcf7514e443c11a5d7a372b4c15719c308b9a630678d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $__internal_bb1e5e5eedb4e9e19389efc53d0eb1541fb033adf8f5e647621a594cb8fdac97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1e5e5eedb4e9e19389efc53d0eb1541fb033adf8f5e647621a594cb8fdac97->enter($__internal_bb1e5e5eedb4e9e19389efc53d0eb1541fb033adf8f5e647621a594cb8fdac97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75659693684ccefd12fcbcf7514e443c11a5d7a372b4c15719c308b9a630678d->leave($__internal_75659693684ccefd12fcbcf7514e443c11a5d7a372b4c15719c308b9a630678d_prof);

        
        $__internal_bb1e5e5eedb4e9e19389efc53d0eb1541fb033adf8f5e647621a594cb8fdac97->leave($__internal_bb1e5e5eedb4e9e19389efc53d0eb1541fb033adf8f5e647621a594cb8fdac97_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_227d13bcd3b91146155a15c51935f08e8448526be80d5d4283b056c63d7633ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_227d13bcd3b91146155a15c51935f08e8448526be80d5d4283b056c63d7633ef->enter($__internal_227d13bcd3b91146155a15c51935f08e8448526be80d5d4283b056c63d7633ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e2c9ccbc8ebb294b8919490ef8abc467a294b78ef149e7831ad21ef5ae6071a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c9ccbc8ebb294b8919490ef8abc467a294b78ef149e7831ad21ef5ae6071a8->enter($__internal_e2c9ccbc8ebb294b8919490ef8abc467a294b78ef149e7831ad21ef5ae6071a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/admin.css"), "html", null, true);
        echo "\">
";
        
        $__internal_e2c9ccbc8ebb294b8919490ef8abc467a294b78ef149e7831ad21ef5ae6071a8->leave($__internal_e2c9ccbc8ebb294b8919490ef8abc467a294b78ef149e7831ad21ef5ae6071a8_prof);

        
        $__internal_227d13bcd3b91146155a15c51935f08e8448526be80d5d4283b056c63d7633ef->leave($__internal_227d13bcd3b91146155a15c51935f08e8448526be80d5d4283b056c63d7633ef_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_661091bc7cc03f01f734bcd6b4a70923eee0d635d861324e4076ef9a484f681f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_661091bc7cc03f01f734bcd6b4a70923eee0d635d861324e4076ef9a484f681f->enter($__internal_661091bc7cc03f01f734bcd6b4a70923eee0d635d861324e4076ef9a484f681f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c5bf1092ef329a0d29c92f20ae6376e557fa7721ede3115aeb81130a890300f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5bf1092ef329a0d29c92f20ae6376e557fa7721ede3115aeb81130a890300f5->enter($__internal_c5bf1092ef329a0d29c92f20ae6376e557fa7721ede3115aeb81130a890300f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/admin.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_c5bf1092ef329a0d29c92f20ae6376e557fa7721ede3115aeb81130a890300f5->leave($__internal_c5bf1092ef329a0d29c92f20ae6376e557fa7721ede3115aeb81130a890300f5_prof);

        
        $__internal_661091bc7cc03f01f734bcd6b4a70923eee0d635d861324e4076ef9a484f681f->leave($__internal_661091bc7cc03f01f734bcd6b4a70923eee0d635d861324e4076ef9a484f681f_prof);

    }

    // line 20
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_d9fa84c020e701a92595d0270d916faffad962daf7424b27bdfee6939e2327bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9fa84c020e701a92595d0270d916faffad962daf7424b27bdfee6939e2327bf->enter($__internal_d9fa84c020e701a92595d0270d916faffad962daf7424b27bdfee6939e2327bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        $__internal_0f2be54edb6020783e7cea321513bc953522a95e07cafa26a98236aeb00962dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f2be54edb6020783e7cea321513bc953522a95e07cafa26a98236aeb00962dc->enter($__internal_0f2be54edb6020783e7cea321513bc953522a95e07cafa26a98236aeb00962dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 21
        echo "    <li>
        <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_index");
        echo "\">
            <i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i> ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.post_list"), "html", null, true);
        echo "
        </a>
    </li>
    <li>
        <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">
            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.back_to_blog"), "html", null, true);
        echo "
        </a>
    </li>
";
        
        $__internal_0f2be54edb6020783e7cea321513bc953522a95e07cafa26a98236aeb00962dc->leave($__internal_0f2be54edb6020783e7cea321513bc953522a95e07cafa26a98236aeb00962dc_prof);

        
        $__internal_d9fa84c020e701a92595d0270d916faffad962daf7424b27bdfee6939e2327bf->leave($__internal_d9fa84c020e701a92595d0270d916faffad962daf7424b27bdfee6939e2327bf_prof);

    }

    public function getTemplateName()
    {
        return "admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 28,  117 => 27,  110 => 23,  106 => 22,  103 => 21,  94 => 20,  82 => 17,  77 => 16,  68 => 15,  56 => 12,  51 => 11,  42 => 10,  11 => 8,);
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
   This is the base template of the all backend pages. Since this layout is similar
   to the global layout, we inherit from it to just change the contents of some
   blocks. In practice, backend templates are using a three-level inheritance,
   showing how powerful, yet easy to use, is Twig's inheritance mechanism.
   See https://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('build/css/admin.css') }}\">
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('build/js/admin.js') }}\"></script>
{% endblock %}

{% block header_navigation_links %}
    <li>
        <a href=\"{{ path('admin_post_index') }}\">
            <i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i> {{ 'menu.post_list'|trans }}
        </a>
    </li>
    <li>
        <a href=\"{{ path('blog_index') }}\">
            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> {{ 'menu.back_to_blog'|trans }}
        </a>
    </li>
{% endblock %}
", "admin/layout.html.twig", "/var/www/task/app/Resources/views/admin/layout.html.twig");
    }
}
