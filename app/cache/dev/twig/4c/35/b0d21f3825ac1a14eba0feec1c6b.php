<?php

/* THConnectBundle:Default:index.html.twig */
class __TwigTemplate_4c35b0d21f3825ac1a14eba0feec1c6b extends Twig_Template
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
        echo "<br/>
<h1>Welcome to TongueHackr <small>your crowd sourced language learning tool</small></h1>
<img src=\"http://awe.comm.gocolumbia.edu/basis_skills_handbook/students_learning.jpg\" />

";
        // line 8
        echo $this->env->getExtension('facebook')->renderInitialize(array("xfbml" => true, "fbAsyncInit" => "onFbInit();"));
        echo "
";
        // line 9
        echo $this->env->getExtension('facebook')->renderLoginButton(array("autologoutlink" => true));
        echo "

<script>
  function goLogIn(){
      window.location = \"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_check"), "html", null, true);
        echo "\";
  }

  function onFbInit() {
      if (typeof(FB) != 'undefined' && FB != null ) {
          FB.Event.subscribe('auth.statusChange', function(response) {
              setTimeout(goLogIn, 500);
          });
      }
  }
</script>
";
    }

    public function getTemplateName()
    {
        return "THConnectBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
