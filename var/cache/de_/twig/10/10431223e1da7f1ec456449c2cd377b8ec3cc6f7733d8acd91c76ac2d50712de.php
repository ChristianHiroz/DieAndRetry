<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_24ba3dd8c864730f3216a70e7ba993d45aa5762e1a57479b0c7327973f86203e extends Twig_Template
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
        $__internal_d0c64d2b6906a47d22ae0a3da17bafbb4fe702782cbce7d36cb9e6c3eef4c164 = $this->env->getExtension("native_profiler");
        $__internal_d0c64d2b6906a47d22ae0a3da17bafbb4fe702782cbce7d36cb9e6c3eef4c164->enter($__internal_d0c64d2b6906a47d22ae0a3da17bafbb4fe702782cbce7d36cb9e6c3eef4c164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_d0c64d2b6906a47d22ae0a3da17bafbb4fe702782cbce7d36cb9e6c3eef4c164->leave($__internal_d0c64d2b6906a47d22ae0a3da17bafbb4fe702782cbce7d36cb9e6c3eef4c164_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
