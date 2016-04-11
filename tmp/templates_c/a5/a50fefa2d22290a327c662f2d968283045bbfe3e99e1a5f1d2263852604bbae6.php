<?php

/* @SitesManager/measurable_type_settings.twig */
class __TwigTemplate_561769a523910aa55f00c7f1087cde765dd7e33ab9fe39105a4d888e7c2ae18f extends Twig_Template
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
        $context["settingsMacro"] = $this->loadTemplate("settingsMacros.twig", "@SitesManager/measurable_type_settings.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")));
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
        foreach ($context['_seq'] as $context["name"] => $context["setting"]) {
            // line 4
            echo "    <fieldset>
        ";
            // line 5
            echo $context["settingsMacro"]->getsingleSetting($context["setting"], $this->getAttribute($context["loop"], "index", array()));
            echo "
    </fieldset>
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['setting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@SitesManager/measurable_type_settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  41 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import 'settingsMacros.twig' as settingsMacro %}*/
/* */
/* {% for name, setting in settings %}*/
/*     <fieldset>*/
/*         {{ settingsMacro.singleSetting(setting, loop.index) }}*/
/*     </fieldset>*/
/* {% endfor %}*/
/* */
