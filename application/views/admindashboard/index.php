<?php $zero = 0 ; ?>
<!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">

            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-newspaper-o"></i> Total Active News</span>
              <div class="count green">1225</div>
              <span class="count_bottom">
                Total Active News Count 1225
              </span>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-bell"></i> Total Notifications</span>
              <div class="count">1550</div>
              <span class="count_bottom">
                Total Notifications Count 1556
              </span>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-bell"></i> Total Email Subscriptions</span>
              <div class="count">7441</div>
              <span class="count_bottom">
                Total Email Subscriptions Count 7410
              </span>
            </div>

          </div>

          

         <hr />
          

          <!-- /top tiles -->
          <div class="col-md-12 col-sm-12 col-xs-12">

          	<div class="row">

              <div class="col-md-3 col-sm-3 col-xs-12" style="border: 2px solid;text-align: center;">
                <a href="<?php echo base_url() ; ?>index.php/admindashboard/">
                  <i class="fa fa-home fa-5x"></i><br />
                  <p style="font-size: 18px;background-color: #5a738e;color: #fff;margin-top: 4px;">DASHBOARD</p>
                </a>
              </div>

              <div class="col-md-3 col-sm-3 col-xs-12" style="border: 2px solid;text-align: center;">
                <a href="<?php echo base_url() ; ?>index.php/admindashboard/sitesettings">
                  <i class="fa fa-cog fa-5x"></i><br />
                  <p style="font-size: 18px;background-color: #5a738e;color: #fff;margin-top: 4px;">SITE SETTINGS</p>
                </a>
              </div>

             <!-- <div class="col-md-3 col-sm-3 col-xs-12" style="border: 2px solid;text-align: center;">
                <a href="<?php //echo base_url() ; ?>index.php/admindashboard/news_creation">
                  <i class="fa fa-newspaper-o fa-5x"></i><br />
                  <p style="font-size: 18px;background-color: #5a738e;color: #fff;margin-top: 4px;">NEWS CREATION</p>
                </a>
              </div>

              <div class="col-md-3 col-sm-3 col-xs-12" style="border: 2px solid;text-align: center;">
                <a href="<?php //echo base_url() ; ?>index.php/admindashboard/news_listing">
                  <i class="fa fa-newspaper-o fa-5x"></i><br />
                  <p style="font-size: 18px;background-color: #5a738e;color: #fff;margin-top: 4px;">NEWS LISTING</p>
                </a>
              </div>

              <div class="col-md-3 col-sm-3 col-xs-12" style="border: 2px solid;text-align: center;">
                <a href="<?php //echo base_url() ; ?>index.php/admindashboard/luckynumberupdatedaily">
                  <i class="fa fa-gift fa-5x"></i><br />
                  <p style="font-size: 18px;background-color: #5a738e;color: #fff;margin-top: 4px;">LUCKEY NUMBERS</p>
                </a>
              </div>

          		<div class="col-md-3 col-sm-3 col-xs-12" style="border: 2px solid;text-align: center;">
          			<a href="<?php //echo base_url() ; ?>index.php/admindashboard/push_notification_creation">
          				<i class="fa fa-bell fa-5x"></i>
          				<p style="font-size: 18px;background-color: #5a738e;color: #fff;margin-top: 4px;">NOTIFICATION CREATION</p>
          			</a>          			
          		</div>

              <div class="col-md-3 col-sm-3 col-xs-12" style="border: 2px solid;text-align: center;">
                <a href="<?php //echo base_url() ; ?>index.php/admindashboard/notification_listing">
                  <i class="fa fa-bell fa-5x"></i>
                  <p style="font-size: 18px;background-color: #5a738e;color: #fff;margin-top: 4px;">NOTIFICATION LISTING</p>
                </a>                
              </div>

              <div class="col-md-3 col-sm-3 col-xs-12" style="border: 2px solid;text-align: center;">
                <a href="<?php //echo base_url() ; ?>index.php/admindashboard/email_subscriptions_listing">
                  <i class="fa fa-reply-all fa-5x"></i>
                  <p style="font-size: 18px;background-color: #5a738e;color: #fff;margin-top: 4px;">SUBSCRIPTIONS LISTING</p>
                </a>                
              </div>

              <div class="col-md-3 col-sm-3 col-xs-12" style="border: 2px solid;text-align: center;">
                <a href="<?php //echo base_url() ; ?>index.php/admindashboard/share_friends_button_count">
                  <i class="fa fa-square fa-5x"></i><br />
                  <p style="font-size: 18px;background-color: #5a738e;color: #fff;margin-top: 4px;">BUTTON COUNT</p>
                </a>
              </div>

              <div class="col-md-3 col-sm-3 col-xs-12" style="border: 2px solid;text-align: center;">
                <a href="<?php //echo base_url() ; ?>index.php/admindashboard/create_share_friends_button">
                  <i class="fa fa-square fa-5x"></i>
                  <p style="font-size: 15px;background-color: #5a738e;color: #fff;margin-top: 4px;">CREATE SHARE FRIEND BUTTON</p>
                </a>                
              </div>

              <div class="col-md-3 col-sm-3 col-xs-12" style="border: 2px solid;text-align: center;">
                <a href="<?php //echo base_url() ; ?>index.php/admindashboard/listof_share_friends_button">
                  <i class="fa fa-square fa-5x"></i>
                  <p style="font-size: 15px;background-color: #5a738e;color: #fff;margin-top: 4px;">SHARE FRIENDS BUTTON LIST</p>
                </a>                
              </div>

              <div class="col-md-3 col-sm-3 col-xs-12" style="border: 2px solid;text-align: center;">
                <a href="<?php //echo base_url() ; ?>index.php/admindashboard/footer_texts_update">
                  <i class="fa fa-font fa-5x"></i>
                  <p style="font-size: 18px;background-color: #5a738e;color: #fff;margin-top: 4px;">FOOTER TEXT</p>
                </a>                
              </div> -->

          	</div>

          </div>

        </div>
<!-- /page content -->



