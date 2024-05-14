<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* board/show.html.twig */
class __TwigTemplate_3129ce951bbce3e21fbfc3f474388a9e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "board/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "board/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "board/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Board";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>Board ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["board"]) || array_key_exists("board", $context) ? $context["board"] : (function () { throw new RuntimeError('Variable "board" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        yield "</h1>

    <table>
        <div class=\"list-column\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["steps"]) || array_key_exists("steps", $context) ? $context["steps"] : (function () { throw new RuntimeError('Variable "steps" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 11
            yield "                <div class=\"columnn\">
                    <p>";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "name", [], "any", false, false, false, 12), "html", null, true);
            yield "</p>
                
                    <div class=\"listCard\">
                        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "cards", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 16
                yield "
                            <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 20rem;\">
                                <div class=\"card-body\">
                                    ";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "description", [], "any", false, false, false, 19), "html", null, true);
                yield "
                                    <button type=\"button\" class=\"btn btn-dark\"><a  href=\"";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_card_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["card"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                yield "\">Editer</a></button>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_card_new", ["idStep" => CoreExtension::getAttribute($this->env, $this->source, $context["step"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            yield "\">Ajouter une card</a>
                    </div>
                    
                    <button type=\"button\" class=\"btn btn-primary\"><a href=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_step_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["step"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\">Edit column</a></button>
                        
                    
                </div>
        
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            yield "                <tr>
                    <td colspan=\"3\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "        </div>
    </table>
    
    <a href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_step_new", ["board_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["board"]) || array_key_exists("board", $context) ? $context["board"] : (function () { throw new RuntimeError('Variable "board" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
        yield "\" style=\"margin-right:34px\">Nouvelle colonne</a>
    <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_board_index");
        yield "\">Retour au home</a>

    ";
        // line 43
        yield Twig\Extension\CoreExtension::include($this->env, $context, "board/_delete_form.html.twig");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "board/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  176 => 43,  171 => 41,  167 => 40,  162 => 37,  153 => 33,  142 => 27,  135 => 24,  125 => 20,  121 => 19,  116 => 16,  112 => 15,  106 => 12,  103 => 11,  98 => 10,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Board{% endblock %}

{% block body %}
    <h1>Board {{ board.name }}</h1>

    <table>
        <div class=\"list-column\">
            {% for step in steps %}
                <div class=\"columnn\">
                    <p>{{ step.name }}</p>
                
                    <div class=\"listCard\">
                        {% for card in step.cards %}

                            <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 20rem;\">
                                <div class=\"card-body\">
                                    {{card.description}}
                                    <button type=\"button\" class=\"btn btn-dark\"><a  href=\"{{ path('app_card_edit', {'id': card.id}) }}\">Editer</a></button>
                                </div>
                            </div>
                        {% endfor %}
                        <a href=\"{{ path('app_card_new', {'idStep': step.id}) }}\">Ajouter une card</a>
                    </div>
                    
                    <button type=\"button\" class=\"btn btn-primary\"><a href=\"{{ path('app_step_edit', {'id': step.id}) }}\">Edit column</a></button>
                        
                    
                </div>
        
            {% else %}
                <tr>
                    <td colspan=\"3\">no records found</td>
                </tr>
            {% endfor %}
        </div>
    </table>
    
    <a href=\"{{ path('app_step_new', {'board_id' : board.id}) }}\" style=\"margin-right:34px\">Nouvelle colonne</a>
    <a href=\"{{ path('app_board_index') }}\">Retour au home</a>

    {{ include('board/_delete_form.html.twig') }}
{% endblock %}
", "board/show.html.twig", "/Users/clementguilloux/Documents/project-kaban-nws/templates/board/show.html.twig");
    }
}
