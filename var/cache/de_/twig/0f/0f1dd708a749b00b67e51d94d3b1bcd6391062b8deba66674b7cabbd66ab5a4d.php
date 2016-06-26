<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c356f78b3e0deda2e91034a70e1c8e44732ccec81afc3fe3645dbf84fdaf01eb extends Twig_Template
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
        $__internal_53fe317fb90221439eeaf304c5091b94d3b1e493113b04e33d5ca3f8a37a0712 = $this->env->getExtension("native_profiler");
        $__internal_53fe317fb90221439eeaf304c5091b94d3b1e493113b04e33d5ca3f8a37a0712->enter($__internal_53fe317fb90221439eeaf304c5091b94d3b1e493113b04e33d5ca3f8a37a0712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_53fe317fb90221439eeaf304c5091b94d3b1e493113b04e33d5ca3f8a37a0712->leave($__internal_53fe317fb90221439eeaf304c5091b94d3b1e493113b04e33d5ca3f8a37a0712_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
