@if($errors->any())
<div class="mt-3 w-100" >
    <x-bladewind::alert type="error" shade="dark" >
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </x-bladewind::alert>
</div>
@endif