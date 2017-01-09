<?php
add_action( 'load-post.php', 'identity_experts_post_meta_boxes_setup' );
add_action( 'load-post-new.php', 'identity_experts_post_meta_boxes_setup' );

function identity_experts_post_meta_boxes_setup() {
   add_action( 'add_meta_boxes', 'identity_experts_add_post_meta_boxes' );
   add_action( 'save_post', 'identity_experts_save_post_meta', 10, 2 );
}

function identity_experts_add_post_meta_boxes() {
  global $post;
  if(!empty($post)) {
      $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
      if($pageTemplate == 'template-team.php' ) {
        add_meta_box(
          'ide-job-title',
          esc_html__( 'Job Title', 'ide' ),
          'ide_job_title_meta_box',
          'page',
          'side',
          'default'
        );
        add_meta_box(
          'ide-qualifications',
          esc_html__( 'Qualifications', 'ide' ),
          'ide_quali_meta_box',
          'page',
          'side',
          'default'
        );
      }
  }
}

function ide_job_title_meta_box($object, $box) {
	?>

  <?php wp_nonce_field( basename( __FILE__ ), 'ide_gallery_nonce' ); ?>

  <p>
  	<label for="ide-job-title"><?php _e( "Add job title of the current team member(eg: Director).", 'ide' ); ?></label>
    <br />
    <?php $field_value = get_post_meta( $object->ID, '_ide_job_title', true );?>
    <input type="text" name="_ide_job_title" value="<?php echo esc_attr($field_value);?>" class="widefat ide-job-title"/>
   </p>

<?php
}

function ide_quali_meta_box($object, $box) {
	?>

  <?php wp_nonce_field( basename( __FILE__ ), 'ide_top_img_nonce' ); ?>

  <p>
  	<label for="ide-top-img"><?php _e( "Add qualifications of the current team member.", 'ide' ); ?></label>
    <br />
    <?php
    $field_value = get_post_meta( $object->ID, '_ide_qualifications', true );?>
    <textarea type="text" name="_ide_qualifications" value="" class="widefat ide-qualifications"><?php echo esc_html($field_value);?></textarea>
   </p>

<?php
}

/* Save the meta box's post metadata. */
function identity_experts_save_post_meta( $post_id, $post ) {

  /* Verify the nonce before proceeding. */
  if ( !isset( $_POST['ide_gallery_nonce'] ) || !wp_verify_nonce( $_POST['ide_gallery_nonce'], basename( __FILE__ ) ) )
    return $post_id;
  if ( !isset( $_POST['ide_top_img_nonce'] ) || !wp_verify_nonce( $_POST['ide_top_img_nonce'], basename( __FILE__ ) ) )
	return $post_id;

  /* Get the post type object. */
  $post_type = get_post_type_object( $post->post_type );

  /* Check if the current user has permission to edit the post. */
  if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
    return $post_id;

  $new_meta_value = ( isset( $_POST['_ide_job_title'] ) ? $_POST['_ide_job_title'] : '' );
  $new_meta_value1 = ( isset( $_POST['_ide_qualifications'] ) ? $_POST['_ide_qualifications'] : '' );

  /* Get the meta key. */
  $meta_key = '_ide_job_title';
  $meta_key1 = '_ide_qualifications';

  /* Get the meta value of the custom field key. */
  $meta_value = get_post_meta( $post_id, $meta_key, true );
  $meta_value1 = get_post_meta( $post_id, $meta_key1, true );

  /* If a new meta value was added and there was no previous value, add it. */
  if ( $new_meta_value && '' == $meta_value )
    add_post_meta( $post_id, $meta_key, $new_meta_value, true );

  /* If the new meta value does not match the old value, update it. */
  elseif ( $new_meta_value && $new_meta_value != $meta_value )
    update_post_meta( $post_id, $meta_key, $new_meta_value );

  /* If there is no new meta value but an old value exists, delete it. */
  elseif ( '' == $new_meta_value && $meta_value )
    delete_post_meta( $post_id, $meta_key, $meta_value );

  if ( $new_meta_value1 && '' == $meta_value1 )
    add_post_meta( $post_id, $meta_key1, $new_meta_value1, true );

  /* If the new meta value does not match the old value, update it. */
  elseif ( $new_meta_value1 && $new_meta_value1 != $meta_value1 )
    update_post_meta( $post_id, $meta_key1, $new_meta_value1 );

  /* If there is no new meta value but an old value exists, delete it. */
  elseif ( '' == $new_meta_value1 && $meta_value1 )
    delete_post_meta( $post_id, $meta_key1, $meta_value1 );
}
