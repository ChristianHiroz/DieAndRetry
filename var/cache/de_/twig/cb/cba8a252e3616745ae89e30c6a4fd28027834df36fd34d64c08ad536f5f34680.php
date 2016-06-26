<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_aa7abbe49f37e66039c812f08ddbe15c614a74854dab28a46024c15ea0595dcb extends Twig_Template
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
        $__internal_0acaf0ce0c226a45bcba656414628771e8a75f1bf85ab7dd071caa5da81595ee = $this->env->getExtension("native_profiler");
        $__internal_0acaf0ce0c226a45bcba656414628771e8a75f1bf85ab7dd071caa5da81595ee->enter($__internal_0acaf0ce0c226a45bcba656414628771e8a75f1bf85ab7dd071caa5da81595ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0acaf0ce0c226a45bcba656414628771e8a75f1bf85ab7dd071caa5da81595ee->leave($__internal_0acaf0ce0c226a45bcba656414628771e8a75f1bf85ab7dd071caa5da81595ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
