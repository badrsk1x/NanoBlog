<?php

/* security/login.html.twig */
class __TwigTemplate_bbe7cd9691552f8103581985429f6da77753981db7c6e256422ed6291abc840b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'javascripts' => array($this, 'block_javascripts'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7251a6008a69a5907e24544ab438cefcae33cba9dbfb08a15df15f8b1827bb50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7251a6008a69a5907e24544ab438cefcae33cba9dbfb08a15df15f8b1827bb50->enter($__internal_7251a6008a69a5907e24544ab438cefcae33cba9dbfb08a15df15f8b1827bb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_8fe36fc9541f3893b8446b65801f5ab556a317f04a07321d50c88e26d6c9728f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe36fc9541f3893b8446b65801f5ab556a317f04a07321d50c88e26d6c9728f->enter($__internal_8fe36fc9541f3893b8446b65801f5ab556a317f04a07321d50c88e26d6c9728f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7251a6008a69a5907e24544ab438cefcae33cba9dbfb08a15df15f8b1827bb50->leave($__internal_7251a6008a69a5907e24544ab438cefcae33cba9dbfb08a15df15f8b1827bb50_prof);

        
        $__internal_8fe36fc9541f3893b8446b65801f5ab556a317f04a07321d50c88e26d6c9728f->leave($__internal_8fe36fc9541f3893b8446b65801f5ab556a317f04a07321d50c88e26d6c9728f_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_fc44d41e147413c5737097323d7a8be45bea048f56f6f784ac70354d59a6d12f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc44d41e147413c5737097323d7a8be45bea048f56f6f784ac70354d59a6d12f->enter($__internal_fc44d41e147413c5737097323d7a8be45bea048f56f6f784ac70354d59a6d12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_e3fbad3760c631b43763cddb63c8e52db340179f5adb24be083f225dbacc1534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3fbad3760c631b43763cddb63c8e52db340179f5adb24be083f225dbacc1534->enter($__internal_e3fbad3760c631b43763cddb63c8e52db340179f5adb24be083f225dbacc1534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "login";
        
        $__internal_e3fbad3760c631b43763cddb63c8e52db340179f5adb24be083f225dbacc1534->leave($__internal_e3fbad3760c631b43763cddb63c8e52db340179f5adb24be083f225dbacc1534_prof);

        
        $__internal_fc44d41e147413c5737097323d7a8be45bea048f56f6f784ac70354d59a6d12f->leave($__internal_fc44d41e147413c5737097323d7a8be45bea048f56f6f784ac70354d59a6d12f_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fdd88fd325164b6b89b1a4753713c5d3530a3a01ef1822c0e4b62ae7843fd8a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdd88fd325164b6b89b1a4753713c5d3530a3a01ef1822c0e4b62ae7843fd8a6->enter($__internal_fdd88fd325164b6b89b1a4753713c5d3530a3a01ef1822c0e4b62ae7843fd8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e01da5d1c468c992abb9cdb8cd777c1e1760169508c1b23c9bba03415f33e835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e01da5d1c468c992abb9cdb8cd777c1e1760169508c1b23c9bba03415f33e835->enter($__internal_e01da5d1c468c992abb9cdb8cd777c1e1760169508c1b23c9bba03415f33e835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/login.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_e01da5d1c468c992abb9cdb8cd777c1e1760169508c1b23c9bba03415f33e835->leave($__internal_e01da5d1c468c992abb9cdb8cd777c1e1760169508c1b23c9bba03415f33e835_prof);

        
        $__internal_fdd88fd325164b6b89b1a4753713c5d3530a3a01ef1822c0e4b62ae7843fd8a6->leave($__internal_fdd88fd325164b6b89b1a4753713c5d3530a3a01ef1822c0e4b62ae7843fd8a6_prof);

    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        $__internal_8ae19c66703ffa393582e9be8dba7fc96cac321c8effd4d0ed5775d356e8177d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae19c66703ffa393582e9be8dba7fc96cac321c8effd4d0ed5775d356e8177d->enter($__internal_8ae19c66703ffa393582e9be8dba7fc96cac321c8effd4d0ed5775d356e8177d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_f9b2da37e5ac1f8ab8fc2f8b75cac122b0305ae92c6e7201be082e44db3afa8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b2da37e5ac1f8ab8fc2f8b75cac122b0305ae92c6e7201be082e44db3afa8f->enter($__internal_f9b2da37e5ac1f8ab8fc2f8b75cac122b0305ae92c6e7201be082e44db3afa8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 11
        echo "    ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 12
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 16
        echo "
    <div class=\"row\">
        <div class=\"col-sm-5\">
            <div class=\"well\">
                <form action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
        echo "\" method=\"post\">
                    <fieldset>
                        <legend><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.login"), "html", null, true);
        echo "</legend>
                        <div class=\"form-group\">
                            <label for=\"username\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.username"), "html", null, true);
        echo "</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\"/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.password"), "html", null, true);
        echo "</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                        </div>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.sign_in"), "html", null, true);
        echo "
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>

        <div id=\"login-help\" class=\"col-sm-7\">
            <h3>
                <i class=\"fa fa-long-arrow-left\" aria-hidden=\"true\"></i>
                ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.login_users"), "html", null, true);
        echo "
            </h3>

            <table class=\"table table-striped table-bordered table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.username"), "html", null, true);
        echo "</th>
                        <th scope=\"col\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.password"), "html", null, true);
        echo "</th>
                        <th scope=\"col\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.role"), "html", null, true);
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>john_user</td>
                        <td>kitten</td>
                        <td><code>ROLE_USER</code> (";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.role_user"), "html", null, true);
        echo ")</td>
                    </tr>
                    <tr>
                        <td>jane_admin</td>
                        <td>kitten</td>
                        <td><code>ROLE_ADMIN</code> (";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.role_admin"), "html", null, true);
        echo ")</td>
                    </tr>
                </tbody>
            </table>

            <div id=\"login-users-help\" class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <p>
                        <span class=\"label label-success\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("note"), "html", null, true);
        echo "</span>
                        ";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.reload_fixtures"), "html", null, true);
        echo "<br/>

                        <code class=\"console\">\$ php bin/console doctrine:fixtures:load</code>
                    </p>

                    <p>
                        <span class=\"label label-success\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tip"), "html", null, true);
        echo "</span>
                        ";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.add_user"), "html", null, true);
        echo "<br/>

                        <code class=\"console\">\$ php bin/console app:add-user</code>
                    </p>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_f9b2da37e5ac1f8ab8fc2f8b75cac122b0305ae92c6e7201be082e44db3afa8f->leave($__internal_f9b2da37e5ac1f8ab8fc2f8b75cac122b0305ae92c6e7201be082e44db3afa8f_prof);

        
        $__internal_8ae19c66703ffa393582e9be8dba7fc96cac321c8effd4d0ed5775d356e8177d->leave($__internal_8ae19c66703ffa393582e9be8dba7fc96cac321c8effd4d0ed5775d356e8177d_prof);

    }

    // line 89
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f7790315830e3df6bb553cb3a4f10507eca51d8c19e371d37152fc73cbfafac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7790315830e3df6bb553cb3a4f10507eca51d8c19e371d37152fc73cbfafac1->enter($__internal_f7790315830e3df6bb553cb3a4f10507eca51d8c19e371d37152fc73cbfafac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_647c42ed9a9c6dec3b4005d0bfbe9665ddd0a8e3d2471ca221d8f76ea2ac9995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_647c42ed9a9c6dec3b4005d0bfbe9665ddd0a8e3d2471ca221d8f76ea2ac9995->enter($__internal_647c42ed9a9c6dec3b4005d0bfbe9665ddd0a8e3d2471ca221d8f76ea2ac9995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 90
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 92
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_647c42ed9a9c6dec3b4005d0bfbe9665ddd0a8e3d2471ca221d8f76ea2ac9995->leave($__internal_647c42ed9a9c6dec3b4005d0bfbe9665ddd0a8e3d2471ca221d8f76ea2ac9995_prof);

        
        $__internal_f7790315830e3df6bb553cb3a4f10507eca51d8c19e371d37152fc73cbfafac1->leave($__internal_f7790315830e3df6bb553cb3a4f10507eca51d8c19e371d37152fc73cbfafac1_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 92,  249 => 90,  240 => 89,  221 => 79,  217 => 78,  208 => 72,  204 => 71,  193 => 63,  185 => 58,  175 => 51,  171 => 50,  167 => 49,  158 => 43,  145 => 33,  140 => 31,  134 => 28,  128 => 25,  124 => 24,  119 => 22,  114 => 20,  108 => 16,  102 => 13,  99 => 12,  96 => 11,  87 => 10,  75 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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

{% block body_id 'login' %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('build/js/login.js') }}\"></script>
{% endblock %}

{% block main %}
    {% if error %}
        <div class=\"alert alert-danger\">
            {{ error.messageKey|trans(error.messageData, 'security') }}
        </div>
    {% endif %}

    <div class=\"row\">
        <div class=\"col-sm-5\">
            <div class=\"well\">
                <form action=\"{{ path('security_login') }}\" method=\"post\">
                    <fieldset>
                        <legend><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> {{ 'title.login'|trans }}</legend>
                        <div class=\"form-group\">
                            <label for=\"username\">{{ 'label.username'|trans }}</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\"/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">{{ 'label.password'|trans }}</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                        </div>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> {{ 'action.sign_in'|trans }}
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>

        <div id=\"login-help\" class=\"col-sm-7\">
            <h3>
                <i class=\"fa fa-long-arrow-left\" aria-hidden=\"true\"></i>
                {{ 'help.login_users'|trans }}
            </h3>

            <table class=\"table table-striped table-bordered table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">{{ 'label.username'|trans }}</th>
                        <th scope=\"col\">{{ 'label.password'|trans }}</th>
                        <th scope=\"col\">{{ 'label.role'|trans }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>john_user</td>
                        <td>kitten</td>
                        <td><code>ROLE_USER</code> ({{ 'help.role_user'|trans }})</td>
                    </tr>
                    <tr>
                        <td>jane_admin</td>
                        <td>kitten</td>
                        <td><code>ROLE_ADMIN</code> ({{ 'help.role_admin'|trans }})</td>
                    </tr>
                </tbody>
            </table>

            <div id=\"login-users-help\" class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <p>
                        <span class=\"label label-success\">{{ 'note'|trans }}</span>
                        {{ 'help.reload_fixtures'|trans }}<br/>

                        <code class=\"console\">\$ php bin/console doctrine:fixtures:load</code>
                    </p>

                    <p>
                        <span class=\"label label-success\">{{ 'tip'|trans }}</span>
                        {{ 'help.add_user'|trans }}<br/>

                        <code class=\"console\">\$ php bin/console app:add-user</code>
                    </p>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block sidebar %}
    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "security/login.html.twig", "/var/www/task/app/Resources/views/security/login.html.twig");
    }
}
