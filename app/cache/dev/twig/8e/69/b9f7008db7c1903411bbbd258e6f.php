<?php

/* ITBUltimateFrisbeeBundle:Sport:presentation.html.twig */
class __TwigTemplate_8e69b9f7008db7c1903411bbbd258e6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'styleswitcher' => array($this, 'block_styleswitcher'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/js/UFsportPresentation.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 8
    public function block_styleswitcher($context, array $blocks = array())
    {
        // line 9
        echo "\t";
        $this->displayParentBlock("styleswitcher", $context, $blocks);
        echo "
\t<div id=\"adaptSize\">
\t\t<h4>Text size: </h4>
\t\t<select>
\t          <option class=\"textSizeOption\" value=\"1em\">Standard</option>
\t          <option class=\"textSizeOption\" value=\"17px\">Medium</option>
\t          <option class=\"textSizeOption\" value=\"19px\">Large</option>
\t    </select>
    </div>
";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        // line 21
        echo "\t<p class=\"alert alert-info\">Theses informations came from <a href=\"http://en.wikipedia.org/\">http://en.wikipedia.org/</a></p>
\t<div id=\"accordionPlaceholder\">
\t    <h3>Introduction</h3>
\t    <div class=\"content\">
\t    \t<img class=\"descriptionImageLeft\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ultimate.jpg"), "html", null, true);
        echo "\" alt=\"ultimate playing image\"/>
\t        <p>
\t\t        <strong>Ultimate</strong> is a team sport played with a flying disc. The object of the game is to score points by passing the disc to a player in the opposing end zone, similar to an end zone in American football or the in-goal area in rugby. Players may not run with the disc, and must keep a pivot while holding the disc.
\t\t\t\t<br />
\t\t\t\tWhile originally called <strong>ultimate frisbee</strong>, it is now officially called ultimate in many areas because Frisbee is registered as a trademark, albeit genericized, for the line of discs made by the Wham-O toy company. In 2008, there were 4.9 million Ultimate players in the US.
\t        </p>
\t    </div>
\t    <h3>Rules</h3>
\t    <div class=\"content\">
\t        <p>
\t\t        The basic rules of ultimate are as follows:
\t\t        <br /><br />
\t\t\t\tThe two teams begin at opposite end zones and try to advance the disc to the other end zone. The disc is put into play by one team throwing off to the other team. This throw-off is called the <strong>pull</strong>. Once in play, the disc may be advanced only by passing, so the player holding the disc may not move (but may pivot on one foot). If a team successfully advances a disc into the end zone, that team scores a point, the teams swap directions, and the team that scored pulls to the other team.
\t\t\t\t<br /><br />
\t\t\t\tIf a pass is incomplete, intercepted, or caught out of bounds, the opposing team immediately gains possession and tries to move the disc in the other direction. Another way to change possession is that the player holding the disc, called the <strong>thrower</strong>, has a limited time to throw the disc: A defensive player within 3 meters of the thrower may loudly count to 10 (by seconds), and if the disc is not thrown by the time 10 is reached, the defense immediately gains possession. This defensive player is called the <strong>marker</strong>, and the audible count is called the <strong>stall count</strong>.
\t\t\t\t<br /><br />
\t\t\t\tThe game is played until an end condition is reached, typically a time limit or when one team reaches a certain number of points.
\t\t\t\t<br /><br />
\t\t\t\tA USA Ultimate regulation field is 120 yards (110m) by 40 yards (37m), including end zones each 25 yards (23m) deep.
\t        </p>
\t    </div>
\t    <h3>History</h3>
\t    <div class=\"content\">
\t        <p>
\t\t\t\tThe original \"frisbee\" was nothing more than a tin pie plate from the Frisbie Pie Company located in New Haven, CT. It was in the early 1920s that students from Yale started playing catch with these pie tins. Truck drivers for the Frisbie company began throwing the pie tins to passersby, and it eventually became a major activity introduced to soldiers around the country during WWII.
\t\t\t\t<br /><br />
\t\t\t\tIn 1948, a man by the name of Fred Morrison developed a plastic version of the disc which he called the Flying Saucer, and then in 1951, created an improvised version known as the Pluto Platter. The Wham-O Manufacturing Company bought the patent from Morrison in 1955 and renamed it the Frisbee.
\t\t\t\t<br /><br />
\t\t\t\tThe game of Ultimate, derived from Fred Morrison's original product, was invented by Jared Kass and Joel Silver in 1967 at Columbia High School, located in Maplewood, NJ.[6] Its collegiate roots can be traced back to the first ever game played between Rutgers and Princeton in 1972.
\t        </p>
\t    </div>
\t    <h3>Spirit of the game</h3>
\t    <div class=\"content\">
\t    \t<img class=\"descriptionImageLeft\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ultimateSpirit.jpg"), "html", null, true);
        echo "\" alt=\"ultimate playing image\"/>
\t        <p>
\t        \t<br />
\t\t\t\tUltimate is known for its \"Spirit of the Game\", often abbreviated SOTG. Ultimate's self-officiated nature demands a strong spirit of sportsmanship and respect. The following description is from the official Ultimate rules established by USA Ultimate:
\t\t\t\t<br /><br /><br /><br />
\t\t\t</p>
    \t\t<blockquote>
    \t\t\tUltimate has traditionally relied upon a spirit of sportsmanship which places the responsibility for fair play on the player. Highly competitive play is encouraged, but never at the expense of the bond of mutual respect between players, adherence to the agreed upon rules of the game, or the basic joy of play. Protection of these vital elements serves to eliminate adverse conduct from the Ultimate field. Such actions as taunting of opposing players, dangerous aggression, intentional fouling, or other 'win-at-all-costs' behavior are contrary to the spirit of the game and must be avoided by all players.
\t\t\t</blockquote>
\t\t\t<p>
\t\t\t\tMany tournaments give awards for the most spirited team, as voted for by all the teams taking part in the tournament.
\t        </p>
\t    </div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ITBUltimateFrisbeeBundle:Sport:presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 3,  60 => 20,  54 => 14,  279 => 103,  276 => 102,  273 => 101,  267 => 24,  263 => 23,  259 => 22,  254 => 21,  251 => 20,  245 => 18,  240 => 17,  234 => 15,  222 => 11,  216 => 9,  204 => 6,  197 => 122,  195 => 121,  191 => 119,  180 => 94,  172 => 89,  168 => 88,  162 => 84,  154 => 79,  146 => 77,  138 => 72,  111 => 60,  105 => 58,  97 => 54,  38 => 10,  299 => 121,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 13,  220 => 73,  218 => 72,  213 => 8,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 46,  63 => 21,  36 => 5,  156 => 58,  148 => 55,  142 => 50,  140 => 73,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 16,  45 => 9,  103 => 24,  91 => 20,  74 => 22,  70 => 14,  66 => 12,  89 => 20,  82 => 47,  42 => 8,  223 => 96,  214 => 90,  210 => 7,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 101,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 65,  119 => 45,  116 => 62,  112 => 43,  102 => 36,  98 => 33,  76 => 45,  73 => 23,  69 => 25,  56 => 16,  32 => 5,  26 => 3,  22 => 6,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 49,  77 => 23,  57 => 22,  29 => 4,  24 => 2,  19 => 2,  68 => 40,  61 => 18,  44 => 7,  20 => 1,  161 => 63,  153 => 50,  150 => 78,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 64,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 32,  78 => 31,  72 => 26,  64 => 39,  53 => 15,  50 => 15,  48 => 32,  41 => 11,  39 => 10,  35 => 9,  33 => 6,  30 => 3,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 68,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 55,  96 => 34,  93 => 33,  90 => 50,  87 => 37,  83 => 24,  79 => 25,  71 => 19,  62 => 17,  58 => 36,  55 => 14,  52 => 10,  49 => 15,  46 => 11,  43 => 10,  40 => 8,  37 => 6,  34 => 8,  31 => 4,  28 => 3,);
    }
}
