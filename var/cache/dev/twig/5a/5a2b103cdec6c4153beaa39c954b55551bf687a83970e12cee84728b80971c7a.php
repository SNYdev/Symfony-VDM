<?php

/* default/index.html.twig */
class __TwigTemplate_a1ed1e295ac0848c32a40abd840d6e51512670c4179ae3c4fef0274256efc7ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'nav' => array($this, 'block_nav'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d008a45c001617876d828909dd6a3adfc7fe63570126bb6d307bee24dce85228 = $this->env->getExtension("native_profiler");
        $__internal_d008a45c001617876d828909dd6a3adfc7fe63570126bb6d307bee24dce85228->enter($__internal_d008a45c001617876d828909dd6a3adfc7fe63570126bb6d307bee24dce85228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d008a45c001617876d828909dd6a3adfc7fe63570126bb6d307bee24dce85228->leave($__internal_d008a45c001617876d828909dd6a3adfc7fe63570126bb6d307bee24dce85228_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3447ad3171965ab92df2d3019b15a1e83358a9ea29776e114f31b0ef4a43989 = $this->env->getExtension("native_profiler");
        $__internal_f3447ad3171965ab92df2d3019b15a1e83358a9ea29776e114f31b0ef4a43989->enter($__internal_f3447ad3171965ab92df2d3019b15a1e83358a9ea29776e114f31b0ef4a43989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  ";
        $this->displayBlock('nav', $context, $blocks);
        // line 15
        echo "  <div class=\"container\">
  ";
        // line 16
        $this->displayBlock('container', $context, $blocks);
        // line 33
        echo "  </div>
";
        
        $__internal_f3447ad3171965ab92df2d3019b15a1e83358a9ea29776e114f31b0ef4a43989->leave($__internal_f3447ad3171965ab92df2d3019b15a1e83358a9ea29776e114f31b0ef4a43989_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_74f7475526c6c7abba39665fd1b1059c76195ae4b44d7fefdc6f3fbf415d7beb = $this->env->getExtension("native_profiler");
        $__internal_74f7475526c6c7abba39665fd1b1059c76195ae4b44d7fefdc6f3fbf415d7beb->enter($__internal_74f7475526c6c7abba39665fd1b1059c76195ae4b44d7fefdc6f3fbf415d7beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 5
        echo "    <nav class=\"navbar navbar-default\">
      <div class=\"container\">
        <ul class=\"nav navbar-nav\">
           <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">#VDM</a></li>
           <li><a href=\"form\">Ajouter une VDM</a></li>
           <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("top30");
        echo "\">Top 30</a></li>
        </ul>
      </div>
    </nav>
  ";
        
        $__internal_74f7475526c6c7abba39665fd1b1059c76195ae4b44d7fefdc6f3fbf415d7beb->leave($__internal_74f7475526c6c7abba39665fd1b1059c76195ae4b44d7fefdc6f3fbf415d7beb_prof);

    }

    // line 16
    public function block_container($context, array $blocks = array())
    {
        $__internal_39a81b591465722db767be04301758c6975b6131b83e3c2e3d9752453ee12219 = $this->env->getExtension("native_profiler");
        $__internal_39a81b591465722db767be04301758c6975b6131b83e3c2e3d9752453ee12219->enter($__internal_39a81b591465722db767be04301758c6975b6131b83e3c2e3d9752453ee12219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 18
            echo "      <div class=\"jumbotron\">
        <h1>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "titre", array()), "html", null, true);
            echo "</h1>
        <h2>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "pseudo", array()), "html", null, true);
            echo "</h2>
        <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "content", array()), "html", null, true);
            echo "</p>
        <div class=\"col-md-8\">
          <div class=\"col-md-2 result\" id=\"rdislike\" style=\"color:red\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "unliketicket", array()), "html", null, true);
            echo "</div>
          <div class=\"col-md-2 result\" id=\"rlike\" style=\"color:green\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "liketicket", array()), "html", null, true);
            echo "</div>
          <div class=\"col-md-4\">
            <button type=\"button\" class=\"btn btn-danger\">J'aime pas</button>
            <button type=\"button\" class=\"btn btn-success\">J'aime</button>
          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  ";
        
        $__internal_39a81b591465722db767be04301758c6975b6131b83e3c2e3d9752453ee12219->leave($__internal_39a81b591465722db767be04301758c6975b6131b83e3c2e3d9752453ee12219_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 32,  117 => 24,  113 => 23,  108 => 21,  104 => 20,  100 => 19,  97 => 18,  92 => 17,  86 => 16,  74 => 10,  69 => 8,  64 => 5,  58 => 4,  50 => 33,  48 => 16,  45 => 15,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*   {% block nav %}*/
/*     <nav class="navbar navbar-default">*/
/*       <div class="container">*/
/*         <ul class="nav navbar-nav">*/
/*            <li><a href="{{ path('homepage') }}">#VDM</a></li>*/
/*            <li><a href="form">Ajouter une VDM</a></li>*/
/*            <li><a href="{{ path('top30') }}">Top 30</a></li>*/
/*         </ul>*/
/*       </div>*/
/*     </nav>*/
/*   {% endblock %}*/
/*   <div class="container">*/
/*   {% block container %}*/
/*     {% for advert in list %}*/
/*       <div class="jumbotron">*/
/*         <h1>{{ advert.titre }}</h1>*/
/*         <h2>{{ advert.pseudo }}</h2>*/
/*         <p>{{ advert.content }}</p>*/
/*         <div class="col-md-8">*/
/*           <div class="col-md-2 result" id="rdislike" style="color:red">{{ advert.unliketicket }}</div>*/
/*           <div class="col-md-2 result" id="rlike" style="color:green">{{ advert.liketicket }}</div>*/
/*           <div class="col-md-4">*/
/*             <button type="button" class="btn btn-danger">J'aime pas</button>*/
/*             <button type="button" class="btn btn-success">J'aime</button>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endfor %}*/
/*   {% endblock %}*/
/*   </div>*/
/* {% endblock %}*/
/* */
