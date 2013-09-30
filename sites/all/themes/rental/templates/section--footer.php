<footer>
    <div class="container wrapper">
        <div class="foo">
            <ul class="social2">
                <li id="facebook2"></li>
                <li id="twitter2"> </li>
            </ul>
        </div>
        <div class="foo">
            <ul class="navi">
                <?php
                foreach($mainMenu as $menuItem){
                    print '<li class="'.$menuItem['active'].'"><a href="'.$menuItem['url'].'" title="'.$menuItem['title'].'">'.$menuItem['title'].'</a></li>';
                }
                ?>
            </ul>
        </div>
        <div class=" copy">
            <p>  © Want My Bucks Back | All rights reserved. <a href="http://kapasoft.com" target="_blank"> Web Design by Kapasoft Web Solutions</a> </p>
        </div>
    </div>
</footer>


