<?php

/* MopaBootstrapBundle:Pagination:sliding.html.twig */
class __TwigTemplate_842884a79a48d14a298ecd41c028ce7e extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        if (($this->getContext($context, "pageCount") > 1)) {
            // line 3
            echo "<div class=\"pagination\">
  <ul>
    <li class=\"first ";
            // line 5
            echo (((array_key_exists("first", $context) && ($this->getContext($context, "current") == $this->getContext($context, "first")))) ? ("disabled") : (""));
            echo "\">
        <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array("page" => $this->getContext($context, "first")))), "html", null, true);
            echo "\">&#60;&#60;</a>
    </li>

    <li class=\"prev ";
            // line 9
            echo (((!array_key_exists("previous", $context))) ? ("disabled") : (""));
            echo "\">
        <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, ((array_key_exists("previous", $context)) ? ($this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array("page" => $this->getContext($context, "previous"))))) : ("#")), "html", null, true);
            echo "\">&#8592; Previous</a>
    </li>

    ";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagesInRange"));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 14
                echo "        <li class=\"";
                echo ((($this->getContext($context, "page") == $this->getContext($context, "current"))) ? ("active") : (""));
                echo "\">
            <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array("page" => $this->getContext($context, "page")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo "</a>
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 18
            echo "
    <li class=\"";
            // line 19
            echo (((!array_key_exists("next", $context))) ? ("disabled") : (""));
            echo "\">
        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, ((array_key_exists("next", $context)) ? ($this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array("page" => $this->getContext($context, "next"))))) : ("#")), "html", null, true);
            echo "\">Next &#8594;</a>
    </li>

    <li class=\"last ";
            // line 23
            echo (((array_key_exists("last", $context) && ($this->getContext($context, "current") == $this->getContext($context, "last")))) ? ("disabled") : (""));
            echo "\">
        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, (((array_key_exists("last", $context) && ($this->getContext($context, "current") == $this->getContext($context, "last")))) ? ("#") : ($this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array("page" => $this->getContext($context, "last")))))), "html", null, true);
            echo "\">&#62;&#62;</a>
    </li>
  </ul>
</div>
";
        }
        // line 29
        echo "<script type=\"text/javascript\">
\$(document).ready(function(){
    \$('.pagination li.disabled a').click(function (e) {
        e.preventDefault()
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Pagination:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
