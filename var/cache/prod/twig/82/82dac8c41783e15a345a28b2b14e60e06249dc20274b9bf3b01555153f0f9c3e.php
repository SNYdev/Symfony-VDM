<?php

/* default/form.html.twig */
class __TwigTemplate_68c3995015a2814af70f1bb5cc99d20fd37e829b561b0bf02166389124e679d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "default/form.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d7e2037b1a1263b8a36ec03d53ee3bdd00bdb064c536e9cf3e0901d8ba56b82 = $this->env->getExtension("native_profiler");
        $__internal_3d7e2037b1a1263b8a36ec03d53ee3bdd00bdb064c536e9cf3e0901d8ba56b82->enter($__internal_3d7e2037b1a1263b8a36ec03d53ee3bdd00bdb064c536e9cf3e0901d8ba56b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d7e2037b1a1263b8a36ec03d53ee3bdd00bdb064c536e9cf3e0901d8ba56b82->leave($__internal_3d7e2037b1a1263b8a36ec03d53ee3bdd00bdb064c536e9cf3e0901d8ba56b82_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_ea71d984fe7f43e82ab1d4c65eac228d6719571665e5e4057accaf26a4e53db0 = $this->env->getExtension("native_profiler");
        $__internal_ea71d984fe7f43e82ab1d4c65eac228d6719571665e5e4057accaf26a4e53db0->enter($__internal_ea71d984fe7f43e82ab1d4c65eac228d6719571665e5e4057accaf26a4e53db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "  <div class=\"status-post\"></div>
  <form method=\"POST\" name=\"vdm\">
    <input type=\"text\" class=\"input input-pseudo\" placeholder=\"Votre pseudo\" name=\"champ-pseudo\">
    <input type=\"text\" class=\"input input-title\" placeholder=\"Titre de la VDM\" name=\"champ-titre\">
    <textarea type=\"text\" class=\"input input-content\" placeholder=\"Contenu\" rows=\"4\" name=\"champ-content\"></textarea>
    <input type=\"submit\" value=\"Poster une VDM\" id=\"butn-submit\">
  </form>
";
        
        $__internal_ea71d984fe7f43e82ab1d4c65eac228d6719571665e5e4057accaf26a4e53db0->leave($__internal_ea71d984fe7f43e82ab1d4c65eac228d6719571665e5e4057accaf26a4e53db0_prof);

    }

    public function getTemplateName()
    {
        return "default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'default/index.html.twig' %}*/
/* */
/* {% block container %}*/
/*   <div class="status-post"></div>*/
/*   <form method="POST" name="vdm">*/
/*     <input type="text" class="input input-pseudo" placeholder="Votre pseudo" name="champ-pseudo">*/
/*     <input type="text" class="input input-title" placeholder="Titre de la VDM" name="champ-titre">*/
/*     <textarea type="text" class="input input-content" placeholder="Contenu" rows="4" name="champ-content"></textarea>*/
/*     <input type="submit" value="Poster une VDM" id="butn-submit">*/
/*   </form>*/
/* {% endblock %}*/
/* */
