@extends('app')

@section('content')

<div v-if="shows.length == 0" class="mdl-shadow--4dp intro">
 <h3>TNTSearch</h3>
 <h4>TNTSearch is a fully featured full text search engine written in PHP</h4>
 <p>This page is intended to show the powerfull search capabilities of the engine.
 You can try to search for any TV Show you can think of. The indexed database consists of 57000 shows
 and 130000 actors. It is posible to serach by series name, actor name or genre.</p>

 <p >
     <img src="/images/relevancy.png" alt="">
 </p>
</div>

<div  v-for="show in shows">
    <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
        <header>
          <img class="cover" width="155" v-bind:src="show.img" alt="">
        </header>
        <div class="mdl-card mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
          <div class="mdl-card__supporting-text">
            <h4>@{{{show.title}}}</h4>
            <p><img src="/images/pg.png" alt=""> @{{show.runtime}} min   -   @{{show.genre}}</p>
            <p class="uk-text-justify">@{{{show.content}}}</p>
            <p><b>Stars:</b> @{{{show.actors}}}</p>
          </div>
          <div class="mdl-card__actions">
            <a target="_blank" class="mdl-button" href="@{{{show.link}}}">View on IMDB</a>
          </div>
        </div>
    </section>
    <br>
</div>

@endsection