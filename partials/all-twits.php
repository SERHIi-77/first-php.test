<?php

$twits = getAllTwitsByUser(getUserID());

?>
<div class="container" >
    <ul id="listTwits" class="list-unstyled">
        <?php while($row = $twits->fetch_assoc()): ?>
            <li><?php echo $row['twit']; ?></li>

        <?php endwhile; ?>
    </ul>
</div>