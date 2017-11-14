<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_0d65d18372b5011a4c1eeddf693aef823b2d11a703dbf3e773ab9880eee4b63c extends Twig_Template
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
        $__internal_8db05ba5085b3c47f6c49979606ef4f151b15a3e7fd049368417f316840b9ac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db05ba5085b3c47f6c49979606ef4f151b15a3e7fd049368417f316840b9ac7->enter($__internal_8db05ba5085b3c47f6c49979606ef4f151b15a3e7fd049368417f316840b9ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_f9a3364fc200a9325fdba37cf4d268d2041ea466575c70b5c2541e0f34f6cc47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a3364fc200a9325fdba37cf4d268d2041ea466575c70b5c2541e0f34f6cc47->enter($__internal_f9a3364fc200a9325fdba37cf4d268d2041ea466575c70b5c2541e0f34f6cc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_8db05ba5085b3c47f6c49979606ef4f151b15a3e7fd049368417f316840b9ac7->leave($__internal_8db05ba5085b3c47f6c49979606ef4f151b15a3e7fd049368417f316840b9ac7_prof);

        
        $__internal_f9a3364fc200a9325fdba37cf4d268d2041ea466575c70b5c2541e0f34f6cc47->leave($__internal_f9a3364fc200a9325fdba37cf4d268d2041ea466575c70b5c2541e0f34f6cc47_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_944203dd6293b7ccabca2feb72672d73354a750258faadfb6486b83c8ed140dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_944203dd6293b7ccabca2feb72672d73354a750258faadfb6486b83c8ed140dd->enter($__internal_944203dd6293b7ccabca2feb72672d73354a750258faadfb6486b83c8ed140dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_3ee7d53d1ac1f4bddefb186c0ded36a7fa9ce543de85311c86f8d248dd6b36d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee7d53d1ac1f4bddefb186c0ded36a7fa9ce543de85311c86f8d248dd6b36d2->enter($__internal_3ee7d53d1ac1f4bddefb186c0ded36a7fa9ce543de85311c86f8d248dd6b36d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_3ee7d53d1ac1f4bddefb186c0ded36a7fa9ce543de85311c86f8d248dd6b36d2->leave($__internal_3ee7d53d1ac1f4bddefb186c0ded36a7fa9ce543de85311c86f8d248dd6b36d2_prof);

        
        $__internal_944203dd6293b7ccabca2feb72672d73354a750258faadfb6486b83c8ed140dd->leave($__internal_944203dd6293b7ccabca2feb72672d73354a750258faadfb6486b83c8ed140dd_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_2d6bb5bdc9a12e74717cbc5ae4841278aae91a1d5345aa6dd1306a4637321d2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d6bb5bdc9a12e74717cbc5ae4841278aae91a1d5345aa6dd1306a4637321d2a->enter($__internal_2d6bb5bdc9a12e74717cbc5ae4841278aae91a1d5345aa6dd1306a4637321d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_25672a92f6fef8fb80e1d9a38561c72a9075cd832e95554d6d1c32a9a098b89c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25672a92f6fef8fb80e1d9a38561c72a9075cd832e95554d6d1c32a9a098b89c->enter($__internal_25672a92f6fef8fb80e1d9a38561c72a9075cd832e95554d6d1c32a9a098b89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_25672a92f6fef8fb80e1d9a38561c72a9075cd832e95554d6d1c32a9a098b89c->leave($__internal_25672a92f6fef8fb80e1d9a38561c72a9075cd832e95554d6d1c32a9a098b89c_prof);

        
        $__internal_2d6bb5bdc9a12e74717cbc5ae4841278aae91a1d5345aa6dd1306a4637321d2a->leave($__internal_2d6bb5bdc9a12e74717cbc5ae4841278aae91a1d5345aa6dd1306a4637321d2a_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_746876ae903d559bcf1f0aff45a9032d3212b1f614d3116affca4acf5e1cd99f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_746876ae903d559bcf1f0aff45a9032d3212b1f614d3116affca4acf5e1cd99f->enter($__internal_746876ae903d559bcf1f0aff45a9032d3212b1f614d3116affca4acf5e1cd99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_ddcca5c4d6b91e8396c5178ae9f391e523c5eb86538ef60ee1cf97420a566bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddcca5c4d6b91e8396c5178ae9f391e523c5eb86538ef60ee1cf97420a566bec->enter($__internal_ddcca5c4d6b91e8396c5178ae9f391e523c5eb86538ef60ee1cf97420a566bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_ddcca5c4d6b91e8396c5178ae9f391e523c5eb86538ef60ee1cf97420a566bec->leave($__internal_ddcca5c4d6b91e8396c5178ae9f391e523c5eb86538ef60ee1cf97420a566bec_prof);

        
        $__internal_746876ae903d559bcf1f0aff45a9032d3212b1f614d3116affca4acf5e1cd99f->leave($__internal_746876ae903d559bcf1f0aff45a9032d3212b1f614d3116affca4acf5e1cd99f_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_57242dfa7a7875dcb561044941ac29e5fe3c3feb307cd31b6a8424a64b8adaaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57242dfa7a7875dcb561044941ac29e5fe3c3feb307cd31b6a8424a64b8adaaa->enter($__internal_57242dfa7a7875dcb561044941ac29e5fe3c3feb307cd31b6a8424a64b8adaaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_760d6b85d188d62d09deec1f09f3f592b4c2a7a929c94d57a065052de49eec2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760d6b85d188d62d09deec1f09f3f592b4c2a7a929c94d57a065052de49eec2b->enter($__internal_760d6b85d188d62d09deec1f09f3f592b4c2a7a929c94d57a065052de49eec2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_e41ae31377f542010e4dd4040756709da56198246c8b8a7063adf672c25c4f38 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_b23473d95578111605a82e4f8d3f1050cf98c88a4f5f8a2361e6aab358783127 = "{{") && ('' === $__internal_b23473d95578111605a82e4f8d3f1050cf98c88a4f5f8a2361e6aab358783127 || 0 === strpos($__internal_e41ae31377f542010e4dd4040756709da56198246c8b8a7063adf672c25c4f38, $__internal_b23473d95578111605a82e4f8d3f1050cf98c88a4f5f8a2361e6aab358783127)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_760d6b85d188d62d09deec1f09f3f592b4c2a7a929c94d57a065052de49eec2b->leave($__internal_760d6b85d188d62d09deec1f09f3f592b4c2a7a929c94d57a065052de49eec2b_prof);

        
        $__internal_57242dfa7a7875dcb561044941ac29e5fe3c3feb307cd31b6a8424a64b8adaaa->leave($__internal_57242dfa7a7875dcb561044941ac29e5fe3c3feb307cd31b6a8424a64b8adaaa_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_cb7c0cace2cc94d1ced43a3a34487a63cb651469c6ed3e6fca4da639af92535d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb7c0cace2cc94d1ced43a3a34487a63cb651469c6ed3e6fca4da639af92535d->enter($__internal_cb7c0cace2cc94d1ced43a3a34487a63cb651469c6ed3e6fca4da639af92535d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_aa1220a756f2b24ecf50a66fb6ce3f32a7d2589e03c3bf9c39ffe74e53c73c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1220a756f2b24ecf50a66fb6ce3f32a7d2589e03c3bf9c39ffe74e53c73c53->enter($__internal_aa1220a756f2b24ecf50a66fb6ce3f32a7d2589e03c3bf9c39ffe74e53c73c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_aa1220a756f2b24ecf50a66fb6ce3f32a7d2589e03c3bf9c39ffe74e53c73c53->leave($__internal_aa1220a756f2b24ecf50a66fb6ce3f32a7d2589e03c3bf9c39ffe74e53c73c53_prof);

        
        $__internal_cb7c0cace2cc94d1ced43a3a34487a63cb651469c6ed3e6fca4da639af92535d->leave($__internal_cb7c0cace2cc94d1ced43a3a34487a63cb651469c6ed3e6fca4da639af92535d_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_cc957e3f2c92cca5b79684d7a330bab13131e7b5bcbe048d40d067987f33e008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc957e3f2c92cca5b79684d7a330bab13131e7b5bcbe048d40d067987f33e008->enter($__internal_cc957e3f2c92cca5b79684d7a330bab13131e7b5bcbe048d40d067987f33e008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_117b2c3fb6a744382ca96ef6950b4371ff975eae432e85c9060fb6d98ca68876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_117b2c3fb6a744382ca96ef6950b4371ff975eae432e85c9060fb6d98ca68876->enter($__internal_117b2c3fb6a744382ca96ef6950b4371ff975eae432e85c9060fb6d98ca68876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_117b2c3fb6a744382ca96ef6950b4371ff975eae432e85c9060fb6d98ca68876->leave($__internal_117b2c3fb6a744382ca96ef6950b4371ff975eae432e85c9060fb6d98ca68876_prof);

        
        $__internal_cc957e3f2c92cca5b79684d7a330bab13131e7b5bcbe048d40d067987f33e008->leave($__internal_cc957e3f2c92cca5b79684d7a330bab13131e7b5bcbe048d40d067987f33e008_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_90a7303bb02b96b4d2b964ea15e0473fe7d7804b0545d8069e524bfd1183a8c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a7303bb02b96b4d2b964ea15e0473fe7d7804b0545d8069e524bfd1183a8c0->enter($__internal_90a7303bb02b96b4d2b964ea15e0473fe7d7804b0545d8069e524bfd1183a8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_23c41fd8750c0c41409bf9be99dc7016f19c0afba29875c405e958dda0b802a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c41fd8750c0c41409bf9be99dc7016f19c0afba29875c405e958dda0b802a7->enter($__internal_23c41fd8750c0c41409bf9be99dc7016f19c0afba29875c405e958dda0b802a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_23c41fd8750c0c41409bf9be99dc7016f19c0afba29875c405e958dda0b802a7->leave($__internal_23c41fd8750c0c41409bf9be99dc7016f19c0afba29875c405e958dda0b802a7_prof);

        
        $__internal_90a7303bb02b96b4d2b964ea15e0473fe7d7804b0545d8069e524bfd1183a8c0->leave($__internal_90a7303bb02b96b4d2b964ea15e0473fe7d7804b0545d8069e524bfd1183a8c0_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_337258d898067e630b48f989f97be4d394498e3c6a1fb3e8b7b0af21e2ff144e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_337258d898067e630b48f989f97be4d394498e3c6a1fb3e8b7b0af21e2ff144e->enter($__internal_337258d898067e630b48f989f97be4d394498e3c6a1fb3e8b7b0af21e2ff144e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_40911b3099c3dbd3808bbaeef634c2ec56a83b1306900cc521a5c5426c870c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40911b3099c3dbd3808bbaeef634c2ec56a83b1306900cc521a5c5426c870c41->enter($__internal_40911b3099c3dbd3808bbaeef634c2ec56a83b1306900cc521a5c5426c870c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_40911b3099c3dbd3808bbaeef634c2ec56a83b1306900cc521a5c5426c870c41->leave($__internal_40911b3099c3dbd3808bbaeef634c2ec56a83b1306900cc521a5c5426c870c41_prof);

        
        $__internal_337258d898067e630b48f989f97be4d394498e3c6a1fb3e8b7b0af21e2ff144e->leave($__internal_337258d898067e630b48f989f97be4d394498e3c6a1fb3e8b7b0af21e2ff144e_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_5aa0c0795840e32ed6f6fdc450e5e931918db6584d66f600f866802456e4f521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aa0c0795840e32ed6f6fdc450e5e931918db6584d66f600f866802456e4f521->enter($__internal_5aa0c0795840e32ed6f6fdc450e5e931918db6584d66f600f866802456e4f521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_651a5758ef8c3e8668f5a877ed186eacdc57045c027049f99a1e86db011b47ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651a5758ef8c3e8668f5a877ed186eacdc57045c027049f99a1e86db011b47ce->enter($__internal_651a5758ef8c3e8668f5a877ed186eacdc57045c027049f99a1e86db011b47ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_651a5758ef8c3e8668f5a877ed186eacdc57045c027049f99a1e86db011b47ce->leave($__internal_651a5758ef8c3e8668f5a877ed186eacdc57045c027049f99a1e86db011b47ce_prof);

        
        $__internal_5aa0c0795840e32ed6f6fdc450e5e931918db6584d66f600f866802456e4f521->leave($__internal_5aa0c0795840e32ed6f6fdc450e5e931918db6584d66f600f866802456e4f521_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_5b4e40de63798f094f26348b671d8d83032774d73da3bd8b72bcfce1c764a431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b4e40de63798f094f26348b671d8d83032774d73da3bd8b72bcfce1c764a431->enter($__internal_5b4e40de63798f094f26348b671d8d83032774d73da3bd8b72bcfce1c764a431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_c6ea0d14aa73bec7feaeac3850e8daf64983485be4f76bc012a74c2273ac8de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ea0d14aa73bec7feaeac3850e8daf64983485be4f76bc012a74c2273ac8de8->enter($__internal_c6ea0d14aa73bec7feaeac3850e8daf64983485be4f76bc012a74c2273ac8de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_c6ea0d14aa73bec7feaeac3850e8daf64983485be4f76bc012a74c2273ac8de8->leave($__internal_c6ea0d14aa73bec7feaeac3850e8daf64983485be4f76bc012a74c2273ac8de8_prof);

        
        $__internal_5b4e40de63798f094f26348b671d8d83032774d73da3bd8b72bcfce1c764a431->leave($__internal_5b4e40de63798f094f26348b671d8d83032774d73da3bd8b72bcfce1c764a431_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_c5b7d720a1c00434b0f2c01d36729a4c9d22a08e02fb26563d77e838e7f18cc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b7d720a1c00434b0f2c01d36729a4c9d22a08e02fb26563d77e838e7f18cc1->enter($__internal_c5b7d720a1c00434b0f2c01d36729a4c9d22a08e02fb26563d77e838e7f18cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_5e62b7ad29ec14684fc62956717c1fdfaf61d71fea767e316a872ef53c303a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e62b7ad29ec14684fc62956717c1fdfaf61d71fea767e316a872ef53c303a33->enter($__internal_5e62b7ad29ec14684fc62956717c1fdfaf61d71fea767e316a872ef53c303a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
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
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_5e62b7ad29ec14684fc62956717c1fdfaf61d71fea767e316a872ef53c303a33->leave($__internal_5e62b7ad29ec14684fc62956717c1fdfaf61d71fea767e316a872ef53c303a33_prof);

        
        $__internal_c5b7d720a1c00434b0f2c01d36729a4c9d22a08e02fb26563d77e838e7f18cc1->leave($__internal_c5b7d720a1c00434b0f2c01d36729a4c9d22a08e02fb26563d77e838e7f18cc1_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_5aada441c134d80c7afc069f1c83047bbd612d394040945807978486d59c8105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aada441c134d80c7afc069f1c83047bbd612d394040945807978486d59c8105->enter($__internal_5aada441c134d80c7afc069f1c83047bbd612d394040945807978486d59c8105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_2b7c4386c4cac88c6a7db8d5125185978f66c1cba3d099d49bfe73ceb8c9d624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7c4386c4cac88c6a7db8d5125185978f66c1cba3d099d49bfe73ceb8c9d624->enter($__internal_2b7c4386c4cac88c6a7db8d5125185978f66c1cba3d099d49bfe73ceb8c9d624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_2b7c4386c4cac88c6a7db8d5125185978f66c1cba3d099d49bfe73ceb8c9d624->leave($__internal_2b7c4386c4cac88c6a7db8d5125185978f66c1cba3d099d49bfe73ceb8c9d624_prof);

        
        $__internal_5aada441c134d80c7afc069f1c83047bbd612d394040945807978486d59c8105->leave($__internal_5aada441c134d80c7afc069f1c83047bbd612d394040945807978486d59c8105_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_33a48912f32ff949fb6eadbe5fd72dd4240b72cb241d0695d6facc21e93d3f64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a48912f32ff949fb6eadbe5fd72dd4240b72cb241d0695d6facc21e93d3f64->enter($__internal_33a48912f32ff949fb6eadbe5fd72dd4240b72cb241d0695d6facc21e93d3f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_1f7239861b9fec154064c259386e7a9f40ff6c9118490c445b9e43bfb38da623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7239861b9fec154064c259386e7a9f40ff6c9118490c445b9e43bfb38da623->enter($__internal_1f7239861b9fec154064c259386e7a9f40ff6c9118490c445b9e43bfb38da623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_1f7239861b9fec154064c259386e7a9f40ff6c9118490c445b9e43bfb38da623->leave($__internal_1f7239861b9fec154064c259386e7a9f40ff6c9118490c445b9e43bfb38da623_prof);

        
        $__internal_33a48912f32ff949fb6eadbe5fd72dd4240b72cb241d0695d6facc21e93d3f64->leave($__internal_33a48912f32ff949fb6eadbe5fd72dd4240b72cb241d0695d6facc21e93d3f64_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a929644380743cabe3b56d2a3b76b03cd3ff1de6e8978e2aaae04b75366c3d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a929644380743cabe3b56d2a3b76b03cd3ff1de6e8978e2aaae04b75366c3d37->enter($__internal_a929644380743cabe3b56d2a3b76b03cd3ff1de6e8978e2aaae04b75366c3d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_e2ea6ee64880619e6d8d42d1c474af5ba26afec67df59812f66addf66cfe57ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ea6ee64880619e6d8d42d1c474af5ba26afec67df59812f66addf66cfe57ce->enter($__internal_e2ea6ee64880619e6d8d42d1c474af5ba26afec67df59812f66addf66cfe57ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_e2ea6ee64880619e6d8d42d1c474af5ba26afec67df59812f66addf66cfe57ce->leave($__internal_e2ea6ee64880619e6d8d42d1c474af5ba26afec67df59812f66addf66cfe57ce_prof);

        
        $__internal_a929644380743cabe3b56d2a3b76b03cd3ff1de6e8978e2aaae04b75366c3d37->leave($__internal_a929644380743cabe3b56d2a3b76b03cd3ff1de6e8978e2aaae04b75366c3d37_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_f7fc77841c4b99ec5f7f86c4b326e6880ea1e75cde77bc62aced14c07bf2c7ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7fc77841c4b99ec5f7f86c4b326e6880ea1e75cde77bc62aced14c07bf2c7ed->enter($__internal_f7fc77841c4b99ec5f7f86c4b326e6880ea1e75cde77bc62aced14c07bf2c7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_45858d2272992738242b033bee65613ea4f55589eb4b0bec5e4aeaea391b9219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45858d2272992738242b033bee65613ea4f55589eb4b0bec5e4aeaea391b9219->enter($__internal_45858d2272992738242b033bee65613ea4f55589eb4b0bec5e4aeaea391b9219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_45858d2272992738242b033bee65613ea4f55589eb4b0bec5e4aeaea391b9219->leave($__internal_45858d2272992738242b033bee65613ea4f55589eb4b0bec5e4aeaea391b9219_prof);

        
        $__internal_f7fc77841c4b99ec5f7f86c4b326e6880ea1e75cde77bc62aced14c07bf2c7ed->leave($__internal_f7fc77841c4b99ec5f7f86c4b326e6880ea1e75cde77bc62aced14c07bf2c7ed_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_0fc0bb93d37d3b7aa4bfadd98edf7d25e6519ff057c3da32e707d7ec7c6f104f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fc0bb93d37d3b7aa4bfadd98edf7d25e6519ff057c3da32e707d7ec7c6f104f->enter($__internal_0fc0bb93d37d3b7aa4bfadd98edf7d25e6519ff057c3da32e707d7ec7c6f104f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_45bfe81f89d692eb51c4a9b4fd0bf094eb0fd89277bc4886b72cd4a77ebc6481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45bfe81f89d692eb51c4a9b4fd0bf094eb0fd89277bc4886b72cd4a77ebc6481->enter($__internal_45bfe81f89d692eb51c4a9b4fd0bf094eb0fd89277bc4886b72cd4a77ebc6481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_45bfe81f89d692eb51c4a9b4fd0bf094eb0fd89277bc4886b72cd4a77ebc6481->leave($__internal_45bfe81f89d692eb51c4a9b4fd0bf094eb0fd89277bc4886b72cd4a77ebc6481_prof);

        
        $__internal_0fc0bb93d37d3b7aa4bfadd98edf7d25e6519ff057c3da32e707d7ec7c6f104f->leave($__internal_0fc0bb93d37d3b7aa4bfadd98edf7d25e6519ff057c3da32e707d7ec7c6f104f_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_f419157fad72aec1be7082a86fb947b52507b820d800abfbd9847c56bfc05821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f419157fad72aec1be7082a86fb947b52507b820d800abfbd9847c56bfc05821->enter($__internal_f419157fad72aec1be7082a86fb947b52507b820d800abfbd9847c56bfc05821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_03ffd92bfa545ae5d98521f7eea3af9b37cf298b2eb6852f852ffcf36d16b01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ffd92bfa545ae5d98521f7eea3af9b37cf298b2eb6852f852ffcf36d16b01b->enter($__internal_03ffd92bfa545ae5d98521f7eea3af9b37cf298b2eb6852f852ffcf36d16b01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_03ffd92bfa545ae5d98521f7eea3af9b37cf298b2eb6852f852ffcf36d16b01b->leave($__internal_03ffd92bfa545ae5d98521f7eea3af9b37cf298b2eb6852f852ffcf36d16b01b_prof);

        
        $__internal_f419157fad72aec1be7082a86fb947b52507b820d800abfbd9847c56bfc05821->leave($__internal_f419157fad72aec1be7082a86fb947b52507b820d800abfbd9847c56bfc05821_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_7a72a433dd68822aa1f7c467443fda833de92d15035c4ae8d76d1a33c763096f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a72a433dd68822aa1f7c467443fda833de92d15035c4ae8d76d1a33c763096f->enter($__internal_7a72a433dd68822aa1f7c467443fda833de92d15035c4ae8d76d1a33c763096f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_546fad1d5d0a1b9bbc440162fda3c6475c66b90affdc1a6ef2241f57bd95ef37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546fad1d5d0a1b9bbc440162fda3c6475c66b90affdc1a6ef2241f57bd95ef37->enter($__internal_546fad1d5d0a1b9bbc440162fda3c6475c66b90affdc1a6ef2241f57bd95ef37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 209
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
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
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_546fad1d5d0a1b9bbc440162fda3c6475c66b90affdc1a6ef2241f57bd95ef37->leave($__internal_546fad1d5d0a1b9bbc440162fda3c6475c66b90affdc1a6ef2241f57bd95ef37_prof);

        
        $__internal_7a72a433dd68822aa1f7c467443fda833de92d15035c4ae8d76d1a33c763096f->leave($__internal_7a72a433dd68822aa1f7c467443fda833de92d15035c4ae8d76d1a33c763096f_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4c16d24592b536a549988ac8bb7f9e7c7f9484dd95f30e732290fb029938e06f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c16d24592b536a549988ac8bb7f9e7c7f9484dd95f30e732290fb029938e06f->enter($__internal_4c16d24592b536a549988ac8bb7f9e7c7f9484dd95f30e732290fb029938e06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_859a925c4ba5d79c0731f0e7b424363c7f5d70ca85b1e9def4f1370d84edb009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_859a925c4ba5d79c0731f0e7b424363c7f5d70ca85b1e9def4f1370d84edb009->enter($__internal_859a925c4ba5d79c0731f0e7b424363c7f5d70ca85b1e9def4f1370d84edb009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_859a925c4ba5d79c0731f0e7b424363c7f5d70ca85b1e9def4f1370d84edb009->leave($__internal_859a925c4ba5d79c0731f0e7b424363c7f5d70ca85b1e9def4f1370d84edb009_prof);

        
        $__internal_4c16d24592b536a549988ac8bb7f9e7c7f9484dd95f30e732290fb029938e06f->leave($__internal_4c16d24592b536a549988ac8bb7f9e7c7f9484dd95f30e732290fb029938e06f_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f8b242435882c090c40d42c30e1e0415014af8a79b36060657c2afce0993f8e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b242435882c090c40d42c30e1e0415014af8a79b36060657c2afce0993f8e6->enter($__internal_f8b242435882c090c40d42c30e1e0415014af8a79b36060657c2afce0993f8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_48222289c78d7c0efbdac284b63f119fae726b75629318bf51ffaaa701e5b771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48222289c78d7c0efbdac284b63f119fae726b75629318bf51ffaaa701e5b771->enter($__internal_48222289c78d7c0efbdac284b63f119fae726b75629318bf51ffaaa701e5b771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_48222289c78d7c0efbdac284b63f119fae726b75629318bf51ffaaa701e5b771->leave($__internal_48222289c78d7c0efbdac284b63f119fae726b75629318bf51ffaaa701e5b771_prof);

        
        $__internal_f8b242435882c090c40d42c30e1e0415014af8a79b36060657c2afce0993f8e6->leave($__internal_f8b242435882c090c40d42c30e1e0415014af8a79b36060657c2afce0993f8e6_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_272b7e5e25fbce37f40c155574b3ff9803e6515ca501198ae8abe3ad88acd1e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_272b7e5e25fbce37f40c155574b3ff9803e6515ca501198ae8abe3ad88acd1e7->enter($__internal_272b7e5e25fbce37f40c155574b3ff9803e6515ca501198ae8abe3ad88acd1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_7f9bcf52e7a2c23b85aaaa11b82217b2cfc9f416464c677978e2d59d15215191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f9bcf52e7a2c23b85aaaa11b82217b2cfc9f416464c677978e2d59d15215191->enter($__internal_7f9bcf52e7a2c23b85aaaa11b82217b2cfc9f416464c677978e2d59d15215191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7f9bcf52e7a2c23b85aaaa11b82217b2cfc9f416464c677978e2d59d15215191->leave($__internal_7f9bcf52e7a2c23b85aaaa11b82217b2cfc9f416464c677978e2d59d15215191_prof);

        
        $__internal_272b7e5e25fbce37f40c155574b3ff9803e6515ca501198ae8abe3ad88acd1e7->leave($__internal_272b7e5e25fbce37f40c155574b3ff9803e6515ca501198ae8abe3ad88acd1e7_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_56e7e6f1f033331bc97b341a840ad569f2b05c43e44af2aa5a82c27f98e66503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56e7e6f1f033331bc97b341a840ad569f2b05c43e44af2aa5a82c27f98e66503->enter($__internal_56e7e6f1f033331bc97b341a840ad569f2b05c43e44af2aa5a82c27f98e66503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_e15ceb27c3530a53424fb6d955e09bbd58b9b20255e3646dcb347a084b3a40af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15ceb27c3530a53424fb6d955e09bbd58b9b20255e3646dcb347a084b3a40af->enter($__internal_e15ceb27c3530a53424fb6d955e09bbd58b9b20255e3646dcb347a084b3a40af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e15ceb27c3530a53424fb6d955e09bbd58b9b20255e3646dcb347a084b3a40af->leave($__internal_e15ceb27c3530a53424fb6d955e09bbd58b9b20255e3646dcb347a084b3a40af_prof);

        
        $__internal_56e7e6f1f033331bc97b341a840ad569f2b05c43e44af2aa5a82c27f98e66503->leave($__internal_56e7e6f1f033331bc97b341a840ad569f2b05c43e44af2aa5a82c27f98e66503_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_6e098833a1544c42588c35e4837b4721892139c7f12c86417cd2a490bdf19a87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e098833a1544c42588c35e4837b4721892139c7f12c86417cd2a490bdf19a87->enter($__internal_6e098833a1544c42588c35e4837b4721892139c7f12c86417cd2a490bdf19a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_6f770e357f12e79f62cf3d444c972a53233f5ce5ae8108781a6d10c8a348c2ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f770e357f12e79f62cf3d444c972a53233f5ce5ae8108781a6d10c8a348c2ad->enter($__internal_6f770e357f12e79f62cf3d444c972a53233f5ce5ae8108781a6d10c8a348c2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6f770e357f12e79f62cf3d444c972a53233f5ce5ae8108781a6d10c8a348c2ad->leave($__internal_6f770e357f12e79f62cf3d444c972a53233f5ce5ae8108781a6d10c8a348c2ad_prof);

        
        $__internal_6e098833a1544c42588c35e4837b4721892139c7f12c86417cd2a490bdf19a87->leave($__internal_6e098833a1544c42588c35e4837b4721892139c7f12c86417cd2a490bdf19a87_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_5d1ab131dc25c5983761a17afd0c01dec6c23a979df58fe2a3120c9a675cc2ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d1ab131dc25c5983761a17afd0c01dec6c23a979df58fe2a3120c9a675cc2ec->enter($__internal_5d1ab131dc25c5983761a17afd0c01dec6c23a979df58fe2a3120c9a675cc2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_1e8b8471a8dd1c77700fcf18a0002d6f6724ca302331d8e544a6664044631661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8b8471a8dd1c77700fcf18a0002d6f6724ca302331d8e544a6664044631661->enter($__internal_1e8b8471a8dd1c77700fcf18a0002d6f6724ca302331d8e544a6664044631661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1e8b8471a8dd1c77700fcf18a0002d6f6724ca302331d8e544a6664044631661->leave($__internal_1e8b8471a8dd1c77700fcf18a0002d6f6724ca302331d8e544a6664044631661_prof);

        
        $__internal_5d1ab131dc25c5983761a17afd0c01dec6c23a979df58fe2a3120c9a675cc2ec->leave($__internal_5d1ab131dc25c5983761a17afd0c01dec6c23a979df58fe2a3120c9a675cc2ec_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c32d5d4bcfebc10bdc4e24df08cd47f5da42aca5b4a92ccb4b8f926392360069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c32d5d4bcfebc10bdc4e24df08cd47f5da42aca5b4a92ccb4b8f926392360069->enter($__internal_c32d5d4bcfebc10bdc4e24df08cd47f5da42aca5b4a92ccb4b8f926392360069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_239eb7b6448665bba89fed0f762dcf2d695888e06bed075d6e19d5d661eb4877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239eb7b6448665bba89fed0f762dcf2d695888e06bed075d6e19d5d661eb4877->enter($__internal_239eb7b6448665bba89fed0f762dcf2d695888e06bed075d6e19d5d661eb4877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_239eb7b6448665bba89fed0f762dcf2d695888e06bed075d6e19d5d661eb4877->leave($__internal_239eb7b6448665bba89fed0f762dcf2d695888e06bed075d6e19d5d661eb4877_prof);

        
        $__internal_c32d5d4bcfebc10bdc4e24df08cd47f5da42aca5b4a92ccb4b8f926392360069->leave($__internal_c32d5d4bcfebc10bdc4e24df08cd47f5da42aca5b4a92ccb4b8f926392360069_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_9c51da628bcd30f16fe0f7f2d7621921c062baa7579319fa3324b179355f9019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c51da628bcd30f16fe0f7f2d7621921c062baa7579319fa3324b179355f9019->enter($__internal_9c51da628bcd30f16fe0f7f2d7621921c062baa7579319fa3324b179355f9019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_46aaeba2f28d16dcd3b48e48a8d79e97b02b27c8de878e5f7f43564fa7e1610d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46aaeba2f28d16dcd3b48e48a8d79e97b02b27c8de878e5f7f43564fa7e1610d->enter($__internal_46aaeba2f28d16dcd3b48e48a8d79e97b02b27c8de878e5f7f43564fa7e1610d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_46aaeba2f28d16dcd3b48e48a8d79e97b02b27c8de878e5f7f43564fa7e1610d->leave($__internal_46aaeba2f28d16dcd3b48e48a8d79e97b02b27c8de878e5f7f43564fa7e1610d_prof);

        
        $__internal_9c51da628bcd30f16fe0f7f2d7621921c062baa7579319fa3324b179355f9019->leave($__internal_9c51da628bcd30f16fe0f7f2d7621921c062baa7579319fa3324b179355f9019_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_17d45021de03691b60d693bb518beaee654a5ebd9f08d834c6981e3250ef6da3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d45021de03691b60d693bb518beaee654a5ebd9f08d834c6981e3250ef6da3->enter($__internal_17d45021de03691b60d693bb518beaee654a5ebd9f08d834c6981e3250ef6da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_a320fd2e705f3b9b58ed782e25b620bb705316e45235d767a30d4388f96fa7c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a320fd2e705f3b9b58ed782e25b620bb705316e45235d767a30d4388f96fa7c5->enter($__internal_a320fd2e705f3b9b58ed782e25b620bb705316e45235d767a30d4388f96fa7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
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
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_a320fd2e705f3b9b58ed782e25b620bb705316e45235d767a30d4388f96fa7c5->leave($__internal_a320fd2e705f3b9b58ed782e25b620bb705316e45235d767a30d4388f96fa7c5_prof);

        
        $__internal_17d45021de03691b60d693bb518beaee654a5ebd9f08d834c6981e3250ef6da3->leave($__internal_17d45021de03691b60d693bb518beaee654a5ebd9f08d834c6981e3250ef6da3_prof);

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
", "bootstrap_3_layout.html.twig", "/var/www/task/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
