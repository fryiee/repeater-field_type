<?php namespace Anomaly\RepeaterFieldType;

use Anomaly\Streams\Platform\Addon\Plugin\Plugin;

/**
 * Class StreamsPlugin
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class RepeaterFieldTypePlugin extends Plugin
{

    /**
     * Get the plugin functions.
     *
     * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction(
                'prefix_fields',
                function (array $fields, $form) {
                    array_walk($fields, function (&$item) use ($form) {
                        $item = $form->getOption('prefix') . $item;
                    });

                    return $fields;
                }
            )
        ];
    }
}
