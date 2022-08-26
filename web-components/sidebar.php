 <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6b53b48e" data-id="6b53b48e" data-element_type="column">
            <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-45b5ef13 elementor-widget elementor-widget-cms_navigation_menu" data-id="45b5ef13" data-element_type="widget" data-widget_type="cms_navigation_menu.default">
                <div class="elementor-widget-container">
                <div class="cms-navigation-menu1 e-sidebar-widget">
                    <h3 class="widget-title">Our Services</h3>
                <div class="menu-menu-services-container"><ul id="menu-menu-services-1" class="menu">
<?php
            $sql = "SELECT id,title FROM service";
$send = $database->query($sql);
$row = $database->fetch_array($send);
$rowcount = $database->num_rows($send);
foreach ($send as $row) {
    $id = $row['id'];
      $title = $row['title'];
      // $ser_description = $row['description'];
      // $highlight = $row['highlights'];
      // $date_created = date('l,d-m-Y',strtotime($row['date_created']));
      // $page_content =$row['page_content'];
      // $cimage = $row['cover_image'];
      // $service_video = $row['service_video'];

      echo '<li class="menu-item menu-item-type-post_type menu-item-object-service menu-item-3579"><a href="'.$BASEDIR.'service/index.php?service='.$id.'&title='.$title.'">'.$title.'</a></li>';
}

           ?>         

</ul></div>    </div>
        </div>
                </div>
                <div class="elementor-element elementor-element-353d42df elementor-widget elementor-widget-spacer" data-id="353d42df" data-element_type="widget" data-widget_type="spacer.default">
                <div class="elementor-widget-container">
                    <div class="elementor-spacer">
            <div class="elementor-spacer-inner"></div>
        </div>
                </div>
                </div>
                <div class="elementor-element elementor-element-eb102e1 elementor-widget elementor-widget-cms_fancy_box" data-id="eb102e1" data-element_type="widget" data-widget_type="cms_fancy_box.default">
                <div class="elementor-widget-container">
            <div class="cms-fancy-box-layout2 bg-image default" style="background-image: url(<?php echo $BASEDIR; ?>assets/images/uploads/widget_bg.jpg);">
    <div class="content-inner">
        <h3 class="item--title">
            Dedicated Customer Teams &  Agile Services        </h3>
        <div class="item--description">
            Our worldwide presence ensures the timeliness, cost efficiency compliance adherence required to ensure your production timelines are met.        </div>
                   <!-- <div class="item--button">
                <a class="btn btn-outline-white" href="#">Schedule An Appointment</a>
            </div>-->
            </div>
</div>      </div>
                </div>
                <div class="elementor-element elementor-element-29bd2831 elementor-widget elementor-widget-spacer" data-id="29bd2831" data-element_type="widget" data-widget_type="spacer.default">
                <div class="elementor-widget-container">
                    <div class="elementor-spacer">
            <div class="elementor-spacer-inner"></div>
        </div>
                </div>
                </div>
                <!-- <div class="elementor-element elementor-element-b4e45fb elementor-widget elementor-widget-cms_download" data-id="b4e45fb" data-element_type="widget" data-widget_type="cms_download.default">
                <div class="elementor-widget-container">
                <div class="cms-download e-sidebar-widget">
                    <h3 class="widget-title">Download</h3>
                            <div class="item--download">
                <a href="#" target="_blank" style="background-color: #E11D07">
                    <span class="download-title">Company Report 2019</span>
                                            <span class="download-file-type" style="color: #E11D07">
                            PDF                        </span>
                                    </a>
           </div>
                    <div class="item--download">
                <a href="#" target="_blank" style="background-color: #1B1A1A">
                    <span class="download-title">Company Brochure</span>
                                            <span class="download-file-type" style="color: #1B1A1A">
                            PDF                        </span>
                                    </a>
           </div>
            </div>
        </div>
                </div> -->
                        </div>
                    </div>
        </div>