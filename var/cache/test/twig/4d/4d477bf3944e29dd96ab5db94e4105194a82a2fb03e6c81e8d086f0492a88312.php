<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e26fa270234a17a1a5b9f1d7992593170c08c7c6edca479d6927c21d7b0adb21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44d5b60ca85eccd6d08e7635cab988cb7713cb69aaeac9673e579a85c878dcb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44d5b60ca85eccd6d08e7635cab988cb7713cb69aaeac9673e579a85c878dcb0->enter($__internal_44d5b60ca85eccd6d08e7635cab988cb7713cb69aaeac9673e579a85c878dcb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f9941d4b56a99cce84a13106088cb4ddf397697dc243b77c323ae6b6456da095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9941d4b56a99cce84a13106088cb4ddf397697dc243b77c323ae6b6456da095->enter($__internal_f9941d4b56a99cce84a13106088cb4ddf397697dc243b77c323ae6b6456da095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44d5b60ca85eccd6d08e7635cab988cb7713cb69aaeac9673e579a85c878dcb0->leave($__internal_44d5b60ca85eccd6d08e7635cab988cb7713cb69aaeac9673e579a85c878dcb0_prof);

        
        $__internal_f9941d4b56a99cce84a13106088cb4ddf397697dc243b77c323ae6b6456da095->leave($__internal_f9941d4b56a99cce84a13106088cb4ddf397697dc243b77c323ae6b6456da095_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1fb3aa64f10c5c8b323795acfb9f7df21f4c62678176b4ae938af679ed6206e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb3aa64f10c5c8b323795acfb9f7df21f4c62678176b4ae938af679ed6206e6->enter($__internal_1fb3aa64f10c5c8b323795acfb9f7df21f4c62678176b4ae938af679ed6206e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7b44f0a186c6c90ce6f702e90aa93012d6f1d4dadaa2027634604a887ceac0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b44f0a186c6c90ce6f702e90aa93012d6f1d4dadaa2027634604a887ceac0d0->enter($__internal_7b44f0a186c6c90ce6f702e90aa93012d6f1d4dadaa2027634604a887ceac0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_7b44f0a186c6c90ce6f702e90aa93012d6f1d4dadaa2027634604a887ceac0d0->leave($__internal_7b44f0a186c6c90ce6f702e90aa93012d6f1d4dadaa2027634604a887ceac0d0_prof);

        
        $__internal_1fb3aa64f10c5c8b323795acfb9f7df21f4c62678176b4ae938af679ed6206e6->leave($__internal_1fb3aa64f10c5c8b323795acfb9f7df21f4c62678176b4ae938af679ed6206e6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_43e39dd31abe2b0a60050c5e3725e7016b505349b9b6a0a30d754a8431fb6ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e39dd31abe2b0a60050c5e3725e7016b505349b9b6a0a30d754a8431fb6ad8->enter($__internal_43e39dd31abe2b0a60050c5e3725e7016b505349b9b6a0a30d754a8431fb6ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_194346b56ea30eb93a25c4581b5c920306d613334ee45fd0aaef817e94a767cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_194346b56ea30eb93a25c4581b5c920306d613334ee45fd0aaef817e94a767cd->enter($__internal_194346b56ea30eb93a25c4581b5c920306d613334ee45fd0aaef817e94a767cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_194346b56ea30eb93a25c4581b5c920306d613334ee45fd0aaef817e94a767cd->leave($__internal_194346b56ea30eb93a25c4581b5c920306d613334ee45fd0aaef817e94a767cd_prof);

        
        $__internal_43e39dd31abe2b0a60050c5e3725e7016b505349b9b6a0a30d754a8431fb6ad8->leave($__internal_43e39dd31abe2b0a60050c5e3725e7016b505349b9b6a0a30d754a8431fb6ad8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_90612fe431033dbee85e90b52f904bfd512376cba33593263b0ff5a798352cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90612fe431033dbee85e90b52f904bfd512376cba33593263b0ff5a798352cfc->enter($__internal_90612fe431033dbee85e90b52f904bfd512376cba33593263b0ff5a798352cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3909460591889b1aa48a984d19adbcab7bb1b1731dd015b4fe2bd7afd0a2e9b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3909460591889b1aa48a984d19adbcab7bb1b1731dd015b4fe2bd7afd0a2e9b2->enter($__internal_3909460591889b1aa48a984d19adbcab7bb1b1731dd015b4fe2bd7afd0a2e9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3909460591889b1aa48a984d19adbcab7bb1b1731dd015b4fe2bd7afd0a2e9b2->leave($__internal_3909460591889b1aa48a984d19adbcab7bb1b1731dd015b4fe2bd7afd0a2e9b2_prof);

        
        $__internal_90612fe431033dbee85e90b52f904bfd512376cba33593263b0ff5a798352cfc->leave($__internal_90612fe431033dbee85e90b52f904bfd512376cba33593263b0ff5a798352cfc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/task/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
