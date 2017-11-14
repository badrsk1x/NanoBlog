<?php

/* blog/_rss.html.twig */
class __TwigTemplate_6a684a91d53bb2ccc79f1ab55776fa9ca4a273285b97b22e8374a2c3165c36df extends Twig_Template
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
        $__internal_d80a86569768ce1f36d8069c95a5394bd46e2d74ebfefc6f4f3160f8ac205cd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d80a86569768ce1f36d8069c95a5394bd46e2d74ebfefc6f4f3160f8ac205cd4->enter($__internal_d80a86569768ce1f36d8069c95a5394bd46e2d74ebfefc6f4f3160f8ac205cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_rss.html.twig"));

        $__internal_3d7e563b4941a86e1e23578767c74c9ebe4d9ea52b40d55452a27c65ac0a40eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7e563b4941a86e1e23578767c74c9ebe4d9ea52b40d55452a27c65ac0a40eb->enter($__internal_3d7e563b4941a86e1e23578767c74c9ebe4d9ea52b40d55452a27c65ac0a40eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_rss.html.twig"));

        // line 1
        echo "<div class=\"section rss\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_rss");
        echo "\">
        <i class=\"fa fa-rss\" aria-hidden=\"true\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.rss"), "html", null, true);
        echo "
    </a>
</div>
";
        
        $__internal_d80a86569768ce1f36d8069c95a5394bd46e2d74ebfefc6f4f3160f8ac205cd4->leave($__internal_d80a86569768ce1f36d8069c95a5394bd46e2d74ebfefc6f4f3160f8ac205cd4_prof);

        
        $__internal_3d7e563b4941a86e1e23578767c74c9ebe4d9ea52b40d55452a27c65ac0a40eb->leave($__internal_3d7e563b4941a86e1e23578767c74c9ebe4d9ea52b40d55452a27c65ac0a40eb_prof);

    }

    public function getTemplateName()
    {
        return "blog/_rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section rss\">
    <a href=\"{{ path('blog_rss') }}\">
        <i class=\"fa fa-rss\" aria-hidden=\"true\"></i> {{ 'menu.rss'|trans }}
    </a>
</div>
", "blog/_rss.html.twig", "/var/www/task/app/Resources/views/blog/_rss.html.twig");
    }
}
