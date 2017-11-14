<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_02ef9c21cd493692cd23efd17b9b996804d3256f48885efcfa089e15062f1185 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1796efe635c42f6c67f8f9b3f9be3d7be62f43e2c7b63a17e710464a7932dc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1796efe635c42f6c67f8f9b3f9be3d7be62f43e2c7b63a17e710464a7932dc6->enter($__internal_d1796efe635c42f6c67f8f9b3f9be3d7be62f43e2c7b63a17e710464a7932dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_6645d4e3b4da26f1ad5036728a3dd8fcbf1a974b900e5fd55693acf1f7300318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6645d4e3b4da26f1ad5036728a3dd8fcbf1a974b900e5fd55693acf1f7300318->enter($__internal_6645d4e3b4da26f1ad5036728a3dd8fcbf1a974b900e5fd55693acf1f7300318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_d1796efe635c42f6c67f8f9b3f9be3d7be62f43e2c7b63a17e710464a7932dc6->leave($__internal_d1796efe635c42f6c67f8f9b3f9be3d7be62f43e2c7b63a17e710464a7932dc6_prof);

        
        $__internal_6645d4e3b4da26f1ad5036728a3dd8fcbf1a974b900e5fd55693acf1f7300318->leave($__internal_6645d4e3b4da26f1ad5036728a3dd8fcbf1a974b900e5fd55693acf1f7300318_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_22fec4b60e161a3d7cfe29ceb6e6148e8e842e7a762e33f63a4cd5d76d2c2cc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22fec4b60e161a3d7cfe29ceb6e6148e8e842e7a762e33f63a4cd5d76d2c2cc3->enter($__internal_22fec4b60e161a3d7cfe29ceb6e6148e8e842e7a762e33f63a4cd5d76d2c2cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0c42068e263a5485c7123c183f560a626cc7cf1e3433c91a602ebf0bfd9b322f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c42068e263a5485c7123c183f560a626cc7cf1e3433c91a602ebf0bfd9b322f->enter($__internal_0c42068e263a5485c7123c183f560a626cc7cf1e3433c91a602ebf0bfd9b322f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0c42068e263a5485c7123c183f560a626cc7cf1e3433c91a602ebf0bfd9b322f->leave($__internal_0c42068e263a5485c7123c183f560a626cc7cf1e3433c91a602ebf0bfd9b322f_prof);

        
        $__internal_22fec4b60e161a3d7cfe29ceb6e6148e8e842e7a762e33f63a4cd5d76d2c2cc3->leave($__internal_22fec4b60e161a3d7cfe29ceb6e6148e8e842e7a762e33f63a4cd5d76d2c2cc3_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a04199bb673daee3864faf14f31f3085f8b30e7b521e48083ec004c4ef3697a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a04199bb673daee3864faf14f31f3085f8b30e7b521e48083ec004c4ef3697a->enter($__internal_6a04199bb673daee3864faf14f31f3085f8b30e7b521e48083ec004c4ef3697a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d57337f1816b047b1726af718a565be2818098c3196b7e10de7d7e768b8bb052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57337f1816b047b1726af718a565be2818098c3196b7e10de7d7e768b8bb052->enter($__internal_d57337f1816b047b1726af718a565be2818098c3196b7e10de7d7e768b8bb052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d57337f1816b047b1726af718a565be2818098c3196b7e10de7d7e768b8bb052->leave($__internal_d57337f1816b047b1726af718a565be2818098c3196b7e10de7d7e768b8bb052_prof);

        
        $__internal_6a04199bb673daee3864faf14f31f3085f8b30e7b521e48083ec004c4ef3697a->leave($__internal_6a04199bb673daee3864faf14f31f3085f8b30e7b521e48083ec004c4ef3697a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8f2ff1caaa194efe02545d2f8573a32dac4a524330a6c591036f858f7cb4d5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8f2ff1caaa194efe02545d2f8573a32dac4a524330a6c591036f858f7cb4d5b->enter($__internal_e8f2ff1caaa194efe02545d2f8573a32dac4a524330a6c591036f858f7cb4d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_666ffbd80299bd5ff3eff5f824677ce85958cf3864e550a8193f7091fd87ef31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666ffbd80299bd5ff3eff5f824677ce85958cf3864e550a8193f7091fd87ef31->enter($__internal_666ffbd80299bd5ff3eff5f824677ce85958cf3864e550a8193f7091fd87ef31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_666ffbd80299bd5ff3eff5f824677ce85958cf3864e550a8193f7091fd87ef31->leave($__internal_666ffbd80299bd5ff3eff5f824677ce85958cf3864e550a8193f7091fd87ef31_prof);

        
        $__internal_e8f2ff1caaa194efe02545d2f8573a32dac4a524330a6c591036f858f7cb4d5b->leave($__internal_e8f2ff1caaa194efe02545d2f8573a32dac4a524330a6c591036f858f7cb4d5b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/task/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
