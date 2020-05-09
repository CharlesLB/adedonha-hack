
<section class="words">
    <?php
    for($letterCode = ord("A"); $letterCode <= ord('Z'); $letterCode++){
        $letter = chr($letterCode);
        if (!empty($words)) :
            echo "<span>{$letter}</span>";
            foreach ($words as $word) :
                $v->insert("admin/fragments/word", ["word" => $word]);
            endforeach;
        endif;
    }
    
    ?>
</section>