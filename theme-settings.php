<?php
/**
Insert option to enter facebook and twitter username
*/
function topproject_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['topproject_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('topproject Theme Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );
  $form['topproject_settings']['breadcrumbs'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show breadcrumbs in a page'),
    '#default_value' => theme_get_setting('breadcrumbs', 'topproject'),
    '#description'   => t("Check this option to show breadcrumbs in page. Uncheck to hide."),
  );
  $form['topproject_settings']['top_social_link'] = array(
    '#type' => 'fieldset',
    '#title' => t('Social links in header'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['topproject_settings']['top_social_link']['social_links'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show twitter, facebook, rss links in header'),
    '#default_value' => theme_get_setting('social_links', 'topproject'),
    '#description'   => t("Check this option to show twitter, facebook, rss links in header. Uncheck to hide."),
  );
  $form['topproject_settings']['top_social_link']['twitter_username'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter Username'),
    '#default_value' => theme_get_setting('twitter_username', 'topproject'),
	'#description'   => t("Enter your Twitter username."),
  );
  $form['topproject_settings']['top_social_link']['facebook_username'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook Username'),
    '#default_value' => theme_get_setting('facebook_username', 'topproject'),
	'#description'   => t("Enter your Facebook username."),
  );
  $form['topproject_settings']['footer'] = array(
    '#type' => 'fieldset',
    '#title' => t('Footer'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['topproject_settings']['footer']['footer_copyright'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show copyright text in footer'),
    '#default_value' => theme_get_setting('footer_copyright','topproject'),
    '#description'   => t("Check this option to show copyright text in footer. Uncheck to hide."),
  );
  $form['topproject_settings']['footer']['footer_credits'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show theme credits in footer'),
    '#default_value' => theme_get_setting('footer_credits','topproject'),
    '#description'   => t("Check this option to show site credits in footer. Uncheck to hide."),
  );
}
?>