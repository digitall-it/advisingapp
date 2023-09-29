<h3 class="mb-1 flex items-center text-lg font-semibold text-gray-900 dark:text-white">
    {{ $record->timelineRecordTitle() }}
</h3>
<time class="mb-2 block text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
    {{ $record->timelineRecordDatetimeIndicator() }} {{ $record->timelineRecordDatetime() }}
</time>
<p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
    {{ $record->timelineRecordDescription() }}
</p>