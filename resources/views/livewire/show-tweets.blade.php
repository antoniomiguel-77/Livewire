<div>
    

    <form wire:submit.prevent="create" method="post">
    @csrf
    <input type="text" name="message" id="message" wire:model="message">
    <button type="submit">Criar Tweeter</button>
    </form>


    @foreach ($tweets as $tweet)
        {{$tweet->user->name}} - {{$tweet->content}} <br>
    @endforeach
</div>
