<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_1a8c07d0c23b1ab0f7e46188394c84d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->env->loadTemplate("WebProfilerBundle:Profiler:header.html.twig")->display(array());
        // line 6
        echo "
        <div id=\"main\">
            <div class=\"clear_fix\">
                <div id=\"collector_wrapper\">
                    <div id=\"collector_content\">
                        ";
        // line 11
        $this->displayBlock('panel', $context, $blocks);
        // line 34
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Profiler:searchBar", array("token" => ""), array());
        // line 38
        echo "                    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:admin.html.twig")->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        // line 12
        echo "                            ";
        if (($this->getContext($context, "about") == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif (($this->getContext($context, "about") == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif (($this->getContext($context, "about") == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif (($this->getContext($context, "about") == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 236,  258 => 235,  255 => 234,  238 => 219,  236 => 218,  51 => 38,  105 => 58,  21 => 3,  84 => 34,  75 => 18,  54 => 39,  277 => 110,  257 => 92,  254 => 91,  251 => 90,  245 => 24,  241 => 23,  237 => 22,  232 => 21,  229 => 20,  212 => 15,  206 => 13,  200 => 11,  191 => 8,  188 => 7,  173 => 110,  167 => 90,  146 => 77,  97 => 54,  88 => 51,  60 => 20,  47 => 14,  38 => 8,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 248,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 17,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 111,  158 => 83,  107 => 41,  101 => 34,  80 => 24,  63 => 21,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 74,  127 => 45,  123 => 44,  115 => 63,  110 => 61,  85 => 28,  65 => 12,  59 => 14,  45 => 9,  103 => 57,  91 => 20,  74 => 22,  70 => 14,  66 => 22,  89 => 28,  82 => 23,  42 => 11,  223 => 18,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 9,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 67,  119 => 45,  116 => 44,  112 => 62,  102 => 36,  98 => 33,  76 => 4,  73 => 24,  69 => 23,  56 => 13,  32 => 8,  26 => 3,  22 => 2,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 27,  77 => 46,  57 => 14,  29 => 4,  24 => 3,  19 => 2,  68 => 13,  61 => 21,  44 => 34,  20 => 1,  161 => 63,  153 => 50,  150 => 78,  147 => 51,  143 => 46,  137 => 73,  129 => 68,  121 => 66,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 19,  64 => 17,  53 => 15,  50 => 10,  48 => 18,  41 => 8,  39 => 6,  35 => 6,  33 => 5,  30 => 4,  27 => 3,  182 => 6,  176 => 71,  169 => 108,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 30,  90 => 28,  87 => 30,  83 => 49,  79 => 23,  71 => 19,  62 => 11,  58 => 17,  55 => 20,  52 => 19,  49 => 37,  46 => 11,  43 => 13,  40 => 11,  37 => 10,  34 => 7,  31 => 6,  28 => 7,);
    }
}
