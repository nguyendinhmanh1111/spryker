<?php

/**
 * This file is part of the Spryker Demoshop.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\CompanyGui;

use Spryker\Zed\CompanyGui\CompanyGuiDependencyProvider as SprykerCompanyGuiDependencyProvider;
use Spryker\Zed\CompanySupplierGui\Communication\Plugin\CompanyTableActionViewSupplier;

class CompanyGuiDependencyProvider extends SprykerCompanyGuiDependencyProvider
{
    /**
     * @return \Spryker\Zed\CompanyGuiExtension\Dependency\Plugin\CompanyTableActionExtensionInterface[]
     */
    protected function getCompanyTableActionExtensionPlugins(): array
    {
        return [
            new CompanyTableActionViewSupplier(),
        ];
    }
}
