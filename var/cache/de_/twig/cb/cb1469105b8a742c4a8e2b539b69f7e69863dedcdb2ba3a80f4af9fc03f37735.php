<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_457c9d58fac2e9f3d7f9027631a551bf4d7418d7ffadcfb161fe7e178fc52c1e extends Twig_Template
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
        $__internal_f562238f43f5bd520d5f3ae130b31a52af4393a842ccd32a74d5b16298f33c70 = $this->env->getExtension("native_profiler");
        $__internal_f562238f43f5bd520d5f3ae130b31a52af4393a842ccd32a74d5b16298f33c70->enter($__internal_f562238f43f5bd520d5f3ae130b31a52af4393a842ccd32a74d5b16298f33c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_f562238f43f5bd520d5f3ae130b31a52af4393a842ccd32a74d5b16298f33c70->leave($__internal_f562238f43f5bd520d5f3ae130b31a52af4393a842ccd32a74d5b16298f33c70_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
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
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
