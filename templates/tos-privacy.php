<?php
/**
 * Template Name: Terms and Privacy
 */

get_header(); ?>

    <section id="terms-hero">
        <div class="row--padded">
            <div class="container text-center">
                <div class="row">
                    <div class="col-xs-12">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
$sections = get_field( 'sections' );
?>
    <section id="user-type">
        <div class="row--padded">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 section-toggles" style="padding:0">
						<?php foreach ( $sections as $section_id => $section ) { ?>
                            <a href="#"
                               class="js--toggle-section-tos <?= $section_id == 0 ? 'active' : ''; ?>"
                               data-section-filter="<?= sanitize_title( $section[ 'section_name' ] ); ?>">
								<?= $section[ 'section_name' ]; ?>
                            </a>
						<?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="accordions">
		<?php foreach (
			$sections

			as $section_id => $section
		) { ?>
            <div class="section--filterable section--<?= sanitize_title( $section[ 'section_name' ] ); ?>"
                 style="<?= ( $section_id > 0 ? 'display:none' : '' ); ?>">
                <div class="container">
					<?php foreach ( $section[ 'content_blocks' ] as $content_block_id => $content_block ) { ?>
						<?php if ( $content_block[ 'acf_fc_layout' ] == 'text' ) { ?>
                            <div class="row--padded">
								<?= $content_block[ 'content' ]; ?>
                            </div>
						<?php } elseif ( $content_block[ 'acf_fc_layout' ] == 'accordion' ) { ?>
                            <div class="row--padded">
                                <div class="panel-group" id="accordion-<?= $content_block_id ?>">
									<?php foreach ( $content_block[ 'panels' ] as $panel_id => $panel ) {
										$panel_uniqid = 'accordion__panel-' . $section_id . '-' . $content_block_id . '-' . $panel_id;
										?>
                                        <div class="accordion-toggle" data-toggle="collapse"
                                             data-parent="#accordion-<?= $content_block_id; ?>"
                                             href="#<?= $panel_uniqid; ?>">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
														<?= $panel[ 'title' ]; ?>
                                                    </h4>
                                                </div>
                                                <div id="<?= $panel_uniqid; ?>" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <div class="container">
															<?= $panel[ 'content' ]; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
									<?php } ?>
                                </div>
                            </div>
						<?php } ?>
					<?php } ?>
                </div>
            </div>
		<?php } ?>

    </section>

<?php
get_footer();