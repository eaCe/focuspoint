<?php

/**
 * focuspoint Addon.
 *
 * @author FriendsOfREDAXO
 *
 * @var rex_addon
 */
$file = rex_file::get(rex_path::addon('focuspoint', 'changelog.md'));
$Parsedown = new Parsedown();
$content = $Parsedown->text($file);

$fragment = new rex_fragment();
$fragment->setVar('class', 'info', false);
$fragment->setVar('title', $this->i18n('changelog'), false);
$fragment->setVar('body', $content, false);
echo $fragment->parse('core/page/section.php');
