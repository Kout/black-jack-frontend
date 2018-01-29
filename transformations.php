<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Blackjack (21)</title>
    <link rel="stylesheet" type="text/css" href="/tranformation.css"/>
</head>
<body>
    <?php
        $card_values = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];
        $card_suites = ['hearts', 'clubs', 'diams', 'spades'];
    ?>
    <div class="table">
        <?php foreach ($card_suites as $suite): ?>
            <?php foreach ($card_values as $value): ?>

                <div class="card<?php if($suite === 'hearts' || $suite === 'diams') : ?> card--red<?php endif ;?>">
                    <div class="avers">
                        <span><?=$value;?>&nbsp;&<?=$suite;?>;</span>
                        <span><?=$value;?>&nbsp;&<?=$suite;?>;</span>
                    </div>
                    <div class="revers">
                        <p>××××××××××××</p>
                        <p><b>Ferd. Piatnik</b></p>
                        <p><small>a synové</small></p>
                        <p>×××××××××××××</p>
                    </div>
                </div>

            <?php endforeach ?>
        <?php endforeach ?>
    </div>

    <script>
        [].forEach.call(document.querySelectorAll('.card'), function(el) {
            el.addEventListener('click', function() {
                this.classList.toggle('set');
            });
        });
    </script>

</body>
</html>