<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_bf9b9f9315ed4afd9b5df29710fa0398370f459e7de43582299035dd84cf5b54 extends Twig_Template
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
        $__internal_dde1d8c377a8a9952c2d9c3d2d5663cc41e4a4923ce38060ddb6b8bef5bbe51f = $this->env->getExtension("native_profiler");
        $__internal_dde1d8c377a8a9952c2d9c3d2d5663cc41e4a4923ce38060ddb6b8bef5bbe51f->enter($__internal_dde1d8c377a8a9952c2d9c3d2d5663cc41e4a4923ce38060ddb6b8bef5bbe51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_dde1d8c377a8a9952c2d9c3d2d5663cc41e4a4923ce38060ddb6b8bef5bbe51f->leave($__internal_dde1d8c377a8a9952c2d9c3d2d5663cc41e4a4923ce38060ddb6b8bef5bbe51f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
