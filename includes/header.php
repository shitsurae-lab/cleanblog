 <?php wp_body_open(); ?>
 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
   <div class="container">
     <a class="navbar-brand" href="<?php
                                    //home_url()は引数にリンク先を指定する。urlが出力されるのでescさせる
                                    esc_url(home_url('/'));
                                    ?>"><?php bloginfo(); ?></a>
     <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
       Menu
       <i class="fas fa-bars"></i>
     </button>
     <?php
      //下記3行メニューIDを取得するための記述
      $menu_name = 'global_nav';
      $locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object($locations[$menu_name]);
      // var_dump($menu);
      //&menuのidを取得してから各メニューに出力
      $menu_items = wp_get_nav_menu_items($menu->term_id);
      // var_dump($menu_items);
      ?>
     <div class="collapse navbar-collapse" id="navbarResponsive">
       <ul class="navbar-nav ml-auto">
         <?php
          //$menu_itemsも$menuもオブジェクト。$itemがなくなるまで$menu_itemsを回す
          foreach ($menu_items as $item) :
          ?>
           <li class="nav-item">
             <a class="nav-link" href="<?php //attrは属性をESC。この場合,href属性をエスケープ
                                        echo esc_attr($item->url);
                                        ?>"><?php echo esc_html($item->title) ?></a>
           </li>
         <?php endforeach; ?>
       </ul>
     </div>
   </div>
 </nav>
