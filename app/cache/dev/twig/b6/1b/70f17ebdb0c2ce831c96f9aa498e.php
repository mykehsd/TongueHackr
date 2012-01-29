<?php

/* ::leftcol.html.twig */
class __TwigTemplate_b61b70f17ebdb0c2ce831c96f9aa498e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
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

    // line 6
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
    }

    // line 3
    public function block_layout_cols($context, array $blocks = array())
    {
        // line 4
        echo "        <div class=\"container-fluid\">
            <div class=\"sidebar\">
                ";
        // line 6
        $this->displayBlock('sidebar', $context, $blocks);
        // line 7
        echo "            </div>
            <div class=\"content\">
                ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "::leftcol.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
