<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_eeb3e5c9289096679f50c7b4c8101fab5434e2b4c38eb610df641c3e0e2381b2 extends Twig_Template
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
        $__internal_910079b29199c2f31816720ce97762b026ed89ea57ec96ad622957328b5f8a98 = $this->env->getExtension("native_profiler");
        $__internal_910079b29199c2f31816720ce97762b026ed89ea57ec96ad622957328b5f8a98->enter($__internal_910079b29199c2f31816720ce97762b026ed89ea57ec96ad622957328b5f8a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_910079b29199c2f31816720ce97762b026ed89ea57ec96ad622957328b5f8a98->leave($__internal_910079b29199c2f31816720ce97762b026ed89ea57ec96ad622957328b5f8a98_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
