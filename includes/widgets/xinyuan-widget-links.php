<?php
/**
 * Xinyuan 友情链接组件
 *
 * @package    Xinyuan
 * @subpackage Widget
 */
 
class Xinyuan_Links extends WP_Widget {

  // 设定小工具信息
  function Xinyuan_Links() {
    $widget_options = array(
          'name'        => '友情链接（Xinyuan）', 
          'description' => '友情链接组件' 
    );
    parent::WP_Widget( false, false, $widget_options );  
  }

  // 设定小工具结构
  function widget( $args, $instance ) {  
  	extract( $args );
  	$defaults = array(
  	    'orderby'          => 'name',
  	    'order'            => 'ASC',
  	    'limit'            => -1,
  	    'category'         => ' ',
  	    'exclude_category' => ' ',
  	    'category_name'    => '友情链接',
  	    'hide_invisible'   => 1,
  	    'show_updated'     => 0,
  	    'echo'             => 1,
  	    'categorize'       => 1,
  	    'title_li'         => __('Bookmarks'),
  	    'title_before'     => '<p class="asidetitle">',
  	    'title_after'      => '</p>',
  	    'category_orderby' => '',
  	    'category_order'   => '',
  	    'class'            => 'linkcat',
  	    'category_before'  => '',
  	    'category_after'   => '' );
    echo $before_widget;
    ?>
    <div class="linkslist">
    	<?php wp_list_bookmarks($defaults); ?>
    </div>
    <?php
    echo $after_widget;
  }

  function update( $new_instance, $old_instance ) {                
     return $new_instance;
  }

  function form( $instance ) {  
    ?>
      <p>没有相关设定</p>
    <?php
  }
} 

register_widget( 'Xinyuan_Links' );
?>