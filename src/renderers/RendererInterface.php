<?php

/**
 * @link https://github.com/unclead/yii2-multiple-input
 * @copyright Copyright (c) 2014 unclead
 * @license https://github.com/unclead/yii2-multiple-input/blob/master/LICENSE.md
 */

namespace unclead\widgets\renderers;


/**
 * Interface RendererInterface
 * @package unclead\widgets\renderers
 */
interface RendererInterface
{
    const POS_HEADER    = 'header';
    const POS_ROW       = 'row';
    const POS_FOOTER    = 'footer';

    /**
     * Renders the widget's content.
     *
     * @return mixed
     */
    public function render();

    /**
     * Set current context.
     * 
     * @param mixed $context
     * @return mixed
     */
    public function setContext($context);

    /**
     * Returns a placeholder.
     *
     * @return string
     */
    public function getIndexPlaceholder();
}