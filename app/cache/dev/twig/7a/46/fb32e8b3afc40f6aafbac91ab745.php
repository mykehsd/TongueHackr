<?php

/* THConnectBundle:Friends:index.html.twig */
class __TwigTemplate_7a46fb32e8b3afc40f6aafbac91ab745 extends Twig_Template
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
        echo "    <h2>TongueHackr Users</h2>

    <ul class=\"media-grid\">
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "users"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 8
            echo "        <li>
        <div class=\"friends\">
            <div class=\"photo\">
                <a href=\"#\">
                    <img height=\"100\" src=\"https://graph.facebook.com/";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
            echo "/picture?type=large\" class=\"thumbnail\" />
                </a>
            </div>
            <div class=\"details\">
                <em>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "fullname"), "html", null, true);
            echo "</em><br/>
                Native Language <strong>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "user"), "nativelanguage"), "name"), "html", null, true);
            echo "</strong><br/>
                Learning: <strong>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "user"), "learninglanguage"), "name"), "html", null, true);
            echo "</strong><br/>
                Interests: <strong>";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "user"), "interests"));
            foreach ($context['_seq'] as $context["_key"] => $context["interest"]) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "interest"), "name"), "html", null, true);
                echo ", ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo "</strong>
            </div>
        </div>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "THConnectBundle:Friends:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
