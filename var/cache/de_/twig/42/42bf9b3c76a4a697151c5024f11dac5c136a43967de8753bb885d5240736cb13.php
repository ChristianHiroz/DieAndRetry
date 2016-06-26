<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_8d156e277e35ea75585ed7f5dba3e32665c00bcbaf98b4fedc1d5bd215b99395 extends Twig_Template
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
        $__internal_f9e348efdcfba7e8555faf07af317906be91abf1f701f921efd4bf290e9bc747 = $this->env->getExtension("native_profiler");
        $__internal_f9e348efdcfba7e8555faf07af317906be91abf1f701f921efd4bf290e9bc747->enter($__internal_f9e348efdcfba7e8555faf07af317906be91abf1f701f921efd4bf290e9bc747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_f9e348efdcfba7e8555faf07af317906be91abf1f701f921efd4bf290e9bc747->leave($__internal_f9e348efdcfba7e8555faf07af317906be91abf1f701f921efd4bf290e9bc747_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
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
/* {{ revision.timestamp|date }}*/
/* */
