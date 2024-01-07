<?php

namespace App\Tables;

use App\Models\User;
use Hybridly\Refining\Sorts;
use Hybridly\Tables\Actions;
use Hybridly\Tables\Actions\InlineAction;
use Hybridly\Tables\Columns;
use Hybridly\Tables\Table;
use Illuminate\Support\Collection;

final class UserTable extends Table
{

    protected string $model = User::class;
    protected function defineColumns(): array
    {
        return [
            Columns\TextColumn::make('id'),
            Columns\TextColumn::make('name')
        ];
    }

    protected function defineRefiners(): array
    {
        return [];
    }

    protected function defineActions(): array
    {
        return [
            InlineAction::make('delete')
                ->action(fn (User $user) => $user->delete()),
        ];
    }
}
