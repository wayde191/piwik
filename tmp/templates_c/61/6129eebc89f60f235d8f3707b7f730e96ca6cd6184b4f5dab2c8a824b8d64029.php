<?php

/* @CoreHome/_javaScriptDisabled.twig */
class __TwigTemplate_5a7aee4b8d4c06a345c98e8f9a82011d489a1d093654f5a770524267ec713879 extends Twig_Template
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
        echo "<noscript>
    <div id=\"javascriptDisabled\">";
        // line 2
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_JavascriptDisabled", "<a href=\"\">", "</a>"));
        echo "</div>
</noscript>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_javaScriptDisabled.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <noscript>*/
/*     <div id="javascriptDisabled">{{ 'CoreHome_JavascriptDisabled'|translate('<a href="">','</a>')|raw }}</div>*/
/* </noscript>*/
/* */
