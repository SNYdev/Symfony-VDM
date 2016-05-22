<?php

/* default/flop.html.twig */
class __TwigTemplate_ae42dcf816ede5b66c6fe782616e50894ec95775c8ef716c7fbea3741f76c352 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/flop.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34eb8845c383fb92c3cd782f551f1e00aec3520ddeb79c2e772e3bdf628c0b0c = $this->env->getExtension("native_profiler");
        $__internal_34eb8845c383fb92c3cd782f551f1e00aec3520ddeb79c2e772e3bdf628c0b0c->enter($__internal_34eb8845c383fb92c3cd782f551f1e00aec3520ddeb79c2e772e3bdf628c0b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/flop.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34eb8845c383fb92c3cd782f551f1e00aec3520ddeb79c2e772e3bdf628c0b0c->leave($__internal_34eb8845c383fb92c3cd782f551f1e00aec3520ddeb79c2e772e3bdf628c0b0c_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_4b91c34d46b019fac94a85a21658e0359493004822c72d405fd0a79a8d07c48e = $this->env->getExtension("native_profiler");
        $__internal_4b91c34d46b019fac94a85a21658e0359493004822c72d405fd0a79a8d07c48e->enter($__internal_4b91c34d46b019fac94a85a21658e0359493004822c72d405fd0a79a8d07c48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["floplist"]) ? $context["floplist"] : $this->getContext($context, "floplist")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 5
            echo "    <div class=\"jumbotron\">
      <h1>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "titre", array()), "html", null, true);
            echo "</h1>
      <h2>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "pseudo", array()), "html", null, true);
            echo "</h2>
      <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "content", array()), "html", null, true);
            echo "</p>
      <div class=\"col-md-8\">
        <div class=\"col-md-2 result\" id=\"rdislike\" style=\"color:red\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "unliketicket", array()), "html", null, true);
            echo "</div>
        <div class=\"col-md-2 result\" id=\"rlike\" style=\"color:green\">";
            // line 11
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
        
        $__internal_4b91c34d46b019fac94a85a21658e0359493004822c72d405fd0a79a8d07c48e->leave($__internal_4b91c34d46b019fac94a85a21658e0359493004822c72d405fd0a79a8d07c48e_prof);

    }

    public function getTemplateName()
    {
        return "default/flop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  61 => 10,  56 => 8,  52 => 7,  48 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block container %}*/
/*   {% for advert in floplist %}*/
/*     <div class="jumbotron">*/
/*       <h1>{{ advert.titre }}</h1>*/
/*       <h2>{{ advert.pseudo }}</h2>*/
/*       <p>{{ advert.content }}</p>*/
/*       <div class="col-md-8">*/
/*         <div class="col-md-2 result" id="rdislike" style="color:red">{{ advert.unliketicket }}</div>*/
/*         <div class="col-md-2 result" id="rlike" style="color:green">{{ advert.liketicket }}</div>*/
/*         <div class="col-md-4">*/
/*         <form method="POST">*/
/*           <input type="submit" name="bdislike" id="btn-dislike" class="btn btn-danger" value="J'aime pas">*/
/*           <input type="submit" name="blike" id="btn-like" class="btn btn-success" value="J'aime">*/
/*         </form>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endfor %}*/
/* {% endblock %}*/
/* */
