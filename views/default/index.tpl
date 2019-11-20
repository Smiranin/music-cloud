

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <div class="starter-template">
            <div class="songs">
                {foreach $songs as $song}
                    <div class="song">
                        <p>{$song['name']} <button>Listing</button></p>
                    </div>
                {/foreach}
            </div>
    </div>
</div>
