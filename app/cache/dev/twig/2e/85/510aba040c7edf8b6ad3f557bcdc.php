<?php

/* WebProfilerBundle:Profiler:toolbar.html.twig */
class __TwigTemplate_2e85510aba040c7edf8b6ad3f557bcdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- START of Symfony2 Web Debug Toolbar -->
";
        // line 2
        if (("normal" != $this->getContext($context, "position"))) {
            // line 3
            echo "    ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_style.html.twig")->display(array_merge($context, array("position" => $this->getContext($context, "position"), "floatable" => true)));
            // line 4
            echo "    <div style=\"clear: both; height: 38px;\"></div>
";
        }
        // line 6
        echo "
<div class=\"sf-toolbarreset\">
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "templates"));
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "template"), "renderblock", array(0 => "toolbar", 1 => array("collector" => $this->getAttribute($this->getContext($context, "profile"), "getcollector", array(0 => $this->getContext($context, "name")), "method"), "profiler_url" => $this->getContext($context, "profiler_url"), "token" => $this->getAttribute($this->getContext($context, "profile"), "token"), "name" => $this->getContext($context, "name"))), "method"), "html", null, true);
            // line 15
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo "
    ";
        // line 18
        if (("normal" != $this->getContext($context, "position"))) {
            // line 19
            echo "        <a class=\"hide-button\" title=\"Close Toolbar\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            (p.previousElementSibling || p.previousSibling).style.display = 'none';
        \"></a>
    ";
        }
        // line 25
        echo "</div>
<!-- END of Symfony2 Web Debug Toolbar -->
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 236,  255 => 234,  238 => 219,  236 => 218,  84 => 22,  75 => 18,  111 => 31,  95 => 30,  67 => 16,  51 => 38,  47 => 17,  105 => 58,  21 => 3,  60 => 25,  54 => 15,  298 => 121,  278 => 103,  275 => 102,  272 => 101,  262 => 23,  258 => 235,  253 => 21,  250 => 20,  244 => 18,  239 => 17,  233 => 15,  227 => 13,  221 => 11,  215 => 9,  212 => 8,  190 => 119,  188 => 101,  179 => 94,  171 => 89,  167 => 88,  139 => 73,  124 => 65,  88 => 50,  38 => 8,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 248,  271 => 85,  268 => 84,  266 => 24,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 7,  202 => 66,  196 => 122,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 30,  101 => 34,  80 => 21,  63 => 16,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 62,  110 => 60,  85 => 28,  65 => 21,  59 => 18,  45 => 9,  103 => 24,  91 => 25,  74 => 22,  70 => 14,  66 => 14,  89 => 28,  82 => 23,  42 => 11,  223 => 96,  214 => 90,  210 => 88,  203 => 6,  199 => 83,  194 => 121,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 77,  130 => 68,  125 => 49,  119 => 46,  116 => 33,  112 => 43,  102 => 28,  98 => 27,  76 => 26,  73 => 24,  69 => 23,  56 => 13,  32 => 8,  26 => 3,  22 => 3,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 33,  77 => 20,  57 => 14,  29 => 6,  24 => 3,  19 => 2,  68 => 13,  61 => 21,  44 => 34,  20 => 2,  161 => 84,  153 => 79,  150 => 49,  147 => 51,  143 => 46,  137 => 72,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 57,  99 => 33,  94 => 52,  81 => 38,  78 => 31,  72 => 25,  64 => 15,  53 => 15,  50 => 18,  48 => 18,  41 => 8,  39 => 12,  35 => 6,  33 => 8,  30 => 4,  27 => 6,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 78,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 34,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 30,  90 => 34,  87 => 28,  83 => 24,  79 => 25,  71 => 19,  62 => 11,  58 => 12,  55 => 20,  52 => 19,  49 => 37,  46 => 9,  43 => 13,  40 => 15,  37 => 9,  34 => 7,  31 => 6,  28 => 7,);
    }
}
