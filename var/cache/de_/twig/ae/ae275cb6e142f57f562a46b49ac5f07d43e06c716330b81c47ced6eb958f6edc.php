<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_04f34fc46c2af125d9aa29d2a2749ba89b9da5ec51e2f4f2d05f6741afdcf1a3 extends Twig_Template
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
        $__internal_bd340681a76b8caa3611ce8c4b75f9ed920bcc38d35a84ead4fc31ba9701cac6 = $this->env->getExtension("native_profiler");
        $__internal_bd340681a76b8caa3611ce8c4b75f9ed920bcc38d35a84ead4fc31ba9701cac6->enter($__internal_bd340681a76b8caa3611ce8c4b75f9ed920bcc38d35a84ead4fc31ba9701cac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bd340681a76b8caa3611ce8c4b75f9ed920bcc38d35a84ead4fc31ba9701cac6->leave($__internal_bd340681a76b8caa3611ce8c4b75f9ed920bcc38d35a84ead4fc31ba9701cac6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
