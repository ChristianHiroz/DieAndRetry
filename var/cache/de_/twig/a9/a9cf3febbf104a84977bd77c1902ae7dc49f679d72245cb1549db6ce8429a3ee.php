<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_31dc03b1dde9d434199f00ae58e43b5286f7f665dbb5f91cbee18f45223e33e8 extends Twig_Template
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
        $__internal_e72a7d0724b47c25fcc082cf24e7ce1b08242176b553c58b763171d1be6d2218 = $this->env->getExtension("native_profiler");
        $__internal_e72a7d0724b47c25fcc082cf24e7ce1b08242176b553c58b763171d1be6d2218->enter($__internal_e72a7d0724b47c25fcc082cf24e7ce1b08242176b553c58b763171d1be6d2218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e72a7d0724b47c25fcc082cf24e7ce1b08242176b553c58b763171d1be6d2218->leave($__internal_e72a7d0724b47c25fcc082cf24e7ce1b08242176b553c58b763171d1be6d2218_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
