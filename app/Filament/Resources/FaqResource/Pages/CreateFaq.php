<?php

namespace App\Filament\Resources\FaqResource\Pages;

use App\Filament\Resources\FaqResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFaq extends CreateRecord
{
    protected static string $resource = FaqResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): \Filament\Notifications\Notification|null
    {
        return \Filament\Notifications\Notification::make()
            ->title('FAQ created successfully!')
            ->success()
            ->body('The FAQ has been created successfully.')
            ->send();
    }
}
