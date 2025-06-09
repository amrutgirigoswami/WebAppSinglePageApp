<?php

namespace App\Filament\Resources\FaqResource\Pages;

use App\Filament\Resources\FaqResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFaq extends EditRecord
{
    protected static string $resource = FaqResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getSavedNotification(): \Filament\Notifications\Notification|null
    {
        return \Filament\Notifications\Notification::make()
            ->title('FAQ updated successfully!')
            ->success()
            ->body('The FAQ has been updated successfully.')
            ->send();
    }
}
