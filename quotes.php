<?php
$quote = array(
    1 => "It cannot be seen or touched. It is not composed of matter at all.
    However, it is very real. It can perform intellectual work.
    It can answer questions. The programs we use to
    conjure processes are like a sorcerer's spells.
    They are carefully composed from symbolic expressions in arcane and
    esoteric programming languages that prescribe the tasks we want
    our processes to perform.
    -- <sub><a href='http://mitpress.mit.edu/sicp/'>SICP</a></sub>"
);
srand((double) microtime() * 1000000);
$randnum = rand(1, 1);
?>

    <div style="width: 400px; float: left; margin-left: 5px; ">
        <h2 id="header4">Quotes</h2>
        <p class="box quote" id="content4">
            <?php print $quote[$randnum] ?>
        </p>
    </div>
