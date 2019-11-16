<?php 
  //Permite habilitar al theme subir imagen destacada
  add_theme_support('post-thumbnails');

  function friendship_load_script() {
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() .'/lib/bootstrap/css/bootstrap.min.css', '', 'v4.3');
    wp_enqueue_style('friendship_style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.min.js', array(), 'v4.3', true);
  }

  add_action('wp_enqueue_scripts', 'friendship_load_script');

  /* Averiguar eventos(hooks) Wordpress */

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


?>