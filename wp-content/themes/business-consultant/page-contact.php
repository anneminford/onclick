<?php
/**
 * Main Page template file
 **/
get_header();
$header_class = (esc_html(get_theme_mod('display_fixed_header')))?esc_attr('heading-layer'):esc_attr('transparent'); ?> 
    <div class="heading-wrap blog-heading-wrap">
        <div class="<?php echo $header_class; ?>">
            <div class="heading-title">
                <h4><?php the_title(); ?></h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row responsive">
            <div class="col-md-9 col-sm-12 col-xs-12 content">
            <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content();
                    wp_link_pages();
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    } ?>
            <?php endwhile;  ?>


                    <form id="contact-form" method="post" action="contact.php" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Send message">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted"><strong>*</strong> These fields are required. Contact form template by <a href="https://bootstrapious.com/p/how-to-build-a-working-bootstrap-contact-form" target="_blank">Bootstrapious</a>.</p>
                                </div>
                            </div>
                        </div>

                    </form>
            </div>
            <?php get_sidebar();?>            
        </div>
    </div>
<!-- ADD THESE INTO FOOTER WITH CONDITIONAL STATEMENT -->
    <script src="validator.js"></script>
    <script src="contact.js"></script>
<?php get_footer(); ?>