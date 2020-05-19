<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ProductLabelWidget\Plugin\ProductWidget;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerShop\Yves\ProductLabelWidget\Widget\ProductConcreteLabelWidget;
use SprykerShop\Yves\ProductWidget\Dependency\Plugin\ProductLabelWidget\ProductLabelWidgetPluginInterface;

/**
 * @deprecated Use {@link \SprykerShop\Yves\ProductLabelWidget\Widget\ProductConcreteLabelWidget} instead.
 *
 * @method \SprykerShop\Yves\ProductLabelWidget\ProductLabelWidgetFactory getFactory()
 */
class ProductLabelWidgetPlugin extends AbstractWidgetPlugin implements ProductLabelWidgetPluginInterface
{
    /**
     * @param array $idProductLabels
     *
     * @return void
     */
    public function initialize(array $idProductLabels): void
    {
        $widget = new ProductConcreteLabelWidget($idProductLabels);

        $this->parameters = $widget->getParameters();
    }

    /**
     * @return string
     */
    public static function getName(): string
    {
        return static::NAME;
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return ProductConcreteLabelWidget::getTemplate();
    }
}
