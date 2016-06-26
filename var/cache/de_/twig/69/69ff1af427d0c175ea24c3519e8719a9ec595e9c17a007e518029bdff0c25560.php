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
        $__internal_6dfcda5b4b4d05f5036c760b2a0e0d2747eff6d84f713b186cdcfbcc28a7e1f8 = $this->env->getExtension("native_profiler");
        $__internal_6dfcda5b4b4d05f5036c760b2a0e0d2747eff6d84f713b186cdcfbcc28a7e1f8->enter($__internal_6dfcda5b4b4d05f5036c760b2a0e0d2747eff6d84f713b186cdcfbcc28a7e1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dfcda5b4b4d05f5036c760b2a0e0d2747eff6d84f713b186cdcfbcc28a7e1f8->leave($__internal_6dfcda5b4b4d05f5036c760b2a0e0d2747eff6d84f713b186cdcfbcc28a7e1f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ba9b46f9549c6cea412284e817fb54789b4e41b34c35bf32d5d0f46920da0b60 = $this->env->getExtension("native_profiler");
        $__internal_ba9b46f9549c6cea412284e817fb54789b4e41b34c35bf32d5d0f46920da0b60->enter($__internal_ba9b46f9549c6cea412284e817fb54789b4e41b34c35bf32d5d0f46920da0b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ba9b46f9549c6cea412284e817fb54789b4e41b34c35bf32d5d0f46920da0b60->leave($__internal_ba9b46f9549c6cea412284e817fb54789b4e41b34c35bf32d5d0f46920da0b60_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ceae430e8b06562e6bca38b8a0b7d808afb6e3783b03a0f4ea22db5ec4d4908 = $this->env->getExtension("native_profiler");
        $__internal_9ceae430e8b06562e6bca38b8a0b7d808afb6e3783b03a0f4ea22db5ec4d4908->enter($__internal_9ceae430e8b06562e6bca38b8a0b7d808afb6e3783b03a0f4ea22db5ec4d4908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9ceae430e8b06562e6bca38b8a0b7d808afb6e3783b03a0f4ea22db5ec4d4908->leave($__internal_9ceae430e8b06562e6bca38b8a0b7d808afb6e3783b03a0f4ea22db5ec4d4908_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ebfb9c031b81ef56fce9eb2ae26ceb05a43dacaa1084528eb58ecfacf10a9b9 = $this->env->getExtension("native_profiler");
        $__internal_3ebfb9c031b81ef56fce9eb2ae26ceb05a43dacaa1084528eb58ecfacf10a9b9->enter($__internal_3ebfb9c031b81ef56fce9eb2ae26ceb05a43dacaa1084528eb58ecfacf10a9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3ebfb9c031b81ef56fce9eb2ae26ceb05a43dacaa1084528eb58ecfacf10a9b9->leave($__internal_3ebfb9c031b81ef56fce9eb2ae26ceb05a43dacaa1084528eb58ecfacf10a9b9_prof);

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
