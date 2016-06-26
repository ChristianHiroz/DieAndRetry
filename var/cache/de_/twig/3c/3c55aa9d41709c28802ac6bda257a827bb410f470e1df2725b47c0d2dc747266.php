<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_7c7bf1f3cec0e6acec0208fbe8bbd0f5f2e47f4551bd35c779dd40a08aabce68 extends Twig_Template
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
        $__internal_ef0da5f71d99c8cc5c5eb07650fffb7a3b5ff5190a2da60f3c2af2eac2efc75b = $this->env->getExtension("native_profiler");
        $__internal_ef0da5f71d99c8cc5c5eb07650fffb7a3b5ff5190a2da60f3c2af2eac2efc75b->enter($__internal_ef0da5f71d99c8cc5c5eb07650fffb7a3b5ff5190a2da60f3c2af2eac2efc75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ef0da5f71d99c8cc5c5eb07650fffb7a3b5ff5190a2da60f3c2af2eac2efc75b->leave($__internal_ef0da5f71d99c8cc5c5eb07650fffb7a3b5ff5190a2da60f3c2af2eac2efc75b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
