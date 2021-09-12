
@if (session()->get('notiflash.model') === 'message')

    <article class="message {{ notiflash_type_class() }}">
        @if (notiflash_has('title'))
            <div class="message-header">
                <p>{{ notiflash_get('title') }}</p>
                <button class="delete" aria-label="delete"></button>
            </div>
            <div class="message-body">
                {{ notiflash_get('message') }}
            </div>
        @else 
            <div class="message-body">
                <button class="delete" aria-label="delete"></button>
                {{ notiflash_get('message') }}
            </div>
        @endif
    </article>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            (document.querySelectorAll('.message .delete') || []).forEach(($delete) => {
                    const $notification = $delete.parentNode;
                    
                    $delete.addEventListener('click', () => {
                    $notification.parentNode.remove($notification);
                });
            });
        });
    </script>

@endif