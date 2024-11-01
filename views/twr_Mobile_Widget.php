<div class="twr-whatsapp">
    <div class="twr-step-one">
        <div class="twr-whatsapp-heading">
            <span class="twr-prev"><i class="fab fa-whatsapp fa-2x fa-green"></i></span>
            <h2 class="widget-title"><?php echo $instance['title']; ?></h2>
        </div>
        <div class="twr-content">
            <p class="twr-body">Sign up to our WhatsApp newsletter to receive the latest offers and news about us!</p>
            <a class="twr-next button" data-current="twr-step-one" data-next="twr-step-two" href="#"><i class="fab fa-whatsapp"></i> Next Step</a>
        </div>
    </div>
    <div class="twr-step-two">
        <div class="twr-whatsapp-heading">
            <a class="twr-prev" href="#" data-current="twr-step-two" data-prev="twr-step-one">
                <svg class="jss3105" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                    <g>
                        <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"></path>
                    </g>
                </svg>
            </a>
            <h2 class="widget-title"><?php echo $instance['title']; ?></h2>
        </div>
        <div class="twr-content">
            <p class="twr-terms-text">I agree with all the terms, conditions and privacy policy that are linked
                below.</p>
            <p class="twr-agree-check">
                <label for="twr-agree">
                    <input type="checkbox" name="twr-agree" id="twr-agree" data-next="twr-step-three"
                           data-current="twr-step-two"> &nbsp; I agree. <a
                            href="<?php echo esc_attr($instance['terms_url']); ?>" target="_blank">Terms and
                        Conditions</a>.
                </label>
            </p>
        </div>
    </div>
    <div class="twr-step-three">
        <div class="twr-whatsapp-heading">
            <a class="twr-prev" href="#" data-current="twr-step-three" data-prev="twr-step-two">
                <svg class="jss3105" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                    <g>
                        <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"></path>
                    </g>
                </svg>
            </a>
            <h2 class="widget-title"><?php echo $instance['title']; ?></h2>
        </div>
        <div class="twr-content">
            <p class="twr-contact-info">Please save the number <strong><?php echo esc_attr($instance['contact_number']); ?></strong> in
                your phone contacts as <strong><?php echo esc_attr($instance['contact_name']); ?></strong>.</p>
            <p class="twr-contact-info">Hit the button and send <strong><?php echo esc_attr($instance['message']); ?></strong> to add your number to <strong><?php echo esc_attr($instance['contact_name']); ?></strong> newsletter.</p>
            <a class="twr-open button" data-next="" data-current=""
               href="<?php echo $chatUrl; ?>" <?php echo wp_is_mobile() ? '' : 'target="_blank"'; ?> >
                <i class="fab fa-whatsapp"></i> Open WhatsApp
            </a>
        </div>
    </div>
</div>