<?php
/**
 * Xinyuan 归档组件
 *
 * @package    Xinyuan
 * @subpackage Widget
 */
 
class Xinyuan_Archive extends WP_Widget {

  // 设定小工具信息
  function Xinyuan_Archive() {
    $widget_options = array(
          'name'        => '归档组件（Xinyuan）', 
          'description' => '文章归档组件' 
    );
    parent::WP_Widget( false, false, $widget_options );  
  }

  // 设定小工具结构
  function widget( $args, $instance ) {  
  	extract($args);
    echo $before_widget;
    ?>
    <div class="tagslist">
    		<p class="asidetitle">
    			归档
    		</p>
    		<ul class="clearfix">
    			<?php wp_get_archives('type=monthly');?>
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
register_widget( 'Xinyuan_Archive' );
?>