@if (notiflash_has('message'))

    @include('notiflash::notifications.toast')

    @include('notiflash::notifications.alert')

    @include('notiflash::notifications.alert-message')

@endif

{{ session()->forget('notiflash.message') }}