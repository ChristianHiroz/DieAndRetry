<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_1314c808072cb5558c52ddbe149965112d6036b1da73fbd2bcddde2f95e88f47 extends Twig_Template
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
        $__internal_9ea253734e2b17895d8dcc4b06ff792b038113f98813f81dc2a9282268166701 = $this->env->getExtension("native_profiler");
        $__internal_9ea253734e2b17895d8dcc4b06ff792b038113f98813f81dc2a9282268166701->enter($__internal_9ea253734e2b17895d8dcc4b06ff792b038113f98813f81dc2a9282268166701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9ea253734e2b17895d8dcc4b06ff792b038113f98813f81dc2a9282268166701->leave($__internal_9ea253734e2b17895d8dcc4b06ff792b038113f98813f81dc2a9282268166701_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
