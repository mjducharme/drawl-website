<div id="dom-target" style="display: none;">
    <?php
        session_start(); 
        $user_id = "mimi"; 
        echo $user_id; /* You have to escape because the result
                                           will not be valid HTML otherwise. */
    ?>
</div>