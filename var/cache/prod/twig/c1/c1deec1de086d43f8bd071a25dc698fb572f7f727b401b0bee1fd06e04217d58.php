<?php

/* base.html.twig */
class __TwigTemplate_dc8cfb731e93c05a41787944a9de5b969ff2df9690f81121cc86a3e1425fd7da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'nav' => array($this, 'block_nav'),
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adbc26ce9f38f3b7b4aa6efa7723cca79ffab7141c05400043aa996ff80e5142 = $this->env->getExtension("native_profiler");
        $__internal_adbc26ce9f38f3b7b4aa6efa7723cca79ffab7141c05400043aa996ff80e5142->enter($__internal_adbc26ce9f38f3b7b4aa6efa7723cca79ffab7141c05400043aa996ff80e5142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.12.3.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    </body>
</html>
";
        
        $__internal_adbc26ce9f38f3b7b4aa6efa7723cca79ffab7141c05400043aa996ff80e5142->leave($__internal_adbc26ce9f38f3b7b4aa6efa7723cca79ffab7141c05400043aa996ff80e5142_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a23a0a6b7f294b4b21ab322b6fbcfadabae9bb6112fd7f67f6061ab65862f123 = $this->env->getExtension("native_profiler");
        $__internal_a23a0a6b7f294b4b21ab322b6fbcfadabae9bb6112fd7f67f6061ab65862f123->enter($__internal_a23a0a6b7f294b4b21ab322b6fbcfadabae9bb6112fd7f67f6061ab65862f123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony VDM";
        
        $__internal_a23a0a6b7f294b4b21ab322b6fbcfadabae9bb6112fd7f67f6061ab65862f123->leave($__internal_a23a0a6b7f294b4b21ab322b6fbcfadabae9bb6112fd7f67f6061ab65862f123_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_905562afc4d3982c7e1391e072dfe3a79467f38cbe517d2fdc60f9cf0a5c5c91 = $this->env->getExtension("native_profiler");
        $__internal_905562afc4d3982c7e1391e072dfe3a79467f38cbe517d2fdc60f9cf0a5c5c91->enter($__internal_905562afc4d3982c7e1391e072dfe3a79467f38cbe517d2fdc60f9cf0a5c5c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel='stylesheet' type='text/css' href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
        <link rel='stylesheet' type='text/css' href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel='stylesheet' type='text/css' href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_905562afc4d3982c7e1391e072dfe3a79467f38cbe517d2fdc60f9cf0a5c5c91->leave($__internal_905562afc4d3982c7e1391e072dfe3a79467f38cbe517d2fdc60f9cf0a5c5c91_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_cac9e054e98881e648fa60b73f1ebf28a73278fee1c38e08034f59661e8c079a = $this->env->getExtension("native_profiler");
        $__internal_cac9e054e98881e648fa60b73f1ebf28a73278fee1c38e08034f59661e8c079a->enter($__internal_cac9e054e98881e648fa60b73f1ebf28a73278fee1c38e08034f59661e8c079a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "          ";
        $this->displayBlock('nav', $context, $blocks);
        // line 29
        echo "          <div class=\"container\">
            ";
        // line 30
        $this->displayBlock('container', $context, $blocks);
        // line 32
        echo "          </div>
        ";
        
        $__internal_cac9e054e98881e648fa60b73f1ebf28a73278fee1c38e08034f59661e8c079a->leave($__internal_cac9e054e98881e648fa60b73f1ebf28a73278fee1c38e08034f59661e8c079a_prof);

    }

    // line 18
    public function block_nav($context, array $blocks = array())
    {
        $__internal_0db97833f889c634307a648de0e95d2e9a158e2c1ff53dbcb7f74e1ca88c845d = $this->env->getExtension("native_profiler");
        $__internal_0db97833f889c634307a648de0e95d2e9a158e2c1ff53dbcb7f74e1ca88c845d->enter($__internal_0db97833f889c634307a648de0e95d2e9a158e2c1ff53dbcb7f74e1ca88c845d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 19
        echo "            <nav class=\"navbar navbar-default\">
              <div class=\"container\">
                <ul class=\"nav navbar-nav\">
                   <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">#VDM</a></li>
                   <li><a href=\"form\">Ajouter une VDM</a></li>
                   <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("top30");
        echo "\">Top 30</a></li>
                </ul>
              </div>
            </nav>
          ";
        
        $__internal_0db97833f889c634307a648de0e95d2e9a158e2c1ff53dbcb7f74e1ca88c845d->leave($__internal_0db97833f889c634307a648de0e95d2e9a158e2c1ff53dbcb7f74e1ca88c845d_prof);

    }

    // line 30
    public function block_container($context, array $blocks = array())
    {
        $__internal_9bfa2b87487f3194b4e625dae2d7f7adbc039f79c8252b3af403e65efc50550a = $this->env->getExtension("native_profiler");
        $__internal_9bfa2b87487f3194b4e625dae2d7f7adbc039f79c8252b3af403e65efc50550a->enter($__internal_9bfa2b87487f3194b4e625dae2d7f7adbc039f79c8252b3af403e65efc50550a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 31
        echo "            ";
        
        $__internal_9bfa2b87487f3194b4e625dae2d7f7adbc039f79c8252b3af403e65efc50550a->leave($__internal_9bfa2b87487f3194b4e625dae2d7f7adbc039f79c8252b3af403e65efc50550a_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_92eb2d24cabf02278de4aefa9b09b05cf36069fe837768132fda743eae91e421 = $this->env->getExtension("native_profiler");
        $__internal_92eb2d24cabf02278de4aefa9b09b05cf36069fe837768132fda743eae91e421->enter($__internal_92eb2d24cabf02278de4aefa9b09b05cf36069fe837768132fda743eae91e421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_92eb2d24cabf02278de4aefa9b09b05cf36069fe837768132fda743eae91e421->leave($__internal_92eb2d24cabf02278de4aefa9b09b05cf36069fe837768132fda743eae91e421_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 34,  163 => 31,  157 => 30,  145 => 24,  140 => 22,  135 => 19,  129 => 18,  121 => 32,  119 => 30,  116 => 29,  113 => 18,  107 => 17,  98 => 9,  94 => 8,  89 => 7,  83 => 6,  71 => 5,  62 => 35,  59 => 34,  57 => 17,  51 => 14,  47 => 13,  43 => 12,  40 => 11,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Symfony VDM{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         <link rel='stylesheet' type='text/css' href="{{ asset('css/bootstrap-theme.min.css') }}">*/
/*         <link rel='stylesheet' type='text/css' href="{{ asset('css/bootstrap.min.css') }}">*/
/*         <link rel='stylesheet' type='text/css' href="{{ asset('css/style.css') }}">*/
/*         {% endblock %}*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <script type="text/javascript" src="{{ asset('js/jquery-1.12.3.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*           {% block nav %}*/
/*             <nav class="navbar navbar-default">*/
/*               <div class="container">*/
/*                 <ul class="nav navbar-nav">*/
/*                    <li><a href="{{ path('homepage') }}">#VDM</a></li>*/
/*                    <li><a href="form">Ajouter une VDM</a></li>*/
/*                    <li><a href="{{ path('top30') }}">Top 30</a></li>*/
/*                 </ul>*/
/*               </div>*/
/*             </nav>*/
/*           {% endblock %}*/
/*           <div class="container">*/
/*             {% block container %}*/
/*             {% endblock %}*/
/*           </div>*/
/*         {% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
