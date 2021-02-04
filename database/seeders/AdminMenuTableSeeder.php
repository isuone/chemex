<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admin_menu')->delete();

        \DB::table('admin_menu')->insert([
            0 => [
                'id' => 1,
                'parent_id' => 0,
                'order' => 1,
                'title' => 'Index',
                'icon' => 'feather icon-bar-chart-2',
                'uri' => '/',
                'extension' => '',
                'show' => 1,
                'created_at' => '2020-10-10 15:06:20',
                'updated_at' => '2020-12-29 21:39:06',
            ],
            1 => [
                'id' => 11,
                'parent_id' => 0,
                'order' => 11,
                'title' => 'Vendor Records',
                'icon' => 'feather icon-zap',
                'uri' => 'vendor/records',
                'extension' => '',
                'show' => 1,
                'created_at' => '2020-10-10 15:06:23',
                'updated_at' => '2021-02-03 13:11:53',
            ],
            2 => [
                'id' => 16,
                'parent_id' => 0,
                'order' => 4,
                'title' => 'Device',
                'icon' => 'feather icon-monitor',
                'uri' => 'device/records',
                'extension' => '',
                'show' => 1,
                'created_at' => '2020-10-10 15:06:25',
                'updated_at' => '2021-02-03 13:11:53',
            ],
            3 => [
                'id' => 18,
                'parent_id' => 0,
                'order' => 9,
                'title' => 'Staff',
                'icon' => 'feather icon-user-check',
                'uri' => 'staff/records',
                'extension' => '',
                'show' => 1,
                'created_at' => '2020-10-10 15:06:25',
                'updated_at' => '2021-02-03 13:11:53',
            ],
            4 => [
                'id' => 25,
                'parent_id' => 0,
                'order' => 10,
                'title' => 'Check',
                'icon' => 'feather icon-check-circle',
                'uri' => 'check/records',
                'extension' => '',
                'show' => 1,
                'created_at' => '2020-10-04 10:22:42',
                'updated_at' => '2021-02-03 13:11:53',
            ],
            5 => [
                'id' => 53,
                'parent_id' => 0,
                'order' => 3,
                'title' => 'Maintenance',
                'icon' => 'feather icon-shield',
                'uri' => 'maintenance/records',
                'extension' => '',
                'show' => 1,
                'created_at' => '2020-10-10 15:06:15',
                'updated_at' => '2021-02-03 08:38:55',
            ],
            6 => [
                'id' => 54,
                'parent_id' => 56,
                'order' => 24,
                'title' => 'Version',
                'icon' => 'feather icon-chevrons-down',
                'uri' => 'version',
                'extension' => '',
                'show' => 1,
                'created_at' => '2020-10-22 15:05:00',
                'updated_at' => '2021-02-03 13:49:10',
            ],
            7 => [
                'id' => 55,
                'parent_id' => 56,
                'order' => 23,
                'title' => 'Menu',
                'icon' => null,
                'uri' => 'auth/menu',
                'extension' => '',
                'show' => 1,
                'created_at' => '2020-11-03 14:22:49',
                'updated_at' => '2021-02-03 13:49:10',
            ],
            8 => [
                'id' => 56,
                'parent_id' => 0,
                'order' => 17,
                'title' => 'Settings',
                'icon' => 'feather icon-settings',
                'uri' => null,
                'extension' => '',
                'show' => 1,
                'created_at' => '2020-11-03 14:23:14',
                'updated_at' => '2021-02-03 13:49:10',
            ],
            9 => [
                'id' => 57,
                'parent_id' => 56,
                'order' => 20,
                'title' => 'Users',
                'icon' => null,
                'uri' => 'auth/users',
                'extension' => '',
                'show' => 1,
                'created_at' => '2020-11-03 14:25:13',
                'updated_at' => '2021-02-03 13:49:10',
            ],
            10 => [
                'id' => 58,
                'parent_id' => 56,
                'order' => 21,
                'title' => 'Roles',
                'icon' => null,
                'uri' => 'auth/roles',
                'extension' => '',
                'show' => 1,
                'created_at' => '2020-11-03 14:25:25',
                'updated_at' => '2021-02-03 13:49:10',
            ],
            11 => [
                'id' => 59,
                'parent_id' => 56,
                'order' => 22,
                'title' => 'Permissions',
                'icon' => null,
                'uri' => 'auth/permissions',
                'extension' => '',
                'show' => 1,
                'created_at' => '2020-11-03 14:26:37',
                'updated_at' => '2021-02-03 13:49:10',
            ],
            12 => [
                'id' => 60,
                'parent_id' => 0,
                'order' => 12,
                'title' => 'Purchased Channels',
                'icon' => 'feather icon-shopping-cart',
                'uri' => 'purchased/channels',
                'extension' => '',
                'show' => 1,
                'created_at' => '2020-11-18 21:08:58',
                'updated_at' => '2021-02-03 13:11:53',
            ],
            13 => [
                'id' => 61,
                'parent_id' => 0,
                'order' => 13,
                'title' => 'Depreciation Rules',
                'icon' => 'feather icon-trending-down',
                'uri' => '/depreciation/rules',
                'extension' => '',
                'show' => 1,
                'created_at' => '2020-12-14 19:38:17',
                'updated_at' => '2021-02-03 13:49:10',
            ],
            14 => [
                'id' => 62,
                'parent_id' => 56,
                'order' => 19,
                'title' => 'Configuration Platform',
                'icon' => null,
                'uri' => '/configurations/platform',
                'extension' => '',
                'show' => 1,
                'created_at' => '2020-12-14 19:38:17',
                'updated_at' => '2021-02-03 13:11:53',
            ],
            15 => [
                'id' => 63,
                'parent_id' => 0,
                'order' => 14,
                'title' => 'Tools',
                'icon' => 'feather icon-layers',
                'uri' => '',
                'extension' => '',
                'show' => 1,
                'created_at' => '2020-12-14 19:38:17',
                'updated_at' => '2021-02-03 13:49:10',
            ],
            16 => [
                'id' => 64,
                'parent_id' => 63,
                'order' => 15,
                'title' => 'Chemex App',
                'icon' => '',
                'uri' => '/tools/chemex_app',
                'extension' => '',
                'show' => 1,
                'created_at' => '2020-12-14 19:38:17',
                'updated_at' => '2021-02-03 13:49:10',
            ],
            17 => [
                'id' => 65,
                'parent_id' => 63,
                'order' => 16,
                'title' => 'QRCode Generator',
                'icon' => '',
                'uri' => '/tools/qrcode_generator',
                'extension' => '',
                'show' => 1,
                'created_at' => '2020-12-14 19:38:17',
                'updated_at' => '2021-02-03 13:49:10',
            ],
            18 => [
                'id' => 79,
                'parent_id' => 56,
                'order' => 18,
                'title' => 'Dcat Plus',
                'icon' => 'feather icon-settings',
                'uri' => 'dcat-plus/site',
                'extension' => 'celaraze.dcat-extension-plus',
                'show' => 1,
                'created_at' => '2021-01-28 16:39:46',
                'updated_at' => '2021-02-03 13:11:53',
            ],
            19 => [
                'id' => 84,
                'parent_id' => 0,
                'order' => 5,
                'title' => 'Part',
                'icon' => 'feather icon-server',
                'uri' => 'part/records',
                'extension' => 'celaraze.chemex-part',
                'show' => 1,
                'created_at' => '2021-02-02 14:09:30',
                'updated_at' => '2021-02-03 13:11:53',
            ],
            20 => [
                'id' => 92,
                'parent_id' => 0,
                'order' => 8,
                'title' => 'Service',
                'icon' => 'feather icon-activity',
                'uri' => 'service/records',
                'extension' => 'celaraze.chemex-service',
                'show' => 1,
                'created_at' => '2021-02-02 14:09:37',
                'updated_at' => '2021-02-03 13:11:53',
            ],
            21 => [
                'id' => 100,
                'parent_id' => 0,
                'order' => 6,
                'title' => 'Software',
                'icon' => 'feather icon-disc',
                'uri' => 'software/records',
                'extension' => 'celaraze.chemex-software',
                'show' => 1,
                'created_at' => '2021-02-02 14:09:45',
                'updated_at' => '2021-02-03 13:11:53',
            ],
            22 => [
                'id' => 108,
                'parent_id' => 0,
                'order' => 7,
                'title' => 'Consumable',
                'icon' => 'feather icon-codepen',
                'uri' => 'consumable/records',
                'extension' => 'celaraze.chemex-consumable',
                'show' => 1,
                'created_at' => '2021-02-02 15:32:04',
                'updated_at' => '2021-02-03 13:11:53',
            ],
            23 => [
                'id' => 113,
                'parent_id' => 0,
                'order' => 2,
                'title' => 'Todo Records',
                'icon' => 'feather icon-list',
                'uri' => 'todo/records',
                'extension' => 'celaraze.chemex-todo',
                'show' => 1,
                'created_at' => '2021-02-02 15:32:23',
                'updated_at' => '2021-02-03 08:38:55',
            ],
        ]);
    }
}
