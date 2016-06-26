<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f4bd4b1e73d554a077a68eda1c42f30b0b2d92b713e883c6cc3e569f830d81ce extends Twig_Template
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
        $__internal_d582a59460e6b0302a483fd0f63cb11f1d43c45884d8c465f11311c592bf1c5b = $this->env->getExtension("native_profiler");
        $__internal_d582a59460e6b0302a483fd0f63cb11f1d43c45884d8c465f11311c592bf1c5b->enter($__internal_d582a59460e6b0302a483fd0f63cb11f1d43c45884d8c465f11311c592bf1c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d582a59460e6b0302a483fd0f63cb11f1d43c45884d8c465f11311c592bf1c5b->leave($__internal_d582a59460e6b0302a483fd0f63cb11f1d43c45884d8c465f11311c592bf1c5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
