<center><div class="j-xxlarge j-bolder j-text-color3"style="max-width:300px"><span class='j-text-color1'>Operational </span> Mode</div></center>
    <div class='j-row'style='margin-top:20px;'>
        <div class='j-col s6 j-padding j-display-container'style="height:300px">
            <div class='j-display-right'>
                <div class='j-large'>
                    <span class='j-xlarge j-bolder j-circle j-color1'style="padding:8px 15px;margin-right:10px;"><?php s_n();?></span>
                    <span class='j-bolder j-text-color1'>CONNECT</span>
                </div>
                <div style="margin-top:20px">
                    Connect with us through call or message, and we will make plan on how to receive the item.
                    <div class='j-we-text'style='margin-top:20px'>
                        <a href="tel:<?=get_json_data('phonenumber','about_us')?>"class='j-btn j-color1 j-text-color4 j-border-2 j-border-color1 j-round-large' style="margin-right:30px;">Call Us</a>
                        <a href='http://wa.me/<?=get_json_data('phonenumber','about_us')?>'target='_blank'class='j-btn j-text-color1 j-border-2 j-border-color1 j-round-large'>Chat Us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class='j-col s6 j-padding j-display-container'style="height:280px">
        <img src="<?=file_location("media_url","home/connect.png")?>"class='j-round-large'style="width:100%;height:inherit"/>
        </div>
    </div>
    <div class='j-row'style="margin-top:30px">
        <div class='j-col s6 j-padding-large'style="height:280px">
        <img src="<?=file_location("media_url","home/package.png")?>"class='j-round-large'style="width:100%;height:inherit"/>
        </div>
        <div class='j-col s6 j-padding j-display-container'style="height:300px">
            <div class='j-display-right'>
                <div class='j-large'>
                    <span class='j-xlarge j-bolder j-circle j-color1'style="padding:8px 15px;margin-right:10px;"><?php s_n();?></span>
                    <span class='j-bolder j-text-color1'>PACKAGE</span>
                </div>
                <div style="margin-top:20px">
                    Once we receive your item, We package them diligently and prepare them for shipping/waybilling.
                </div>
            </div>
        </div>
    </div>
    <div class='j-row'style="margin-top:30px">
        <div class='j-col s6 j-padding j-display-container'style="height:300px">
            <div class='j-display-right'>
                <div class='j-large'>
                    <span class='j-xlarge j-bolder j-circle j-color1'style="padding:8px 15px;margin-right:10px;"><?php s_n();?></span>
                    <span class='j-bolder j-text-color1'>WAYBILL</span>
                </div>
                <div style="margin-top:20px">
                    We ship/send out all the packaged items directly from our warehouse within 24 hours with our logistics system.
                </div>
            </div>
        </div>
        <div class='j-col s6 j-padding j-display-container'style="height:280px">
        <img src="<?=file_location("media_url","home/waybill.png")?>"class='j-round-large'style="width:100%;height:inherit"/>
        </div>
    </div>
    <br>