<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_dd9ecebd312431b7e0fc6b9acac52ed6d3108e2093493899ee7b480ed03f1f31 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_167508417b52aba66464bb6ceea6e239cab1aded7f363614568a83b9989e05f9 = $this->env->getExtension("native_profiler");
        $__internal_167508417b52aba66464bb6ceea6e239cab1aded7f363614568a83b9989e05f9->enter($__internal_167508417b52aba66464bb6ceea6e239cab1aded7f363614568a83b9989e05f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_167508417b52aba66464bb6ceea6e239cab1aded7f363614568a83b9989e05f9->leave($__internal_167508417b52aba66464bb6ceea6e239cab1aded7f363614568a83b9989e05f9_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_7716c39aeaa00aa76881f61c9efc99bac2e71e8044079e3a3a0d188e56002140 = $this->env->getExtension("native_profiler");
        $__internal_7716c39aeaa00aa76881f61c9efc99bac2e71e8044079e3a3a0d188e56002140->enter($__internal_7716c39aeaa00aa76881f61c9efc99bac2e71e8044079e3a3a0d188e56002140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_7716c39aeaa00aa76881f61c9efc99bac2e71e8044079e3a3a0d188e56002140->leave($__internal_7716c39aeaa00aa76881f61c9efc99bac2e71e8044079e3a3a0d188e56002140_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
/*     {{ settings.content|raw }}*/
/* {% endblock %}*/
/* */
