<?php

namespace App\Filament\Resources\BlogResource\Pages;

use Filament\Pages\Actions;
use Illuminate\Support\Str;
use App\Filament\Resources\BlogResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBlog extends CreateRecord
{
    protected static string $resource = BlogResource::class;

    // protected function mutateFormDataBeforeCreate(array $data): array
    // {
    //     $data['slug'] = Str::slug($data['title']);

    //     return $data;
    // }

    protected function afterCreate(): void
    {
        $this->record->update([
            'slug' => Str::slug($this->record->title."-".$this->record->id)
        ]);
    }
}
