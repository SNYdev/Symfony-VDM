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
        $__internal_8f5e689818a9bc01dc6b898d9713e8744e2f5747dd09c570d375145b8cc3c2fe = $this->env->getExtension("native_profiler");
        $__internal_8f5e689818a9bc01dc6b898d9713e8744e2f5747dd09c570d375145b8cc3c2fe->enter($__internal_8f5e689818a9bc01dc6b898d9713e8744e2f5747dd09c570d375145b8cc3c2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f5e689818a9bc01dc6b898d9713e8744e2f5747dd09c570d375145b8cc3c2fe->leave($__internal_8f5e689818a9bc01dc6b898d9713e8744e2f5747dd09c570d375145b8cc3c2fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e294c49a8f002199f4e86ab4d1d2d277ac079ca4707c3839edab86b25470d824 = $this->env->getExtension("native_profiler");
        $__internal_e294c49a8f002199f4e86ab4d1d2d277ac079ca4707c3839edab86b25470d824->enter($__internal_e294c49a8f002199f4e86ab4d1d2d277ac079ca4707c3839edab86b25470d824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  ";
        $this->displayBlock('nav', $context, $blocks);
        // line 16
        echo "  <div class=\"container\">
  ";
        // line 17
        $this->displayBlock('container', $context, $blocks);
        // line 36
        echo "  </div>
";
        
        $__internal_e294c49a8f002199f4e86ab4d1d2d277ac079ca4707c3839edab86b25470d824->leave($__internal_e294c49a8f002199f4e86ab4d1d2d277ac079ca4707c3839edab86b25470d824_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_f298a2270823939c7a19bf27e77fb321b9885d6c274d5ebf1a3e7e3eda43cdc5 = $this->env->getExtension("native_profiler");
        $__internal_f298a2270823939c7a19bf27e77fb321b9885d6c274d5ebf1a3e7e3eda43cdc5->enter($__internal_f298a2270823939c7a19bf27e77fb321b9885d6c274d5ebf1a3e7e3eda43cdc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
           <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("flop30");
        echo "\">Flop 30</a></li>
        </ul>
      </div>
    </nav>
  ";
        
        $__internal_f298a2270823939c7a19bf27e77fb321b9885d6c274d5ebf1a3e7e3eda43cdc5->leave($__internal_f298a2270823939c7a19bf27e77fb321b9885d6c274d5ebf1a3e7e3eda43cdc5_prof);

    }

    // line 17
    public function block_container($context, array $blocks = array())
    {
        $__internal_31b1308c2d1c93395718e6690d14c22085600eb7395ad484b6537fd547e75fc8 = $this->env->getExtension("native_profiler");
        $__internal_31b1308c2d1c93395718e6690d14c22085600eb7395ad484b6537fd547e75fc8->enter($__internal_31b1308c2d1c93395718e6690d14c22085600eb7395ad484b6537fd547e75fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 18
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 19
            echo "      <div class=\"jumbotron\">
        <h1>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "titre", array()), "html", null, true);
            echo "</h1>
        <h2>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "pseudo", array()), "html", null, true);
            echo "</h2>
        <p>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "content", array()), "html", null, true);
            echo "</p>
        <div class=\"col-md-8\">
          <div class=\"col-md-2 result\" id=\"rdislike\" style=\"color:red\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "unliketicket", array()), "html", null, true);
            echo "</div>
          <div class=\"col-md-2 result\" id=\"rlike\" style=\"color:green\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "liketicket", array()), "html", null, true);
            echo "</div>
          <div class=\"col-md-4\">
          <form method=\"POST\">
            <input type=\"submit\" name=\"bdislike\" id=\"btn-dislike\" class=\"btn btn-danger\" value=\"J'aime pas\">
            <input type=\"submit\" name=\"blike\" id=\"btn-like\" class=\"btn btn-success\" value=\"J'aime\">
            </form>
          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  ";
        
        $__internal_31b1308c2d1c93395718e6690d14c22085600eb7395ad484b6537fd547e75fc8->leave($__internal_31b1308c2d1c93395718e6690d14c22085600eb7395ad484b6537fd547e75fc8_prof);

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
        return array (  137 => 35,  121 => 25,  117 => 24,  112 => 22,  108 => 21,  104 => 20,  101 => 19,  96 => 18,  90 => 17,  78 => 11,  74 => 10,  69 => 8,  64 => 5,  58 => 4,  50 => 36,  48 => 17,  45 => 16,  42 => 4,  36 => 3,  11 => 1,);
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
/*            <li><a href="{{ path('flop30') }}">Flop 30</a></li>*/
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
/*           <form method="POST">*/
/*             <input type="submit" name="bdislike" id="btn-dislike" class="btn btn-danger" value="J'aime pas">*/
/*             <input type="submit" name="blike" id="btn-like" class="btn btn-success" value="J'aime">*/
/*             </form>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endfor %}*/
/*   {% endblock %}*/
/*   </div>*/
/* {% endblock %}*/
/* */
