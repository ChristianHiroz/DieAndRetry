<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_2dd35dd8e03bbccd1fda8ccbd58d930df0ce982652d86aeefb26ed146365bde0 extends Twig_Template
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
        $__internal_99c621f22017d7b1e5c638b324d075875b7f078239852318c438c76e2cac546a = $this->env->getExtension("native_profiler");
        $__internal_99c621f22017d7b1e5c638b324d075875b7f078239852318c438c76e2cac546a->enter($__internal_99c621f22017d7b1e5c638b324d075875b7f078239852318c438c76e2cac546a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_99c621f22017d7b1e5c638b324d075875b7f078239852318c438c76e2cac546a->leave($__internal_99c621f22017d7b1e5c638b324d075875b7f078239852318c438c76e2cac546a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
