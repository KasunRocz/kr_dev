<div>
    <form class="my-4 flex" wire:submit.prevent="addComment">
        <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2" wire:model.lazy="newComment">
        <div class="py-2">
            <button type="submit" class="p-2 bg-blue-500 w-20 rounded shadow text-white">Add</button>
        </div>
    </form>
    @foreach( $comments as $comment )
    <div class="rounded border shadow p-3 my-2">
    <div class="flex justify-start my-2">
        <p class="font-bold text-lg">{{$comment['title']}}</p>
        <p class="font-bold text-lg">{{$comment['created_at']}}</p>
    </div>
    <p class="text-gray-800">
        {{$comment['content']}}
    </p>
    </div>
        @endforeach
</div>
