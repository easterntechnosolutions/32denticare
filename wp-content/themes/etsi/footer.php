<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="logo-bottom">
                    <a href="#">
                        <?php $logo_desk = get_field('logo', 'option'); ?>
                        <img src="/wp-content/uploads/2024/08/image-30.svg" alt="Logo" title="32 Denti Care" loading="lazy"/>
                    </a>
                </div>
                <div class="contact-section" > 
                    <div class="address-bottom">
                        <span><i class="fas fa-map-marker-alt flat-icon-footer"></i></span><br>
                        <p><b>Location </b></p>
                        <p>32 Denti Care Dental Clinic , <br> G-13, Agamkrupa Shopping Complex, Suda Water Tank Road, Vesu, Surat - 395007</p>
                    </div>
                    <div class="address-bottom">
                        <span><i class="fa fa-phone-alt flat-icon-footer"></i></span><br>
                        <p><b>Phone Number</b></p>
                        <p><a href="tel:+91 9723696993" style="cursor: pointer;">(+91) 9723696993</a></p>
                    </div>
                    <div class="address-bottom">
                        <span><i class="fas fa-envelope flat-icon-footer"></i></span><br>
                        <p><b>Email</b></p>
                        <p><a href="mailto: 32denticareimplantcenter@gmail.com" style="cursor: pointer;">32denticareimplantcenter@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom" >
        <div class="container">
            <div class="row">
                <?php $attachment_image = get_field('logo', 'option'); 
                $logo_array = wp_get_attachment_image_src( $attachment_image['ID'], 'full' );?>
                <h3 class="copyright">Copyright   © <?php echo date('Y'); ?> 32 Denticare. All Rights Reserved.  |  Powered by : <a href="https://www.easternts.com/" target="_blank"> 	Eastern Techno Solutions (I) Pvt. Ltd.</a></h3>
                <ul class="list-icon-bottom">
                    <li class="bottom-icon-style"><a href="https://www.facebook.com/profile.php?id=100064157880163" target="_blank"><img src="/wp-content/uploads/2024/08/logos_facebook.svg" alt="facebook" loading="lazy"/></a></li>
                    <li class="bottom-icon-style"><a href="https://www.instagram.com/32denticareclinic/" target="_blank"><img src="/wp-content/uploads/2024/08/icons_instagram.svg" alt="Instagram" loading="lazy"/></a></li>
                    <li class="bottom-icon-style" ><a href="https://www.linkedin.com/in/jay-tahilramani-06a74a266/" target="_blank"><img src="/wp-content/uploads/2024/08/icons_linkedin.svg" alt="linkedin" loading="lazy"/></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<div class="button-go-top">
    <a href="#" class="go-top">
       <img src="../../../wp-content/uploads/2024/08/Objects.svg" alt="icon" loading="lazy">
    </a>
</div>

<?php wp_footer(); ?>
</div>
</body>
</html>