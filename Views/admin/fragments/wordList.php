
<section class="words">
    <?php
    if (empty($words)):
        echo "Não há palavras cadastradas nesta categoria";
    else:    
        for($letterCode = ord("A"); $letterCode <= ord('Z'); $letterCode++){
            $letter = chr($letterCode);
            if (verifyWords($words, $letter)) :
                echo "<div class='letter'>{$letter}</div>";
                foreach ($words as $word) :
                    if (substr($word->name,0,1) == $letter):
                    $v->insert("admin/fragments/word", ["word" => $word]);
                    endif;
                endforeach;
            endif;
        }

    endif;
    
    ?>
</section>