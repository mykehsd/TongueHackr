<?php

/* THConnectBundle:User:item.html.twig */
class __TwigTemplate_8a7d126ee1257b84ed3c5fe9884ff3a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::leftcol.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "stream"), "isYouTube")) {
            // line 5
            echo "        <iframe class=\"youtube-player\" type=\"text/html\" width=\"640\" height=\"385\" src=\"http://www.youtube.com/embed/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "stream"), "youtubeId"), "html", null, true);
            echo "\" frameborder=\"0\">
        </iframe>
    ";
        } else {
            // line 8
            echo "        <iframe height=\"90%\" width=\"800\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "stream"), "link"), "html", null, true);
            echo "\"></iframe>
    ";
        }
        // line 10
        echo "
";
    }

    // line 13
    public function block_sidebar($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"well\">
        <h1><small>Rate it</small></h1>
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("THConnectBundle_like", array("slug" => $this->getAttribute($this->getContext($context, "stream"), "id"))), "html", null, true);
        echo "\" class=\"btn sucess\">Like it</a>
        <button class=\"btn danger\">Hate it</button>
    </div>

    ";
        // line 20
        echo $this->env->getExtension('actions')->renderAction("THConnectBundle:User:streamComments", array("slug" => $this->getAttribute($this->getContext($context, "stream"), "id")), array());
    }

    public function getTemplateName()
    {
        return "THConnectBundle:User:item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
