<?php

/* THConnectBundle:User:profile.html.twig */
class __TwigTemplate_93db76a7d19fd2176c5788495e6e0190 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::nocol.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <p>Here is the latest content:</p>

    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "streams"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("THConnectBundle_item", array("slug" => $this->getAttribute($this->getContext($context, "item"), "id"))), "html", null, true);
            echo "\">
            ";
            // line 8
            if ($this->getAttribute($this->getContext($context, "item"), "icon")) {
                // line 9
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "icon"), "html", null, true);
                echo "\" /> 
            ";
            } else {
                // line 11
                echo "                <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "type"), "html", null, true);
                echo "</strong> 

            ";
            }
            // line 14
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "message"), "html", null, true);
            echo " <br/>
        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo "

    ";
        // line 19
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "learninglanguage"))) {
            // line 20
            echo "        <div id=\"language-modal\" class=\"modal hide fade\" style=\"display: none\">
            <div class=\"modal-header\">
                <h3>Your profile settings</h3>
            </div>
            <div class=\"modal-body\">
                <p>Please provide information for your profile</p>
                <form action=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("THConnectBundle_profileUpdate"), "html", null, true);
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
            echo ">
                    ";
            // line 27
            echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
            echo "
                    <input class=\"btn primary\" type=\"submit\" />
                </form>
            </div>
        </div>

    ";
        }
    }

    public function getTemplateName()
    {
        return "THConnectBundle:User:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
