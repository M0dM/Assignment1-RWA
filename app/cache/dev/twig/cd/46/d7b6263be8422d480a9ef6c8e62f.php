<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_cd46d7b6263be8422d480a9ef6c8e62f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_panel($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if ($this->getContext($context, "tokens")) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tokens"));
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 19
                echo "                    <tr>
                        <td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getContext($context, "elements"), "token"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "token"), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "ip"), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "url"), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "time"), "r"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 27
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 30
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 236,  258 => 235,  255 => 234,  238 => 219,  236 => 218,  51 => 15,  105 => 58,  21 => 3,  84 => 34,  75 => 32,  54 => 16,  226 => 85,  206 => 67,  200 => 65,  190 => 23,  186 => 22,  172 => 18,  167 => 17,  124 => 86,  122 => 85,  95 => 54,  60 => 20,  47 => 14,  38 => 8,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 248,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 21,  175 => 58,  158 => 57,  107 => 58,  101 => 56,  80 => 46,  63 => 21,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 8,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 22,  59 => 14,  45 => 9,  103 => 24,  91 => 20,  74 => 22,  70 => 14,  66 => 22,  89 => 20,  82 => 27,  42 => 13,  223 => 96,  214 => 90,  210 => 88,  203 => 66,  199 => 83,  194 => 24,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 20,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 65,  112 => 43,  102 => 36,  98 => 33,  76 => 45,  73 => 24,  69 => 23,  56 => 13,  32 => 8,  26 => 3,  22 => 2,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 49,  77 => 23,  57 => 22,  29 => 4,  24 => 3,  19 => 2,  68 => 18,  61 => 21,  44 => 12,  20 => 1,  161 => 15,  153 => 50,  150 => 49,  147 => 51,  143 => 9,  137 => 7,  129 => 42,  121 => 47,  118 => 83,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 19,  64 => 17,  53 => 15,  50 => 10,  48 => 18,  41 => 8,  39 => 6,  35 => 7,  33 => 6,  30 => 4,  27 => 3,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 13,  151 => 54,  149 => 11,  141 => 54,  136 => 47,  134 => 50,  131 => 6,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 34,  90 => 28,  87 => 30,  83 => 24,  79 => 23,  71 => 43,  62 => 17,  58 => 17,  55 => 20,  52 => 19,  49 => 16,  46 => 11,  43 => 13,  40 => 11,  37 => 10,  34 => 7,  31 => 6,  28 => 7,);
    }
}
