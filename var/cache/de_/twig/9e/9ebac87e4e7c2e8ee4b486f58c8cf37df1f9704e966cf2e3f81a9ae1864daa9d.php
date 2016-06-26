<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ac6d904b5fad1ffd1f51b625bb5eaddc4e1a62e862ea50ff438f0a7d5e46ccbe extends Twig_Template
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
        $__internal_ab323ce279164aec0b8883d05fd82ac304eeebfa32644bf12d21c4d73cd61451 = $this->env->getExtension("native_profiler");
        $__internal_ab323ce279164aec0b8883d05fd82ac304eeebfa32644bf12d21c4d73cd61451->enter($__internal_ab323ce279164aec0b8883d05fd82ac304eeebfa32644bf12d21c4d73cd61451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ab323ce279164aec0b8883d05fd82ac304eeebfa32644bf12d21c4d73cd61451->leave($__internal_ab323ce279164aec0b8883d05fd82ac304eeebfa32644bf12d21c4d73cd61451_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
