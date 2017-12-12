<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_37a2b8842ee708c26f6fa6e486014cd70fc5b8eb23a3963d7365c6bde6c61abc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebd7a8a3e6d80719f131631adda400594d7975f30fadc867dafbb68d7dd9cfec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd7a8a3e6d80719f131631adda400594d7975f30fadc867dafbb68d7dd9cfec->enter($__internal_ebd7a8a3e6d80719f131631adda400594d7975f30fadc867dafbb68d7dd9cfec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_9dfd0a70590087a547e134392ba0bbc2a723eea8019ec843fef49e0c2f524fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dfd0a70590087a547e134392ba0bbc2a723eea8019ec843fef49e0c2f524fc9->enter($__internal_9dfd0a70590087a547e134392ba0bbc2a723eea8019ec843fef49e0c2f524fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_ebd7a8a3e6d80719f131631adda400594d7975f30fadc867dafbb68d7dd9cfec->leave($__internal_ebd7a8a3e6d80719f131631adda400594d7975f30fadc867dafbb68d7dd9cfec_prof);

        
        $__internal_9dfd0a70590087a547e134392ba0bbc2a723eea8019ec843fef49e0c2f524fc9->leave($__internal_9dfd0a70590087a547e134392ba0bbc2a723eea8019ec843fef49e0c2f524fc9_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_caeb8c6ee75ad1a4108868e1f6d8742c35fd7ce4f03e399b1cf2e18d0eeaadf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caeb8c6ee75ad1a4108868e1f6d8742c35fd7ce4f03e399b1cf2e18d0eeaadf5->enter($__internal_caeb8c6ee75ad1a4108868e1f6d8742c35fd7ce4f03e399b1cf2e18d0eeaadf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_f628f25ebca9f362fae183445981cc0b599dba059541793fbe15d185619fdd64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f628f25ebca9f362fae183445981cc0b599dba059541793fbe15d185619fdd64->enter($__internal_f628f25ebca9f362fae183445981cc0b599dba059541793fbe15d185619fdd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f628f25ebca9f362fae183445981cc0b599dba059541793fbe15d185619fdd64->leave($__internal_f628f25ebca9f362fae183445981cc0b599dba059541793fbe15d185619fdd64_prof);

        
        $__internal_caeb8c6ee75ad1a4108868e1f6d8742c35fd7ce4f03e399b1cf2e18d0eeaadf5->leave($__internal_caeb8c6ee75ad1a4108868e1f6d8742c35fd7ce4f03e399b1cf2e18d0eeaadf5_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_9d1064c51fde188272d3c4dc37d0513a73407d3ecf119ebd2cc1e7e48ea8ada1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d1064c51fde188272d3c4dc37d0513a73407d3ecf119ebd2cc1e7e48ea8ada1->enter($__internal_9d1064c51fde188272d3c4dc37d0513a73407d3ecf119ebd2cc1e7e48ea8ada1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_d92fc677c4c6dd2a906833a46f780fde256323a23ff8d33fc9196bd102071011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92fc677c4c6dd2a906833a46f780fde256323a23ff8d33fc9196bd102071011->enter($__internal_d92fc677c4c6dd2a906833a46f780fde256323a23ff8d33fc9196bd102071011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_d92fc677c4c6dd2a906833a46f780fde256323a23ff8d33fc9196bd102071011->leave($__internal_d92fc677c4c6dd2a906833a46f780fde256323a23ff8d33fc9196bd102071011_prof);

        
        $__internal_9d1064c51fde188272d3c4dc37d0513a73407d3ecf119ebd2cc1e7e48ea8ada1->leave($__internal_9d1064c51fde188272d3c4dc37d0513a73407d3ecf119ebd2cc1e7e48ea8ada1_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_67b05509da52c16853a788b9746c6672c7bfcbc0e78a6ef232580696839e3965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b05509da52c16853a788b9746c6672c7bfcbc0e78a6ef232580696839e3965->enter($__internal_67b05509da52c16853a788b9746c6672c7bfcbc0e78a6ef232580696839e3965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_e14fda626b396afb55f53449bee69a59144787c68d1d188079bbb12171a48aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14fda626b396afb55f53449bee69a59144787c68d1d188079bbb12171a48aeb->enter($__internal_e14fda626b396afb55f53449bee69a59144787c68d1d188079bbb12171a48aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_e14fda626b396afb55f53449bee69a59144787c68d1d188079bbb12171a48aeb->leave($__internal_e14fda626b396afb55f53449bee69a59144787c68d1d188079bbb12171a48aeb_prof);

        
        $__internal_67b05509da52c16853a788b9746c6672c7bfcbc0e78a6ef232580696839e3965->leave($__internal_67b05509da52c16853a788b9746c6672c7bfcbc0e78a6ef232580696839e3965_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_c01ba52ab8e78dbb344e654a692dfb483672655ea2d5b14e63df70e1717b3d87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c01ba52ab8e78dbb344e654a692dfb483672655ea2d5b14e63df70e1717b3d87->enter($__internal_c01ba52ab8e78dbb344e654a692dfb483672655ea2d5b14e63df70e1717b3d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_e97dea09bc1eb90d202eff24a8ae0c8e6b0dac3e88189805a39e13e00d12234e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97dea09bc1eb90d202eff24a8ae0c8e6b0dac3e88189805a39e13e00d12234e->enter($__internal_e97dea09bc1eb90d202eff24a8ae0c8e6b0dac3e88189805a39e13e00d12234e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_035e85544e564acf545ec8fb840371670b17d7220086490d130343ab8113e4a9 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_493bcc20f5f7b760243020bf5bfadd4d0b2af0a1a94eb8f6a023046309aba947 = "{{") && ('' === $__internal_493bcc20f5f7b760243020bf5bfadd4d0b2af0a1a94eb8f6a023046309aba947 || 0 === strpos($__internal_035e85544e564acf545ec8fb840371670b17d7220086490d130343ab8113e4a9, $__internal_493bcc20f5f7b760243020bf5bfadd4d0b2af0a1a94eb8f6a023046309aba947)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_e97dea09bc1eb90d202eff24a8ae0c8e6b0dac3e88189805a39e13e00d12234e->leave($__internal_e97dea09bc1eb90d202eff24a8ae0c8e6b0dac3e88189805a39e13e00d12234e_prof);

        
        $__internal_c01ba52ab8e78dbb344e654a692dfb483672655ea2d5b14e63df70e1717b3d87->leave($__internal_c01ba52ab8e78dbb344e654a692dfb483672655ea2d5b14e63df70e1717b3d87_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_f714044365127c75740d6c2dc73152e1723e46094e3426f3c9076656ad796bb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f714044365127c75740d6c2dc73152e1723e46094e3426f3c9076656ad796bb4->enter($__internal_f714044365127c75740d6c2dc73152e1723e46094e3426f3c9076656ad796bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_02a23ce4c99d59fcfd24501fcf46627f38c9b32ba13eac8263b143ca95974d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a23ce4c99d59fcfd24501fcf46627f38c9b32ba13eac8263b143ca95974d97->enter($__internal_02a23ce4c99d59fcfd24501fcf46627f38c9b32ba13eac8263b143ca95974d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_02a23ce4c99d59fcfd24501fcf46627f38c9b32ba13eac8263b143ca95974d97->leave($__internal_02a23ce4c99d59fcfd24501fcf46627f38c9b32ba13eac8263b143ca95974d97_prof);

        
        $__internal_f714044365127c75740d6c2dc73152e1723e46094e3426f3c9076656ad796bb4->leave($__internal_f714044365127c75740d6c2dc73152e1723e46094e3426f3c9076656ad796bb4_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_62be8c88f134ef627ecadfda66934ba84c15902c913f3f0feb13cf199c4948ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62be8c88f134ef627ecadfda66934ba84c15902c913f3f0feb13cf199c4948ab->enter($__internal_62be8c88f134ef627ecadfda66934ba84c15902c913f3f0feb13cf199c4948ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_5e0c24f42a97426c04493c2c9279497a0ecc73f615ff6d2f7cb3fcb41d50867a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0c24f42a97426c04493c2c9279497a0ecc73f615ff6d2f7cb3fcb41d50867a->enter($__internal_5e0c24f42a97426c04493c2c9279497a0ecc73f615ff6d2f7cb3fcb41d50867a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_5e0c24f42a97426c04493c2c9279497a0ecc73f615ff6d2f7cb3fcb41d50867a->leave($__internal_5e0c24f42a97426c04493c2c9279497a0ecc73f615ff6d2f7cb3fcb41d50867a_prof);

        
        $__internal_62be8c88f134ef627ecadfda66934ba84c15902c913f3f0feb13cf199c4948ab->leave($__internal_62be8c88f134ef627ecadfda66934ba84c15902c913f3f0feb13cf199c4948ab_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_5183b7624865f42e9200e5edb3fa387e4bc846c6f14d3425cafbde2336aa4015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5183b7624865f42e9200e5edb3fa387e4bc846c6f14d3425cafbde2336aa4015->enter($__internal_5183b7624865f42e9200e5edb3fa387e4bc846c6f14d3425cafbde2336aa4015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_c0cccc88526500a84f0b302b54d33ae8669c0e46f0531aca1362cb29ce5c08d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0cccc88526500a84f0b302b54d33ae8669c0e46f0531aca1362cb29ce5c08d5->enter($__internal_c0cccc88526500a84f0b302b54d33ae8669c0e46f0531aca1362cb29ce5c08d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_c0cccc88526500a84f0b302b54d33ae8669c0e46f0531aca1362cb29ce5c08d5->leave($__internal_c0cccc88526500a84f0b302b54d33ae8669c0e46f0531aca1362cb29ce5c08d5_prof);

        
        $__internal_5183b7624865f42e9200e5edb3fa387e4bc846c6f14d3425cafbde2336aa4015->leave($__internal_5183b7624865f42e9200e5edb3fa387e4bc846c6f14d3425cafbde2336aa4015_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_e16a5b6be8084e3f3dd3e11a4488d3945ba694e6a8721722eb07dbde5f7a2830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e16a5b6be8084e3f3dd3e11a4488d3945ba694e6a8721722eb07dbde5f7a2830->enter($__internal_e16a5b6be8084e3f3dd3e11a4488d3945ba694e6a8721722eb07dbde5f7a2830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_a4b41b44aff7c9ac8ab47506407c869a898dbd7d0808b1a8103b77b62b272a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b41b44aff7c9ac8ab47506407c869a898dbd7d0808b1a8103b77b62b272a0c->enter($__internal_a4b41b44aff7c9ac8ab47506407c869a898dbd7d0808b1a8103b77b62b272a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_a4b41b44aff7c9ac8ab47506407c869a898dbd7d0808b1a8103b77b62b272a0c->leave($__internal_a4b41b44aff7c9ac8ab47506407c869a898dbd7d0808b1a8103b77b62b272a0c_prof);

        
        $__internal_e16a5b6be8084e3f3dd3e11a4488d3945ba694e6a8721722eb07dbde5f7a2830->leave($__internal_e16a5b6be8084e3f3dd3e11a4488d3945ba694e6a8721722eb07dbde5f7a2830_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_b24fa3f6a607ef9db1836cdd5bac726bf281fea24dbdd2ae26278c5e246303a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b24fa3f6a607ef9db1836cdd5bac726bf281fea24dbdd2ae26278c5e246303a4->enter($__internal_b24fa3f6a607ef9db1836cdd5bac726bf281fea24dbdd2ae26278c5e246303a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_b01524640485cd95fcf82c816c61b1f82ba92540c800145761747e7a129411e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b01524640485cd95fcf82c816c61b1f82ba92540c800145761747e7a129411e5->enter($__internal_b01524640485cd95fcf82c816c61b1f82ba92540c800145761747e7a129411e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_b01524640485cd95fcf82c816c61b1f82ba92540c800145761747e7a129411e5->leave($__internal_b01524640485cd95fcf82c816c61b1f82ba92540c800145761747e7a129411e5_prof);

        
        $__internal_b24fa3f6a607ef9db1836cdd5bac726bf281fea24dbdd2ae26278c5e246303a4->leave($__internal_b24fa3f6a607ef9db1836cdd5bac726bf281fea24dbdd2ae26278c5e246303a4_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_a3a9614dea5c8805798b4cfe14582e7049760cf6193ca22c3114d671158b8570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3a9614dea5c8805798b4cfe14582e7049760cf6193ca22c3114d671158b8570->enter($__internal_a3a9614dea5c8805798b4cfe14582e7049760cf6193ca22c3114d671158b8570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_f404d45fc4d320a60a3f9a3783ae737b8c62debbc9e4f82d2b4e64f5f0a87152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f404d45fc4d320a60a3f9a3783ae737b8c62debbc9e4f82d2b4e64f5f0a87152->enter($__internal_f404d45fc4d320a60a3f9a3783ae737b8c62debbc9e4f82d2b4e64f5f0a87152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_f404d45fc4d320a60a3f9a3783ae737b8c62debbc9e4f82d2b4e64f5f0a87152->leave($__internal_f404d45fc4d320a60a3f9a3783ae737b8c62debbc9e4f82d2b4e64f5f0a87152_prof);

        
        $__internal_a3a9614dea5c8805798b4cfe14582e7049760cf6193ca22c3114d671158b8570->leave($__internal_a3a9614dea5c8805798b4cfe14582e7049760cf6193ca22c3114d671158b8570_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_f9c0ce4fbfeb0da4319168713e76de2b9d9016f19eb86a9fdc1a20c48f9540f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c0ce4fbfeb0da4319168713e76de2b9d9016f19eb86a9fdc1a20c48f9540f9->enter($__internal_f9c0ce4fbfeb0da4319168713e76de2b9d9016f19eb86a9fdc1a20c48f9540f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_9b6db98666aec874f562c08d724285e6dfaae668a018515464284831dd492667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b6db98666aec874f562c08d724285e6dfaae668a018515464284831dd492667->enter($__internal_9b6db98666aec874f562c08d724285e6dfaae668a018515464284831dd492667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_9b6db98666aec874f562c08d724285e6dfaae668a018515464284831dd492667->leave($__internal_9b6db98666aec874f562c08d724285e6dfaae668a018515464284831dd492667_prof);

        
        $__internal_f9c0ce4fbfeb0da4319168713e76de2b9d9016f19eb86a9fdc1a20c48f9540f9->leave($__internal_f9c0ce4fbfeb0da4319168713e76de2b9d9016f19eb86a9fdc1a20c48f9540f9_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_6855e5728d88aa0cb4eedd4077b24f9bc65b45199bb7d044899bfad427e608d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6855e5728d88aa0cb4eedd4077b24f9bc65b45199bb7d044899bfad427e608d5->enter($__internal_6855e5728d88aa0cb4eedd4077b24f9bc65b45199bb7d044899bfad427e608d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_a216479ba9a68f5f21303c4493ad7bd90df5df66c0de5c2098e75097ebfc8219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a216479ba9a68f5f21303c4493ad7bd90df5df66c0de5c2098e75097ebfc8219->enter($__internal_a216479ba9a68f5f21303c4493ad7bd90df5df66c0de5c2098e75097ebfc8219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_a216479ba9a68f5f21303c4493ad7bd90df5df66c0de5c2098e75097ebfc8219->leave($__internal_a216479ba9a68f5f21303c4493ad7bd90df5df66c0de5c2098e75097ebfc8219_prof);

        
        $__internal_6855e5728d88aa0cb4eedd4077b24f9bc65b45199bb7d044899bfad427e608d5->leave($__internal_6855e5728d88aa0cb4eedd4077b24f9bc65b45199bb7d044899bfad427e608d5_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_423f5c40f3ce070010d897274df134f79e7448d7313a2d18e0e32dc1ca211844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_423f5c40f3ce070010d897274df134f79e7448d7313a2d18e0e32dc1ca211844->enter($__internal_423f5c40f3ce070010d897274df134f79e7448d7313a2d18e0e32dc1ca211844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_7f2787b29dd3b73225b33c64c050b0e5cd8e5d3b09380303a6c6ee64d783e4b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2787b29dd3b73225b33c64c050b0e5cd8e5d3b09380303a6c6ee64d783e4b5->enter($__internal_7f2787b29dd3b73225b33c64c050b0e5cd8e5d3b09380303a6c6ee64d783e4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_7f2787b29dd3b73225b33c64c050b0e5cd8e5d3b09380303a6c6ee64d783e4b5->leave($__internal_7f2787b29dd3b73225b33c64c050b0e5cd8e5d3b09380303a6c6ee64d783e4b5_prof);

        
        $__internal_423f5c40f3ce070010d897274df134f79e7448d7313a2d18e0e32dc1ca211844->leave($__internal_423f5c40f3ce070010d897274df134f79e7448d7313a2d18e0e32dc1ca211844_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_14674cfed68b6ae15857544e164a371e5a7e458d97301c25e996c9543e31121b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14674cfed68b6ae15857544e164a371e5a7e458d97301c25e996c9543e31121b->enter($__internal_14674cfed68b6ae15857544e164a371e5a7e458d97301c25e996c9543e31121b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_5e088c4ab005cb384bfb910e15783d03990065ae18c6661289191e24fdaa2e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e088c4ab005cb384bfb910e15783d03990065ae18c6661289191e24fdaa2e02->enter($__internal_5e088c4ab005cb384bfb910e15783d03990065ae18c6661289191e24fdaa2e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_5e088c4ab005cb384bfb910e15783d03990065ae18c6661289191e24fdaa2e02->leave($__internal_5e088c4ab005cb384bfb910e15783d03990065ae18c6661289191e24fdaa2e02_prof);

        
        $__internal_14674cfed68b6ae15857544e164a371e5a7e458d97301c25e996c9543e31121b->leave($__internal_14674cfed68b6ae15857544e164a371e5a7e458d97301c25e996c9543e31121b_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_db01dff5d3d262970db533311de7d213e2b0ae146fe0e6b77bf21ca48663b2a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db01dff5d3d262970db533311de7d213e2b0ae146fe0e6b77bf21ca48663b2a3->enter($__internal_db01dff5d3d262970db533311de7d213e2b0ae146fe0e6b77bf21ca48663b2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_1bb23c37e3341303367708c3ccbb798a0e07b84017f482eb6f4eea9de7ab5a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb23c37e3341303367708c3ccbb798a0e07b84017f482eb6f4eea9de7ab5a1f->enter($__internal_1bb23c37e3341303367708c3ccbb798a0e07b84017f482eb6f4eea9de7ab5a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_1bb23c37e3341303367708c3ccbb798a0e07b84017f482eb6f4eea9de7ab5a1f->leave($__internal_1bb23c37e3341303367708c3ccbb798a0e07b84017f482eb6f4eea9de7ab5a1f_prof);

        
        $__internal_db01dff5d3d262970db533311de7d213e2b0ae146fe0e6b77bf21ca48663b2a3->leave($__internal_db01dff5d3d262970db533311de7d213e2b0ae146fe0e6b77bf21ca48663b2a3_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_7eeb63cdaffba70aa96c9537afbef7a4c9047c57c622572a85c11e44c9aa3a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eeb63cdaffba70aa96c9537afbef7a4c9047c57c622572a85c11e44c9aa3a67->enter($__internal_7eeb63cdaffba70aa96c9537afbef7a4c9047c57c622572a85c11e44c9aa3a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_c2ac99fbb88c58f4e7800af9af931ab7cfa4ab93823c8d712a93a999d11b885c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ac99fbb88c58f4e7800af9af931ab7cfa4ab93823c8d712a93a999d11b885c->enter($__internal_c2ac99fbb88c58f4e7800af9af931ab7cfa4ab93823c8d712a93a999d11b885c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c2ac99fbb88c58f4e7800af9af931ab7cfa4ab93823c8d712a93a999d11b885c->leave($__internal_c2ac99fbb88c58f4e7800af9af931ab7cfa4ab93823c8d712a93a999d11b885c_prof);

        
        $__internal_7eeb63cdaffba70aa96c9537afbef7a4c9047c57c622572a85c11e44c9aa3a67->leave($__internal_7eeb63cdaffba70aa96c9537afbef7a4c9047c57c622572a85c11e44c9aa3a67_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_91f98486317ae20195540e29668993356d8f03a5b65f982015177a8f855e824f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f98486317ae20195540e29668993356d8f03a5b65f982015177a8f855e824f->enter($__internal_91f98486317ae20195540e29668993356d8f03a5b65f982015177a8f855e824f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_256a828ccf735024bcaa4de2ea8c376be3e27c8bf9bc341fd6e256cf361b938d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256a828ccf735024bcaa4de2ea8c376be3e27c8bf9bc341fd6e256cf361b938d->enter($__internal_256a828ccf735024bcaa4de2ea8c376be3e27c8bf9bc341fd6e256cf361b938d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_256a828ccf735024bcaa4de2ea8c376be3e27c8bf9bc341fd6e256cf361b938d->leave($__internal_256a828ccf735024bcaa4de2ea8c376be3e27c8bf9bc341fd6e256cf361b938d_prof);

        
        $__internal_91f98486317ae20195540e29668993356d8f03a5b65f982015177a8f855e824f->leave($__internal_91f98486317ae20195540e29668993356d8f03a5b65f982015177a8f855e824f_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_065abf9395962dbf2044451e515f0b0519f29f59b4b0b425470ea121335f33a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_065abf9395962dbf2044451e515f0b0519f29f59b4b0b425470ea121335f33a1->enter($__internal_065abf9395962dbf2044451e515f0b0519f29f59b4b0b425470ea121335f33a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_b9b0f53990d78550b559fd0cd8055a891c129633cec9c56a5841e5ac1012b30f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b0f53990d78550b559fd0cd8055a891c129633cec9c56a5841e5ac1012b30f->enter($__internal_b9b0f53990d78550b559fd0cd8055a891c129633cec9c56a5841e5ac1012b30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 209
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_b9b0f53990d78550b559fd0cd8055a891c129633cec9c56a5841e5ac1012b30f->leave($__internal_b9b0f53990d78550b559fd0cd8055a891c129633cec9c56a5841e5ac1012b30f_prof);

        
        $__internal_065abf9395962dbf2044451e515f0b0519f29f59b4b0b425470ea121335f33a1->leave($__internal_065abf9395962dbf2044451e515f0b0519f29f59b4b0b425470ea121335f33a1_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_05bcc3dcaf2c7d5d1890352af077ef2696ff53ee794cbf1b9c574c146520561c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05bcc3dcaf2c7d5d1890352af077ef2696ff53ee794cbf1b9c574c146520561c->enter($__internal_05bcc3dcaf2c7d5d1890352af077ef2696ff53ee794cbf1b9c574c146520561c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1cb016e193d299f55427974e0923684b272365d3eb3e8a02d521685de6f98bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb016e193d299f55427974e0923684b272365d3eb3e8a02d521685de6f98bf7->enter($__internal_1cb016e193d299f55427974e0923684b272365d3eb3e8a02d521685de6f98bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_1cb016e193d299f55427974e0923684b272365d3eb3e8a02d521685de6f98bf7->leave($__internal_1cb016e193d299f55427974e0923684b272365d3eb3e8a02d521685de6f98bf7_prof);

        
        $__internal_05bcc3dcaf2c7d5d1890352af077ef2696ff53ee794cbf1b9c574c146520561c->leave($__internal_05bcc3dcaf2c7d5d1890352af077ef2696ff53ee794cbf1b9c574c146520561c_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_8e47ce35492d3c72535ae8fd36054ebb7c9fc32940ed91d6b7cef960911e65d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e47ce35492d3c72535ae8fd36054ebb7c9fc32940ed91d6b7cef960911e65d9->enter($__internal_8e47ce35492d3c72535ae8fd36054ebb7c9fc32940ed91d6b7cef960911e65d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_bcd9ed88a21f361d63bc31769524442468ddb045b76ee0f94030c32a150a03b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd9ed88a21f361d63bc31769524442468ddb045b76ee0f94030c32a150a03b6->enter($__internal_bcd9ed88a21f361d63bc31769524442468ddb045b76ee0f94030c32a150a03b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_bcd9ed88a21f361d63bc31769524442468ddb045b76ee0f94030c32a150a03b6->leave($__internal_bcd9ed88a21f361d63bc31769524442468ddb045b76ee0f94030c32a150a03b6_prof);

        
        $__internal_8e47ce35492d3c72535ae8fd36054ebb7c9fc32940ed91d6b7cef960911e65d9->leave($__internal_8e47ce35492d3c72535ae8fd36054ebb7c9fc32940ed91d6b7cef960911e65d9_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_1bbfa4dc9c8bb1bcd03ce7242c5b5553ae07c8443ba977c514dde3dc1d7a7a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bbfa4dc9c8bb1bcd03ce7242c5b5553ae07c8443ba977c514dde3dc1d7a7a7f->enter($__internal_1bbfa4dc9c8bb1bcd03ce7242c5b5553ae07c8443ba977c514dde3dc1d7a7a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_834615ab4fcb764b7ecf50653a87bbd8e53d70d9482b9e75e3a1c043686b9989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834615ab4fcb764b7ecf50653a87bbd8e53d70d9482b9e75e3a1c043686b9989->enter($__internal_834615ab4fcb764b7ecf50653a87bbd8e53d70d9482b9e75e3a1c043686b9989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_834615ab4fcb764b7ecf50653a87bbd8e53d70d9482b9e75e3a1c043686b9989->leave($__internal_834615ab4fcb764b7ecf50653a87bbd8e53d70d9482b9e75e3a1c043686b9989_prof);

        
        $__internal_1bbfa4dc9c8bb1bcd03ce7242c5b5553ae07c8443ba977c514dde3dc1d7a7a7f->leave($__internal_1bbfa4dc9c8bb1bcd03ce7242c5b5553ae07c8443ba977c514dde3dc1d7a7a7f_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_10da56fe2be5a91fce89a75425b0bb16c314533fd4a9493474f8c7656007f183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10da56fe2be5a91fce89a75425b0bb16c314533fd4a9493474f8c7656007f183->enter($__internal_10da56fe2be5a91fce89a75425b0bb16c314533fd4a9493474f8c7656007f183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_0e5375660df2ce84e1c661dbb552aa82074e060caf4371f694a75d78ceb0df13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5375660df2ce84e1c661dbb552aa82074e060caf4371f694a75d78ceb0df13->enter($__internal_0e5375660df2ce84e1c661dbb552aa82074e060caf4371f694a75d78ceb0df13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0e5375660df2ce84e1c661dbb552aa82074e060caf4371f694a75d78ceb0df13->leave($__internal_0e5375660df2ce84e1c661dbb552aa82074e060caf4371f694a75d78ceb0df13_prof);

        
        $__internal_10da56fe2be5a91fce89a75425b0bb16c314533fd4a9493474f8c7656007f183->leave($__internal_10da56fe2be5a91fce89a75425b0bb16c314533fd4a9493474f8c7656007f183_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_6ff0bc3b6e7254f8845bfdf14e5104b7878d34844f96b46f2f8a72f0d18b9fe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ff0bc3b6e7254f8845bfdf14e5104b7878d34844f96b46f2f8a72f0d18b9fe6->enter($__internal_6ff0bc3b6e7254f8845bfdf14e5104b7878d34844f96b46f2f8a72f0d18b9fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_7074618e66ca4f0f9dd0ab30fdb11a772403dfa952fa9c4aecd4c860410001fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7074618e66ca4f0f9dd0ab30fdb11a772403dfa952fa9c4aecd4c860410001fd->enter($__internal_7074618e66ca4f0f9dd0ab30fdb11a772403dfa952fa9c4aecd4c860410001fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7074618e66ca4f0f9dd0ab30fdb11a772403dfa952fa9c4aecd4c860410001fd->leave($__internal_7074618e66ca4f0f9dd0ab30fdb11a772403dfa952fa9c4aecd4c860410001fd_prof);

        
        $__internal_6ff0bc3b6e7254f8845bfdf14e5104b7878d34844f96b46f2f8a72f0d18b9fe6->leave($__internal_6ff0bc3b6e7254f8845bfdf14e5104b7878d34844f96b46f2f8a72f0d18b9fe6_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_7036e5218b0e8bc32b50460a1ea98b841ae9cb9168910435ef3430a5e52d955a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7036e5218b0e8bc32b50460a1ea98b841ae9cb9168910435ef3430a5e52d955a->enter($__internal_7036e5218b0e8bc32b50460a1ea98b841ae9cb9168910435ef3430a5e52d955a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_58adbd1fee0e005761098345c12c579e390723261d634121440a7feeee4ada89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58adbd1fee0e005761098345c12c579e390723261d634121440a7feeee4ada89->enter($__internal_58adbd1fee0e005761098345c12c579e390723261d634121440a7feeee4ada89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_58adbd1fee0e005761098345c12c579e390723261d634121440a7feeee4ada89->leave($__internal_58adbd1fee0e005761098345c12c579e390723261d634121440a7feeee4ada89_prof);

        
        $__internal_7036e5218b0e8bc32b50460a1ea98b841ae9cb9168910435ef3430a5e52d955a->leave($__internal_7036e5218b0e8bc32b50460a1ea98b841ae9cb9168910435ef3430a5e52d955a_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_827888bbfed82d9c6c2cddeceeada17daf50a70105378324cb0118364df94795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_827888bbfed82d9c6c2cddeceeada17daf50a70105378324cb0118364df94795->enter($__internal_827888bbfed82d9c6c2cddeceeada17daf50a70105378324cb0118364df94795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_501ccfae5a5bbfa73d7fda3203c76ef520e7f6d5d67478bb2f7f76ff8dcb51c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_501ccfae5a5bbfa73d7fda3203c76ef520e7f6d5d67478bb2f7f76ff8dcb51c2->enter($__internal_501ccfae5a5bbfa73d7fda3203c76ef520e7f6d5d67478bb2f7f76ff8dcb51c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_501ccfae5a5bbfa73d7fda3203c76ef520e7f6d5d67478bb2f7f76ff8dcb51c2->leave($__internal_501ccfae5a5bbfa73d7fda3203c76ef520e7f6d5d67478bb2f7f76ff8dcb51c2_prof);

        
        $__internal_827888bbfed82d9c6c2cddeceeada17daf50a70105378324cb0118364df94795->leave($__internal_827888bbfed82d9c6c2cddeceeada17daf50a70105378324cb0118364df94795_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_4e7f47943957b4227292887e0a561f6cf26ab226ae069b86a9cb93fc3738bde3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e7f47943957b4227292887e0a561f6cf26ab226ae069b86a9cb93fc3738bde3->enter($__internal_4e7f47943957b4227292887e0a561f6cf26ab226ae069b86a9cb93fc3738bde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_c4ac1c9de363b777392f894e252acff37ed82747848c5a7cddfce88bb2b9db95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ac1c9de363b777392f894e252acff37ed82747848c5a7cddfce88bb2b9db95->enter($__internal_c4ac1c9de363b777392f894e252acff37ed82747848c5a7cddfce88bb2b9db95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_c4ac1c9de363b777392f894e252acff37ed82747848c5a7cddfce88bb2b9db95->leave($__internal_c4ac1c9de363b777392f894e252acff37ed82747848c5a7cddfce88bb2b9db95_prof);

        
        $__internal_4e7f47943957b4227292887e0a561f6cf26ab226ae069b86a9cb93fc3738bde3->leave($__internal_4e7f47943957b4227292887e0a561f6cf26ab226ae069b86a9cb93fc3738bde3_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_2bfd86474154db720262dc56868309dc07fbdecd256a93cd5c012bd474dd6d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bfd86474154db720262dc56868309dc07fbdecd256a93cd5c012bd474dd6d3e->enter($__internal_2bfd86474154db720262dc56868309dc07fbdecd256a93cd5c012bd474dd6d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_b66c0b92fd02e7bdd76943466954801263c9eca3a06984eb486f56996342471a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66c0b92fd02e7bdd76943466954801263c9eca3a06984eb486f56996342471a->enter($__internal_b66c0b92fd02e7bdd76943466954801263c9eca3a06984eb486f56996342471a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_b66c0b92fd02e7bdd76943466954801263c9eca3a06984eb486f56996342471a->leave($__internal_b66c0b92fd02e7bdd76943466954801263c9eca3a06984eb486f56996342471a_prof);

        
        $__internal_2bfd86474154db720262dc56868309dc07fbdecd256a93cd5c012bd474dd6d3e->leave($__internal_2bfd86474154db720262dc56868309dc07fbdecd256a93cd5c012bd474dd6d3e_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\wamp64\\www\\hitema_Bachelor-2017\\formation\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
