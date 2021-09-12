
@if (notiflash_get('model') === 'toast')

    <script>
        bulmaToast.toast({
            message: "{{ notiflash_get('message') }}",
            type: "{{ notiflash_type_class() }}",
            dismissible: true,
            duration: 4000,
            closeOnClick: true,
            pauseOnHover: true,
            animate: { in: 'fadeIn', out: 'fadeOut' },
        })
    </script>

@endif