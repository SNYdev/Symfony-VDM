<?php

/* default/flop.html.twig */
class __TwigTemplate_5539240e2c702d866f2122e21fc647d2a455011b844d97b29274af6c0ecfbffb extends Twig_Template
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
        $__internal_5880fde7e7ccf9e16cb0e8d1f2d271854f6d9089bdc59767f6ff13024d13b890 = $this->env->getExtension("native_profiler");
        $__internal_5880fde7e7ccf9e16cb0e8d1f2d271854f6d9089bdc59767f6ff13024d13b890->enter($__internal_5880fde7e7ccf9e16cb0e8d1f2d271854f6d9089bdc59767f6ff13024d13b890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/flop.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5880fde7e7ccf9e16cb0e8d1f2d271854f6d9089bdc59767f6ff13024d13b890->leave($__internal_5880fde7e7ccf9e16cb0e8d1f2d271854f6d9089bdc59767f6ff13024d13b890_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_a10a65f3bff78c4a541a9efe48d4f24c8c065ca51e4342180e789dbf477f54db = $this->env->getExtension("native_profiler");
        $__internal_a10a65f3bff78c4a541a9efe48d4f24c8c065ca51e4342180e789dbf477f54db->enter($__internal_a10a65f3bff78c4a541a9efe48d4f24c8c065ca51e4342180e789dbf477f54db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_a10a65f3bff78c4a541a9efe48d4f24c8c065ca51e4342180e789dbf477f54db->leave($__internal_a10a65f3bff78c4a541a9efe48d4f24c8c065ca51e4342180e789dbf477f54db_prof);

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
