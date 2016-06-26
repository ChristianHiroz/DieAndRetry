<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_744e7e4d67320498be3de2729b3af477c746606dffe6378f9155c761139f1b52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_f3775b2bc1755711384cb9187abd1f02bb0f25143ae3df3fa6ac686674cd8aa3 = $this->env->getExtension("native_profiler");
        $__internal_f3775b2bc1755711384cb9187abd1f02bb0f25143ae3df3fa6ac686674cd8aa3->enter($__internal_f3775b2bc1755711384cb9187abd1f02bb0f25143ae3df3fa6ac686674cd8aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3775b2bc1755711384cb9187abd1f02bb0f25143ae3df3fa6ac686674cd8aa3->leave($__internal_f3775b2bc1755711384cb9187abd1f02bb0f25143ae3df3fa6ac686674cd8aa3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c6f1954ae39ef20c5e2af19d0fd4fabe21d86ecba4327297c9ab63c6794a3dd = $this->env->getExtension("native_profiler");
        $__internal_0c6f1954ae39ef20c5e2af19d0fd4fabe21d86ecba4327297c9ab63c6794a3dd->enter($__internal_0c6f1954ae39ef20c5e2af19d0fd4fabe21d86ecba4327297c9ab63c6794a3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0c6f1954ae39ef20c5e2af19d0fd4fabe21d86ecba4327297c9ab63c6794a3dd->leave($__internal_0c6f1954ae39ef20c5e2af19d0fd4fabe21d86ecba4327297c9ab63c6794a3dd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3a0dee33d4b1ed695d0979bc02f4b9e6cc200c3fa6294de8c62f19b7b5167d9 = $this->env->getExtension("native_profiler");
        $__internal_b3a0dee33d4b1ed695d0979bc02f4b9e6cc200c3fa6294de8c62f19b7b5167d9->enter($__internal_b3a0dee33d4b1ed695d0979bc02f4b9e6cc200c3fa6294de8c62f19b7b5167d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b3a0dee33d4b1ed695d0979bc02f4b9e6cc200c3fa6294de8c62f19b7b5167d9->leave($__internal_b3a0dee33d4b1ed695d0979bc02f4b9e6cc200c3fa6294de8c62f19b7b5167d9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c291eb37c8b31f801d42de255454254acc61a6c960a73e2bc25894b4fe9cda10 = $this->env->getExtension("native_profiler");
        $__internal_c291eb37c8b31f801d42de255454254acc61a6c960a73e2bc25894b4fe9cda10->enter($__internal_c291eb37c8b31f801d42de255454254acc61a6c960a73e2bc25894b4fe9cda10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c291eb37c8b31f801d42de255454254acc61a6c960a73e2bc25894b4fe9cda10->leave($__internal_c291eb37c8b31f801d42de255454254acc61a6c960a73e2bc25894b4fe9cda10_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
