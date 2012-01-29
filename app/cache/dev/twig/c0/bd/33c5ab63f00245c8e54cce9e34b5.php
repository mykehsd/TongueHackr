<?php

/* ::nocol.html.twig */
class __TwigTemplate_c0bd33c5ab63f00245c8e54cce9e34b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'layout_cols' => array($this, 'block_layout_cols'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
    }

    // line 3
    public function block_layout_cols($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
    ";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        // line 6
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "::nocol.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
