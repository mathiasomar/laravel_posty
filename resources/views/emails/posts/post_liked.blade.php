<x-mail::message>
    # Your post was liked

    {{ $liker->name }} liked your post

    <x-mail::button :url="route('posts.show', $post)">
        View post
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>