<?php
/**
 * Xinyuan 分类组件
 *
 * @package    Xinyuan
 * @subpackage Widget
 */
 
class Xinyuan_Category extends WP_Widget {

  // 设定小工具信息
  function Xinyuan_Category() {
    $widget_options = array(
          'name'        => '分类组件（Xinyuan）', 
          'description' => '文章分类组件' 
    );
    parent::WP_Widget( false, false, $widget_options );  
  }

  // 设定小工具结构
  function widget( $args, $instance ) {  
  	extract($args);
    echo $before_widget;
    ?>
    <div class="categorieslist">
    		<p class="asidetitle">
    			分类
    		</p>
    		<ul>
    			<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
    		</ul>
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

register_widget( 'Xinyuan_Category' );
?>