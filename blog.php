	<?php
		// The require_once statement is identical to require except PHP will check 
		// if the file has already been included, and if so, not 
		// include (require) it again
		// choose to require a file
		//calls the file header.php and footer.php
		//navigation is a link to pour post
			require_once(__DIR__ . "/controller/login-verify.php");  
			require_once(__DIR__ . "/view/header.php");
			if(authenticateUser()){
				require_once(__DIR__ . "/view/navigation.php");

			}
			require_once(__DIR__ . "/controller/create-db.php");
			require_once(__DIR__ . "/controller/read-posts.php");
			require_once(__DIR__ . "/view/body.php");
			require_once(__DIR__ . "/view/footer.php");
	?>
	 <div class="row pushright">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img data-src="holder.js/300x300" alt="...">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Cold-pressed sriracha 
            Etsy squid dreamcatcher. Forage authentic mumblecore Portland, 
            swag mlkshk Banksy lumbersexual seitan 3 wolf moon Neutra heirloom bespoke.
             Craft beer paleo pug YOLO Thundercats try-hard. Literally freegan Thundercats 
             hashtag actually pickled listicle, lumbersexual selfies twee pour-over craft beer
              typewriter church-key. Vice mumblecore selfies bicycle rights, chillwave cronut 
              ethical PBR&B. 8-bit McSweeney's Kickstarter, Intelligentsia meggings tote bag High
               Life put a bird on it occupy. Brooklyn Tumblr brunch, Kickstarter four dollar toast 
               sriracha kitsch  vegan disrupt Intelligentsia gentrify lo-fi gastropub tattooed hella.</p>
          </div>
        </div>
      </div>
    </div>


