<div>
    @if ($menu === 'show')
        <livewire:guest.blog.show :slug="$slug" :menu="$menu"/>
    @else
        <livewire:guest.blog.record />
    @endif
</div>