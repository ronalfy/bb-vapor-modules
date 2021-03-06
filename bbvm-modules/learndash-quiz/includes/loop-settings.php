<?php
/**
 * Render the Loop Settings for LearnDash Quiz Module.
 *
 * @link https://bbvapormodules.com
 *
 * @package BB Vapor Modules
 * @since 2.0.0
 */

FLBuilderModel::default_settings(
	$settings,
	array(
		'post_type' => 'sfwd-quiz',
	)
);
?>
<div id="fl-builder-settings-section-source" class="fl-loop-data-source-select fl-builder-settings-section">
	<table class="fl-form-table">
	<?php
	FLBuilder::render_settings_field(
		'quiz_id',
		array(
			'type'   => 'suggest',
			'label'  => __( 'Quiz', 'bb-vapor-modules' ),
			'action' => 'fl_as_posts', // Search posts.
			'data'   => 'sfwd-quiz', // Slug of the post type to search.
			'limit'  => 1,
		),
		$settings
	);
	FLBuilder::render_settings_field(
		'course_id',
		array(
			'type'   => 'suggest',
			'label'  => __( 'Course', 'bb-vapor-modules' ),
			'action' => 'fl_as_posts', // Search posts.
			'data'   => 'sfwd-courses', // Slug of the post type to search.
			'limit'  => 1,
		),
		$settings
	);
	?>
	</table>
</div>
