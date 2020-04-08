<body>
    <div class="basics">
        <ul>
            <div>
            <li><a href="#">Caballito</a></li>
                <p> - is the most fundamental rhythm played in Dominican merengue. It is typically played in the chorus.</p>
            </div>
            <div>
            <li><a href="#">Majao</a></li>
                <p> - is the yang to the Caballito. It is typically played during verses.</p>
            </div>
            <div>
            <li><a href="#">Repiques</a></li>
                <p> - refer to a guirero's improvised responses to rhythm, melody, and harmony within the context of the merengue genre.</p>
            </div>
        </ul>
    </div>






    <?php
        $basics = [
            'Caballito' => 'is the most fundamental rhythm played in Dominican merengue. It is typically played in the chorus',
            'Majao' => 'is the yang to the Caballito. It is typically played during verses',
            'Repiques' => 'refer to a guirero\'s improvised responses to rhythm, melody, and harmony within the context of the merengue genre'
        ]
    ?>
    <div class="basics">
        <ul>
            <?php foreach ($basics as $name => $description) { ?>
                <li style="display: flex; justify-content: flex-start;">
                    <a href=""><?php echo $name ?></a>
                    <p> - <?php echo $description ?></p>
                </li>
                <div style="clear:both; margin-bottom: 10px;"></div>
            <?php } ?>
        </ul>
    </div>

    <!-- <div class="basics">
        <ul>
            @foreach ($basics as $name => $description)
                <li>
                    <a href=""> {{ $name }}</a>
                    <p>- {{ $description }}</p>
                </li>
            @endforeach
        </ul>
    </div> -->

    <?php
        /// DONT DO THIS
        // foreach ($basics as $name => $description) {
        //     echo'
        //     <li style="display: flex; justify-content: flex-start;">
        //         <a href="">' . $name . '</a>
        //         <p> - ' . $description . '</p>
        //     </li>
        //     <div style="clear:both; margin-bottom: 10px;"></div> 
        //     ';
        // }
    ?>
</body>
