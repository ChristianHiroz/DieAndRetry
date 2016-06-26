<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_aebb2b4d9088a478a823a61f05b4a0105f5d22dc66ff06a9e2d63b7e5c50739c extends Twig_Template
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
        $__internal_6ed5126957812df01a2ec2bad93371029415c9e19a0105b7c2ba6ad3397b5e76 = $this->env->getExtension("native_profiler");
        $__internal_6ed5126957812df01a2ec2bad93371029415c9e19a0105b7c2ba6ad3397b5e76->enter($__internal_6ed5126957812df01a2ec2bad93371029415c9e19a0105b7c2ba6ad3397b5e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6ed5126957812df01a2ec2bad93371029415c9e19a0105b7c2ba6ad3397b5e76->leave($__internal_6ed5126957812df01a2ec2bad93371029415c9e19a0105b7c2ba6ad3397b5e76_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
