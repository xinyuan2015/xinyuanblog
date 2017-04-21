<?php
/**
 * Xinyuan 标签云组件
 *
 * @package    Xinyuan
 * @subpackage Widget
 */
 
class Xinyuan_Tags extends WP_Widget {

  // 设定小工具信息
  function Xinyuan_Tags() {
    $widget_options = array(
          'name'        => '标签云组件（Xinyuan）', 
          'description' => '标签云组件' 
    );
    parent::WP_Widget( false, false, $widget_options );  
  }

  // 设定小工具结构
  function widget( $args, $instance ) {  
  	extract($args);
  	$defaults = array(
  	    'format' => 'flat',
  	    'separator' => "\n",
  	    'orderby' => 'name',
  	    'order' => 'DESC',
  	    'topic_count_text_callback'=>'default_topic_count_text',
  	    'echo' => true
  	);
    echo $before_widget;
    ?>
    <div class="tagslist">
		<p class="asidetitle">
			标签
		</p>
		<ul class="clearfix">
		<?php wp_tag_cloud($defaults);?>
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

register_widget( 'Xinyuan_Tags' );
?>