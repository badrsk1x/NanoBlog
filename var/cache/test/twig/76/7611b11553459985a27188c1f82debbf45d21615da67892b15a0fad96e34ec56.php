<?php

/* base.html.twig */
class __TwigTemplate_e33c699203791221c88d6a7f5e8d9b779f2aae0665ebbb4f0fd9719303432a7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fc9a1f73c892949e47618e7dc3b8605757b6d9370975b25279a0d2e4287edda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fc9a1f73c892949e47618e7dc3b8605757b6d9370975b25279a0d2e4287edda->enter($__internal_4fc9a1f73c892949e47618e7dc3b8605757b6d9370975b25279a0d2e4287edda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e0e0749178c22180ec55a9c91b4bfdc6059aef6d84aac1b4b21a98977a4a0efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e0749178c22180ec55a9c91b4bfdc6059aef6d84aac1b4b21a98977a4a0efb->enter($__internal_e0e0749178c22180ec55a9c91b4bfdc6059aef6d84aac1b4b21a98977a4a0efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("rss.title"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_rss");
        echo "\">
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body id=\"";
        // line 20
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

        ";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 89
        echo "
        <div class=\"container body-container\">
            ";
        // line 91
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "        </div>

        ";
        // line 112
        $this->displayBlock('footer', $context, $blocks);
        // line 137
        echo "
        ";
        // line 138
        $this->displayBlock('javascripts', $context, $blocks);
        // line 143
        echo "
        ";
        // line 147
        echo "        <!-- Page rendered on ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "long", "long", null, "UTC"), "html", null, true);
        echo " -->
    </body>
</html>
";
        
        $__internal_4fc9a1f73c892949e47618e7dc3b8605757b6d9370975b25279a0d2e4287edda->leave($__internal_4fc9a1f73c892949e47618e7dc3b8605757b6d9370975b25279a0d2e4287edda_prof);

        
        $__internal_e0e0749178c22180ec55a9c91b4bfdc6059aef6d84aac1b4b21a98977a4a0efb->leave($__internal_e0e0749178c22180ec55a9c91b4bfdc6059aef6d84aac1b4b21a98977a4a0efb_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e510e211c3e409f74a4f1de8ef364c4afd95c7aab5d67c18f7af6e27c32fec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e510e211c3e409f74a4f1de8ef364c4afd95c7aab5d67c18f7af6e27c32fec5->enter($__internal_8e510e211c3e409f74a4f1de8ef364c4afd95c7aab5d67c18f7af6e27c32fec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d7099ada6f32e3bea854a3d7dbb334059b5414873406eebf967be5b13720fc5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7099ada6f32e3bea854a3d7dbb334059b5414873406eebf967be5b13720fc5c->enter($__internal_d7099ada6f32e3bea854a3d7dbb334059b5414873406eebf967be5b13720fc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Demo application";
        
        $__internal_d7099ada6f32e3bea854a3d7dbb334059b5414873406eebf967be5b13720fc5c->leave($__internal_d7099ada6f32e3bea854a3d7dbb334059b5414873406eebf967be5b13720fc5c_prof);

        
        $__internal_8e510e211c3e409f74a4f1de8ef364c4afd95c7aab5d67c18f7af6e27c32fec5->leave($__internal_8e510e211c3e409f74a4f1de8ef364c4afd95c7aab5d67c18f7af6e27c32fec5_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac5b158a268e53623ae80bad2f987ac05a95f002546bed5a62557d511174469b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac5b158a268e53623ae80bad2f987ac05a95f002546bed5a62557d511174469b->enter($__internal_ac5b158a268e53623ae80bad2f987ac05a95f002546bed5a62557d511174469b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b52e3b233d42f64207a260180fa999a2f3482eb88745e1fb420d02a1149f3b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52e3b233d42f64207a260180fa999a2f3482eb88745e1fb420d02a1149f3b2e->enter($__internal_b52e3b233d42f64207a260180fa999a2f3482eb88745e1fb420d02a1149f3b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/app.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_b52e3b233d42f64207a260180fa999a2f3482eb88745e1fb420d02a1149f3b2e->leave($__internal_b52e3b233d42f64207a260180fa999a2f3482eb88745e1fb420d02a1149f3b2e_prof);

        
        $__internal_ac5b158a268e53623ae80bad2f987ac05a95f002546bed5a62557d511174469b->leave($__internal_ac5b158a268e53623ae80bad2f987ac05a95f002546bed5a62557d511174469b_prof);

    }

    // line 20
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_5c213115056e8379d4314ff0ec607c471b14fe98bf3fe1c66d88af60bb2721dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c213115056e8379d4314ff0ec607c471b14fe98bf3fe1c66d88af60bb2721dc->enter($__internal_5c213115056e8379d4314ff0ec607c471b14fe98bf3fe1c66d88af60bb2721dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_541e12227d59bad5ec270bef8268c7b0efa15848d1e10f76c1b1e7f00dcdc6cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541e12227d59bad5ec270bef8268c7b0efa15848d1e10f76c1b1e7f00dcdc6cc->enter($__internal_541e12227d59bad5ec270bef8268c7b0efa15848d1e10f76c1b1e7f00dcdc6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_541e12227d59bad5ec270bef8268c7b0efa15848d1e10f76c1b1e7f00dcdc6cc->leave($__internal_541e12227d59bad5ec270bef8268c7b0efa15848d1e10f76c1b1e7f00dcdc6cc_prof);

        
        $__internal_5c213115056e8379d4314ff0ec607c471b14fe98bf3fe1c66d88af60bb2721dc->leave($__internal_5c213115056e8379d4314ff0ec607c471b14fe98bf3fe1c66d88af60bb2721dc_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_dcd22294940e2375e6e2733ad0ac1a979de8de0d7578a48e71e597df9e391b19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcd22294940e2375e6e2733ad0ac1a979de8de0d7578a48e71e597df9e391b19->enter($__internal_dcd22294940e2375e6e2733ad0ac1a979de8de0d7578a48e71e597df9e391b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_80654e89e0cee05a8c4df588ae3b6d7997a490718232d443a3ceb0deceadf746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80654e89e0cee05a8c4df588ae3b6d7997a490718232d443a3ceb0deceadf746->enter($__internal_80654e89e0cee05a8c4df588ae3b6d7997a490718232d443a3ceb0deceadf746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header col-md-3 col-lg-2\">
                            <a class=\"navbar-brand\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                                Symfony Demo
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.toggle_nav"), "html", null, true);
        echo "</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                ";
        // line 43
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 58
        echo "
                                ";
        // line 59
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 60
            echo "                                    <li>
                                        <a href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                                            <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> ";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.logout"), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                ";
        }
        // line 66
        echo "
                                <li>
                                    <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_search");
        echo "\"> <i class=\"fa fa-search\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.search"), "html", null, true);
        echo "</a>
                                </li>

                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" id=\"locales\">
                                        <i class=\"fa fa-globe\" aria-hidden=\"true\"></i>
                                        <span class=\"caret\"></span>
                                        <span class=\"sr-only\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.choose_language"), "html", null, true);
        echo "</span>
                                    </a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\" aria-labelledby=\"locales\">
                                        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\AppExtension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 79
            echo "                                            <li ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()) == $this->getAttribute($context["locale"], "code", array()))) {
                echo "aria-checked=\"true\" class=\"active\"";
            } else {
                echo "aria-checked=\"false\"";
            }
            echo " role=\"menuitem\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route", 1 => "blog_index"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params", 1 => array()), "method"), array("_locale" => $this->getAttribute($context["locale"], "code", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["locale"], "name", array())), "html", null, true);
            echo "</a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        ";
        
        $__internal_80654e89e0cee05a8c4df588ae3b6d7997a490718232d443a3ceb0deceadf746->leave($__internal_80654e89e0cee05a8c4df588ae3b6d7997a490718232d443a3ceb0deceadf746_prof);

        
        $__internal_dcd22294940e2375e6e2733ad0ac1a979de8de0d7578a48e71e597df9e391b19->leave($__internal_dcd22294940e2375e6e2733ad0ac1a979de8de0d7578a48e71e597df9e391b19_prof);

    }

    // line 43
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_0f3358da60b3e1c9131394cdad9a734af314947b1ec84af5eb4abad8f1852d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3358da60b3e1c9131394cdad9a734af314947b1ec84af5eb4abad8f1852d0e->enter($__internal_0f3358da60b3e1c9131394cdad9a734af314947b1ec84af5eb4abad8f1852d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        $__internal_7647dde125f120f5d1e5bb826af485c202075fe8434d8b4289be43cdbdbb6405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7647dde125f120f5d1e5bb826af485c202075fe8434d8b4289be43cdbdbb6405->enter($__internal_7647dde125f120f5d1e5bb826af485c202075fe8434d8b4289be43cdbdbb6405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 44
        echo "                                    <li>
                                        <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">
                                            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.homepage"), "html", null, true);
        echo "
                                        </a>
                                    </li>

                                    ";
        // line 50
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 51
            echo "                                        <li>
                                            <a href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_index");
            echo "\">
                                                <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.admin"), "html", null, true);
            echo "
                                            </a>
                                        </li>
                                    ";
        }
        // line 57
        echo "                                ";
        
        $__internal_7647dde125f120f5d1e5bb826af485c202075fe8434d8b4289be43cdbdbb6405->leave($__internal_7647dde125f120f5d1e5bb826af485c202075fe8434d8b4289be43cdbdbb6405_prof);

        
        $__internal_0f3358da60b3e1c9131394cdad9a734af314947b1ec84af5eb4abad8f1852d0e->leave($__internal_0f3358da60b3e1c9131394cdad9a734af314947b1ec84af5eb4abad8f1852d0e_prof);

    }

    // line 91
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd307f4a7268acaf010a679d77322ad1777156d6520bc3100312d3c5b7e6b29e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd307f4a7268acaf010a679d77322ad1777156d6520bc3100312d3c5b7e6b29e->enter($__internal_cd307f4a7268acaf010a679d77322ad1777156d6520bc3100312d3c5b7e6b29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27f55813b9bf92e65bfb60f909524aa06792029877a6621d35a031a694759a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f55813b9bf92e65bfb60f909524aa06792029877a6621d35a031a694759a7f->enter($__internal_27f55813b9bf92e65bfb60f909524aa06792029877a6621d35a031a694759a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 92
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        ";
        // line 94
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

                        ";
        // line 96
        $this->displayBlock('main', $context, $blocks);
        // line 97
        echo "                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        ";
        // line 100
        $this->displayBlock('sidebar', $context, $blocks);
        // line 107
        echo "                    </div>
                </div>
            ";
        
        $__internal_27f55813b9bf92e65bfb60f909524aa06792029877a6621d35a031a694759a7f->leave($__internal_27f55813b9bf92e65bfb60f909524aa06792029877a6621d35a031a694759a7f_prof);

        
        $__internal_cd307f4a7268acaf010a679d77322ad1777156d6520bc3100312d3c5b7e6b29e->leave($__internal_cd307f4a7268acaf010a679d77322ad1777156d6520bc3100312d3c5b7e6b29e_prof);

    }

    // line 96
    public function block_main($context, array $blocks = array())
    {
        $__internal_870d139a6cecbe5667b4a5fa0fb7402a7a7fe33494369ba10e084ed5e61249ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_870d139a6cecbe5667b4a5fa0fb7402a7a7fe33494369ba10e084ed5e61249ec->enter($__internal_870d139a6cecbe5667b4a5fa0fb7402a7a7fe33494369ba10e084ed5e61249ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_e6262d9d7f3c9431978a65841e2042898577003875ae57f83d2280c4a94bf24c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6262d9d7f3c9431978a65841e2042898577003875ae57f83d2280c4a94bf24c->enter($__internal_e6262d9d7f3c9431978a65841e2042898577003875ae57f83d2280c4a94bf24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_e6262d9d7f3c9431978a65841e2042898577003875ae57f83d2280c4a94bf24c->leave($__internal_e6262d9d7f3c9431978a65841e2042898577003875ae57f83d2280c4a94bf24c_prof);

        
        $__internal_870d139a6cecbe5667b4a5fa0fb7402a7a7fe33494369ba10e084ed5e61249ec->leave($__internal_870d139a6cecbe5667b4a5fa0fb7402a7a7fe33494369ba10e084ed5e61249ec_prof);

    }

    // line 100
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0b17087070a2a161cd0fe91730dd263941a03121fe23cd96f4f06792f45037c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b17087070a2a161cd0fe91730dd263941a03121fe23cd96f4f06792f45037c4->enter($__internal_0b17087070a2a161cd0fe91730dd263941a03121fe23cd96f4f06792f45037c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_dbc816b25274695f2ca4f237bd9f246706cd263ebb120ea6e2166a1fcc900d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc816b25274695f2ca4f237bd9f246706cd263ebb120ea6e2166a1fcc900d33->enter($__internal_dbc816b25274695f2ca4f237bd9f246706cd263ebb120ea6e2166a1fcc900d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 101
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("esi", Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FrameworkBundle:Template:template", array("template" => "blog/about.html.twig", "sharedAge" => 600, "_locale" => $this->getAttribute($this->getAttribute(        // line 104
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()))));
        // line 105
        echo "
                        ";
        
        $__internal_dbc816b25274695f2ca4f237bd9f246706cd263ebb120ea6e2166a1fcc900d33->leave($__internal_dbc816b25274695f2ca4f237bd9f246706cd263ebb120ea6e2166a1fcc900d33_prof);

        
        $__internal_0b17087070a2a161cd0fe91730dd263941a03121fe23cd96f4f06792f45037c4->leave($__internal_0b17087070a2a161cd0fe91730dd263941a03121fe23cd96f4f06792f45037c4_prof);

    }

    // line 112
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1037c01afe50b331ce563a03705f4272843f9b12384c9db8eae746d37703a35c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1037c01afe50b331ce563a03705f4272843f9b12384c9db8eae746d37703a35c->enter($__internal_1037c01afe50b331ce563a03705f4272843f9b12384c9db8eae746d37703a35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6a88f7dbd623c6d7383f14e7fb0b90c9854f2697f70cd2944ed98b4d430b9d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a88f7dbd623c6d7383f14e7fb0b90c9854f2697f70cd2944ed98b4d430b9d25->enter($__internal_6a88f7dbd623c6d7383f14e7fb0b90c9854f2697f70cd2944ed98b4d430b9d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 113
        echo "            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; ";
        // line 117
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - The Symfony Project</p>
                            <p>";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mit_license"), "html", null, true);
        echo "</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\" title=\"Symfony Twitter\">
                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://www.facebook.com/SensioLabs\" title=\"SensioLabs Facebook\">
                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://symfony.com/blog/\" title=\"Symfony Blog\">
                                    <i class=\"fa fa-rss\" aria-hidden=\"true\"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_6a88f7dbd623c6d7383f14e7fb0b90c9854f2697f70cd2944ed98b4d430b9d25->leave($__internal_6a88f7dbd623c6d7383f14e7fb0b90c9854f2697f70cd2944ed98b4d430b9d25_prof);

        
        $__internal_1037c01afe50b331ce563a03705f4272843f9b12384c9db8eae746d37703a35c->leave($__internal_1037c01afe50b331ce563a03705f4272843f9b12384c9db8eae746d37703a35c_prof);

    }

    // line 138
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e12d5eb65d1657afb4c61c04c12cbb96605cea28e709e05104dbd37e1875dde6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e12d5eb65d1657afb4c61c04c12cbb96605cea28e709e05104dbd37e1875dde6->enter($__internal_e12d5eb65d1657afb4c61c04c12cbb96605cea28e709e05104dbd37e1875dde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_404fb9d2b25439216e0e68724bf9ebe24adc812d92fa7764774d3261adf27af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404fb9d2b25439216e0e68724bf9ebe24adc812d92fa7764774d3261adf27af4->enter($__internal_404fb9d2b25439216e0e68724bf9ebe24adc812d92fa7764774d3261adf27af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 139
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/manifest.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/common.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_404fb9d2b25439216e0e68724bf9ebe24adc812d92fa7764774d3261adf27af4->leave($__internal_404fb9d2b25439216e0e68724bf9ebe24adc812d92fa7764774d3261adf27af4_prof);

        
        $__internal_e12d5eb65d1657afb4c61c04c12cbb96605cea28e709e05104dbd37e1875dde6->leave($__internal_e12d5eb65d1657afb4c61c04c12cbb96605cea28e709e05104dbd37e1875dde6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  478 => 141,  474 => 140,  469 => 139,  460 => 138,  431 => 118,  427 => 117,  421 => 113,  412 => 112,  401 => 105,  399 => 104,  397 => 101,  388 => 100,  371 => 96,  359 => 107,  357 => 100,  352 => 97,  350 => 96,  345 => 94,  341 => 92,  332 => 91,  322 => 57,  315 => 53,  311 => 52,  308 => 51,  306 => 50,  299 => 46,  295 => 45,  292 => 44,  283 => 43,  266 => 81,  249 => 79,  245 => 78,  239 => 75,  227 => 68,  223 => 66,  216 => 62,  212 => 61,  209 => 60,  207 => 59,  204 => 58,  202 => 43,  190 => 34,  180 => 27,  174 => 23,  165 => 22,  148 => 20,  135 => 14,  126 => 13,  108 => 11,  93 => 147,  90 => 143,  88 => 138,  85 => 137,  83 => 112,  79 => 110,  77 => 91,  73 => 89,  71 => 22,  66 => 20,  60 => 17,  57 => 16,  55 => 13,  49 => 12,  45 => 11,  38 => 7,  35 => 6,);
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
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See https://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>{% block title %}Symfony Demo application{% endblock %}</title>
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"{{ 'rss.title'|trans }}\" href=\"{{ path('blog_rss') }}\">
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('build/css/app.css') }}\">
        {% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>

    <body id=\"{% block body_id %}{% endblock %}\">

        {% block header %}
            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header col-md-3 col-lg-2\">
                            <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">
                                Symfony Demo
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">{{ 'menu.toggle_nav'|trans }}</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                {% block header_navigation_links %}
                                    <li>
                                        <a href=\"{{ path('blog_index') }}\">
                                            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> {{ 'menu.homepage'|trans }}
                                        </a>
                                    </li>

                                    {% if is_granted('ROLE_ADMIN') %}
                                        <li>
                                            <a href=\"{{ path('admin_post_index') }}\">
                                                <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> {{ 'menu.admin'|trans }}
                                            </a>
                                        </li>
                                    {% endif %}
                                {% endblock %}

                                {% if app.user %}
                                    <li>
                                        <a href=\"{{ path('security_logout') }}\">
                                            <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> {{ 'menu.logout'|trans }}
                                        </a>
                                    </li>
                                {% endif %}

                                <li>
                                    <a href=\"{{ path('blog_search') }}\"> <i class=\"fa fa-search\"></i> {{ 'menu.search'|trans }}</a>
                                </li>

                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" id=\"locales\">
                                        <i class=\"fa fa-globe\" aria-hidden=\"true\"></i>
                                        <span class=\"caret\"></span>
                                        <span class=\"sr-only\">{{ 'menu.choose_language'|trans }}</span>
                                    </a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\" aria-labelledby=\"locales\">
                                        {% for locale in locales() %}
                                            <li {% if app.request.locale == locale.code %}aria-checked=\"true\" class=\"active\"{% else %}aria-checked=\"false\"{% endif %} role=\"menuitem\"><a href=\"{{ path(app.request.get('_route', 'blog_index'), app.request.get('_route_params', [])|merge({_locale: locale.code})) }}\">{{ locale.name|capitalize }}</a></li>
                                        {% endfor %}
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        {% endblock %}

        <div class=\"container body-container\">
            {% block body %}
                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        {{ include('default/_flash_messages.html.twig') }}

                        {% block main %}{% endblock %}
                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        {% block sidebar %}
                            {{ render_esi(controller('FrameworkBundle:Template:template', {
                                'template': 'blog/about.html.twig',
                                'sharedAge': 600,
                                '_locale': app.request.locale
                            })) }}
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}
        </div>

        {% block footer %}
            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; {{ 'now'|date('Y') }} - The Symfony Project</p>
                            <p>{{ 'mit_license'|trans }}</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\" title=\"Symfony Twitter\">
                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://www.facebook.com/SensioLabs\" title=\"SensioLabs Facebook\">
                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://symfony.com/blog/\" title=\"Symfony Blog\">
                                    <i class=\"fa fa-rss\" aria-hidden=\"true\"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        {% endblock %}

        {% block javascripts %}
            <script src=\"{{ asset('build/manifest.js') }}\"></script>
            <script src=\"{{ asset('build/js/common.js') }}\"></script>
            <script src=\"{{ asset('build/js/app.js') }}\"></script>
        {% endblock %}

        {# it's not mandatory to set the timezone in localizeddate(). This is done to
           avoid errors when the 'intl' PHP extension is not available and the application
           is forced to use the limited \"intl polyfill\", which only supports UTC and GMT #}
        <!-- Page rendered on {{ 'now'|localizeddate('long', 'long', null, 'UTC') }} -->
    </body>
</html>
", "base.html.twig", "/var/www/task/app/Resources/views/base.html.twig");
    }
}
