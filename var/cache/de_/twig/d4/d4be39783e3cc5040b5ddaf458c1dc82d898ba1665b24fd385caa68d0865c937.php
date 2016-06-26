<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6c0c0641d6d47650f2ec7cdfe322c1f0df34613749d1f4fcbfbc9f5ea967b2ff extends Twig_Template
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
        $__internal_1ad5d0ed939771982db548c124c2ae42a9bff3e6b8dd83ccb62e6eeab846bf66 = $this->env->getExtension("native_profiler");
        $__internal_1ad5d0ed939771982db548c124c2ae42a9bff3e6b8dd83ccb62e6eeab846bf66->enter($__internal_1ad5d0ed939771982db548c124c2ae42a9bff3e6b8dd83ccb62e6eeab846bf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1ad5d0ed939771982db548c124c2ae42a9bff3e6b8dd83ccb62e6eeab846bf66->leave($__internal_1ad5d0ed939771982db548c124c2ae42a9bff3e6b8dd83ccb62e6eeab846bf66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
