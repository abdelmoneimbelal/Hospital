<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $permissions = [
            'المشرفين',
            'اضافة مشرف',
            'تعديل مشرف',
            'حذف مشرف',
            'قائمة المشرفين',
            'صلاحيات المشرفين',

            'المستخدمين',
            'حذف مستخدم',
            'عرض مستخدم',
            'حالة المستخدم',
            'قائمة العملاء',
            'قائمة المندوبين',

            'الاقسام',
            'اضافة قسم',
            'تعديل قسم',
            'حذف قسم',

            'المحافظات',
            'اضافة محافظه',
            'تعديل محافظه',
            'حذف محافظه',

            'المدن',
            'اضافة مدينه',
            'تعديل مدينه',
            'حذف مدينه',

            'طرق التوصيل',
            'تعديل طريقة توصيل',
            'اضافة طريقة توصيل',
            'حذف طريقة توصيل',

            'تصدير EXCEL',

            'الطلبات',
            'حذف الطلب',
            'عرض الطلب',

            'تواصل معنا',
            'عرض تواصل معنا',
            'حذف تواصل معنا',

            'عرض صلاحية',
            'اضافة صلاحية',
            'تعديل صلاحية',
            'حذف صلاحية',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}