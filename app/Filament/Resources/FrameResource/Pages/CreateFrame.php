<?php

namespace App\Filament\Resources\FrameResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Storage;
use App\Filament\Resources\FrameResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFrame extends CreateRecord
{
    protected static string $resource = FrameResource::class;


    protected function afterCreate() {}

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
