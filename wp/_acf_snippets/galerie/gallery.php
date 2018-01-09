<?php
images = get_field('gallery');

if( images ): ?>
    <?php foreach( images as image ): ?>

        <a href="<?php echo image['url']; ?>">
            <img src="<?php echo image['sizes']['thumbnail']; ?>" alt="<?php echo image['alt']; ?>" />
        </a>
        <p><?php echo image['caption']; ?></p>

    <?php endforeach; ?>
<?php endif; ?>