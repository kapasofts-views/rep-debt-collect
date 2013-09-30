<?php
function rental_preprocess_html(&$vars, $hook) {
    global $conf;
    // Return nid of nodes of type "interface_configuraitons".
    $nid_config = db_select('node', 'n')
        ->fields('n', array('nid'))
        ->fields('n', array('type'))
        ->condition('n.type', 'interface_configurations')
        ->execute()
        ->fetchCol();
    //load the configurations
    $configurationNode = node_load($nid_config[0]);
    $interfaceConfig = array();

    if(!empty($configurationNode->field_driver_url['und'][0]['value'])){
        //if set by user
        $interfaceConfig['driver_url'] = $configurationNode->field_driver_url['und'][0]['value'];
    }else{
        //hard coded in default/settings.php
        $interfaceConfig['driver_url'] = $conf['global_driver_url'];
    }
    if(!empty($configurationNode->field_driver_port['und'][0]['value'])){
        //if set by user
        $interfaceConfig['driver_port'] = $configurationNode->field_driver_port['und'][0]['value'];
    }else{
        //hard coded in default/settings.php
        $interfaceConfig['driver_port'] = $conf['global_driver_port'];
    }

        $vars['interfaceConfig'] = $interfaceConfig;

    /****Retrieving Main Menu******/
    $mainMenuArray = menu_load_links('main-menu');
    $finalMainMenu = array();
    foreach($mainMenuArray as $key=>$menuItem){
      if(!$menuItem['hidden']){
        global $language;
        $currentLang = $language->language;
        if(!isset($menuItem['language']) || $menuItem['language'] == 'und'){
            $menuItem['language'] = language_default('language');
        }
        if($currentLang == $menuItem['language'] ){
            $linkPath = $menuItem['link_path'];
            //load menu item node to retrieve icon image
//            $menu_item_id = substr($linkPath,strrpos($linkPath,'/')+1);
//            $menu_item_node = node_load($menu_item_id);

//            $finalMainMenu[$key]['menu_icon_url'] = url('sites/default/files/'.file_uri_target($menu_item_node->field_menu_icon[LANGUAGE_NONE][0]['uri']),array('absolute'=>true, 'language' => (object)array('language' => FALSE)));
//            $finalMainMenu[$key]['menu_icon_alt'] = $menu_item_node->field_menu_icon[LANGUAGE_NONE][0]['alt'];

            //hightlight the selected menu item
            $finalMainMenu[$key]['active'] = '';
            $linkPathAlias = drupal_get_path_alias($linkPath, $currentLang);
            $currentUrl = drupal_get_path_alias($_GET['q'],$currentLang);

            if($currentUrl == $linkPathAlias){
//                $finalMainMenu[$key]['active'] = 'muted-img';
                  $finalMainMenu[$key]['active'] = 'active';

            }
            $finalMainMenu[$key]['url'] = '/'.$linkPathAlias;
            $finalMainMenu[$key]['title'] = $menuItem['link_title'];
        }
      }
    }
    $vars['mainMenu'] = $finalMainMenu;

    /****SEO******/
    $seo = array();

    switch($currentUrl){
        case 'tenant-not-paying-rent-contact-us':
            $seo['title'] = 'Tenant Not Paying Rent';
            $seo['desc'] = 'Tenants Not Paying Rent Arrears BEST RENT RECOVERY';
            $seo['keywords'] = 'unpaid rent, tenant not paying rent, rent recovery, rent collection, rent arrears, not paying rent, non payment of rent, collecting rent, 30 day notice to vacate';
            break;
        case 'unpaid-wages-faq':
            $seo['title'] = 'Unpaid Wages Unpaid Overtime';
            $seo['desc'] = 'Unpaid Wages Unpaid Overtime Unpaid Salary MAKE EMPLOYER PAY UNPAID WAGES';
            $seo['keywords'] = 'Unpaid Wages, Unpaid Overtime, Unpaid Salary, unpaid wages claim, unpaid employment, unpaid commissions, claim for unpaid wages, suing for unpaid wages';
            break;
        default:
            $seo['title'] = 'Get My Money Back';
            $seo['desc'] = 'Unpaid Payment Bounced Check Unpaid Salary Not Paying Rent EFFECTIVE WAY GET MONEY BACK!';
            $seo['keywords'] = 'money get back, overdue payments, bad check laws, get my money back, bounced check, how to get money back from a friend, can i get my money back, how to get your money back, overdue invoice, rent collect, bad check, collecting rent, tenant failure to pay rent';
            break;
    }
    $vars['seo'] = $seo;
}

function rental_preprocess_page(&$vars, $hook) {

//    $testimonialId = db_select('node', 'n')
//        ->fields('n', array('nid'))
//        ->fields('n', array('type'))
//        ->condition('n.type', 'testimonials')
//        ->execute()
//        ->fetchCol();
//    $testimonialUrl = drupal_get_path_alias("node/$testimonialId[0]");
//    $vars['testimonialUrl'] = $testimonialUrl;
if(substr($_GET['q'],0,8) == 'checkout'){
    $checkout = array();
    $checkout['title'] = 'Billing Info';
    $checkout['desc'] = 'The card will only be charged after your review/approval of the publicized content and you are satisfied with every aspect of our service';
    $checkout['billing'] = 'active';
    $checkout['review'] = '';
    $checkout['is_nav_present'] = true;
    $url =  $_GET['q'];
    if(preg_match('/review/',$url)){
        $checkout['title'] = 'Review Information';
        $checkout['desc'] = 'Please, review your information';
        $checkout['billing'] = '';
        $checkout['review'] = 'active';
    }

    if(preg_match('/complete/',$url)){
        $checkout['title'] = 'Thank You For Making World a Better Place';
        $checkout['desc'] = 'Please, allow 24h to build the first draft of the content you provided. Next, the draft is made available for your review and approval.';
        $checkout['billing'] = '';
        $checkout['review'] = '';
        $checkout['is_nav_present'] = false;
    }

    $conversion_code = '';
    if(preg_match("/complete/", $url) && preg_match("/checkout/", $url)){
        $conversion_code = '<script type="text/javascript">'."\n";
        $conversion_code .= '/* <![CDATA[ */'."\n";
        $conversion_code .= 'var google_conversion_id = 990137247;'."\n";
        $conversion_code .= 'var google_conversion_language = "en";'."\n";
        $conversion_code .= 'var google_conversion_format = "3";'."\n";
        $conversion_code .= 'var google_conversion_color = "ffffff";'."\n";
        $conversion_code .= 'var google_conversion_label = "zlBWCLHcnQYQn5eR2AM";'."\n";
        $conversion_code .= 'var google_conversion_value = 20;'."\n";
        $conversion_code .= 'var google_remarketing_only = false;'."\n";
        $conversion_code .= '/* ]]> */'."\n";
        $conversion_code .= '</script>'."\n";
        $conversion_code .= '<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>'."\n";
        $conversion_code .= '<noscript>'."\n";
        $conversion_code .= '<div style="display:inline;">'."\n";
        $conversion_code .= '<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/990137247/?value=20&amp;label=zlBWCLHcnQYQn5eR2AM&amp;guid=ON&amp;script=0"/>'."\n";
        $conversion_code .= '</div>'."\n";
        $conversion_code .= '</noscript>'."\n";
    }
    $checkout['conversion_code'] = $conversion_code;

    $vars['checkout'] = $checkout;
}

    if (isset($vars['node'])) {
        $vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
        switch($vars['node']->type){
            case "home":
                rental_preprocess_home($vars, $hook);
                break;
//            case "contact":
//                rental_preprocess_contact($vars, $hook);
//                break;
//            case "testimonials":
//                rental_preprocess_testimonials($vars, $hook);
//                break;
//            case "article":
//                rental_preprocess_article($vars, $hook);
//                break;
//            case "user":
//                rental_preprocess_user($vars, $hook);
//                break;
//            case "contact_us":
//                rental_preprocess_contactus($vars, $hook);
//                break;
            default:
//                rental_preprocess_basic_page($vars, $hook);
                break;
        }
    }
}

function rental_preprocess_home(&$vars, $hook){
    $product_ids = array('1', '2', '3');
    $products = entity_load('commerce_product', $product_ids);
    $display_prods = array();
    foreach(array_keys($products) as $key => $prod_id){
        $display_prods[$prod_id] = array();
        $display_prods[$prod_id]['plan_name'] = substr($products[$prod_id]->sku,13 );
        $display_prods[$prod_id]['price'] = substr($products[$prod_id]->commerce_price[LANGUAGE_NONE][0]['amount'],0,-2);
        $display_prods[$prod_id]['maintenance_fee'] = $products[$prod_id]->field_maintenance_fee[LANGUAGE_NONE][0]['value'];

        $tids = array();
        $multilingual_support_id = $products[$prod_id]->field_multilingual_support_produ[LANGUAGE_NONE][0]['tid'];
        $tids[] = $multilingual_support_id;
        $designs_avail_id = $products[$prod_id]->field_designs_available_product[LANGUAGE_NONE][0]['tid'];
        $tids[] = $designs_avail_id;
        $search_rank_id = $products[$prod_id]->field_rank_in_search_engines[LANGUAGE_NONE][0]['tid'];
        $tids[] = $search_rank_id;
        $payment_sys_id = $products[$prod_id]->field_online_payment_sys[LANGUAGE_NONE][0]['tid'];
        $tids[] = $payment_sys_id;
        $cms_id = $products[$prod_id]->field_content_management_sys[LANGUAGE_NONE][0]['tid'];
        $tids[] = $cms_id;
        $reminder_id = $products[$prod_id]->field_debt_reminder[LANGUAGE_NONE][0]['tid'];
        $tids[] = $reminder_id;
        $social_id = $products[$prod_id]->field_social_networks[LANGUAGE_NONE][0]['tid'];
        $tids[] = $social_id;

        $taxonomies = taxonomy_term_load_multiple($tids);
        $display_prods[$prod_id]['search_rank'] = $taxonomies[$search_rank_id]->name;

        if($taxonomies[$multilingual_support_id]->name == 'One'){
            $display_prods[$prod_id]['multilingual_support'] = $taxonomies[$multilingual_support_id]->name.' Language';
        }else{
            $display_prods[$prod_id]['multilingual_support'] = $taxonomies[$multilingual_support_id]->name.' Languages';
        }

        if($taxonomies[$designs_avail_id]->name == 'One'){
            $display_prods[$prod_id]['designs_avail'] = $taxonomies[$designs_avail_id]->name.' Design To Choose';
        }else{
            $display_prods[$prod_id]['designs_avail'] = $taxonomies[$designs_avail_id]->name.' Designs To Choose';
        }


        $display_prods[$prod_id]['payment_sys'] = $taxonomies[$payment_sys_id]->name;
        $display_prods[$prod_id]['cms'] = $taxonomies[$cms_id]->name;
        $display_prods[$prod_id]['reminder'] = $taxonomies[$reminder_id]->name;
        $display_prods[$prod_id]['social'] = $taxonomies[$social_id]->name;
    }
   $vars['prods'] = $display_prods;
}