<?php
/**
 * @package tinymce
 * @subpackage build
 */
$events = array();

$evs = array(
    'OnDocFormPrerender',
    'OnFileManagerUpload',
    'OnManagerPageBeforeRender',
    'OnMODXInit',
    'OnTVInputPropertiesList',
    'OnTVInputRenderList',
    'OnTVOutputRenderList',
    'OnTVOutputRenderPropertiesList'
);

foreach ($evs as $ev) {
    $events[(string)$ev] = $modx->newObject('modPluginEvent');
    $events[(string)$ev]->fromArray(array(
        'event' => (string) $ev,
        'priority' => 0,
        'propertyset' => 0,
    ),'',true,true);
}

return $events;
