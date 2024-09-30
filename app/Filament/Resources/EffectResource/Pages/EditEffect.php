<?php

namespace App\Filament\Resources\EffectResource\Pages;

use App\Filament\Resources\EffectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEffect extends EditRecord
{
    protected static string $resource = EffectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
