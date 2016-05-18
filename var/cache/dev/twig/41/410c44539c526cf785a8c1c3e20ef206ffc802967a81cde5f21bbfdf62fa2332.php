<?php

/* base.html.twig */
class __TwigTemplate_6a6024572071d9441ec61a9cb3f59241256bff62f07f4f368e2760d6429629e8 extends Twig_Template
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
        $__internal_8b8fe6bd2db404ed2db705c5069fee0cb0daadca4335efbf60248fc7486de7c3 = $this->env->getExtension("native_profiler");
        $__internal_8b8fe6bd2db404ed2db705c5069fee0cb0daadca4335efbf60248fc7486de7c3->enter($__internal_8b8fe6bd2db404ed2db705c5069fee0cb0daadca4335efbf60248fc7486de7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    </body>
</html>
";
        
        $__internal_8b8fe6bd2db404ed2db705c5069fee0cb0daadca4335efbf60248fc7486de7c3->leave($__internal_8b8fe6bd2db404ed2db705c5069fee0cb0daadca4335efbf60248fc7486de7c3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_034b35bb80453797c77a885902f055118c50dd0a9595681a234a0883614e6732 = $this->env->getExtension("native_profiler");
        $__internal_034b35bb80453797c77a885902f055118c50dd0a9595681a234a0883614e6732->enter($__internal_034b35bb80453797c77a885902f055118c50dd0a9595681a234a0883614e6732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony VDM";
        
        $__internal_034b35bb80453797c77a885902f055118c50dd0a9595681a234a0883614e6732->leave($__internal_034b35bb80453797c77a885902f055118c50dd0a9595681a234a0883614e6732_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_23d0f619edf0027b2edf9c6f7bac5bccc7748da8b63c7b9e9f0550f8e801be26 = $this->env->getExtension("native_profiler");
        $__internal_23d0f619edf0027b2edf9c6f7bac5bccc7748da8b63c7b9e9f0550f8e801be26->enter($__internal_23d0f619edf0027b2edf9c6f7bac5bccc7748da8b63c7b9e9f0550f8e801be26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_23d0f619edf0027b2edf9c6f7bac5bccc7748da8b63c7b9e9f0550f8e801be26->leave($__internal_23d0f619edf0027b2edf9c6f7bac5bccc7748da8b63c7b9e9f0550f8e801be26_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_daa147d25c564b3a3463919e6fef6a292110cc1bbf51e0d13375689f8052bb7d = $this->env->getExtension("native_profiler");
        $__internal_daa147d25c564b3a3463919e6fef6a292110cc1bbf51e0d13375689f8052bb7d->enter($__internal_daa147d25c564b3a3463919e6fef6a292110cc1bbf51e0d13375689f8052bb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "          ";
        $this->displayBlock('nav', $context, $blocks);
        // line 26
        echo "          <div class=\"container\">
            ";
        // line 27
        $this->displayBlock('container', $context, $blocks);
        // line 29
        echo "          </div>
        ";
        
        $__internal_daa147d25c564b3a3463919e6fef6a292110cc1bbf51e0d13375689f8052bb7d->leave($__internal_daa147d25c564b3a3463919e6fef6a292110cc1bbf51e0d13375689f8052bb7d_prof);

    }

    // line 15
    public function block_nav($context, array $blocks = array())
    {
        $__internal_bdc52fea8e5bcc1a12db491862b3492cf98286813cdcdf1b8061467961f4bcf8 = $this->env->getExtension("native_profiler");
        $__internal_bdc52fea8e5bcc1a12db491862b3492cf98286813cdcdf1b8061467961f4bcf8->enter($__internal_bdc52fea8e5bcc1a12db491862b3492cf98286813cdcdf1b8061467961f4bcf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 16
        echo "            <nav class=\"navbar navbar-default\">
              <div class=\"container\">
                <ul class=\"nav navbar-nav\">
                   <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">#VDM</a></li>
                   <li><a href=\"form\">Ajouter une VDM</a></li>
                   <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("top30");
        echo "\">Top 30</a></li>
                </ul>
              </div>
            </nav>
          ";
        
        $__internal_bdc52fea8e5bcc1a12db491862b3492cf98286813cdcdf1b8061467961f4bcf8->leave($__internal_bdc52fea8e5bcc1a12db491862b3492cf98286813cdcdf1b8061467961f4bcf8_prof);

    }

    // line 27
    public function block_container($context, array $blocks = array())
    {
        $__internal_be099215de817ba3b23c980a025ccfbf9c08aaa69070e4e5beb279fec96f0cae = $this->env->getExtension("native_profiler");
        $__internal_be099215de817ba3b23c980a025ccfbf9c08aaa69070e4e5beb279fec96f0cae->enter($__internal_be099215de817ba3b23c980a025ccfbf9c08aaa69070e4e5beb279fec96f0cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 28
        echo "            ";
        
        $__internal_be099215de817ba3b23c980a025ccfbf9c08aaa69070e4e5beb279fec96f0cae->leave($__internal_be099215de817ba3b23c980a025ccfbf9c08aaa69070e4e5beb279fec96f0cae_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d67c98715960d62c40ada3173f17789e426d7b193e1017bb582df160277a03a5 = $this->env->getExtension("native_profiler");
        $__internal_d67c98715960d62c40ada3173f17789e426d7b193e1017bb582df160277a03a5->enter($__internal_d67c98715960d62c40ada3173f17789e426d7b193e1017bb582df160277a03a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d67c98715960d62c40ada3173f17789e426d7b193e1017bb582df160277a03a5->leave($__internal_d67c98715960d62c40ada3173f17789e426d7b193e1017bb582df160277a03a5_prof);

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
        return array (  160 => 31,  153 => 28,  147 => 27,  135 => 21,  130 => 19,  125 => 16,  119 => 15,  111 => 29,  109 => 27,  106 => 26,  103 => 15,  97 => 14,  88 => 9,  84 => 8,  79 => 7,  73 => 6,  61 => 5,  52 => 32,  49 => 31,  47 => 14,  40 => 11,  38 => 6,  34 => 5,  28 => 1,);
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
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
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
