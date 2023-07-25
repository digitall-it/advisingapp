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

            @can('institution_delete')
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
                    model="Institution"
                />
                <livewire:excel-export
                    format="xlsx"
                    model="Institution"
                />
                <livewire:excel-export
                    format="pdf"
                    model="Institution"
                />
            @endif

            @can('institution_create')
                <x-csv-import route="{{ route('admin.institutions.csv.store') }}" />
            @endcan

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
                            {{ trans('cruds.institution.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.institution.fields.code') }}
                            @include('components.table.sort', ['field' => 'code'])
                        </th>
                        <th>
                            {{ trans('cruds.institution.fields.name') }}
                            @include('components.table.sort', ['field' => 'name'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($institutions as $institution)
                        <tr>
                            <td>
                                <input
                                    type="checkbox"
                                    value="{{ $institution->id }}"
                                    wire:model.live="selected"
                                >
                            </td>
                            <td>
                                {{ $institution->id }}
                            </td>
                            <td>
                                {{ $institution->code }}
                            </td>
                            <td>
                                {{ $institution->name }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('institution_show')
                                        <a
                                            class="btn btn-sm btn-info mr-2"
                                            href="{{ route('admin.institutions.show', $institution) }}"
                                        >
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('institution_edit')
                                        <a
                                            class="btn btn-sm btn-success mr-2"
                                            href="{{ route('admin.institutions.edit', $institution) }}"
                                        >
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('institution_delete')
                                        <button
                                            class="btn btn-sm btn-rose mr-2"
                                            type="button"
                                            wire:click="confirm('delete', {{ $institution->id }})"
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
            {{ $institutions->links() }}
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
