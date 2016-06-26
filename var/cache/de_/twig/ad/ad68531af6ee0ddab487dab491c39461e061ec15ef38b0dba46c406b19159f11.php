<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_cbde0d69b10a193740dad3c7a53affe2113d380de0c4208b0306dce599c5ed99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37f45889e5e3705049d9629d79da0344205124ac47f78f0a01a200b2df80bf06 = $this->env->getExtension("native_profiler");
        $__internal_37f45889e5e3705049d9629d79da0344205124ac47f78f0a01a200b2df80bf06->enter($__internal_37f45889e5e3705049d9629d79da0344205124ac47f78f0a01a200b2df80bf06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37f45889e5e3705049d9629d79da0344205124ac47f78f0a01a200b2df80bf06->leave($__internal_37f45889e5e3705049d9629d79da0344205124ac47f78f0a01a200b2df80bf06_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_45af0f0b4a9319618e4d5d7690e986d4e1365b75edc8668e6b75301383f8d1f3 = $this->env->getExtension("native_profiler");
        $__internal_45af0f0b4a9319618e4d5d7690e986d4e1365b75edc8668e6b75301383f8d1f3->enter($__internal_45af0f0b4a9319618e4d5d7690e986d4e1365b75edc8668e6b75301383f8d1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_45af0f0b4a9319618e4d5d7690e986d4e1365b75edc8668e6b75301383f8d1f3->leave($__internal_45af0f0b4a9319618e4d5d7690e986d4e1365b75edc8668e6b75301383f8d1f3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     <a class="btn btn-primary" href="{{ admin.generateUrl('list') }}">*/
/*         <i class="fa fa-check"></i>*/
/*         {{ 'list_select'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
