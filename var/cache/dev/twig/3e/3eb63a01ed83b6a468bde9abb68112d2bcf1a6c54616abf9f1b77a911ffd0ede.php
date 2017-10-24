<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_f3c76b551c2c001d5c45ce4dbf98fffc68601750fa231293fea6bebfa9d12c56 extends Twig_Template
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
        $__internal_643544ee2004a07c8c44a55043435dbab3e976f08b725db3e55e19d24ee79f25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_643544ee2004a07c8c44a55043435dbab3e976f08b725db3e55e19d24ee79f25->enter($__internal_643544ee2004a07c8c44a55043435dbab3e976f08b725db3e55e19d24ee79f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_10420463702190c46482b24f7d619a5ecd8f6d2a8742ddc2ef8a6258254b41ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10420463702190c46482b24f7d619a5ecd8f6d2a8742ddc2ef8a6258254b41ac->enter($__internal_10420463702190c46482b24f7d619a5ecd8f6d2a8742ddc2ef8a6258254b41ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_643544ee2004a07c8c44a55043435dbab3e976f08b725db3e55e19d24ee79f25->leave($__internal_643544ee2004a07c8c44a55043435dbab3e976f08b725db3e55e19d24ee79f25_prof);

        
        $__internal_10420463702190c46482b24f7d619a5ecd8f6d2a8742ddc2ef8a6258254b41ac->leave($__internal_10420463702190c46482b24f7d619a5ecd8f6d2a8742ddc2ef8a6258254b41ac_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_09952bcb4f663e596dd88f4e3171346b99441f2c023adb12d2a9c2fb5143ca7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09952bcb4f663e596dd88f4e3171346b99441f2c023adb12d2a9c2fb5143ca7d->enter($__internal_09952bcb4f663e596dd88f4e3171346b99441f2c023adb12d2a9c2fb5143ca7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_40d1e799a033b5c4b3e26c22792a8d972ffcc3805d99e5e75137ecacb14391b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d1e799a033b5c4b3e26c22792a8d972ffcc3805d99e5e75137ecacb14391b0->enter($__internal_40d1e799a033b5c4b3e26c22792a8d972ffcc3805d99e5e75137ecacb14391b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_40d1e799a033b5c4b3e26c22792a8d972ffcc3805d99e5e75137ecacb14391b0->leave($__internal_40d1e799a033b5c4b3e26c22792a8d972ffcc3805d99e5e75137ecacb14391b0_prof);

        
        $__internal_09952bcb4f663e596dd88f4e3171346b99441f2c023adb12d2a9c2fb5143ca7d->leave($__internal_09952bcb4f663e596dd88f4e3171346b99441f2c023adb12d2a9c2fb5143ca7d_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_300de275e79ce9cb9228ea8e746df24f27e5deeac794ac7e06cda960d8fb8358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_300de275e79ce9cb9228ea8e746df24f27e5deeac794ac7e06cda960d8fb8358->enter($__internal_300de275e79ce9cb9228ea8e746df24f27e5deeac794ac7e06cda960d8fb8358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_52f4e0873d5a7aa8ba7b17deb4f5e5b6a1eb764481fab1abaf2df2be56cbe37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f4e0873d5a7aa8ba7b17deb4f5e5b6a1eb764481fab1abaf2df2be56cbe37e->enter($__internal_52f4e0873d5a7aa8ba7b17deb4f5e5b6a1eb764481fab1abaf2df2be56cbe37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_52f4e0873d5a7aa8ba7b17deb4f5e5b6a1eb764481fab1abaf2df2be56cbe37e->leave($__internal_52f4e0873d5a7aa8ba7b17deb4f5e5b6a1eb764481fab1abaf2df2be56cbe37e_prof);

        
        $__internal_300de275e79ce9cb9228ea8e746df24f27e5deeac794ac7e06cda960d8fb8358->leave($__internal_300de275e79ce9cb9228ea8e746df24f27e5deeac794ac7e06cda960d8fb8358_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_764b6634076bb42910cc8058e0c64fa3a536d67013f7d8c01a1845290d6e1bc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_764b6634076bb42910cc8058e0c64fa3a536d67013f7d8c01a1845290d6e1bc2->enter($__internal_764b6634076bb42910cc8058e0c64fa3a536d67013f7d8c01a1845290d6e1bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_f8711247f90ec865d17c6dac4c95a8526637172a4acd8e348a250bed493ac0da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8711247f90ec865d17c6dac4c95a8526637172a4acd8e348a250bed493ac0da->enter($__internal_f8711247f90ec865d17c6dac4c95a8526637172a4acd8e348a250bed493ac0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_f8711247f90ec865d17c6dac4c95a8526637172a4acd8e348a250bed493ac0da->leave($__internal_f8711247f90ec865d17c6dac4c95a8526637172a4acd8e348a250bed493ac0da_prof);

        
        $__internal_764b6634076bb42910cc8058e0c64fa3a536d67013f7d8c01a1845290d6e1bc2->leave($__internal_764b6634076bb42910cc8058e0c64fa3a536d67013f7d8c01a1845290d6e1bc2_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_c45899484875771ecf6540e2a0655e43fb04a11f73320568bfeecea458ecd1e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c45899484875771ecf6540e2a0655e43fb04a11f73320568bfeecea458ecd1e1->enter($__internal_c45899484875771ecf6540e2a0655e43fb04a11f73320568bfeecea458ecd1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_a457a0c85781a33d3b5d92247c9e99a812b7ed244eadddd575769bbf012aa4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a457a0c85781a33d3b5d92247c9e99a812b7ed244eadddd575769bbf012aa4b7->enter($__internal_a457a0c85781a33d3b5d92247c9e99a812b7ed244eadddd575769bbf012aa4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_c0ca53cba1318b53d659e388590afd5e536f8601a59827df00e3381612f77238 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_37ee56bba05a465e074add90baea694e168a232513d4cda6752f272165cfcb4a = "{{") && ('' === $__internal_37ee56bba05a465e074add90baea694e168a232513d4cda6752f272165cfcb4a || 0 === strpos($__internal_c0ca53cba1318b53d659e388590afd5e536f8601a59827df00e3381612f77238, $__internal_37ee56bba05a465e074add90baea694e168a232513d4cda6752f272165cfcb4a)));
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
        
        $__internal_a457a0c85781a33d3b5d92247c9e99a812b7ed244eadddd575769bbf012aa4b7->leave($__internal_a457a0c85781a33d3b5d92247c9e99a812b7ed244eadddd575769bbf012aa4b7_prof);

        
        $__internal_c45899484875771ecf6540e2a0655e43fb04a11f73320568bfeecea458ecd1e1->leave($__internal_c45899484875771ecf6540e2a0655e43fb04a11f73320568bfeecea458ecd1e1_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_91ac9852f73f53e4a2141445757c884372634eac1e94169a0520557029855b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ac9852f73f53e4a2141445757c884372634eac1e94169a0520557029855b7c->enter($__internal_91ac9852f73f53e4a2141445757c884372634eac1e94169a0520557029855b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_bba1b86cac44ca77142490beca9f1fbfba2ab189925cab95fd8ef4bc18131b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba1b86cac44ca77142490beca9f1fbfba2ab189925cab95fd8ef4bc18131b7b->enter($__internal_bba1b86cac44ca77142490beca9f1fbfba2ab189925cab95fd8ef4bc18131b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_bba1b86cac44ca77142490beca9f1fbfba2ab189925cab95fd8ef4bc18131b7b->leave($__internal_bba1b86cac44ca77142490beca9f1fbfba2ab189925cab95fd8ef4bc18131b7b_prof);

        
        $__internal_91ac9852f73f53e4a2141445757c884372634eac1e94169a0520557029855b7c->leave($__internal_91ac9852f73f53e4a2141445757c884372634eac1e94169a0520557029855b7c_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_b211ad0c283012d6d2fd085f0e0c4404e96a92db27107b92ee0fbf56ba69363a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b211ad0c283012d6d2fd085f0e0c4404e96a92db27107b92ee0fbf56ba69363a->enter($__internal_b211ad0c283012d6d2fd085f0e0c4404e96a92db27107b92ee0fbf56ba69363a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_d7cfa15e28cf70a76cf029602f0f0dc8b44e03523347116261e4a3b1a325a069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7cfa15e28cf70a76cf029602f0f0dc8b44e03523347116261e4a3b1a325a069->enter($__internal_d7cfa15e28cf70a76cf029602f0f0dc8b44e03523347116261e4a3b1a325a069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_d7cfa15e28cf70a76cf029602f0f0dc8b44e03523347116261e4a3b1a325a069->leave($__internal_d7cfa15e28cf70a76cf029602f0f0dc8b44e03523347116261e4a3b1a325a069_prof);

        
        $__internal_b211ad0c283012d6d2fd085f0e0c4404e96a92db27107b92ee0fbf56ba69363a->leave($__internal_b211ad0c283012d6d2fd085f0e0c4404e96a92db27107b92ee0fbf56ba69363a_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_1357e7da1a9653817c3716e4e8781ca13e44a140a5286fac49637a0a61b3d0ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1357e7da1a9653817c3716e4e8781ca13e44a140a5286fac49637a0a61b3d0ed->enter($__internal_1357e7da1a9653817c3716e4e8781ca13e44a140a5286fac49637a0a61b3d0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_e6a1fffedd262e2ad1f4923d61c102c5cafa8f7925c991225de14571c37378e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6a1fffedd262e2ad1f4923d61c102c5cafa8f7925c991225de14571c37378e1->enter($__internal_e6a1fffedd262e2ad1f4923d61c102c5cafa8f7925c991225de14571c37378e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_e6a1fffedd262e2ad1f4923d61c102c5cafa8f7925c991225de14571c37378e1->leave($__internal_e6a1fffedd262e2ad1f4923d61c102c5cafa8f7925c991225de14571c37378e1_prof);

        
        $__internal_1357e7da1a9653817c3716e4e8781ca13e44a140a5286fac49637a0a61b3d0ed->leave($__internal_1357e7da1a9653817c3716e4e8781ca13e44a140a5286fac49637a0a61b3d0ed_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_5a131018aceaaa6d264407dbca5deb404124546903d2f4c254f4af6c5659a76d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a131018aceaaa6d264407dbca5deb404124546903d2f4c254f4af6c5659a76d->enter($__internal_5a131018aceaaa6d264407dbca5deb404124546903d2f4c254f4af6c5659a76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_62ca0f9420604fcccf671608787983ed762e2f74f524ed7dad2186b1dba68952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ca0f9420604fcccf671608787983ed762e2f74f524ed7dad2186b1dba68952->enter($__internal_62ca0f9420604fcccf671608787983ed762e2f74f524ed7dad2186b1dba68952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_62ca0f9420604fcccf671608787983ed762e2f74f524ed7dad2186b1dba68952->leave($__internal_62ca0f9420604fcccf671608787983ed762e2f74f524ed7dad2186b1dba68952_prof);

        
        $__internal_5a131018aceaaa6d264407dbca5deb404124546903d2f4c254f4af6c5659a76d->leave($__internal_5a131018aceaaa6d264407dbca5deb404124546903d2f4c254f4af6c5659a76d_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_0cf5de785110538bca9c175c6898d41b9884e0df9ffd5ecca4f054785bd6d612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf5de785110538bca9c175c6898d41b9884e0df9ffd5ecca4f054785bd6d612->enter($__internal_0cf5de785110538bca9c175c6898d41b9884e0df9ffd5ecca4f054785bd6d612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_214d01a36c767fd2ca9471a9e77b03825c4965c2fef9397316b3ddcf154b9709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214d01a36c767fd2ca9471a9e77b03825c4965c2fef9397316b3ddcf154b9709->enter($__internal_214d01a36c767fd2ca9471a9e77b03825c4965c2fef9397316b3ddcf154b9709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_214d01a36c767fd2ca9471a9e77b03825c4965c2fef9397316b3ddcf154b9709->leave($__internal_214d01a36c767fd2ca9471a9e77b03825c4965c2fef9397316b3ddcf154b9709_prof);

        
        $__internal_0cf5de785110538bca9c175c6898d41b9884e0df9ffd5ecca4f054785bd6d612->leave($__internal_0cf5de785110538bca9c175c6898d41b9884e0df9ffd5ecca4f054785bd6d612_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_0434afd7789eb275f06341e32a1952104e75d369182de90a5e10a48134cdef6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0434afd7789eb275f06341e32a1952104e75d369182de90a5e10a48134cdef6d->enter($__internal_0434afd7789eb275f06341e32a1952104e75d369182de90a5e10a48134cdef6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_9956f313adcfce149665df3dc2810e68080a71e931c6ebe21c113d57c0871e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9956f313adcfce149665df3dc2810e68080a71e931c6ebe21c113d57c0871e27->enter($__internal_9956f313adcfce149665df3dc2810e68080a71e931c6ebe21c113d57c0871e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_9956f313adcfce149665df3dc2810e68080a71e931c6ebe21c113d57c0871e27->leave($__internal_9956f313adcfce149665df3dc2810e68080a71e931c6ebe21c113d57c0871e27_prof);

        
        $__internal_0434afd7789eb275f06341e32a1952104e75d369182de90a5e10a48134cdef6d->leave($__internal_0434afd7789eb275f06341e32a1952104e75d369182de90a5e10a48134cdef6d_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_2ab786d5060a4f2eaab852023ec16e58218501f1512a55324883f30d1dac0abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ab786d5060a4f2eaab852023ec16e58218501f1512a55324883f30d1dac0abc->enter($__internal_2ab786d5060a4f2eaab852023ec16e58218501f1512a55324883f30d1dac0abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_35bcab5368a9287820463468d1d8f4a597255294c80301eafed9b1a502c61856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35bcab5368a9287820463468d1d8f4a597255294c80301eafed9b1a502c61856->enter($__internal_35bcab5368a9287820463468d1d8f4a597255294c80301eafed9b1a502c61856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_35bcab5368a9287820463468d1d8f4a597255294c80301eafed9b1a502c61856->leave($__internal_35bcab5368a9287820463468d1d8f4a597255294c80301eafed9b1a502c61856_prof);

        
        $__internal_2ab786d5060a4f2eaab852023ec16e58218501f1512a55324883f30d1dac0abc->leave($__internal_2ab786d5060a4f2eaab852023ec16e58218501f1512a55324883f30d1dac0abc_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_d5cbe7d824904145e16b5a64e56e08c2d0bb0c291707962d61713ea1e82a5012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5cbe7d824904145e16b5a64e56e08c2d0bb0c291707962d61713ea1e82a5012->enter($__internal_d5cbe7d824904145e16b5a64e56e08c2d0bb0c291707962d61713ea1e82a5012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_b13c8cafe94b58720b46b269ab853a1e960f8f8a1293b2a2070719bda30fd2d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13c8cafe94b58720b46b269ab853a1e960f8f8a1293b2a2070719bda30fd2d6->enter($__internal_b13c8cafe94b58720b46b269ab853a1e960f8f8a1293b2a2070719bda30fd2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_b13c8cafe94b58720b46b269ab853a1e960f8f8a1293b2a2070719bda30fd2d6->leave($__internal_b13c8cafe94b58720b46b269ab853a1e960f8f8a1293b2a2070719bda30fd2d6_prof);

        
        $__internal_d5cbe7d824904145e16b5a64e56e08c2d0bb0c291707962d61713ea1e82a5012->leave($__internal_d5cbe7d824904145e16b5a64e56e08c2d0bb0c291707962d61713ea1e82a5012_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_a81f6562395b524bcb089d31c46db24b15704d34afbd3494e9a2f019e7c617eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a81f6562395b524bcb089d31c46db24b15704d34afbd3494e9a2f019e7c617eb->enter($__internal_a81f6562395b524bcb089d31c46db24b15704d34afbd3494e9a2f019e7c617eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_1fad46d0617824ed5d002484178d747218c7745ee6e4e66cd1465c53b5226602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fad46d0617824ed5d002484178d747218c7745ee6e4e66cd1465c53b5226602->enter($__internal_1fad46d0617824ed5d002484178d747218c7745ee6e4e66cd1465c53b5226602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_1fad46d0617824ed5d002484178d747218c7745ee6e4e66cd1465c53b5226602->leave($__internal_1fad46d0617824ed5d002484178d747218c7745ee6e4e66cd1465c53b5226602_prof);

        
        $__internal_a81f6562395b524bcb089d31c46db24b15704d34afbd3494e9a2f019e7c617eb->leave($__internal_a81f6562395b524bcb089d31c46db24b15704d34afbd3494e9a2f019e7c617eb_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_eefd55bf69ffe6046152db67513f461db06affeec54695708bac4ec1feda2325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eefd55bf69ffe6046152db67513f461db06affeec54695708bac4ec1feda2325->enter($__internal_eefd55bf69ffe6046152db67513f461db06affeec54695708bac4ec1feda2325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7c37b538b56f7840e73fdbaaca66dba72b24f4cbf869cf42b1efc363e45fea01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c37b538b56f7840e73fdbaaca66dba72b24f4cbf869cf42b1efc363e45fea01->enter($__internal_7c37b538b56f7840e73fdbaaca66dba72b24f4cbf869cf42b1efc363e45fea01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_7c37b538b56f7840e73fdbaaca66dba72b24f4cbf869cf42b1efc363e45fea01->leave($__internal_7c37b538b56f7840e73fdbaaca66dba72b24f4cbf869cf42b1efc363e45fea01_prof);

        
        $__internal_eefd55bf69ffe6046152db67513f461db06affeec54695708bac4ec1feda2325->leave($__internal_eefd55bf69ffe6046152db67513f461db06affeec54695708bac4ec1feda2325_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_28bb87752fe2eb6ac0e908e0b78676aa478a1b3537b82ac36a11fee3ec85c711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28bb87752fe2eb6ac0e908e0b78676aa478a1b3537b82ac36a11fee3ec85c711->enter($__internal_28bb87752fe2eb6ac0e908e0b78676aa478a1b3537b82ac36a11fee3ec85c711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_3a3a26ec3327646345bdb53923815bbaefd2727205c9b4618868173a6df314e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3a26ec3327646345bdb53923815bbaefd2727205c9b4618868173a6df314e5->enter($__internal_3a3a26ec3327646345bdb53923815bbaefd2727205c9b4618868173a6df314e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_3a3a26ec3327646345bdb53923815bbaefd2727205c9b4618868173a6df314e5->leave($__internal_3a3a26ec3327646345bdb53923815bbaefd2727205c9b4618868173a6df314e5_prof);

        
        $__internal_28bb87752fe2eb6ac0e908e0b78676aa478a1b3537b82ac36a11fee3ec85c711->leave($__internal_28bb87752fe2eb6ac0e908e0b78676aa478a1b3537b82ac36a11fee3ec85c711_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_37641db28f1145ccf8cf777415b98b20e00c8d222ab6110c198ce3586fb6d7c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37641db28f1145ccf8cf777415b98b20e00c8d222ab6110c198ce3586fb6d7c6->enter($__internal_37641db28f1145ccf8cf777415b98b20e00c8d222ab6110c198ce3586fb6d7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_48fc37045ad5f64da3c08a2944bd27c87f80d944f07d92016a652541cb38405b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48fc37045ad5f64da3c08a2944bd27c87f80d944f07d92016a652541cb38405b->enter($__internal_48fc37045ad5f64da3c08a2944bd27c87f80d944f07d92016a652541cb38405b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_48fc37045ad5f64da3c08a2944bd27c87f80d944f07d92016a652541cb38405b->leave($__internal_48fc37045ad5f64da3c08a2944bd27c87f80d944f07d92016a652541cb38405b_prof);

        
        $__internal_37641db28f1145ccf8cf777415b98b20e00c8d222ab6110c198ce3586fb6d7c6->leave($__internal_37641db28f1145ccf8cf777415b98b20e00c8d222ab6110c198ce3586fb6d7c6_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_f9726411e0d54b0e3ac22045a2b52f33a32433c06f552c5db58100b893f56264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9726411e0d54b0e3ac22045a2b52f33a32433c06f552c5db58100b893f56264->enter($__internal_f9726411e0d54b0e3ac22045a2b52f33a32433c06f552c5db58100b893f56264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_817fceaff4a381105e96760a7feb5b73bf5bcb9d1659b98eb2f830c6eaee8286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_817fceaff4a381105e96760a7feb5b73bf5bcb9d1659b98eb2f830c6eaee8286->enter($__internal_817fceaff4a381105e96760a7feb5b73bf5bcb9d1659b98eb2f830c6eaee8286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_817fceaff4a381105e96760a7feb5b73bf5bcb9d1659b98eb2f830c6eaee8286->leave($__internal_817fceaff4a381105e96760a7feb5b73bf5bcb9d1659b98eb2f830c6eaee8286_prof);

        
        $__internal_f9726411e0d54b0e3ac22045a2b52f33a32433c06f552c5db58100b893f56264->leave($__internal_f9726411e0d54b0e3ac22045a2b52f33a32433c06f552c5db58100b893f56264_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_473884acca916421225932293d5b9ed29051ecc59a4da9b0f4f1c563b8717ecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_473884acca916421225932293d5b9ed29051ecc59a4da9b0f4f1c563b8717ecf->enter($__internal_473884acca916421225932293d5b9ed29051ecc59a4da9b0f4f1c563b8717ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_da080e86ae2a5f23d6c9b2562ee58bee538933b80f3228a9b99bf558292eb2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da080e86ae2a5f23d6c9b2562ee58bee538933b80f3228a9b99bf558292eb2f2->enter($__internal_da080e86ae2a5f23d6c9b2562ee58bee538933b80f3228a9b99bf558292eb2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_da080e86ae2a5f23d6c9b2562ee58bee538933b80f3228a9b99bf558292eb2f2->leave($__internal_da080e86ae2a5f23d6c9b2562ee58bee538933b80f3228a9b99bf558292eb2f2_prof);

        
        $__internal_473884acca916421225932293d5b9ed29051ecc59a4da9b0f4f1c563b8717ecf->leave($__internal_473884acca916421225932293d5b9ed29051ecc59a4da9b0f4f1c563b8717ecf_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a55d2bac39462407a8edc6e1339153b24f849513cbc7e01f3f87380cae47b546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a55d2bac39462407a8edc6e1339153b24f849513cbc7e01f3f87380cae47b546->enter($__internal_a55d2bac39462407a8edc6e1339153b24f849513cbc7e01f3f87380cae47b546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9641337d3a51309a210cc6245f9d2748d1a1dc89ccb0d6b4efcc0e0260655d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9641337d3a51309a210cc6245f9d2748d1a1dc89ccb0d6b4efcc0e0260655d94->enter($__internal_9641337d3a51309a210cc6245f9d2748d1a1dc89ccb0d6b4efcc0e0260655d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_9641337d3a51309a210cc6245f9d2748d1a1dc89ccb0d6b4efcc0e0260655d94->leave($__internal_9641337d3a51309a210cc6245f9d2748d1a1dc89ccb0d6b4efcc0e0260655d94_prof);

        
        $__internal_a55d2bac39462407a8edc6e1339153b24f849513cbc7e01f3f87380cae47b546->leave($__internal_a55d2bac39462407a8edc6e1339153b24f849513cbc7e01f3f87380cae47b546_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_0cfc2d3c18c4092a373647d2d98a7485a98979e53576dc7b7063528126f1bf19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cfc2d3c18c4092a373647d2d98a7485a98979e53576dc7b7063528126f1bf19->enter($__internal_0cfc2d3c18c4092a373647d2d98a7485a98979e53576dc7b7063528126f1bf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_e70ed548756eddcdf899f5f9076434ecd0bcb262d6a04d12fbe9cac5fe2e4042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e70ed548756eddcdf899f5f9076434ecd0bcb262d6a04d12fbe9cac5fe2e4042->enter($__internal_e70ed548756eddcdf899f5f9076434ecd0bcb262d6a04d12fbe9cac5fe2e4042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_e70ed548756eddcdf899f5f9076434ecd0bcb262d6a04d12fbe9cac5fe2e4042->leave($__internal_e70ed548756eddcdf899f5f9076434ecd0bcb262d6a04d12fbe9cac5fe2e4042_prof);

        
        $__internal_0cfc2d3c18c4092a373647d2d98a7485a98979e53576dc7b7063528126f1bf19->leave($__internal_0cfc2d3c18c4092a373647d2d98a7485a98979e53576dc7b7063528126f1bf19_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_bc26e5f93a5da90887f2578fd32a07923b63df1b03274fbb5bf6226132161b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc26e5f93a5da90887f2578fd32a07923b63df1b03274fbb5bf6226132161b10->enter($__internal_bc26e5f93a5da90887f2578fd32a07923b63df1b03274fbb5bf6226132161b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_57974aee772372c4e8b3562f8d301437d64eaa471a09ab9ff4ad059da4d62cb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57974aee772372c4e8b3562f8d301437d64eaa471a09ab9ff4ad059da4d62cb1->enter($__internal_57974aee772372c4e8b3562f8d301437d64eaa471a09ab9ff4ad059da4d62cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_57974aee772372c4e8b3562f8d301437d64eaa471a09ab9ff4ad059da4d62cb1->leave($__internal_57974aee772372c4e8b3562f8d301437d64eaa471a09ab9ff4ad059da4d62cb1_prof);

        
        $__internal_bc26e5f93a5da90887f2578fd32a07923b63df1b03274fbb5bf6226132161b10->leave($__internal_bc26e5f93a5da90887f2578fd32a07923b63df1b03274fbb5bf6226132161b10_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_246c070f5731858bf46f2c929e79d9447fa3d86bf07754ca9b378e1b1cd39d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_246c070f5731858bf46f2c929e79d9447fa3d86bf07754ca9b378e1b1cd39d94->enter($__internal_246c070f5731858bf46f2c929e79d9447fa3d86bf07754ca9b378e1b1cd39d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_1cc791128ff5c326896e35c9773966fa7d86194d9973b6a4fb22a892263392a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc791128ff5c326896e35c9773966fa7d86194d9973b6a4fb22a892263392a7->enter($__internal_1cc791128ff5c326896e35c9773966fa7d86194d9973b6a4fb22a892263392a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1cc791128ff5c326896e35c9773966fa7d86194d9973b6a4fb22a892263392a7->leave($__internal_1cc791128ff5c326896e35c9773966fa7d86194d9973b6a4fb22a892263392a7_prof);

        
        $__internal_246c070f5731858bf46f2c929e79d9447fa3d86bf07754ca9b378e1b1cd39d94->leave($__internal_246c070f5731858bf46f2c929e79d9447fa3d86bf07754ca9b378e1b1cd39d94_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_c465f5edc6c29af450d33749255440cc6f668275585577f3ef72b485c7e40ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c465f5edc6c29af450d33749255440cc6f668275585577f3ef72b485c7e40ec1->enter($__internal_c465f5edc6c29af450d33749255440cc6f668275585577f3ef72b485c7e40ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_a597838e644e72994c33febd9c070c6a1c65c9292927b1e04f690afabc8583be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a597838e644e72994c33febd9c070c6a1c65c9292927b1e04f690afabc8583be->enter($__internal_a597838e644e72994c33febd9c070c6a1c65c9292927b1e04f690afabc8583be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a597838e644e72994c33febd9c070c6a1c65c9292927b1e04f690afabc8583be->leave($__internal_a597838e644e72994c33febd9c070c6a1c65c9292927b1e04f690afabc8583be_prof);

        
        $__internal_c465f5edc6c29af450d33749255440cc6f668275585577f3ef72b485c7e40ec1->leave($__internal_c465f5edc6c29af450d33749255440cc6f668275585577f3ef72b485c7e40ec1_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_6af00a0470394f3b33fb293eb5948fb970cb05e40f9a130105a0c7fb2862de14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6af00a0470394f3b33fb293eb5948fb970cb05e40f9a130105a0c7fb2862de14->enter($__internal_6af00a0470394f3b33fb293eb5948fb970cb05e40f9a130105a0c7fb2862de14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_b9c12a6293552c268c410dbe58812e0c5967492ad0ef924df2dff7ada7273ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c12a6293552c268c410dbe58812e0c5967492ad0ef924df2dff7ada7273ad0->enter($__internal_b9c12a6293552c268c410dbe58812e0c5967492ad0ef924df2dff7ada7273ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b9c12a6293552c268c410dbe58812e0c5967492ad0ef924df2dff7ada7273ad0->leave($__internal_b9c12a6293552c268c410dbe58812e0c5967492ad0ef924df2dff7ada7273ad0_prof);

        
        $__internal_6af00a0470394f3b33fb293eb5948fb970cb05e40f9a130105a0c7fb2862de14->leave($__internal_6af00a0470394f3b33fb293eb5948fb970cb05e40f9a130105a0c7fb2862de14_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_2d5ae332ad21badf3a2ed9af326d8147377dae8077a29d6641c8fd59950bf927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d5ae332ad21badf3a2ed9af326d8147377dae8077a29d6641c8fd59950bf927->enter($__internal_2d5ae332ad21badf3a2ed9af326d8147377dae8077a29d6641c8fd59950bf927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_96f82a400b01bc49680985505fb66ebb69760b227e6c69b2aa8198e110ea4360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f82a400b01bc49680985505fb66ebb69760b227e6c69b2aa8198e110ea4360->enter($__internal_96f82a400b01bc49680985505fb66ebb69760b227e6c69b2aa8198e110ea4360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_96f82a400b01bc49680985505fb66ebb69760b227e6c69b2aa8198e110ea4360->leave($__internal_96f82a400b01bc49680985505fb66ebb69760b227e6c69b2aa8198e110ea4360_prof);

        
        $__internal_2d5ae332ad21badf3a2ed9af326d8147377dae8077a29d6641c8fd59950bf927->leave($__internal_2d5ae332ad21badf3a2ed9af326d8147377dae8077a29d6641c8fd59950bf927_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_3ea8aabae4585e8e8625aff16bf17a78816cf2a9e358494a9061b7fda9f2e88e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ea8aabae4585e8e8625aff16bf17a78816cf2a9e358494a9061b7fda9f2e88e->enter($__internal_3ea8aabae4585e8e8625aff16bf17a78816cf2a9e358494a9061b7fda9f2e88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_2dea5ece3f78f8835f19336808757c173d637b8e601d2470b4657e9fa76e8ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dea5ece3f78f8835f19336808757c173d637b8e601d2470b4657e9fa76e8ea1->enter($__internal_2dea5ece3f78f8835f19336808757c173d637b8e601d2470b4657e9fa76e8ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_2dea5ece3f78f8835f19336808757c173d637b8e601d2470b4657e9fa76e8ea1->leave($__internal_2dea5ece3f78f8835f19336808757c173d637b8e601d2470b4657e9fa76e8ea1_prof);

        
        $__internal_3ea8aabae4585e8e8625aff16bf17a78816cf2a9e358494a9061b7fda9f2e88e->leave($__internal_3ea8aabae4585e8e8625aff16bf17a78816cf2a9e358494a9061b7fda9f2e88e_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_f33a2494410c9d30447edc7a6319a093a4835081d6b7aba0f0ce98f8777753c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f33a2494410c9d30447edc7a6319a093a4835081d6b7aba0f0ce98f8777753c7->enter($__internal_f33a2494410c9d30447edc7a6319a093a4835081d6b7aba0f0ce98f8777753c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_f3f8df98d01abf8dfcb5248671318eb9149b6b084920ab162acbe0bcf1c223b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f8df98d01abf8dfcb5248671318eb9149b6b084920ab162acbe0bcf1c223b1->enter($__internal_f3f8df98d01abf8dfcb5248671318eb9149b6b084920ab162acbe0bcf1c223b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_f3f8df98d01abf8dfcb5248671318eb9149b6b084920ab162acbe0bcf1c223b1->leave($__internal_f3f8df98d01abf8dfcb5248671318eb9149b6b084920ab162acbe0bcf1c223b1_prof);

        
        $__internal_f33a2494410c9d30447edc7a6319a093a4835081d6b7aba0f0ce98f8777753c7->leave($__internal_f33a2494410c9d30447edc7a6319a093a4835081d6b7aba0f0ce98f8777753c7_prof);

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
", "bootstrap_3_layout.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
