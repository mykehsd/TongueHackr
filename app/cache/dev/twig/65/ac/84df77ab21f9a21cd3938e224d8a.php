<?php

/* MopaBootstrapBundle:Form:formflow_buttons.html.twig */
class __TwigTemplate_65ac84df77ab21f9a21cd3938e224d8a extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["renderBackButton"] = twig_in_filter($this->getAttribute($this->getContext($context, "flow"), "getCurrentStep", array(), "method"), range(2, $this->getAttribute($this->getContext($context, "flow"), "getMaxSteps", array(), "method")));
        // line 4
        echo "<div class=\"actions\">
\t<button type=\"submit\" id=\"reset\" class=\"btn\" name=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "flow"), "getFormTransitionKey", array(), "method"), "html", null, true);
        echo "\" value=\"reset\" formnovalidate=\"formnovalidate\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("button.reset", array(), "CraueFormFlowBundle"), "html", null, true);
        // line 7
        echo "</button>
\t<button type=\"submit\" id=\"back\" name=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "flow"), "getFormTransitionKey", array(), "method"), "html", null, true);
        echo "\" value=\"back\" formnovalidate=\"formnovalidate\" class=\"btn";
        if ((!$this->getContext($context, "renderBackButton"))) {
            echo " disabled";
        }
        echo "\"";
        if ((!$this->getContext($context, "renderBackButton"))) {
            echo " disabled=\"disabled\"";
        }
        echo ">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("button.back", array(), "CraueFormFlowBundle"), "html", null, true);
        // line 10
        echo "</button>
\t<button type=\"submit\" id=\"next\" class=\"btn primary\">";
        // line 12
        if (($this->getAttribute($this->getContext($context, "flow"), "getCurrentStep", array(), "method") < $this->getAttribute($this->getContext($context, "flow"), "getMaxSteps", array(), "method"))) {
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("button.next", array(), "CraueFormFlowBundle"), "html", null, true);
        } else {
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("button.finish", array(), "CraueFormFlowBundle"), "html", null, true);
        }
        // line 17
        echo "</button>
</div>

<script type=\"text/javascript\">
\$(function() {  
    \$(function() {
        \$(\"form";
        // line 23
        echo twig_escape_filter($this->env, ((array_key_exists("formident", $context)) ? (_twig_default_filter($this->getContext($context, "formident"), "")) : ("")), "html", null, true);
        echo " input\").keypress(function (e) {
            if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
                \$('button[type=submit].primary').click();
                return false;
            } else {
                return true;
            }
        });
    });
});
</script>";
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Form:formflow_buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
