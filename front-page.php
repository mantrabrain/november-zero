<?php
/**
 *The front page template file.
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package November_Zero
 */

get_header();
?>
    <main id="main" class="site-main">
        <div class="wrapper">
            <?php
            get_template_part('template-parts/content-bigtitle');
            ?>
            <?php
            $layout = esc_attr(get_theme_mod('november_zero_layout_stting', 'sectionboxed'));
            if ($layout == "sectionboxed"):
            ?>
            <div class="box-section">
                <?php endif; ?>
                <?php
                $template_parts = get_theme_mod('november_zero_section_ordering_items', array('feature', 'portfolio', 'about', 'blog', 'contact'));

                // Loop parts.
                foreach ($template_parts as $template_part) {
                    get_template_part('template-parts/content-' . $template_part);
                }
                ?>
                <?php if ($layout == "sectionboxed"): ?>
            </div>
        <?php endif; ?>
        </div>
    </main>
<?php
get_footer();
