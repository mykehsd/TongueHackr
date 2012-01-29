<?php

/* THConnectBundle:User:streamComments.html.twig */
class __TwigTemplate_a0f8cf56002e0b28a6a2a2c6a635b871 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    <div class=\"page-header\">
        <h3>Join the conversation</h3>
    </div>
    <dl>
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "stream"), "comments"));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 6
            echo "        <dt>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "comment"), "user"), "firstname"), "html", null, true);
            echo "</dt>
        <dd>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "body"), "html", null, true);
            echo "</dd>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "    </dl>

    <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("THConnectBundle_streamCommentsNew"), "html", null, true);
        echo "\" method=\"post\" >
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "stream"), "id"), "html", null, true);
        echo "\" />
        <textarea name=\"comment\"></textarea>

        <div class=\"well\">
            <input type=\"submit\" class=\"btn primary\" value=\"Submit\" />
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "THConnectBundle:User:streamComments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
