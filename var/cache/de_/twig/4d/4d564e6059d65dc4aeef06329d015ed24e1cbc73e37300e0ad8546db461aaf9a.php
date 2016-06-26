<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6d0069be20d5d0e462d82b8c7678621b638f3cf54c2221428d4cc82837ef9fdd extends Twig_Template
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
        $__internal_62c406842806d2584d565c239242877fc329d193a3ddfcd72b101fa03de86391 = $this->env->getExtension("native_profiler");
        $__internal_62c406842806d2584d565c239242877fc329d193a3ddfcd72b101fa03de86391->enter($__internal_62c406842806d2584d565c239242877fc329d193a3ddfcd72b101fa03de86391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_62c406842806d2584d565c239242877fc329d193a3ddfcd72b101fa03de86391->leave($__internal_62c406842806d2584d565c239242877fc329d193a3ddfcd72b101fa03de86391_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'form_widget_simple', array('type' => isset($type) ? $type : 'hidden')) ?>*/
/* */
