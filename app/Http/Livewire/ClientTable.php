<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

use App\Models\Client;

class ClientTable extends DataTableComponent
{
    protected $model = Client::class;

    public $table_class = 'w-full text-left text-sm font-normal';
    public $thead_class = 'border-b text-xs dark:border-neutral-500 py-4';
    public $checkbox = false;
    public $per_page = 10;

    public function configure(): void
    {
        // Shorthand for $this->setPaginationStatus(true);
        $this->setPrimaryKey('id');
        $this->setPaginationEnabled();
        $this->setColumnSelectHiddenOnMobile();
    }

    public function destroy(int $id): RedirectResponse|bool
	{
		$delete = $this->model::find($id);
		if($delete) {
			return $delete->flushQueryCache(['nord_'])->delete();
		}
		
		return $this->isError($delete, 'global.err_del');
	}

    public function query(): Builder
    {
        return Client::where('user_id',Auth::user()->id);
    }


    public function columns(): array
    {
        return [

            Column::make('id')
                ->hideIf(Auth::user()->id !== 1 )
                ->excludeFromColumnSelect(),

            Column::make('Name')
                ->searchable()
                ->sortable(),
            Column::make('Email')
                ->searchable()
                ->sortable()
                ->collapseOnMobile()
                ->format(
                    fn($value, $row, Column $column) => '<a href="mailto:'.$row->email.'" title="Send mail"">'.$row->email.'</a>'
                )
                ->html(),
            Column::make('Phone')
                ->searchable()
                ->sortable()
                ->collapseOnMobile()
                ->format(
                    fn($value, $row, Column $column) => '<a href="tel:'.$row->phone.'" title="Phone"">'.$row->phone.'</a>'
                )
                ->html(),
            ButtonGroupColumn::make('Actions')
                ->unclickable()
                ->excludeFromColumnSelect()
                ->attributes(function($row) {
                    return [
                        'class' => 'space-x-2',
                    ];
                })
                ->collapseOnMobile()
                ->buttons([
                    LinkColumn::make('Show')
                        ->title(fn($row) => 'Show')
                        ->location(fn($row) => route('clients.show', $row))
                        ->attributes(fn($row) => [
                            'class' => 'bg-sky-200 p-1 px-2 border border-white rounded-md dark:bg-sky-900',
                            'alt' => $row->name . ' Avatar',
                        ]),
                    LinkColumn::make('Edit')
                        ->title(fn($row) => 'Edit')
                        ->location(fn($row) => route('clients.edit', $row))
                        ->attributes(fn($row) => [
                            'class' => 'bg-purple-200 p-1 px-2 border border-white rounded-md dark:bg-purple-900',
                            'alt' => $row->name . ' Avatar',
                        ]),
                    
                ]),  
            
                
            // Column::make('Actions')
            //     ->label(
            //         fn($row, Column $column) => view('clients.table-actions')->withRow($row)
            //     )
            //     ->unclickable()            
        ];
    }

    
}

