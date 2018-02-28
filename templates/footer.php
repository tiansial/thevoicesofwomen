<footer>
    <?php if (!is_page_template('template-newsletter.php')) { ?>
        <div class="newsletter-cta">
            <div class="newsletter-box">
                <p>Do you want to subscribe to our newsletter?</p>
                <a class="btn btn-brown" href="<?php echo get_permalink(70); ?>">Yes, please!</a>
            </div>
        </div>
    <?php } ?>
    <div class="footer-logo">
        <svg width="48px" height="34px" viewBox="0 0 48 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Group" fill="#1D1D1B">
                    <polygon id="Fill-1" points="47.3755 2.9414 31.5244 8.5426 46.8449 17.2169 31.4649 25.8396 47.3755 31.6028 47.3755 34.0207 25.8177 26.2325 42.0098 17.186 25.8313 8.1441 47.3755 0.5305"></polygon>
                    <path d="M20.2828,10.1368 C24.1685,9.1201 28.1416,11.4459 29.1581,15.3308 C30.1751,19.2165 27.849,23.1895 23.9639,24.206 C20.0787,25.2228 16.1054,22.897 15.0889,19.0118 C14.0724,15.1267 16.3979,11.1533 20.2828,10.1368 Z M24.5852,12.9613 C23.51,12.3323 22.1908,12.114 20.8837,12.4559 C19.5841,12.7957 18.5437,13.6328 17.9133,14.71 C17.3104,15.7401 17.085,16.9947 17.3682,18.2479 C17.4025,18.3508 17.4303,18.4562 17.4507,18.5648 C17.815,19.7928 18.6277,20.7761 19.662,21.3816 C20.6921,21.9845 21.9467,22.2099 23.1994,21.9267 C23.302,21.8921 23.4074,21.8646 23.5157,21.8442 C24.744,21.4805 25.7279,20.6675 26.3336,19.6332 C26.9624,18.5591 27.1809,17.241 26.8402,15.9357 L26.8391,15.9317 C26.4992,14.632 25.6621,13.5917 24.5852,12.9613 Z" id="Fill-2"></path>
                    <polygon id="Fill-3" points="12.2786 21.3411 0.514 17.0911 12.2783 12.9335 12.2786 15.3359 7.322 17.0953 12.2789 18.8902"></polygon>
                </g>
            </g>
        </svg>
        <h4>VOICES OF WOMEN</h4>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-4 footer-col">
                <h5><?php _e("Follow us", "thevoicesofwomen"); ?></h5>
                <ul>
                    <li><a href="https://www.facebook.com/VoicesofWomen1/"><?php _e('Facebook', 'voicesofwomen'); ?></a></li>
                    <li><a href="https://www.instagram.com/voicesofwomen/"><?php _e('Instagram', 'voicesofwomen'); ?></a></li>
                    <li><a href="#"><?php _e('Twitter', 'voicesofwomen'); ?></a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-4 footer-col">
                <h5><?php _e("About the Project", "thevoicesofwomen"); ?></h5>
                <ul>
                    <li><a href="<?php echo get_the_permalink(48); ?>"><?php echo get_the_title(48); ?></a></li>
                    <li><a href="<?php echo get_the_permalink(27); ?>"><?php echo get_the_title(27); ?></a></li>
                    <li><a href="<?php echo get_the_permalink(75); ?>"><?php echo get_the_title(75); ?></a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-4 footer-col">
                <h5><?php _e("Supporting", "thevoicesofwomen"); ?></h5>
                <ul>
                    <li><a href="#"><?php _e("Partnerships", "voicesofwomen"); ?></a></li>
                    <li><a href="#"><?php _e("Sponsors", "voicesofwomen"); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="terms">
            <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Use</a></li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <p>Made by <a href="http://yunik.us" target="_blank">yunik</a></p>
    </div>
</footer>
