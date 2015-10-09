<?php if (!$this) { exit(header('HTTP/1.0 403 Forbidden')); } ?>

<ul>
    <?php foreach($items as $item) { ?>
    <li>
        <?php echo $item->Description ?>
    </li>
    <?php } ?>
</ul>