<?php

/* admin/blog/_delete_form.html.twig */
class __TwigTemplate_3c28c24c77ff443ebaabf5d93432f0797558d73abcaad488a4a242b81c42a461 extends Twig_Template
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
        $__internal_350018b143be6c111de14c716a5586a3fa1707596f01dbf3a4637db8c364a43a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_350018b143be6c111de14c716a5586a3fa1707596f01dbf3a4637db8c364a43a->enter($__internal_350018b143be6c111de14c716a5586a3fa1707596f01dbf3a4637db8c364a43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/_delete_form.html.twig"));

        $__internal_ba777da2d897fe871b78ebd3dac3c979842cf80c2ce2fea4efb818eb5ca1f3e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba777da2d897fe871b78ebd3dac3c979842cf80c2ce2fea4efb818eb5ca1f3e4->enter($__internal_ba777da2d897fe871b78ebd3dac3c979842cf80c2ce2fea4efb818eb5ca1f3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/_delete_form.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "blog/_delete_post_confirmation.html.twig");
        echo "
<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_post_delete", array("id" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" data-confirmation=\"true\" id=\"delete-form\">
    <input type=\"hidden\" name=\"token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("delete"), "html", null, true);
        echo "\" />
    <button type=\"submit\" class=\"btn btn-lg btn-block btn-danger\">
        <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.delete_post"), "html", null, true);
        echo "
    </button>
</form>
";
        
        $__internal_350018b143be6c111de14c716a5586a3fa1707596f01dbf3a4637db8c364a43a->leave($__internal_350018b143be6c111de14c716a5586a3fa1707596f01dbf3a4637db8c364a43a_prof);

        
        $__internal_ba777da2d897fe871b78ebd3dac3c979842cf80c2ce2fea4efb818eb5ca1f3e4->leave($__internal_ba777da2d897fe871b78ebd3dac3c979842cf80c2ce2fea4efb818eb5ca1f3e4_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  33 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('blog/_delete_post_confirmation.html.twig') }}
<form action=\"{{ url('admin_post_delete', {id: post.id}) }}\" method=\"post\" data-confirmation=\"true\" id=\"delete-form\">
    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete') }}\" />
    <button type=\"submit\" class=\"btn btn-lg btn-block btn-danger\">
        <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
        {{ 'action.delete_post'|trans }}
    </button>
</form>
", "admin/blog/_delete_form.html.twig", "/var/www/task/app/Resources/views/admin/blog/_delete_form.html.twig");
    }
}
