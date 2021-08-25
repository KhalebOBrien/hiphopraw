       
    <div id="home-videos-row">
      <?php
            $number_of_videos = 0;
            $displayed_videos=0;
            if ($random_videokes) {
            $number_of_videos = sizeof($random_videokes);
            $displayed_videos=0;
                foreach ($random_videokes as $videoke){
                    echo View::forge("videokes/partials/single_item",array("videoke"=>$videoke));
                    $displayed_videos++;
                    if($displayed_videos > $number_of_videos || $displayed_videos >= 8)
                    	break;
                }
            }
      ?>
    </div>
     <div class = 'clear-both-elements'>
     </div>
    <div id="home-banners-row">
        <div id="banner-container">
            <?php
                $page_left_banner = Model_Banner::query()->where("page", "Home")->where("position", "Left")->order_by('created_at', 'desc')->limit(1)->offset($page_no)->get_one();
                $page_right_banner = Model_Banner::query()->where("page", "Home")->where("position", "Right")->order_by('created_at', 'desc')->limit(1)->offset($page_no)->get_one();
            ?>
            <?php if(isset($page_left_banner)): ?>
            <div id="banner-gitar">
                <a href="<?php echo $page_left_banner->web_address; ?>" target="_blank"><?php echo Asset::img(Model_Banner::get_banner($page_left_banner)) ?></a>
            </div>
            <?php endif; ?>
            <?php if(isset($page_right_banner)): ?>
                <div id="banner-coca">
                    <a href="<?php echo $page_right_banner->web_address; ?>" target="_blank"><?php echo Asset::img(Model_Banner::get_banner($page_right_banner)) ?></a>
                </div>
            <?php endif; ?>
			<div class="clearfix"></div>
        </div>
    </div>