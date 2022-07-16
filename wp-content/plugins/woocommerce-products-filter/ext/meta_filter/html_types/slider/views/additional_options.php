<?php
if (!defined('ABSPATH'))
    die('No direct access allowed');
?>

<input type="hidden" name="woof_settings[<?php echo $key ?>][show_title_label]" value="<?php echo (isset($settings[$key]['show_title_label']) ? $settings[$key]['show_title_label'] : 1) ?>" />
<input type="hidden" name="woof_settings[<?php echo $key ?>][show_toggle_button]" value="<?php echo (isset($settings[$key]['show_toggle_button']) ? $settings[$key]['show_toggle_button'] : 0) ?>" />
<input type="hidden" name="woof_settings[<?php echo $key ?>][tooltip_text]" value="<?php echo (isset($settings[$key]['tooltip_text']) ? stripcslashes($settings[$key]['tooltip_text']) : "") ?>" />
<input type="hidden" name="woof_settings[<?php echo $key ?>][step]" value="<?php echo (isset($settings[$key]['step']) ? $settings[$key]['step'] : 1) ?>" />
<input type="hidden" name="woof_settings[<?php echo $key ?>][range]" value="<?php echo (isset($settings[$key]['range']) ? $settings[$key]['range'] : "1-100") ?>" />
<input type="hidden" name="woof_settings[<?php echo $key ?>][prefix]" value="<?php echo (isset($settings[$key]['prefix']) ? $settings[$key]['prefix'] : "") ?>" />
<input type="hidden" name="woof_settings[<?php echo $key ?>][postfix]" value="<?php echo (isset($settings[$key]['postfix']) ? $settings[$key]['postfix'] : "") ?>" />
<input type="hidden" name="woof_settings[<?php echo $key ?>][show_inputs]" value="<?php echo (isset($settings[$key]['show_inputs']) ? $settings[$key]['show_inputs'] : 0) ?>" />
<input type="hidden" name="woof_settings[<?php echo $key ?>][meta_slider_skin]" value="<?php echo (isset($settings[$key]['meta_slider_skin']) ? $settings[$key]['meta_slider_skin'] : 0) ?>" />

<div id="woof-modal-content-<?php echo $key ?>" style="display: none;">
    <div class="woof-form-element-container">
        <div class="woof-name-description">
            <strong><?php esc_html_e('Show title label', 'woocommerce-products-filter') ?></strong>
            <span><?php esc_html_e('Show/Hide meta block title on the front', 'woocommerce-products-filter') ?></span>
        </div>

        <div class="woof-form-element">
            <?php
            $show_title = array(
                0 => esc_html__('No', 'woocommerce-products-filter'),
                1 => esc_html__('Yes', 'woocommerce-products-filter')
            );
            ?>

            <div class="select-wrap">
                <select class="woof_popup_option" data-option="show_title_label">
                    <?php foreach ($show_title as $id => $value) : ?>
                        <option value="<?php echo $id ?>"><?php echo $value; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

        </div>

    </div>
    <div class="woof-form-element-container">
        <div class="woof-name-description">
            <strong><?php esc_html_e('Show toggle button', 'woocommerce-products-filter') ?></strong>
            <span><?php esc_html_e('Show toggle button near the title on the front above the block of html-items', 'woocommerce-products-filter') ?></span>
        </div>

        <div class="woof-form-element">
            <?php
            $show_toogle = array(
                0 => esc_html__('No', 'woocommerce-products-filter'),
                1 => esc_html__('Yes, show as closed', 'woocommerce-products-filter'),
                2 => esc_html__('Yes, show as opened', 'woocommerce-products-filter')
            );
            ?>

            <div class="select-wrap">
                <select class="woof_popup_option" data-option="show_toggle_button">
                    <?php foreach ($show_toogle as $id => $value) : ?>
                        <option value="<?php echo $id ?>"><?php echo $value; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

        </div>

    </div>
    <div class="woof-form-element-container">

        <div class="woof-name-description">
            <strong><?php esc_html_e('Tooltip', 'woocommerce-products-filter') ?></strong>
            <span><?php esc_html_e('Show tooltip', 'woocommerce-products-filter') ?></span>
        </div>

        <div class="woof-form-element">

            <div class="select-wrap">
                <textarea class="woof_popup_option" data-option="tooltip_text" ></textarea>
            </div>

        </div>

    </div>
    <div class="woof-form-element-container">

        <div class="woof-name-description">
            <strong><?php esc_html_e('Step', 'woocommerce-products-filter') ?></strong>
            <span><?php esc_html_e('', 'woocommerce-products-filter') ?></span>
        </div>

        <div class="woof-form-element">
            <input type="text" class="woof_popup_option" data-option="step" placeholder="" value="" />
        </div>
    </div>
    <div class="woof-form-element-container">
        <div class="woof-name-description">
            <strong><?php esc_html_e('Range', 'woocommerce-products-filter') ?></strong>
            <span><?php esc_html_e('Example: 1^100', 'woocommerce-products-filter') ?></span>
        </div>

        <div class="woof-form-element">
            <input type="text" class="woof_popup_option" data-option="range" placeholder="" value="" />
        </div>
    </div>
    <div class="woof-form-element-container">

        <div class="woof-name-description">
            <strong><?php esc_html_e('Prefix', 'woocommerce-products-filter') ?></strong>
            <span><?php esc_html_e('', 'woocommerce-products-filter') ?></span>
        </div>

        <div class="woof-form-element">
            <input type="text" class="woof_popup_option" data-option="prefix" placeholder="" value="" />
        </div>

    </div>
    <div class="woof-form-element-container">

        <div class="woof-name-description">
            <strong><?php esc_html_e('Postfix', 'woocommerce-products-filter') ?></strong>
            <span><?php esc_html_e('', 'woocommerce-products-filter') ?></span>
        </div>

        <div class="woof-form-element">
            <input type="text" class="woof_popup_option" data-option="postfix" placeholder="" value="" />
        </div>
    </div>
    <div class="woof-form-element-container">
        <div class="woof-name-description">
            <strong><?php esc_html_e('Show inputs', 'woocommerce-products-filter') ?></strong>
            <span><?php esc_html_e('Show two number inputs: from minimum value to maximum value of the search range', 'woocommerce-products-filter') ?></span>
        </div>

        <div class="woof-form-element">
            <?php
            $show_inputs = array(
                0 => esc_html__('No', 'woocommerce-products-filter'),
                1 => esc_html__('Yes', 'woocommerce-products-filter'),
            );
            ?>

            <div class="select-wrap">
                <select class="woof_popup_option" data-option="show_inputs">
                    <?php foreach ($show_inputs as $id => $value) : ?>
                        <option value="<?php echo $id ?>"><?php echo $value; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

        </div>

    </div>
    <div class="woof-form-element-container">

        <div class="woof-name-description">
            <strong><?php esc_html_e('Slider skin', 'woocommerce-products-filter') ?></strong>
            <span><?php esc_html_e('It is possible to select a unique slider design for each meta field', 'woocommerce-products-filter') ?></span>
        </div>
        <?php
        $skins = array(
            0 => esc_html__('Default', 'woocommerce-products-filter'),
            'round' => 'Round',
            'flat' => 'skinFlat',
            'big' => 'skinHTML5',
            'modern' => 'skinModern',
            'sharp' => 'Sharp',
            'square' => 'Square',
        );
        ?>
        <div class="woof-form-element">
            <div class="select-wrap">
                <select class="woof_popup_option" data-option="meta_slider_skin">
                    <?php foreach ($skins as $key => $value) : ?>
                        <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

        </div>

    </div>
</div>
