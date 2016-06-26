<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b5b565ddb5a04daafc33fa7dd5437fcb34304973dd2d1dcda5d053828fa65956 extends Twig_Template
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
        $__internal_0cd0a7181fd6095c05c7aa4db8de803080c918b330b287c04edbe5092b614042 = $this->env->getExtension("native_profiler");
        $__internal_0cd0a7181fd6095c05c7aa4db8de803080c918b330b287c04edbe5092b614042->enter($__internal_0cd0a7181fd6095c05c7aa4db8de803080c918b330b287c04edbe5092b614042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0cd0a7181fd6095c05c7aa4db8de803080c918b330b287c04edbe5092b614042->leave($__internal_0cd0a7181fd6095c05c7aa4db8de803080c918b330b287c04edbe5092b614042_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
