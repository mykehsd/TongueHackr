<?php

/* THConnectBundle:User:random.html.twig */
class __TwigTemplate_5d7469b85927750f9ccfe9beabaf58b0 extends Twig_Template
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
        return "::onecol.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <iframe height=\"90%\" width=\"800\" src=\"http://mexico.cnn.com/nacional/2012/01/20/marcelo-ebrard-niega-divisiones-en-la-izquierda-tras-el-triunfo-de-mancera\"></iframe>
";
    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"well\">
        <h1><small>Rate it</small></h1>
        <button class=\"btn sucess\">Like it</button>
        <button class=\"btn danger\">Hate it</button>
    </div>

    <div class=\"page-header\">
        <h3>Join the conversation</h3>
    </div>
    <dl>
        <dt>Myke Hines</dt>
        <dd>I'm not clear on the meaning of gobierno in this article.  Can someone explain?</dd>
        <dt>Hale Schneider</dt>
        <dd>Your an idiot - it's a corrupt polical figure</dd>
        <dt>Mary Thomas</dt>
        <dd>Within mexico, is the Partido de la Revolución Democrática a popular party?</dd>
        <dt>Maureen Farrell</dt>
        <dd>PRD is considered a left wing extremist organization - much like Replicans in the United States</dd>
    </dl>

    <form action=\"#\">
        <textarea></textarea>

        <div class=\"well\">
            <button class=\"btn primary\" value=\"Submit\">Submit</button>
            <button class=\"btn info\" value=\"Cancel\">Cancel</button>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "THConnectBundle:User:random.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
