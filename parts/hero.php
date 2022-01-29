    <?php
        $select = "SELECT * FROM hero_section where hId='1'";
        $query = mysqli_query($connect, $select);
    
        while( $row = mysqli_fetch_array($query))
        {
            $heading = $row['heading'];
            $subheading = $row['subheading'];
        ?> 
            <div class="content">
                <h1 class="stagger1"><?= $heading ?></h1>
                <div class="meet stagger1">
                    <span>👇</span>
                    <p><?= $subheading ?></p>
                </div>
                <div class="scroll stagger1 scrolldown-wrapper">
                    <div class="scrolldown">
                        <svg height="30" width="10">
                            <circle class="scrolldown-p1" cx="5" cy="15" r="2" />
                            <circle class="scrolldown-p2" cx="5" cy="15" r="2" />
                        </svg>
                    </div>
                </div>
            </div>
                <svg width="686" height="688" class="hero-design" viewBox="0 0 686 688">
                <g id="blockdesign" transform="translate(-935 -289)">
                <rect class="square-anim" id="Rectangle_2" data-name="Rectangle 2" width="172" height="172" rx="19" transform="translate(1277 289)" fill="#6e00ff" />
                <rect class="square-anim" id="Rectangle_10" data-name="Rectangle 10" width="172" height="172" rx="86" transform="translate(1277 461)" fill="#ff64cb" />
                <rect class="square-anim" id="Rectangle_8" data-name="Rectangle 8" width="172" height="172" rx="19" transform="translate(1449 461)" fill="#e5d5fa" />
                <rect class="square-anim" id="Rectangle_5" data-name="Rectangle 5" width="172" height="172" rx="19" transform="translate(1277 633)" fill="#6e00ff" />
                <rect class="square-anim" id="Rectangle_3" data-name="Rectangle 3" width="172" height="172" rx="19" transform="translate(1107 461)" fill="#fff" />
                <rect class="square-anim" id="Rectangle_9" data-name="Rectangle 9" width="172" height="172" rx="86" transform="translate(1107 633)" fill="#00f7ff" />
                <rect class="square-anim" id="Rectangle_7" data-name="Rectangle 7" width="172" height="172" rx="19" transform="translate(935 633)" fill="#fff" opacity="0.17" />
                <rect class="square-anim" id="Rectangle_4" data-name="Rectangle 4" width="172" height="172" rx="19" transform="translate(1107 805)" fill="#fff" />
                </g>
                </svg>

            <?php } ?>