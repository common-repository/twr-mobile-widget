<?php


class twrMobile_Widget extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(
            'twrMobile_widget',
            esc_html__('TWR Mobile', 'twr_whatsapp'),
            array('description' => esc_html__('A WhatsApp Newsletter Widget', 'twr_mobile'),)
        );
    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        $formatedPhone = $this->formatPhoneNumber($instance['contact_number']);
        if(wp_is_mobile()){
            $chatUrl = 'https://api.whatsapp.com/send?phone='.$formatedPhone.'&text='.$instance['message'];
        }else{
            $chatUrl = 'https://web.whatsapp.com/send?phone='.$formatedPhone.'&text='.$instance['message'];
        }
        include dirname(__FILE__).'/../views/twr_Mobile_Widget.php';
        echo $args['after_widget'];
    }

    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : esc_html__('', 'twr_mobile');
        ?>
        <p class="twr-step-1">
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_attr_e('Widget Title:', 'twr_mobile'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text"
                   value="<?php echo esc_attr($title); ?>">
        </p>
        <?php
        $terms_url = !empty($instance['terms_url']) ? $instance['terms_url'] : esc_html__('http://', 'twr_mobile');
        ?>
        <p class="twr-step-1">
            <label for="<?php echo esc_attr($this->get_field_id('terms_url')); ?>"><?php esc_attr_e('Terms URL:', 'twr_mobile'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('terms_url')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('terms_url')); ?>" type="text"
                   value="<?php echo esc_attr($terms_url); ?>">
        </p>
        <?php
        $contact_number = !empty($instance['contact_number']) ? $instance['contact_number'] : esc_html__('', 'twr_mobile');
        ?>
        <p class="twr-step-1">
            <label for="<?php echo esc_attr($this->get_field_id('contact_number')); ?>"><?php esc_attr_e('Phone Number:', 'twr_mobile'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('contact_number')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('contact_number')); ?>" type="text"
                   value="<?php echo esc_attr($contact_number); ?>">
            <small>(must contain country code. eg. +40726267846 or 0040726267846)</small>
        </p>
        <?php
        $contact_name = !empty($instance['contact_name']) ? $instance['contact_name'] : esc_html__('', 'twr_mobile');
        ?>
        <p class="twr-step-1">
            <label for="<?php echo esc_attr($this->get_field_id('contact_name')); ?>"><?php esc_attr_e('Phone Name:', 'twr_mobile'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('contact_name')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('contact_name')); ?>" type="text"
                   value="<?php echo esc_attr($contact_name); ?>">
        </p>
        <?php
        $message = !empty($instance['message']) ? $instance['message'] : esc_html__('', 'twr_mobile');
        ?>
        <p class="twr-step-1">
            <label for="<?php echo esc_attr($this->get_field_id('message')); ?>"><?php esc_attr_e('Start Message:', 'twr_mobile'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('message')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('message')); ?>" type="text"
                   value="<?php echo esc_attr($message); ?>">
        </p>
        <?php

    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';
        $instance['message'] = (!empty($new_instance['message'])) ? sanitize_text_field($new_instance['message']) : '';
        $instance['terms_url'] = (!empty($new_instance['terms_url'])) ? sanitize_text_field($new_instance['terms_url']) : '';
        $instance['contact_number'] = (!empty($new_instance['contact_number'])) ? sanitize_text_field($new_instance['contact_number']) : '';
        $instance['contact_name'] = (!empty($new_instance['contact_name'])) ? sanitize_text_field($new_instance['contact_name']) : '';

        return $instance;
    }

    public function formatPhoneNumber($phoneNumber = '')
    {
        $phoneNumber = str_replace('+', '', $phoneNumber);
        $phoneNumber = str_replace('-', '', $phoneNumber);
        $phoneNumber = str_replace(' ', '', $phoneNumber);
        return $phoneNumber;
    }


}