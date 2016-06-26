<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_320400fc622843af1b79d6fba9c7639d059f830c2c9b66863ea60439339e4263 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69beed746b1d1883762e8655f81eaccab47a54fb2ff214052807f4e87392872e = $this->env->getExtension("native_profiler");
        $__internal_69beed746b1d1883762e8655f81eaccab47a54fb2ff214052807f4e87392872e->enter($__internal_69beed746b1d1883762e8655f81eaccab47a54fb2ff214052807f4e87392872e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69beed746b1d1883762e8655f81eaccab47a54fb2ff214052807f4e87392872e->leave($__internal_69beed746b1d1883762e8655f81eaccab47a54fb2ff214052807f4e87392872e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f163b9e0c4491568d1857d62110ea8c4937c3ee0d13d39e5bbde90bf1525b51e = $this->env->getExtension("native_profiler");
        $__internal_f163b9e0c4491568d1857d62110ea8c4937c3ee0d13d39e5bbde90bf1525b51e->enter($__internal_f163b9e0c4491568d1857d62110ea8c4937c3ee0d13d39e5bbde90bf1525b51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_f163b9e0c4491568d1857d62110ea8c4937c3ee0d13d39e5bbde90bf1525b51e->leave($__internal_f163b9e0c4491568d1857d62110ea8c4937c3ee0d13d39e5bbde90bf1525b51e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */
