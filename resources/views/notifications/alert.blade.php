
@if (notiflash_get('model') === 'alert')

    <div class="notification {{ notiflash_type_class() }}">
        <button class="delete"></button>
        @if (notiflash_has('title'))
            <strong>{{ notiflash_get('title') }}</strong>
            <br>
        @endif

        {{ notiflash_get('message') }}
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
                    const $notification = $delete.parentNode;
                    
                    $delete.addEventListener('click', () => {
                    $notification.parentNode.removeChild($notification);
                });
            });
        });
    </script>
@endif