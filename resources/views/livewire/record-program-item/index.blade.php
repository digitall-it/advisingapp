<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select
                class="form-select w-full sm:w-1/6"
                wire:model.live="perPage"
            >
                @foreach ($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('record_program_item_delete')
                <button
                    class="btn btn-rose ml-3 disabled:cursor-not-allowed disabled:opacity-50"
                    type="button"
                    wire:click="confirm('deleteSelected')"
                    wire:loading.attr="disabled"
                    {{ $this->selectedCount ? '' : 'disabled' }}
                >
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if (file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export
                    format="csv"
                    model="RecordProgramItem"
                />
                <livewire:excel-export
                    format="xlsx"
                    model="RecordProgramItem"
                />
                <livewire:excel-export
                    format="pdf"
                    model="RecordProgramItem"
                />
            @endif

        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input
                class="inline-block w-full sm:w-1/3"
                type="text"
                wire:model.live.debounce.300ms="search"
            />
        </div>
    </div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table-index table w-full">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            {{ trans('cruds.recordProgramItem.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.recordProgramItem.fields.name') }}
                            @include('components.table.sort', ['field' => 'name'])
                        </th>
                        <th>
                            {{ trans('cruds.recordProgramItem.fields.institution') }}
                            @include('components.table.sort', ['field' => 'institution'])
                        </th>
                        <th>
                            {{ trans('cruds.recordProgramItem.fields.plan') }}
                            @include('components.table.sort', ['field' => 'plan'])
                        </th>
                        <th>
                            {{ trans('cruds.recordProgramItem.fields.career') }}
                            @include('components.table.sort', ['field' => 'career'])
                        </th>
                        <th>
                            {{ trans('cruds.recordProgramItem.fields.term') }}
                            @include('components.table.sort', ['field' => 'term'])
                        </th>
                        <th>
                            {{ trans('cruds.recordProgramItem.fields.status') }}
                            @include('components.table.sort', ['field' => 'status'])
                        </th>
                        <th>
                            {{ trans('cruds.recordProgramItem.fields.foi') }}
                            @include('components.table.sort', ['field' => 'foi'])
                        </th>
                        <th>
                            {{ trans('cruds.recordProgramItem.fields.gpa') }}
                            @include('components.table.sort', ['field' => 'gpa'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($recordProgramItems as $recordProgramItem)
                        <tr>
                            <td>
                                <input
                                    type="checkbox"
                                    value="{{ $recordProgramItem->id }}"
                                    wire:model.live="selected"
                                >
                            </td>
                            <td>
                                {{ $recordProgramItem->id }}
                            </td>
                            <td>
                                {{ $recordProgramItem->name }}
                            </td>
                            <td>
                                {{ $recordProgramItem->institution }}
                            </td>
                            <td>
                                {{ $recordProgramItem->plan }}
                            </td>
                            <td>
                                {{ $recordProgramItem->career }}
                            </td>
                            <td>
                                {{ $recordProgramItem->term }}
                            </td>
                            <td>
                                {{ $recordProgramItem->status }}
                            </td>
                            <td>
                                {{ $recordProgramItem->foi }}
                            </td>
                            <td>
                                {{ $recordProgramItem->gpa }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('record_program_item_show')
                                        <a
                                            class="btn btn-sm btn-info mr-2"
                                            href="{{ route('admin.record-program-items.show', $recordProgramItem) }}"
                                        >
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('record_program_item_edit')
                                        <a
                                            class="btn btn-sm btn-success mr-2"
                                            href="{{ route('admin.record-program-items.edit', $recordProgramItem) }}"
                                        >
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('record_program_item_delete')
                                        <button
                                            class="btn btn-sm btn-rose mr-2"
                                            type="button"
                                            wire:click="confirm('delete', {{ $recordProgramItem->id }})"
                                            wire:loading.attr="disabled"
                                        >
                                            {{ trans('global.delete') }}
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            @if ($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
            {{ $recordProgramItems->links() }}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
            if (!confirm("{{ trans('global.areYouSure') }}")) {
                return
            }
            @this[e.callback](...e.argv)
        })
    </script>
@endpush
