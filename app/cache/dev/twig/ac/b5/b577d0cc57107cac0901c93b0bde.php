<?php

/* WebProfilerBundle:Profiler:search.html.twig */
class __TwigTemplate_acb5b577d0cc57107cac0901c93b0bde extends Twig_Template
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
        echo "<div class=\"search clearfix\">
    <h3>
        <img style=\"margin: 0 5px 0 0; vertical-align: middle;\" width=\"16\" height=\"16\" alt=\"Search\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/search.png"), "html", null, true);
        echo "\" />
        Search
    </h3>
    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_search"), "html", null, true);
        echo "\" method=\"get\">
        <label for=\"ip\">IP</label>
        <input type=\"text\" name=\"ip\" id=\"ip\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "ip"), "html", null, true);
        echo "\" />
        <div class=\"clear_fix\"></div>
        <label for=\"method\">Method</label>
        <select name=\"method\" id=\"method\">
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "", 1 => "DELETE", 2 => "GET", 3 => "HEAD", 4 => "PATCH", 5 => "POST", 6 => "PUT"));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 13
            echo "                <option";
            echo ((($this->getContext($context, "m") == $this->getContext($context, "method"))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getContext($context, "m"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "        </select>
        <div class=\"clear_fix\"></div>
        <label for=\"url\">URL</label>
        <input type=\"text\" name=\"url\" id=\"url\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
        echo "\" />
        <div class=\"clear_fix\"></div>
        <label for=\"token\">Token</label>
        <input type=\"text\" name=\"token\" id=\"token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" />
        <div class=\"clear_fix\"></div>
        <label for=\"limit\">Limit</label>
        <select name=\"limit\" id=\"limit\">
            ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => 10, 1 => 50, 2 => 100));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 26
            echo "                <option";
            echo ((($this->getContext($context, "l") == $this->getContext($context, "limit"))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getContext($context, "l"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "        </select>

        <button type=\"submit\">
            <span class=\"border_l\">
                <span class=\"border_r\">
                    <span class=\"btn_bg\">SEARCH</span>
                </span>
            </span>
        </button>
        <div class=\"clear_fix\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 236,  258 => 235,  255 => 234,  238 => 219,  236 => 218,  51 => 38,  84 => 34,  75 => 18,  54 => 15,  195 => 22,  190 => 21,  164 => 13,  146 => 7,  133 => 82,  97 => 56,  67 => 43,  21 => 3,  60 => 16,  47 => 10,  38 => 8,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 248,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 81,  202 => 66,  196 => 63,  183 => 61,  181 => 18,  175 => 58,  158 => 11,  107 => 41,  101 => 34,  80 => 24,  63 => 16,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 6,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 21,  59 => 18,  45 => 9,  103 => 58,  91 => 54,  74 => 22,  70 => 14,  66 => 22,  89 => 28,  82 => 23,  42 => 11,  223 => 96,  214 => 90,  210 => 88,  203 => 24,  199 => 23,  194 => 80,  192 => 62,  189 => 78,  187 => 20,  184 => 76,  178 => 72,  170 => 15,  157 => 61,  152 => 9,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 44,  112 => 65,  102 => 36,  98 => 33,  76 => 26,  73 => 24,  69 => 23,  56 => 13,  32 => 8,  26 => 3,  22 => 2,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 36,  77 => 23,  57 => 22,  29 => 4,  24 => 3,  19 => 2,  68 => 13,  61 => 21,  44 => 34,  20 => 1,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 25,  64 => 17,  53 => 15,  50 => 10,  48 => 18,  41 => 8,  39 => 12,  35 => 6,  33 => 5,  30 => 4,  27 => 6,  182 => 70,  176 => 17,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 8,  141 => 54,  136 => 47,  134 => 50,  131 => 81,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 30,  90 => 28,  87 => 28,  83 => 24,  79 => 23,  71 => 19,  62 => 11,  58 => 17,  55 => 20,  52 => 19,  49 => 37,  46 => 9,  43 => 13,  40 => 11,  37 => 10,  34 => 7,  31 => 6,  28 => 7,);
    }
}
