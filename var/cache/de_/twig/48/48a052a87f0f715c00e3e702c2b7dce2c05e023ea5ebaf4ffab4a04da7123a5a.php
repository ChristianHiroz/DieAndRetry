<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_a44ad8ca284eac402345383485d61dbe244237c4c2cafce25bdf3207a16cf2fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afdc2afdd265e10e83721c7efe64f18ddab5eda251213109a833a839569eee3e = $this->env->getExtension("native_profiler");
        $__internal_afdc2afdd265e10e83721c7efe64f18ddab5eda251213109a833a839569eee3e->enter($__internal_afdc2afdd265e10e83721c7efe64f18ddab5eda251213109a833a839569eee3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afdc2afdd265e10e83721c7efe64f18ddab5eda251213109a833a839569eee3e->leave($__internal_afdc2afdd265e10e83721c7efe64f18ddab5eda251213109a833a839569eee3e_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_e90f1c6f2090e76e55d1f904e2215ff46214ce9ac30aca9223d255871365ebbe = $this->env->getExtension("native_profiler");
        $__internal_e90f1c6f2090e76e55d1f904e2215ff46214ce9ac30aca9223d255871365ebbe->enter($__internal_e90f1c6f2090e76e55d1f904e2215ff46214ce9ac30aca9223d255871365ebbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_e90f1c6f2090e76e55d1f904e2215ff46214ce9ac30aca9223d255871365ebbe->leave($__internal_e90f1c6f2090e76e55d1f904e2215ff46214ce9ac30aca9223d255871365ebbe_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ knp_menu_render(menu, menu_options) }}*/
/* {% endblock %}*/
/* */
