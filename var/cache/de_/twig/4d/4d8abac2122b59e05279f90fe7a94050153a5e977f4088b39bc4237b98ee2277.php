<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_3a3fa7fa6a5597d157f5ec4289a00943df8169fc9f2af969e20e206022dfd531 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c28c9fe1f03d0acbd451a433d8de4d39ce541e6eabae89c9b266d7db3f132859 = $this->env->getExtension("native_profiler");
        $__internal_c28c9fe1f03d0acbd451a433d8de4d39ce541e6eabae89c9b266d7db3f132859->enter($__internal_c28c9fe1f03d0acbd451a433d8de4d39ce541e6eabae89c9b266d7db3f132859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c28c9fe1f03d0acbd451a433d8de4d39ce541e6eabae89c9b266d7db3f132859->leave($__internal_c28c9fe1f03d0acbd451a433d8de4d39ce541e6eabae89c9b266d7db3f132859_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
