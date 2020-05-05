    <!-- For each module add a name for indexing -->
    <?php 
        $moduleIndex = array(
            'example' => -1,
        );
    ?>

    <?php if( have_rows('modules') ): ?>
        <?php while ( have_rows('modules') ) : the_row(); ?>

            <?php if( get_row_layout() == 'example' ): 
                $moduleIndex['example']++; 
                include 'templates/example.php';
            endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>