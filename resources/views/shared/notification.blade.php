<x-bladewind::dropmenu>
    <x-slot name="trigger">
        <x-bladewind::bell />
    </x-slot>
    <x-bladewind::dropmenu-item>
        <x-bladewind::list-view transparent="true">

            <x-bladewind::list-item>
                <x-bladewind::avatar size="small" image="{{ asset('assets/photos/avatar.jpg') }}" />
                <div class="mx-1 pt-1">
                    <div class="text-sm">
                        <span class="font-medium text-slate-900">
                            Michael
                        </span>
                        assigned <a href="#">a task</a> to you
                        <div class="text-xs">3 hours ago</div>
                    </div>
                </div>
            </x-bladewind::list-item>

        </x-bladewind::list-view>
    </x-bladewind::dropmenu-item>
</x-bladewind::dropmenu>