<?php
/**
*
* min preset returns the basic toolbar configuration set for CKEditor.
* @author denoll <denoll@denoll.ru>
* @link http://www.denoll.ru/
*/
return [
'height' => 200,
'toolbarGroups' => [
['name' => 'undo'],
['name' => 'basicstyles', 'groups' => ['basicstyles', 'cleanup']],
['name' => 'colors'],
],
'removeButtons' => 'Subscript,Superscript,Flash,Table,HorizontalRule,SpecialChar,PageBreak,Iframe', //Smiley,
'removePlugins' => 'elementspath',
'resize_enabled' => false
];