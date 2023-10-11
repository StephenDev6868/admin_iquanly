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
        Screen::STAFF   => 'Màn hình Thông tin Nhân viên',
    ];

}
