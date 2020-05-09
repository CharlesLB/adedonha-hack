
<section class="words">
    <?php
    
    for($letterCode = ord("A"); $letterCode <= ord('Z'); $letterCode++){
        $letter = chr($letterCode);
        if (!empty($words) && verifyWords($words, $letter)) :
            echo "<span>{$letter}</span>";
            foreach ($words as $word) :
                if (substr($word,0,1) == $letter):
                $v->insert("admin/fragments/word", ["word" => $word]);
                endif;
            endforeach;
        endif;
    }
    
    ?>
</section>