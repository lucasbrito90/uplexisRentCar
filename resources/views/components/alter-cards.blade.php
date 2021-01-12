<div>
    <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-{{$color}}-500">
        <span class="text-xl inline-block mr-5 align-middle">
            <i class="fas fa-bell" />
        </span>
        <span class="inline-block align-middle mr-8 text-white">

            @if($link)
                <p><a href="{{ $link }}">{{ $link }}</a></p>
            @endif

            {{ $message }}
        </span>
    </div>
</div>
