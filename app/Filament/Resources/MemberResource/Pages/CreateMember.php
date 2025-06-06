<?php

namespace App\Filament\Resources\MemberResource\Pages;

use Filament\Actions;
use Actions\Notification;
use App\Filament\Resources\MemberResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMember extends CreateRecord
{
    protected static string $resource = MemberResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): \Filament\Notifications\Notification|null
    {
        return \Filament\Notifications\Notification::make()
            ->title('Member created successfully!')
            ->success()
            ->body('The member has been created successfully.')
            ->send();
    }
}
