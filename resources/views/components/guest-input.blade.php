<div class="w-5/6 mx-auto py-3">
    <p class="w-full text-2xl">{{ $title }}</p>
    <input name="{{ $name }}"
           placeholder="{{ $placeholder }}"
           type="{{ $type ?? 'text' }}"
           value="{{ old($name, $value ?? null) }}"
           class="w-full border-none rounded-[10px] py-3 @isset($name) border border-red-500 @endisset" required>
</div>
