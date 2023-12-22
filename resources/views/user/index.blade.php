<x-layout>
    <x-setting heading="My Profile">
        <form method="POST" action="/user/profile" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="name" :value="old('name', $user->name)" />

            {{-- <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" />
                </div>

                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Blog Post illustration"
                    class="rounded-xl ml-6" width="100">
            </div> --}}

            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>
</x-layout>
