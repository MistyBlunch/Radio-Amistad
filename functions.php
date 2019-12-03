<?php 
  //Permite habilitar al theme subir imagen destacada
  add_theme_support('post-thumbnails');

  // Include custom navwalker
  require_once('lib/bs4navwalker/bs4navwalker.php');

  // Register WordPress nav menu
  register_nav_menu('top', 'Menu Principal');

  function friendship_load_script() {
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() .'/lib/bootstrap/css/bootstrap.min.css', '', 'v4.3');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() .'/lib/owlcarousel/dist/assets/owlcarousel.min.css', '', 'v4.3');
    wp_enqueue_style('friendship_style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
    wp_enqueue_script('friendaship_js', get_template_directory_uri() .'/main.js', array(), '', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.min.js', array(), 'v4.3', true);
  }

  add_action('wp_enqueue_scripts', 'friendship_load_script');

  register_sidebar(
    array(
        'name'          => esc_html__( 'Sidebar', 'friendship' ),
        'id'            => 'sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s ">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    )
  );

  function getSliderActual(){
    //Argumentos sirve para hacer consultas.
    $args = array(
      'post_type' => 'post',
      'post_per_page' => 4,
      'orderby' => 'ASC',
      'category_name' => 'actualidad'
    );

    //Consulta a la base de datos a través de los argumentos que le pasas.
    $row = new WP_Query($args);
    //Me trae los post de la consulta
    $data = $row->get_posts();
    $tmp = [];
    $list = [];
    $counter = 0;
    //Creamos un array temporal para asignar valores a usar
    foreach($data as $item){
      $counter++;
      $tmp['id'] = $item->ID;
      $tmp['author'] = $item->post_author;
      $tmp['date'] = $item->post_date;
      $tmp['title'] = $item->post_title;
      $tmp['description'] = $item->post_excerpt;
      $tmp['contenido'] = $item->post_content;
      $tmp['url'] = get_permalink($item->ID);
      $imageID = get_post_thumbnail_id($item->ID);
      $tmp['image_full'] = wp_get_attachment_image_src($imageID,'full');
      $category = get_the_terms($item->ID,['category']);
      $categoryName = $category[0]->name;
      $tmp['category'] = $categoryName;
      //Identifica el primer post para volverlo activo en el slider
      $tmp['current'] = null;
      if($counter==1){
        $tmp['current'] = 'active';
      }
      $list[] = $tmp;
    }
    //Me retorna la lista temporal
    return $list;
  }


  function getSliderNoticias(){
    $args = array(
      'post_type' => 'post',
      'post_per_page' => 3,
      'orderby' => 'ASC',
      'category_name' => 'noticias'
    );

    $row = new WP_Query($args);
    $data = $row->get_posts();
    $tmp = [];
    $list = [];

    foreach($data as $item){
      $counter++;
      $tmp['id'] = $item->ID;
      $tmp['author'] = $item->post_author;
      $tmp['date'] = $item->post_date;
      $tmp['title'] = $item->post_title;
      $tmp['url'] = get_permalink($item->ID);
      $tmp['description'] = $item->post_excerpt;
      $tmp['contenido'] = $item->post_content;
      $imageID = get_post_thumbnail_id($item->ID);
      $tmp['image_full'] = wp_get_attachment_image_src($imageID,'full');
      $category = get_the_terms($item->ID,['category']);
      $categoryName = $category[0]->name;
      $tmp['category'] = $categoryName;
      $list[] = $tmp;
    }
    return $list;
  }

  function getSliderTendencias(){
    $args = array(
      'post_type' => 'post',
      'post_per_page' => 3,
      'orderby' => 'ASC',
      'category_name' => 'tendencias'
    );

    $row = new WP_Query($args);
    $data = $row->get_posts();
    $tmp = [];
    $list = [];
    $counter = 0;

    foreach($data as $item){
      $counter++;
      $tmp['id'] = $item->ID;
      $tmp['author'] = $item->post_author;
      $tmp['date'] = $item->post_date;
      $tmp['title'] = $item->post_title;
      $tmp['url'] = get_permalink($item->ID);
      $tmp['description'] = $item->post_excerpt;
      $tmp['contenido'] = $item->post_content;
      $imageID = get_post_thumbnail_id($item->ID);
      $tmp['image_full'] = wp_get_attachment_image_src($imageID,'full');
      $category = get_the_terms($item->ID,['category']);
      $categoryName = $category[0]->name;
      $tmp['category'] = $categoryName;
      $tmp['current'] = null;
      if($counter==1){
        $tmp['current'] = 'active';
      }
      $list[] = $tmp;
    }
    return $list;
  }

?>    