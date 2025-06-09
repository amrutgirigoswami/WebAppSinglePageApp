<?php

namespace App\Filament\Resources\PageResource\Pages;

use App\Filament\Resources\PageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePage extends CreateRecord
{
    protected static string $resource = PageResource::class;

     protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): \Filament\Notifications\Notification|null
    {
        return \Filament\Notifications\Notification::make()
            ->title('Page created successfully!')
            ->success()
            ->body('The page has been created successfully.')
            ->send();
    }
}
