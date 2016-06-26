<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6d49a605e6734cd9b2f0edb0855d60ef6559b5289a7b54bf73e357ecb199e766 extends Twig_Template
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
        $__internal_8b4aefbd8c596e2e92d39ac7618d81de99658306b0054ee62acb058aa11d2229 = $this->env->getExtension("native_profiler");
        $__internal_8b4aefbd8c596e2e92d39ac7618d81de99658306b0054ee62acb058aa11d2229->enter($__internal_8b4aefbd8c596e2e92d39ac7618d81de99658306b0054ee62acb058aa11d2229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b4aefbd8c596e2e92d39ac7618d81de99658306b0054ee62acb058aa11d2229->leave($__internal_8b4aefbd8c596e2e92d39ac7618d81de99658306b0054ee62acb058aa11d2229_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_41edc64778e88009c44cafe6d70b64bfe46307f8d017343a8ac31678b5f4fa71 = $this->env->getExtension("native_profiler");
        $__internal_41edc64778e88009c44cafe6d70b64bfe46307f8d017343a8ac31678b5f4fa71->enter($__internal_41edc64778e88009c44cafe6d70b64bfe46307f8d017343a8ac31678b5f4fa71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_41edc64778e88009c44cafe6d70b64bfe46307f8d017343a8ac31678b5f4fa71->leave($__internal_41edc64778e88009c44cafe6d70b64bfe46307f8d017343a8ac31678b5f4fa71_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_26836de6d5fe38e93d4917094a9f361bb8b315178c2ebd67167b94f9613e00b5 = $this->env->getExtension("native_profiler");
        $__internal_26836de6d5fe38e93d4917094a9f361bb8b315178c2ebd67167b94f9613e00b5->enter($__internal_26836de6d5fe38e93d4917094a9f361bb8b315178c2ebd67167b94f9613e00b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_26836de6d5fe38e93d4917094a9f361bb8b315178c2ebd67167b94f9613e00b5->leave($__internal_26836de6d5fe38e93d4917094a9f361bb8b315178c2ebd67167b94f9613e00b5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b96dc6729d898516231fc3e28cdea20e5cd1e0bc76daf0765b2f4ff8a6cf5c76 = $this->env->getExtension("native_profiler");
        $__internal_b96dc6729d898516231fc3e28cdea20e5cd1e0bc76daf0765b2f4ff8a6cf5c76->enter($__internal_b96dc6729d898516231fc3e28cdea20e5cd1e0bc76daf0765b2f4ff8a6cf5c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b96dc6729d898516231fc3e28cdea20e5cd1e0bc76daf0765b2f4ff8a6cf5c76->leave($__internal_b96dc6729d898516231fc3e28cdea20e5cd1e0bc76daf0765b2f4ff8a6cf5c76_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
