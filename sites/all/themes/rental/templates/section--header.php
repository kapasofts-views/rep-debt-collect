<header>
    <div class="container wrapper">
        <div class="logo">
            <hgroup>
                <h1>Want My Bucks Back</h1>
                <h2>Reputation Online</h2>
            </hgroup>
        </div>
        <div class='menu'>
            <div class="site-menu foo">
                <ul class="navi">
                    <?php
                    foreach($mainMenu as $menuItem){
                        print '<li class="'.$menuItem['active'].'"><a href="'.$menuItem['url'].'" title="'.$menuItem['title'].'">'.$menuItem['title'].'</a></li>';
                    }
                    ?>
<!--                    <li class="active"> <a href="#"> Home </a> </li>-->
<!--                    <li> <a href="#">Contact </a> </li>-->
<!--                    <li> <a href="#">FAQ </a> </li>-->
                </ul>
            </div>

            <!-- Social Icons - Phone -->
            <div class="phone">
                <p class="hidden-phone">Call us Now ! - <strong> (201)903-BACK(2225) </strong></p>
                <ul class="social">
                    <li id="facebook"><a href="#"></a></li>
                    <li id="twitter"><a href="#" id="popi"></a></li>
<!--                    <li id="youtube"><a href="#" id="popi"></a></li>-->
                </ul>
            </div>
        </div>
    </div>
</header>
