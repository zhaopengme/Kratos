<?php

function optionsframework_option_name() {

	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );
	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
	
}

function optionsframework_options() {

	$options = array();

	$options[] = array(
		'name' => '站点配置',
		'type' => 'heading');
	$options[] = array(
		'name' => '关键词',
		'desc' => '提示：每个关键词之间用英文逗号分割',
		'id' => 'site_keywords',
		'type' => 'text');
	$options[] = array(
		'name' => '站点描述',
		'id' => 'site_description',
		'std' => '',
		'type' => 'textarea');
	$options[] = array(
		'name' => '头部类型',
		'desc' => '提示：选择您喜欢的头部类型并修改其对应选项',
		'id' => 'background_mode',
		'std' => 'image',
		'type' => 'select',
		'class' => 'mini',
		'options' => array(
			'image' => '图片',
			'color' => '颜色')
	);
	$options[] = array(
		'name' => '图片样式',
		'desc' => '提示：只有在类型中选择“图片”才起作用',
		'id' => 'background_image',
		'std' => get_template_directory_uri() . '/images/background.jpg',
		'class' => 'background_image',
		'type' => 'upload');
	$options[] = array(
		'name' => '图片文字-1',
		'id' => 'background_image_text1',
		'desc' => '提示：只有在类型中选择“图片”才起作用',
		'std' => 'Kratos',
		'type' => 'text');
	$options[] = array(
		'name' => '图片文字-2',
		'id' => 'background_image_text2',
		'desc' => '提示：只有在类型中选择“图片”才起作用',
		'std' => 'A responsible theme for WordPress',
		'type' => 'text');
	$options[] = array(
		'name' => '颜色样式',
		'desc' => '提示：只有在类型中选择“颜色”才起作用',
		'id' => 'background_color',
		'std' => '#222831',
		'class' => "background_color",
		'type' => 'color' );
	$options[] = array(
		'name' => '轮播图片',
		'type' => 'heading');
	$options[] = array(
		'name' => '是否启用轮播',
		'id' => 'show_slide',
		'std' => '0',
		'type' => 'select',
		'class' => 'mini',
		'options' => array(
			'1' => '是',
			'0' => '否')
	);
	$options[] = array(
		'name' => '轮播图片-1',
		'id' => 'specs_slide1',
		'type' => 'upload');
	$options[] = array(
		'name' => '图片链接-1',
		'id' => 'specs_slide_url1',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => '轮播图片-2',
		'id' => 'specs_slide2',
		'type' => 'upload');
	$options[] = array(
		'name' => '图片链接-2',
		'id' => 'specs_slide_url2',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => '轮播图片-3',
		'id' => 'specs_slide3',
		'type' => 'upload');
	$options[] = array(
		'name' => '图片链接-3',
		'id' => 'specs_slide_url3',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => '轮播图片-4',
		'id' => 'specs_slide4',
		'type' => 'upload');
	$options[] = array(
		'name' => '图片链接-4',
		'id' => 'specs_slide_url4',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => '轮播图片-5',
		'id' => 'specs_slide5',
		'type' => 'upload');
	$options[] = array(
		'name' => '图片链接-5',
		'id' => 'specs_slide_url5',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => '底部组件',
		'type' => 'heading');
	$options[] = array(
		'name' => '站点订阅',
		'desc' => '是否启用站点订阅功能',
		'id' => 'site_rss',
		'std' => '1',
		'type' => 'select',
		'class' => 'mini',
		'options' => array(
			'1' => '是',
			'0' => '否')
	);
	$options[] = array(
		'name' => '邮件列表ID',
		'desc' => '提示：<a href="http://list.qq.com" target="_blank">点此</a>获取邮件列表ID',
		'id' => 'site_rss_id',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => '新浪微博',
		'desc' => '提示：连接前要带有 http:// 或者 https:// ',
		'id' => 'social_weibo',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => '腾讯微博',
		'desc' => '提示：连接前要带有 http:// 或者 https:// ',
		'id' => 'social_tweibo',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => 'Twitter',
		'desc' => '提示：连接前要带有 http:// 或者 https:// ',
		'id' => 'social_twitter',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => 'FaceBook',
		'desc' => '提示：连接前要带有 http:// 或者 https:// ',
		'id' => 'social_facebook',
		'std' => '',
		'type' => 'text');
		$options[] = array(
		'name' => 'LinkedIn',
		'desc' => '提示：连接前要带有 http:// 或者 https:// ',
		'id' => 'social_linkedin',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => 'GitHub',
		'desc' => '提示：连接前要带有 http:// 或者 https:// ',
		'id' => 'social_github',
		'std' => '',
		'type' => 'text');

	return $options;
}