@if(session()->has('success'))
<div class="mt-3 w-100" >
    <x-bladewind::alert type="success" shade="dark">
        {{ session('success') }}</x-bladewind::alert>
</div>
@endif