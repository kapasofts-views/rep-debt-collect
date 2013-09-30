<script>
    jQuery(document).ready(function($){
        $('.small-trial-button').bind("click", function(){
            var frame = $('#demo-frame');
            frame.attr('src', 'http://wantmybucksback.com/sample/');
            $('#pubSample').modal('show');
        });
    });
</script>
<div id="main_product">
    <div class="container wrapper">
        <div class="main_p1">
            <h1>An Effective Way Get Money Back </h1>
           <h2>Reputation is the most important thing especially for your debtor!</h2>
            <ul class="features-1 ">
                <li> More people use Google search as first attempt for information</li>
                <li> In past, debts were published in newspaper as means to collect</li>
                <li> Today we publish it internet anywhere and endlessly till money repaid </li>
            </ul>
            <div class="buttons" id="buttons">
                <a class="signup-button next-to-demo"  href="/form"  > Start Now! </a>

                <div class="divider-button"></div>

                <a class="small-trial-button" href="#pubSample" role="button"> See Sample </a>
            </div>
        </div>
        <div class="main_p2">
            <?php print '<img src="'.base_path() . path_to_theme() .'/img/get-my-money-back/money-get-back.png" height="391" width="376" alt="money get back">'; ?>
        </div>
    </div>
</div>
<div class="container wrapper">
<div class="divider"> </div>
<div class="features responsive">
    <h1> Here's how it works!  </h1>
    <div class=" features-list tabbed_content">
        <div class="tabs"  >
            <div></div>
            <div class="fl tab_item current">
                <?php print '<img src="'.base_path() . path_to_theme() .'/img/get-my-money-back/bounced-check.png" alt="bounced check">'; ?>
                <h3> Internet Search </h3>
                <p> More people use simple Google search as first attempt for information</p>
            </div>
            <div class="fl tab_item">
                <?php print '<img src="'.base_path() . path_to_theme() .'/img/get-my-money-back/how-to-get-money-back-from-a-friend.png" alt="hot to get money back from a friend">'; ?>
                <h3> Making It Public! </h3>
                <p> Unpaid balance along debtor info is displayed when name is used Google search </p>
            </div>
            <div class="fl1 tab_item">
                <?php print '<img src="'.base_path() . path_to_theme() .'/img/get-my-money-back/overdue-invoice.png" alt="overdue invoice">'; ?>
                <h3> Get Your Bucks Back! </h3>
                <p> To save their reputation debtor repays your money and the publication is removed </p>
            </div>
            <div class="clear"> </div>
            <div class="moving_bg2"> &nbsp; </div>

        </div>
        <div class="slide_content">
            <div class="tabslider">
                <ul>
                    <li class="featured1">
                        <div class="banner">
                            <?php print '<img src="'.base_path() . path_to_theme() .'/img/get-my-money-back/unpaid-salary.png" alt="unpaid salary">'; ?>
                        </div>
                        <div class="banner-content">
                            <h1> Looking Up On Internet</h1>
                            <h2> Search engines are used for <span>more than you think</span></h2>
                            <ul class="features-2 ">
                                <li> Family members search to see how you are doing</li>
                                <li> Friends search to find what type of person you are </li>
                                <li> Associates, potential customers search to learn how earnest you are </li>
                            </ul>
                            <!--   Buy it NOW - Button   -->
                            <div class="buttons">
                                <a class="signup-button next-to-demo"  href="/form"  > Start now! </a>
                                <div class="divider-button"></div>

                                <a class="small-trial-button" href="#"> See Sample </a>
                             </div>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li class="featured1">
                        <div class="banner">
                            <?php print '<img src="'.base_path() . path_to_theme() .'/img/get-my-money-back/bad-check.png" alt="bad check">'; ?>
                        </div>
                        <div class="banner-content">
                            <h1> Making It Public</h1>
                            <h2> Published internet it becomes public <span> for anyone and anywhere</span></h2>
                            <ul class="features-2 ">
                                <li> Unpaid balance along debtor info are published on Internet </li>
                                <li> The publication is optimize for major search engines </li>
                                <li> The publication is displayed in search results for anyone anywhere</li>
                            </ul>
                            <!--   Buy it NOW - Button   -->
                            <div class="buttons">
                                <a class="signup-button next-to-demo"  href="/form"  > Start now! </a>
                                <div class="divider-button"></div>

                                <a class="small-trial-button" href="#"> See Sample </a>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li class="featured1">
                        <div class="banner">
                            <?php print '<img src="'.base_path() . path_to_theme() .'/img/get-my-money-back/the-debt-collector.png" alt="the-debt-collector">'; ?>
                        </div>
                        <div class="banner-content">
                            <h1> Receive Money Back</h1>
                            <h2> To save their reputation <span>debtor repays your money</span></h2>
                            <ul class="features-2 ">
                                <li> Debtor is informed about the publication</li>
                                <li> To save their reputation debtor repays your money</li>
                                <li> The publication is removed </li>
                            </ul>
                            <div class="buttons">
                                <a class="signup-button next-to-demo"  href="/form"  > Start now! </a>
                                <div class="divider-button"></div>

                                <a class="small-trial-button" href="#"> See Sample </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clear"> </div>

        </div>
    </div>
</div>
<div class="responsive">
    <h1> Find The Plan For You</h1>
    <h2>  Choose a plan <span> Designed For You ! </span>  </h2>
    <div class="row-fluid pricing">
    <?php
        foreach($prods as $prod_id => $prod){
        echo '<div class="span4 prc">';
    if($prod_id == 2){
        echo '<div class="prc prc-header2"> ';
    }else{
        echo '<div class="prc prc-header"> ';
    }
        echo '<h1> '.$prod['plan_name'].' </h1> <p> All you need get started </p> <small> </small>  <h3>'.$prod['price'].' <strong>$</strong></h3> <p>setup fee</p></div>';
        echo '<div class="prc prc-body">';
        echo '<p> Ranks '.$prod['search_rank'].' In Search Results </p>';
        if($prod['search_rank'] != "1 - 3"){
            echo '<span>or better</span>';
        }
        echo '<small></small>';
        echo '<p> Translated In '.$prod['multilingual_support'].'</p>';
        echo '<small></small>';
        echo '<p>'.$prod['designs_avail'].'</p>';
        echo '<small></small>';

        if($prod['payment_sys'] == 'Yes'){
            echo '<p> Online Payment System</p>';
            echo '<span>tight to your account</span>';
            echo '<small></small>';
        }

        if($prod['cms'] == 'Yes'){
            echo '<p> Manage Content Any Time </p>';
            echo '<small></small>';
        }

        if($prod['reminder'] == 'Yes'){
            if($prod_id == 2){
                echo '<p>Debtor Receives Reminder Monthly</p>';
            }else{
                echo '<p>Debtor Receives Reminder Weekly</p>';
            }
            echo '<span>along with # of views other stats</span>';
            echo '<small></small>';
        }

        if($prod['social'] == 'Yes'){
            echo '<p>Publicized Social Networks </p>';
            echo '<span>Twitter, Facebook and others Debtor social space</span>';
            echo '<small></small>';
        }

        echo '<p>$'.$prod['maintenance_fee'].' Maintenance Fee(monthly)  </p>';
        echo '<span>to keep public</span>';
        echo '</div>';
            if($prod_id == 2){
                echo '<div class="prc-footer2"> <a class="signup-button"  href="/form"  > Start now! </a> </div>';
            }else{
                echo '<div class="prc-footer"> <a class="signup-button"  href="/form"  > Start now! </a> </div>';
            }

        echo '</div>';
    }
?>
        <div class="clear"> </div>
        <br>
        <p>***The other half is going to be collected from your debtor at the time your money is repaid</p>
    </div>
</div>
<div class="divider2"> </div>
<div id="newsletter" >
   <div class="newsletter">
    <div class="news1">
        <?php print '<img src="'.base_path() . path_to_theme() .'/img/get-my-money-back/sue-tenant-for-unpaid-rent.png" alt="vacation rental management software">'; ?>
        <h3> Subscribe to newsletter<div>And Receive <span>inside information</span></div></h3>
    </div>
       <script type="text/javascript">
           var NEWSLETTER = (function () {
               return {
                   <?php print  "response: 'Thank You for subscribing to newsletter',";?>
                   button: 'Subscribe'
               };
           }());
       </script>
    <script type="text/javascript" src="http://kapasoft.com/repos/backbone/newsletter/main/newsletter.min.js"></script>
    <div class="news2">
        <?php print '<img src="'.base_path() . path_to_theme() .'/img/get-my-money-back/rent-collect.png" alt="owners vacation rentals">'; ?>
        <form id="app-newsletter" >
        </form>
    </div>
   </div>
</div>
    <div class="divider2"> </div>
</div>
<div class="buy-footer">
    <div class="wrapper container">
        <h1 class="visible-desktop"> <span> Help avoid financial scam, untrustworthy individuals.</span>&nbsp;&nbsp;And Recover Your Money ! </h1>
        <a class="signup-button" href="/form"> Start now! </a>
    </div>
</div>
<!-- DEMO Modal-->
<div id="pubSample" class="modal demoModal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-body-demo">
        <?php print '<iframe id="demo-frame" src="" class="" height="500" width="875" scrolling="no" frameborder="0" seamless></iframe>';?>
    </div>
</div>
