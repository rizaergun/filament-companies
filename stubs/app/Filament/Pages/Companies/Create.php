<?php

namespace App\Filament\Pages\Companies;

use Filament\Pages\Page;

class Create extends Page
{
    protected static ?string $slug = 'create';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.companies.create';

    protected static bool $shouldRegisterNavigation = false;

    protected function getTitle(): string
    {
        return __('filament-companies::default.pages.titles.create_company');
    }
}
