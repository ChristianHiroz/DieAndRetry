<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_4c9b0bdaa48d46a643fbe76fbac39f16d880a0d520f229efbdf0517b5b7b2af4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ce98b3efaf973b3f9d114be56714d9af856cb28e8f2b62de83e73e613985747 = $this->env->getExtension("native_profiler");
        $__internal_2ce98b3efaf973b3f9d114be56714d9af856cb28e8f2b62de83e73e613985747->enter($__internal_2ce98b3efaf973b3f9d114be56714d9af856cb28e8f2b62de83e73e613985747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_2ce98b3efaf973b3f9d114be56714d9af856cb28e8f2b62de83e73e613985747->leave($__internal_2ce98b3efaf973b3f9d114be56714d9af856cb28e8f2b62de83e73e613985747_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_8f0c418ea66f6b8d735d6c599747b2a5ef1caa56051406ae3cc66380ebbfacbe = $this->env->getExtension("native_profiler");
        $__internal_8f0c418ea66f6b8d735d6c599747b2a5ef1caa56051406ae3cc66380ebbfacbe->enter($__internal_8f0c418ea66f6b8d735d6c599747b2a5ef1caa56051406ae3cc66380ebbfacbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_8f0c418ea66f6b8d735d6c599747b2a5ef1caa56051406ae3cc66380ebbfacbe->leave($__internal_8f0c418ea66f6b8d735d6c599747b2a5ef1caa56051406ae3cc66380ebbfacbe_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
