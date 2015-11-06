<?php

use KodiCMS\SleepingOwlAdmin\Filter\Filter;
use KodiCMS\Users\Model\User;
use KodiCMS\Users\Model\UserRole;
use KodiCMS\SleepingOwlAdmin\Columns\Column;
use KodiCMS\SleepingOwlAdmin\FormItems\FormItem;

SleepingOwlModule::addMenuLink(User::class)->setIcon('users');
SleepingOwlModule::getModel(User::class)->setTitle('User')->onDisplay(function () {
        $display = SleepingOwlDisplay::table();

        $display->setFilters([
            Filter::field('username')->setOperator('begins_with'),
        ]);

        $display->setColumns([
            Column::string('username')->setLabel('Username'),
            Column::lists('roles.name')->setLabel('Roles'),
            Column::email('email')->setLabel('E-mail')->setWidth('100px'),
        ]);

        return $display;
    })->onCreateAndEdit(function () {
        $form = SleepingOwlForm::form();
        $form->setItems([
            FormItem::columns()->setColumns([
                [
                    FormItem::text('username', 'Username')->required(),
                    FormItem::text('email', 'E-mail')->required()->addValidationRule('email'),
                    FormItem::date('created_at', 'Date creation'),

                    FormItem::multiselect('roles', 'Roles')->setModelForOptions(new UserRole)->setDisplay('name'),
                ],
            ]),
        ]);

        return $form;
    });
