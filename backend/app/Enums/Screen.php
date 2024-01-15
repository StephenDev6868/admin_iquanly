<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Screen extends Enum
{
    const BOARD = 'BOARD';
    const COMPANY = 'COMPANY';
    const USER = 'USER';
    const STAFF = 'STAFF';
    const ROLE = 'ROLE';
    const WAREHOUSETOOL = 'WAREHOUSETOOL';
    const WAREHOUSEDEVICE = 'WAREHOUSEDEVICE';
    const WAREHOUSEMATERIAL = 'WAREHOUSEMATERIAL';
    const WAREHOUSEPRODUCT = 'WAREHOUSEPRODUCT';
    const WAREHOUSEHAFTPRODUCT = 'WAREHOUSEHAFTPRODUCT';

    const SALARY_BASIC = 'SALARY_BASIC';

    const SALARY_PRODUCT = 'SALARY_PRODUCT';

    const ORDER = 'ORDER';

    const CUSTOMER = 'CUSTOMER';

    const PARTNER = 'PARTNER';

    const SUPPLIER = 'SUPPLIER';

    const PRODUCT_CONFIG = 'PRODUCT_CONFIG';

    const PRODUCT_STEP = 'PRODUCT_STEP';

    const SETTING_GENERAL = 'SETTING_GENERAL';

    const LIST = [
        Screen::COMPANY => 'Quản lý công ty',
        Screen::USER    => 'Quản lý nhân viên',
        Screen::ROLE    => 'Quản lý chức danh',
        Screen::BOARD   => 'Quản lý phòng ban',

        Screen::WAREHOUSETOOL   => 'Quản lý kho dụng cụ',
        Screen::WAREHOUSEDEVICE   => 'Quản lý kho thiết bị',
        Screen::WAREHOUSEMATERIAL   => 'Quản lý kho nguyên vật liệu',
        Screen::WAREHOUSEPRODUCT   => 'Quản lý kho thành phẩm',
        Screen::WAREHOUSEHAFTPRODUCT   => 'Quản lý kho bán thành phẩm',
        Screen::STAFF   => 'Quản lý Nhân viên',

        Screen::SALARY_BASIC   => 'Quản lý lương cơ bản',
        Screen::SALARY_PRODUCT   => 'Quản lý sản phẩm',
        Screen::ORDER   => 'Quản lý đơn hàng',
        Screen::CUSTOMER   => 'Quản lý khách hàng',
        Screen::PARTNER   => 'Quản lý đối tác',
        Screen::SUPPLIER   => 'Quản lý nhà cung cấp',

        Screen::PRODUCT_STEP   => 'Quản lý công đoạn sản phẩm',
        Screen::PRODUCT_CONFIG   => 'Cấu hình sản phẩm',

        Screen::SETTING_GENERAL   => 'Cấu hình thông tin chung',

    ];

    const LIST_URL = [
        Screen::COMPANY  => [
            'name' => 'Quản lý công ty',
            'route' => 'admin.companies.list',
        ],
        // Screen::USER    => [
        //     'name' => 'Quản lý nhân viên',
        //     'route' => 'admin.users.list',
        // ],

        Screen::ROLE    =>  [
            'name' => 'Quản lý chức danh',
            'route' => 'admin.roles.list',
        ],

        Screen::BOARD   => [
            'name' => 'Quản lý phòng ban',
            'route' => 'admin.boards.list',
        ],

        Screen::WAREHOUSETOOL   => [
            'name' => 'Quản lý kho dụng cụ',
            'route' => 'admin.wTools.list',
        ],

        Screen::WAREHOUSEDEVICE   => [
            'name' => 'Quản lý kho thiết bị',
            'route' => 'admin.wDevices.list',
        ],
        Screen::WAREHOUSEMATERIAL   => [
            'name' => 'Quản lý kho nguyên vật liệu',
            'route' => 'admin.wMaterials.list',
        ],
        // Screen::WAREHOUSEPRODUCT   => [
        //     'name' => 'Quản lý kho thành phẩm',
        //     'route' => '',
        // ],
        // Screen::WAREHOUSEHAFTPRODUCT   => [
        //     'name' => 'Quản lý kho bán thành phẩm',
        //     'route' => '',
        // ],
        Screen::STAFF   => [
            'name' => 'Quản lý Nhân viên',
            'route' => 'admin.users.list',
        ],
        Screen::SALARY_BASIC   => [
            'name' => 'Quản lý lương cơ bản',
            'route' => 'admin.export.salary',
        ],
        Screen::SALARY_PRODUCT   =>  [
            'name' => 'Quản lý lương sản phẩm',
            'route' => 'admin.salary_product.show',
        ],
        Screen::ORDER   => [
            'name' => 'Quản lý đơn hàng',
            'route' => 'admin.orders.list',
        ],
        Screen::CUSTOMER   => [
            'name' => 'Quản lý khách hàng',
            'route' => 'admin.customers.list',
        ],
        Screen::PARTNER   => [
            'name' => 'Quản lý đối tác',
            'route' => 'admin.partners.list',
        ],
        Screen::SUPPLIER   => [
            'name' => 'Quản lý nhà cung cấp',
            'route' => 'admin.suppliers.list',
        ],
        Screen::PRODUCT_STEP   =>  [
            'name' => 'Quản lý công đoạn sản phẩm',
            'route' => 'admin.productSteps.list',
        ],
        Screen::PRODUCT_CONFIG   =>  [
            'name' => 'Cấu hình sản phẩm',
            'route' => 'admin.products.list',
        ],
        Screen::SETTING_GENERAL   => [
            'name' => 'Cấu hình thông tin chung',
            'route' => 'admin.commons.list',
        ],
    ];

}
