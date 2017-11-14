<?php

/* blog/post_show.html.twig */
class __TwigTemplate_bcc991723b90c681b89917e872b8fff35e42dd2eb5b3e42b2e83037322ad633b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/post_show.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
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
        $__internal_eb886a75246937df1f4cdfb3a48237651fd592e6bf7ce1b168d02dede50081ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb886a75246937df1f4cdfb3a48237651fd592e6bf7ce1b168d02dede50081ce->enter($__internal_eb886a75246937df1f4cdfb3a48237651fd592e6bf7ce1b168d02dede50081ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/post_show.html.twig"));

        $__internal_c62917bcb8f5e18327c22f735b5d226e6fa8365c2bdc81cba917a877b14959f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62917bcb8f5e18327c22f735b5d226e6fa8365c2bdc81cba917a877b14959f4->enter($__internal_c62917bcb8f5e18327c22f735b5d226e6fa8365c2bdc81cba917a877b14959f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/post_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb886a75246937df1f4cdfb3a48237651fd592e6bf7ce1b168d02dede50081ce->leave($__internal_eb886a75246937df1f4cdfb3a48237651fd592e6bf7ce1b168d02dede50081ce_prof);

        
        $__internal_c62917bcb8f5e18327c22f735b5d226e6fa8365c2bdc81cba917a877b14959f4->leave($__internal_c62917bcb8f5e18327c22f735b5d226e6fa8365c2bdc81cba917a877b14959f4_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_b61821bfa404b6acc1f9c5230179002bb997ad62072ce697e892c048f379e998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b61821bfa404b6acc1f9c5230179002bb997ad62072ce697e892c048f379e998->enter($__internal_b61821bfa404b6acc1f9c5230179002bb997ad62072ce697e892c048f379e998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_21a0c7a7fbac07cadb165f326589fe37d6ebf78e99e506b309492c54676e3e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a0c7a7fbac07cadb165f326589fe37d6ebf78e99e506b309492c54676e3e1e->enter($__internal_21a0c7a7fbac07cadb165f326589fe37d6ebf78e99e506b309492c54676e3e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_post_show";
        
        $__internal_21a0c7a7fbac07cadb165f326589fe37d6ebf78e99e506b309492c54676e3e1e->leave($__internal_21a0c7a7fbac07cadb165f326589fe37d6ebf78e99e506b309492c54676e3e1e_prof);

        
        $__internal_b61821bfa404b6acc1f9c5230179002bb997ad62072ce697e892c048f379e998->leave($__internal_b61821bfa404b6acc1f9c5230179002bb997ad62072ce697e892c048f379e998_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_e1dfdba728be31a04183d53cfa76624053f8af43dd918b3763494cfdab83df3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1dfdba728be31a04183d53cfa76624053f8af43dd918b3763494cfdab83df3e->enter($__internal_e1dfdba728be31a04183d53cfa76624053f8af43dd918b3763494cfdab83df3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_965c130e25b85acda18a6529e7cf18f5b49580c2a5f4d7072e121c22c26fc12a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965c130e25b85acda18a6529e7cf18f5b49580c2a5f4d7072e121c22c26fc12a->enter($__internal_965c130e25b85acda18a6529e7cf18f5b49580c2a5f4d7072e121c22c26fc12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h1>

    <p class=\"post-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> ";
        // line 9
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "publishedAt", array()), "long", "medium", null, "UTC"), "html", null, true);
        echo "</span>
        <span class=\"metadata\"><i class=\"fa fa-user\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "author", array()), "fullName", array()), "html", null, true);
        echo "</span>
    </p>

    ";
        // line 13
        echo $this->env->getExtension('AppBundle\Twig\AppExtension')->markdownToHtml($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "content", array()));
        echo "

    ";
        // line 15
        echo twig_include($this->env, $context, "blog/_post_tags.html.twig");
        echo "

    <div id=\"post-add-comment\" class=\"well\">
        ";
        // line 24
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 25
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Blog:commentForm", array("id" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))));
            echo "
        ";
        } else {
            // line 27
            echo "            <p>
                <a class=\"btn btn-success\" href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                    <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.sign_in"), "html", null, true);
            echo "
                </a>
                ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("post.to_publish_a_comment"), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 34
        echo "    </div>

    <h3>
        <i class=\"fa fa-comments\" aria-hidden=\"true\"></i> ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("post.num_comments", twig_length_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "comments", array()))), "html", null, true);
        echo "
    </h3>

    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "comments", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 41
            echo "        <div class=\"row post-comment\">
            <a name=\"comment_";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "\"></a>
            <h4 class=\"col-sm-3\">
                <strong>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "author", array()), "fullName", array()), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("post.commented_on"), "html", null, true);
            echo "
                ";
            // line 48
            echo "                <strong>";
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["comment"], "publishedAt", array()), "medium", "short", null, "UTC"), "html", null, true);
            echo "</strong>
            </h4>
            <div class=\"col-sm-9\">
                ";
            // line 51
            echo $this->env->getExtension('AppBundle\Twig\AppExtension')->markdownToHtml($this->getAttribute($context["comment"], "content", array()));
            echo "
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "        <div class=\"post-comment\">
            <p>";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("post.no_comments"), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_965c130e25b85acda18a6529e7cf18f5b49580c2a5f4d7072e121c22c26fc12a->leave($__internal_965c130e25b85acda18a6529e7cf18f5b49580c2a5f4d7072e121c22c26fc12a_prof);

        
        $__internal_e1dfdba728be31a04183d53cfa76624053f8af43dd918b3763494cfdab83df3e->leave($__internal_e1dfdba728be31a04183d53cfa76624053f8af43dd918b3763494cfdab83df3e_prof);

    }

    // line 61
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_87ffcb9f5efb10f85395956f2a0ff727b3e2bb569964d2af8039ba08b51f11bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87ffcb9f5efb10f85395956f2a0ff727b3e2bb569964d2af8039ba08b51f11bd->enter($__internal_87ffcb9f5efb10f85395956f2a0ff727b3e2bb569964d2af8039ba08b51f11bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_99cfd1049153b8673dcb8bf23c200def9ec3d4cf129c416fedc089e7391078ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99cfd1049153b8673dcb8bf23c200def9ec3d4cf129c416fedc089e7391078ca->enter($__internal_99cfd1049153b8673dcb8bf23c200def9ec3d4cf129c416fedc089e7391078ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 62
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("edit", ($context["post"] ?? $this->getContext($context, "post")))) {
            // line 63
            echo "        <div class=\"section\">
            <a class=\"btn btn-lg btn-block btn-success\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_edit", array("id" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))), "html", null, true);
            echo "\">
                <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> ";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.edit_post"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        // line 69
        echo "
    ";
        // line 73
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 75
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
    ";
        // line 76
        echo twig_include($this->env, $context, "blog/_rss.html.twig");
        echo "
";
        
        $__internal_99cfd1049153b8673dcb8bf23c200def9ec3d4cf129c416fedc089e7391078ca->leave($__internal_99cfd1049153b8673dcb8bf23c200def9ec3d4cf129c416fedc089e7391078ca_prof);

        
        $__internal_87ffcb9f5efb10f85395956f2a0ff727b3e2bb569964d2af8039ba08b51f11bd->leave($__internal_87ffcb9f5efb10f85395956f2a0ff727b3e2bb569964d2af8039ba08b51f11bd_prof);

    }

    public function getTemplateName()
    {
        return "blog/post_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 76,  225 => 75,  219 => 73,  216 => 69,  209 => 65,  205 => 64,  202 => 63,  199 => 62,  190 => 61,  173 => 56,  170 => 55,  161 => 51,  154 => 48,  148 => 44,  143 => 42,  140 => 41,  135 => 40,  129 => 37,  124 => 34,  118 => 31,  113 => 29,  109 => 28,  106 => 27,  100 => 25,  97 => 24,  91 => 15,  86 => 13,  80 => 10,  76 => 9,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block body_id 'blog_post_show' %}

{% block main %}
    <h1>{{ post.title }}</h1>

    <p class=\"post-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> {{ post.publishedAt|localizeddate('long', 'medium', null, 'UTC') }}</span>
        <span class=\"metadata\"><i class=\"fa fa-user\"></i> {{ post.author.fullName }}</span>
    </p>

    {{ post.content|md2html }}

    {{ include('blog/_post_tags.html.twig') }}

    <div id=\"post-add-comment\" class=\"well\">
        {# The 'IS_AUTHENTICATED_FULLY' role ensures that the user has entered
        his/her credentials (login + password) during this session. If he/she
        is automatically logged via the 'Remember Me' functionality, he/she won't
        be able to add a comment.
        See https://symfony.com/doc/current/cookbook/security/remember_me.html#forcing-the-user-to-re-authenticate-before-accessing-certain-resources
        #}
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            {{ render(controller('AppBundle:Blog:commentForm', {'id': post.id})) }}
        {% else %}
            <p>
                <a class=\"btn btn-success\" href=\"{{ path('security_login') }}\">
                    <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> {{ 'action.sign_in'|trans }}
                </a>
                {{ 'post.to_publish_a_comment'|trans }}
            </p>
        {% endif %}
    </div>

    <h3>
        <i class=\"fa fa-comments\" aria-hidden=\"true\"></i> {{ 'post.num_comments'|transchoice(post.comments|length) }}
    </h3>

    {% for comment in post.comments %}
        <div class=\"row post-comment\">
            <a name=\"comment_{{ comment.id }}\"></a>
            <h4 class=\"col-sm-3\">
                <strong>{{ comment.author.fullName }}</strong> {{ 'post.commented_on'|trans }}
                {# it's not mandatory to set the timezone in localizeddate(). This is done to
                   avoid errors when the 'intl' PHP extension is not available and the application
                   is forced to use the limited \"intl polyfill\", which only supports UTC and GMT #}
                <strong>{{ comment.publishedAt|localizeddate('medium', 'short', null, 'UTC') }}</strong>
            </h4>
            <div class=\"col-sm-9\">
                {{ comment.content|md2html }}
            </div>
        </div>
    {% else %}
        <div class=\"post-comment\">
            <p>{{ 'post.no_comments'|trans }}</p>
        </div>
    {% endfor %}
{% endblock %}

{% block sidebar %}
    {% if is_granted('edit', post) %}
        <div class=\"section\">
            <a class=\"btn btn-lg btn-block btn-success\" href=\"{{ path('admin_post_edit', {id: post.id}) }}\">
                <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> {{ 'action.edit_post'|trans }}
            </a>
        </div>
    {% endif %}

    {# the parent() function includes the contents defined by the parent template
      ('base.html.twig') for this block ('sidebar'). This is a very convenient way
      to share common contents in different templates #}
    {{ parent() }}

    {{ show_source_code(_self) }}
    {{ include('blog/_rss.html.twig') }}
{% endblock %}
", "blog/post_show.html.twig", "/var/www/task/app/Resources/views/blog/post_show.html.twig");
    }
}
