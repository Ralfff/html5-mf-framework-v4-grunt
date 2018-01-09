<?php
$btnType = get_field('button_type');
$btnTitle = get_field('button_title');
$btnURLint = get_field('url_intern');
$btnURLint = get_field('url_extern');
$btnURLint = get_field('url_download');


if ($btnType === 'intern') { ?>
    <a href="<?php echo $btnURLint; ?>"><?php echo $btnTitle; ?></a>
<?php } elseif($btnType === 'extern') { ?>
    <a href="<?php echo $btnURLext; ?>" target="_blank"><?php echo $btnTitle; ?></a>
<?php } elseif($btnType === 'download') { ?>
    <a href="<?php echo $btnURLdownload['url']; ?>" target="_blank"><?php echo $btnTitle; ?></a>
<?php } ?>