<?php

/* @Doctrine/Collector/db.html.twig */
class __TwigTemplate_9129375ef9f7fdc2bbf71c9a3035abc588d367acf4d8c11b1f2f54fad686a49f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'queries' => array($this, 'block_queries'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("WebProfilerBundle:Profiler:ajax_layout.html.twig") : ("WebProfilerBundle:Profiler:layout.html.twig")), "@Doctrine/Collector/db.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7a93398ea0c977deb5916592908f4b17f4e83dd9fa30e69925ea56089bc0e23 = $this->env->getExtension("native_profiler");
        $__internal_b7a93398ea0c977deb5916592908f4b17f4e83dd9fa30e69925ea56089bc0e23->enter($__internal_b7a93398ea0c977deb5916592908f4b17f4e83dd9fa30e69925ea56089bc0e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Doctrine/Collector/db.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7a93398ea0c977deb5916592908f4b17f4e83dd9fa30e69925ea56089bc0e23->leave($__internal_b7a93398ea0c977deb5916592908f4b17f4e83dd9fa30e69925ea56089bc0e23_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b96264f784d7d51d4c8d54b7629ca7fea64ea2516f0906660b6583a455128d8 = $this->env->getExtension("native_profiler");
        $__internal_3b96264f784d7d51d4c8d54b7629ca7fea64ea2516f0906660b6583a455128d8->enter($__internal_3b96264f784d7d51d4c8d54b7629ca7fea64ea2516f0906660b6583a455128d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
        <span class=\"sf-toolbar-status";
        // line 6
        if ((50 < $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()))) {
            echo " sf-toolbar-status-yellow";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
        echo "</span>
        ";
        // line 7
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()) > 0)) {
            // line 8
            echo "            <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
        ";
        }
        // line 10
        echo "        ";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount", array()) > 0)) {
            // line 11
            echo "            <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 13
        echo "        ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheEnabled", array())) {
            // line 14
            echo "            <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-green\" title=\"Second level cache enabled\">2l cache</span>
        ";
        }
        // line 16
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "    ";
        ob_start();
        // line 18
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>DB Queries</b>
            <span>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query time</b>
            <span>";
        // line 24
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Invalid entities</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 28
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount", array()) > 0)) ? ("red") : ("green"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount", array()), "html", null, true);
        echo "</span>
        </div>
        ";
        // line 30
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheEnabled", array())) {
            // line 31
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Cache hits</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheHitsCount", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Cache misses</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 37
            echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheMissesCount", array()) > 0)) ? ("yellow") : ("green"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheMissesCount", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Cache puts</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 41
            echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cachePutsCount", array()) > 0)) ? ("yellow") : ("green"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cachePutsCount", array()), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 44
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 45
        echo "    ";
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "@Doctrine/Collector/db.html.twig", 45)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
        
        $__internal_3b96264f784d7d51d4c8d54b7629ca7fea64ea2516f0906660b6583a455128d8->leave($__internal_3b96264f784d7d51d4c8d54b7629ca7fea64ea2516f0906660b6583a455128d8_prof);

    }

    // line 48
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c3b8ac56f37c57d64b501fc99eec06330d01a943c6f200dcc586178851ab53e7 = $this->env->getExtension("native_profiler");
        $__internal_c3b8ac56f37c57d64b501fc99eec06330d01a943c6f200dcc586178851ab53e7->enter($__internal_c3b8ac56f37c57d64b501fc99eec06330d01a943c6f200dcc586178851ab53e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 49
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
    <strong>Doctrine</strong>
    <span class=\"count\">
        <span>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
        echo "</span>
        <span>";
        // line 54
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </span>
</span>
";
        
        $__internal_c3b8ac56f37c57d64b501fc99eec06330d01a943c6f200dcc586178851ab53e7->leave($__internal_c3b8ac56f37c57d64b501fc99eec06330d01a943c6f200dcc586178851ab53e7_prof);

    }

    // line 59
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b116f44bb85e9163e63de9397c79456cae3eac9b5b87464962b19076ec05322 = $this->env->getExtension("native_profiler");
        $__internal_8b116f44bb85e9163e63de9397c79456cae3eac9b5b87464962b19076ec05322->enter($__internal_8b116f44bb85e9163e63de9397c79456cae3eac9b5b87464962b19076ec05322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 60
        echo "    ";
        if (("explain" == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
            // line 61
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DoctrineBundle:Profiler:explain", array("token" =>             // line 62
(isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => "db", "connectionName" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 64
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "connection"), "method"), "query" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 65
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "query"), "method"))));
            // line 66
            echo "
    ";
        } else {
            // line 68
            echo "        <div>
            <style scoped=\"scoped\">
                h3 {
                    margin-bottom: 0px;
                }

                pre {
                    padding: 5px;
                }
            </style>

            ";
            // line 79
            $this->displayBlock("queries", $context, $blocks);
            echo "
        </div>
    ";
        }
        
        $__internal_8b116f44bb85e9163e63de9397c79456cae3eac9b5b87464962b19076ec05322->leave($__internal_8b116f44bb85e9163e63de9397c79456cae3eac9b5b87464962b19076ec05322_prof);

    }

    // line 84
    public function block_queries($context, array $blocks = array())
    {
        $__internal_b2a99ad87a5fa21e109ef00828e594cfec798a231c5a0635b6491bbf6f5cfc03 = $this->env->getExtension("native_profiler");
        $__internal_b2a99ad87a5fa21e109ef00828e594cfec798a231c5a0635b6491bbf6f5cfc03->enter($__internal_b2a99ad87a5fa21e109ef00828e594cfec798a231c5a0635b6491bbf6f5cfc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "queries"));

        // line 85
        echo "    <h2>Queries</h2>

    ";
        // line 87
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queries", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
            // line 88
            echo "        <h3>Connection <em>";
            echo twig_escape_filter($this->env, $context["connection"], "html", null, true);
            echo "</em></h3>
        ";
            // line 89
            if (twig_test_empty($context["queries"])) {
                // line 90
                echo "            <p>
                <em>No queries.</em>
            </p>
        ";
            } else {
                // line 94
                echo "            <p>
                <button type=\"button\" class=\"sf-button\" onclick=\"expandAllQueries(this);\" data-action=\"expand\">
                    <span class=\"border-l\">
                        <span class=\"border-r\">
                            <span class=\"btn-bg\">Expand all queries</span>
                        </span>
                    </span>
                </button>
            </p>
            <table class=\"alt\" id=\"queriesPlaceholder-";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                <thead>
                    <tr>
                        <th onclick=\"javascript:sortTable(this, 0, 'queries-";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span>&#9650;</span></th>
                        <th onclick=\"javascript:sortTable(this, 1, 'queries-";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "')\" style=\"cursor: pointer;\">Time<span></span></th>
                        <th style=\"width: 100%;\">Info</th>
                    </tr>
                </thead>
                <tbody id=\"queries-";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                ";
                // line 112
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["queries"]);
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                    // line 113
                    echo "                    <tr id=\"queryNo-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $context["i"]), "html", null, true);
                    echo "\">
                        <td>";
                    // line 114
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 115
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["query"], "executionMS", array()) * 1000)), "html", null, true);
                    echo "&nbsp;ms</td>
                        <td>
                            <div class=\"query-section\" data-state=\"collapsed\" onclick=\"return expandQuery(this);\" title=\"Expand query\" data-target-id=\"code-";
                    // line 117
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" style=\"cursor: pointer;\">
                                <img alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: inline;\" />
                                <img alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: none;\" />
                                <span style=\"display: none\">Shrink query</span>
                                <span id=\"smallcode-";
                    // line 121
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\">
                                    ";
                    // line 122
                    echo twig_escape_filter($this->env, $this->env->getExtension('doctrine_extension')->minifyQuery($this->getAttribute($context["query"], "sql", array())), "html", null, true);
                    echo "
                                </span>
                            </div>
                            <div id=\"code-";
                    // line 125
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" style=\"display: none;\">
                                ";
                    // line 126
                    echo SqlFormatter::format($this->getAttribute($context["query"], "sql", array()), $context["i"], $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()));
                    echo "
                            </div>
                            <span id=\"original-query-";
                    // line 128
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" style=\"display: none;\">
                                ";
                    // line 129
                    echo $this->env->getExtension('doctrine_extension')->replaceQueryParameters($this->getAttribute($context["query"], "sql", array()), $this->getAttribute($context["query"], "params", array()));
                    echo "
                            </span>
                            <small>
                                <strong>Parameters</strong>: ";
                    // line 132
                    echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($context["query"], "params", array())), "html", null, true);
                    echo " <br />
                                [<span id=\"expandParams-";
                    // line 133
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" onclick=\"javascript:toggleRunnableQuery(this);\" data-target-id=\"original-query-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" style=\"cursor: pointer;\">Display runnable query</span>]<br/>
                            </small>

                            ";
                    // line 136
                    if ($this->getAttribute($context["query"], "explainable", array())) {
                        // line 137
                        echo "                                [<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("panel" => "db", "token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "page" => "explain", "connection" => $context["connection"], "query" => $context["i"])), "html", null, true);
                        echo "\" onclick=\"return explain(this);\" style=\"text-decoration: none;\" title=\"Explains the query\" data-target-id=\"explain-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                        echo "\" >
                                    <img alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: inline; width: 12px; height: 12px;\" />
                                    <img alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: none; width: 12px; height: 12px;\" />
                                    <span style=\"vertical-align:top\">Explain query</span>
                                </a>]
                            ";
                    } else {
                        // line 143
                        echo "                                This query cannot be explained
                            ";
                    }
                    // line 145
                    echo "
                            ";
                    // line 146
                    if ($this->getAttribute($context["query"], "explainable", array())) {
                        // line 147
                        echo "                                <div id=\"explain-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                        echo "\" class=\"loading\"></div>
                            ";
                    }
                    // line 149
                    echo "                        </td>
                    </tr>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                echo "                </tbody>
            </table>
        ";
            }
            // line 155
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "
    <h2>Database Connections</h2>

    ";
        // line 159
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "connections", array())) {
            // line 160
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:table.html.twig", "@Doctrine/Collector/db.html.twig", 160)->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "connections", array())));
            // line 161
            echo "    ";
        } else {
            // line 162
            echo "        <p>
            <em>No connections.</em>
        </p>
    ";
        }
        // line 166
        echo "
    <h2>Entity Managers</h2>

    ";
        // line 169
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "managers", array())) {
            // line 170
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:table.html.twig", "@Doctrine/Collector/db.html.twig", 170)->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "managers", array())));
            // line 171
            echo "    ";
        } else {
            // line 172
            echo "        <p>
            <em>No entity managers.</em>
        </p>
    ";
        }
        // line 176
        echo "
    <h2>Second Level Cache</h2>

    ";
        // line 179
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheCounts", array())) {
            // line 180
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:table.html.twig", "@Doctrine/Collector/db.html.twig", 180)->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheCounts", array())));
            // line 181
            echo "
        ";
            // line 182
            if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheRegions", array()), "hits", array())) {
                // line 183
                echo "            <h3>Number of cache hits</h3>
            ";
                // line 184
                $this->loadTemplate("WebProfilerBundle:Profiler:table.html.twig", "@Doctrine/Collector/db.html.twig", 184)->display(array("data" => $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheRegions", array()), "hits", array())));
                // line 185
                echo "        ";
            }
            // line 186
            echo "
        ";
            // line 187
            if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheRegions", array()), "misses", array())) {
                // line 188
                echo "            <h3>Number of cache misses</h3>
            ";
                // line 189
                $this->loadTemplate("WebProfilerBundle:Profiler:table.html.twig", "@Doctrine/Collector/db.html.twig", 189)->display(array("data" => $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheRegions", array()), "misses", array())));
                // line 190
                echo "        ";
            }
            // line 191
            echo "
        ";
            // line 192
            if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheRegions", array()), "puts", array())) {
                // line 193
                echo "            <h3>Number of cache puts</h3>
            ";
                // line 194
                $this->loadTemplate("WebProfilerBundle:Profiler:table.html.twig", "@Doctrine/Collector/db.html.twig", 194)->display(array("data" => $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheRegions", array()), "puts", array())));
                // line 195
                echo "        ";
            }
            // line 196
            echo "    ";
        } else {
            // line 197
            echo "        <p>
            <em>No cache.</em>
        </p>
    ";
        }
        // line 201
        echo "
    <h2>Mapping</h2>

    ";
        // line 204
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "entities", array()));
        foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
            // line 205
            echo "        <h3>Manager <em>";
            echo twig_escape_filter($this->env, $context["manager"], "html", null, true);
            echo "</em></h3>
        ";
            // line 206
            if (twig_test_empty($context["classes"])) {
                // line 207
                echo "            <p><em>No loaded entities.</em></p>
        ";
            } else {
                // line 209
                echo "            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Class</th>
                    <th scope=\"col\">Mapping errors</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 217
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["classes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                    // line 218
                    echo "                    <tr>
                        <td>";
                    // line 219
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "</td>
                        <td>
                            ";
                    // line 221
                    if (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "mappingErrors", array(), "any", false, true), $context["manager"], array(), "array", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "mappingErrors", array(), "any", false, true), $context["manager"], array(), "array", false, true), $context["class"], array(), "array", true, true))) {
                        // line 222
                        echo "                                <ul>
                                    ";
                        // line 223
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "mappingErrors", array()), $context["manager"], array(), "array"), $context["class"], array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 224
                            echo "                                        <li>";
                            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 226
                        echo "                                </ul>
                            ";
                    } else {
                        // line 228
                        echo "                                Valid
                            ";
                    }
                    // line 230
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 233
                echo "                </tbody>
            </table>
        ";
            }
            // line 236
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var imgs = link.children,
                target = link.getAttribute('data-target-id');

            Sfjs.toggle(target, imgs[0], imgs[1])
                .load(
                    target,
                    link.href,
                    null,
                    function(xhr, el) {
                        el.innerHTML = 'An error occurred while loading the details';
                        Sfjs.removeClass(el, 'loading');
                    }
                );

            return false;
        }

        function expandAllQueries(button) {
            var queries = document.getElementsByClassName('query-section'),
                i = queries.length,
                action = button.getAttribute('data-action');

            if (action == 'expand') {
                button.getElementsByClassName('btn-bg')[0].innerHTML = 'Collapse all queries';

                while (i--) {
                    if (queries[i].getAttribute('data-state') == 'collapsed') {
                        expandQuery(queries[i]);
                    }
                }
            } else {
                button.getElementsByClassName('btn-bg')[0].innerHTML = 'Expand all queries';

                while (i--) {
                    if (queries[i].getAttribute('data-state') == 'expanded') {
                        expandQuery(queries[i]);
                    }
                }
            }

            button.setAttribute('data-action', action == 'expand' ? 'collapse' : 'expand');
        }

        function expandQuery(link) {
            var sections = link.children,
                target = link.getAttribute('data-target-id'),
                targetId = target.replace('code', ''),
                queriesParameters = document.getElementById('original-query' + targetId);

            if (queriesParameters.style.display != 'none') {
                queriesParameters.style.display = 'none';
                document.getElementById('small' + target).style.display = 'inline';
                document.getElementById('expandParams' + targetId).innerHTML = 'Display runnable query';
            }

            if (document.getElementById('small' + target).style.display != 'none') {
                document.getElementById('small' + target).style.display = 'none';
                document.getElementById(target).style.display = 'inline';

                sections[0].style.display = 'none';
                sections[1].style.display = 'inline';
                sections[2].style.display = 'inline';

                link.setAttribute('data-state', 'expanded');
            } else {
                document.getElementById('small' + target).style.display = 'inline';
                document.getElementById(target).style.display = 'none';

                sections[0].style.display = 'inline';
                sections[1].style.display = 'none';
                sections[2].style.display = 'none';

                link.setAttribute('data-state', 'collapsed');
            }

            return false;
        }

        function toggleRunnableQuery(target) {
            var targetId = target.getAttribute('data-target-id').replace('original-query', ''),
                targetElement = document.getElementById(target.getAttribute('data-target-id')),
                elem;

            if (targetElement.style.display != 'block') {
                targetElement.style.display = 'block';
                target.innerHTML = 'Hide runnable query';

                document.getElementById('smallcode' + targetId).style.display = 'none';
                document.getElementById('code' + targetId).style.display = 'none';

                elem = document.getElementById('code' + targetId).parentElement.children[0];

                elem.children[0].style.display = 'inline';
                elem.children[1].style.display = 'none';
                elem.children[2].style.display = 'none';

            } else {
                targetElement.style.display = 'none';
                target.innerHTML = 'Display runnable query';

                document.getElementById('smallcode' + targetId).style.display = 'inline';
            }
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '&#9650;' : '&#9660;';

            items.sort(function(a, b) {
                return direction*(parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

    //]]></script>
";
        
        $__internal_b2a99ad87a5fa21e109ef00828e594cfec798a231c5a0635b6491bbf6f5cfc03->leave($__internal_b2a99ad87a5fa21e109ef00828e594cfec798a231c5a0635b6491bbf6f5cfc03_prof);

    }

    public function getTemplateName()
    {
        return "@Doctrine/Collector/db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 237,  634 => 236,  629 => 233,  621 => 230,  617 => 228,  613 => 226,  604 => 224,  600 => 223,  597 => 222,  595 => 221,  590 => 219,  587 => 218,  583 => 217,  573 => 209,  569 => 207,  567 => 206,  562 => 205,  558 => 204,  553 => 201,  547 => 197,  544 => 196,  541 => 195,  539 => 194,  536 => 193,  534 => 192,  531 => 191,  528 => 190,  526 => 189,  523 => 188,  521 => 187,  518 => 186,  515 => 185,  513 => 184,  510 => 183,  508 => 182,  505 => 181,  502 => 180,  500 => 179,  495 => 176,  489 => 172,  486 => 171,  483 => 170,  481 => 169,  476 => 166,  470 => 162,  467 => 161,  464 => 160,  462 => 159,  457 => 156,  443 => 155,  438 => 152,  422 => 149,  414 => 147,  412 => 146,  409 => 145,  405 => 143,  391 => 137,  389 => 136,  377 => 133,  373 => 132,  367 => 129,  361 => 128,  356 => 126,  350 => 125,  344 => 122,  338 => 121,  329 => 117,  324 => 115,  320 => 114,  311 => 113,  294 => 112,  290 => 111,  283 => 107,  279 => 106,  273 => 103,  262 => 94,  256 => 90,  254 => 89,  249 => 88,  232 => 87,  228 => 85,  222 => 84,  211 => 79,  198 => 68,  194 => 66,  192 => 65,  191 => 64,  190 => 62,  188 => 61,  185 => 60,  179 => 59,  168 => 54,  164 => 53,  158 => 49,  152 => 48,  144 => 45,  141 => 44,  133 => 41,  124 => 37,  117 => 33,  113 => 31,  111 => 30,  104 => 28,  97 => 24,  90 => 20,  86 => 18,  83 => 17,  80 => 16,  76 => 14,  73 => 13,  67 => 11,  64 => 10,  58 => 8,  56 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  21 => 1,);
    }
}
