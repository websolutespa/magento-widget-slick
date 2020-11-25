<?php
/*
 * Copyright © Websolute spa. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Websolute\WidgetSlick\Block;

class Widget extends \Websolute\WidgetGenerator\Block\Widget
{
    /**
     * Default value for autoplay
     */
    const DEFAULT_ARROWS = false;

    /**
     * Default value for autoplay
     */
    const DEFAULT_AUTOPLAY = false;

    /**
     * Default value for adaptive height
     */
    const DEFAULT_ADAPTIVE_HEIGHT = false;

    /**
     * Default value for loop
     */
    const DEFAULT_LOOP = false;

    /**
     * Default value for autoplay timeout
     */
    const DEFAULT_AUTOPLAY_TIMEOUT = 1500;

    /**
     * Default number of items
     */
    const DEFAULT_ITEMS = 1;

    /**
     * Default value for template name
     */
    const DEFAULT_SHOW_DOTS = false;

    /**
     * Default value for template name
     */
    const DEFAULT_SHOW_ARROWS = false;

    /**
     * Default value for template name
     */
    const DEFAULT_CSS_EASE = "ease";

    /**
     * Return if have to autoplay
     *
     * @return bool
     */
    public function hasArrows(): bool
    {
        if (!$this->hasData('show_arrows')) {
            $this->setData('show_arrows', self::DEFAULT_ARROWS);
        }
        return (bool)$this->getData('show_arrows');
    }

    /**
     * Return if have to autoplay
     *
     * @return bool
     */
    public function hasAutoplay(): bool
    {
        if (!$this->hasData('autoplay')) {
            $this->setData('autoplay', self::DEFAULT_AUTOPLAY);
        }
        return (bool)$this->getData('autoplay');
    }

    /**
     * Return if have to autoplay
     *
     * @return bool
     */
    public function hasAdaptiveHeight(): bool
    {
        if (!$this->hasData('adaptive_height')) {
            $this->setData('adaptive_height', self::DEFAULT_ADAPTIVE_HEIGHT);
        }
        return (bool)$this->getData('adaptive_height');
    }

    /**
     * Return if have to loop
     *
     * @return bool
     */
    public function hasLoop(): bool
    {
        if (!$this->hasData('loop')) {
            $this->setData('loop', self::DEFAULT_LOOP);
        }
        return (bool)$this->getData('loop');
    }

    /**
     * Return items to show
     *
     * @return int
     */
    public function getItems(): int
    {
        if (!$this->hasData('items')) {
            $this->setData('items', self::DEFAULT_ITEMS);
        }
        return (int)$this->getData('items');
    }

    /**
     * Return css ease effect
     *
     * @return string
     */
    public function getCssEase(): string
    {
        if (!$this->hasData('css_ease')) {
            $this->setData('css_ease', self::DEFAULT_CSS_EASE);
        }
        return $this->getData('css_ease');
    }

    /**
     * Return autoplay timeout millis
     *
     * @return int
     */
    public function getAutoplayTimeout(): int
    {
        if (!$this->hasData('autoplay_timeout')) {
            $this->setData('autoplay_timeout', self::DEFAULT_AUTOPLAY_TIMEOUT);
        }
        return (int)$this->getData('autoplay_timeout');
    }

    /**
     * Return if have to shown or not dots
     *
     * @return bool
     */
    public function showDots(): bool
    {
        if (!$this->hasData('show_dots')) {
            $this->setData('show_dots', self::DEFAULT_SHOW_DOTS);
        }
        return (bool)$this->getData('show_dots');
    }

    /**
     * Return if have to shown or not dots
     *
     * @return bool
     */
    public function showArrows(): bool
    {
        if (!$this->hasData('show_arrows')) {
            $this->setData('show_arrows', self::DEFAULT_SHOW_ARROWS);
        }
        return (bool)$this->getData('show_arrows');
    }
}
