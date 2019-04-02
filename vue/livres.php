<aside>

</aside>
<article class="container-books container-grid">
    <ul>
        <?php
        foreach ($arrayLivre as $unLivre) {
            ?>
        <li>
            <a href="">
            <figure>
            <div class="img-book" data-id ="<?=$unLivre->id();?>" style="background-image: url(&quot;<?=$unLivre->img();?>&quot;);"></div>
                <figcaption>
                    <h2>
                        <?= $unLivre->title() ?>
                    </h2>
                </figcaption>
            </figure>
            </a>
        </li>
        
        <?php

    }
    ?>
    </ul>
</article> 