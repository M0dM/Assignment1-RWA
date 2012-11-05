<?php

/* ITBUltimateFrisbeeBundle:Tournament:tournamentCalendar.html.twig */
class __TwigTemplate_305fa3ddb18b2f6919eefcebde4aecbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascript($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/js/UFtournamentCalendar.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "\t<h1>Tournaments by date</h1>
\t<ul class=\"nav nav-tabs\">
      <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_tournament"), "html", null, true);
        echo "\">All tournaments</a></li>
      <li class=\"active\"><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_tournament_calendar"), "html", null, true);
        echo "\">Tournaments by date</a></li>
    </ul>
    <p class=\"alert alert-info\">Click on the text field below to pick a date</p>
\t<div class=\"row span12\" id=\"calendarContent\">
\t    <div id=\"calendar\"></div>
\t    <div class=\"span8\" id=\"tableCalendar\">
\t\t    <table dataUrl=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("json/tournaments.json"), "html", null, true);
        echo "\" id=\"tournamentCalendarTable\" class=\"table\">
\t\t\t\t<thead>
\t\t                <tr>
\t\t                  <th>Name</th>
\t\t\t\t\t\t  <th>Date</th>
\t\t                  <th>Country</th>
\t\t                  <th>Location</th>
\t\t                  <th>Surface</th>
\t\t                  <th>Description</th>
\t\t                </tr>
\t\t        </thead>
\t\t        <tbody>
\t\t        </tbody>
\t\t    </table>
\t    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ITBUltimateFrisbeeBundle:Tournament:tournamentCalendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 15,  105 => 58,  21 => 3,  84 => 34,  75 => 32,  54 => 16,  277 => 110,  257 => 92,  254 => 91,  251 => 90,  245 => 24,  241 => 23,  237 => 22,  232 => 21,  229 => 20,  212 => 15,  206 => 13,  200 => 11,  191 => 8,  188 => 7,  173 => 110,  167 => 90,  146 => 77,  97 => 54,  88 => 51,  60 => 20,  47 => 14,  38 => 10,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 17,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 111,  158 => 83,  107 => 41,  101 => 34,  80 => 24,  63 => 21,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 74,  127 => 45,  123 => 44,  115 => 63,  110 => 61,  85 => 28,  65 => 19,  59 => 14,  45 => 9,  103 => 57,  91 => 20,  74 => 22,  70 => 14,  66 => 22,  89 => 20,  82 => 19,  42 => 9,  223 => 18,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 9,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 67,  119 => 45,  116 => 44,  112 => 62,  102 => 36,  98 => 33,  76 => 4,  73 => 3,  69 => 25,  56 => 13,  32 => 5,  26 => 3,  22 => 6,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 27,  77 => 46,  57 => 14,  29 => 4,  24 => 2,  19 => 2,  68 => 18,  61 => 18,  44 => 9,  20 => 1,  161 => 63,  153 => 50,  150 => 78,  147 => 51,  143 => 46,  137 => 73,  129 => 68,  121 => 66,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 19,  64 => 17,  53 => 13,  50 => 10,  48 => 11,  41 => 8,  39 => 6,  35 => 5,  33 => 6,  30 => 4,  27 => 3,  182 => 6,  176 => 71,  169 => 108,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 40,  90 => 28,  87 => 19,  83 => 49,  79 => 23,  71 => 19,  62 => 17,  58 => 17,  55 => 14,  52 => 12,  49 => 12,  46 => 11,  43 => 10,  40 => 8,  37 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
