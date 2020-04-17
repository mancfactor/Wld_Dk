@extends('layouts.clone.layout')

@section('content')
<div id="shopify-section-1478798179956" class="shopify-section homepage-section">
    <section class="border-top section products-section" data-section-type="featured-collection">
        <div class="container">
            <div class="opposing-items">
                <h1 class="section-heading left">FEATURED ENTRIES</h1>
                <a class="btn section-count" href="#">
                    <span class="not-tiny">View all ({{ count($entries)}})</span>
                    <span class="tiny">{{ count($entries)}}</span>
                </a>
            </div>
            <div id="collection" class="">
                <div class="inline-row">
                    <div class="inline-item right last">
                        <span class="results-count desktop">{{ count($entries)}} results</span>
                        <span class="filter">
                        <label for="sort-by">Sort by:</label>
                        <div class="pretty-select id-sort-by"><select id="sort-by" class="sort-by replaced" data-default-value="manual">
                            <option value="manual">Featured</option>
                            <option value="vote-ascending">Votes, low to high</option>
                            <option value="vote-descending">Votes, high to low</option>
                            <option value="title-ascending">Alphabetically, A-Z</option>
                            <option value="title-descending">Alphabetically, Z-A</option>
                            <option value="created-ascending">Date, old to new</option>
                            <option value="created-descending">Date, new to old</option>
                        </select><span class="text"><span class="value">Featured</span></span><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"></path><path d="M0-.75h24v24H0z" fill="none"></path></svg></div>           
                        </span>
                    </div>
                </div>
                <div class="product-list row grid " data-normheights=".image" data-normheights-inner="img">
                    @foreach($entries as $entry)
                    <!--<div class="product-block flex column max-cols-6">-->
                    <div class="product-block flex column max-cols-3 min-cols-2">
                        <div class="ftr">
                        <a class="title ftc" href="/contest/entry/{{$entry->id}}">{{ $entry->name}}</a>
                        </div>
                        <div class="image" style="min-height: 337px;">
                            <div class="inner">
                                <a href="/contest/entry/{{$entry->id}}">
                                @foreach ($entry->getMedia('entries') as $pic)
                                    <img src="{{ $pic->getUrl() }}" sizes="(max-width: 959px) 100vw, 50vw">    
                                @endforeach
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $entry->description}}</p>
                            <p>{!! $share !!}</p>
                            <div class="btn-group">
                                <button type="button"  class="btn btn-xs btn-outline-secondary vote-button"><a href="/vote/{{$entry->id}}">Vote ({{ count($entry->voters()->get())}})</a></button>
                                <!--<button type="button" onclick='showComments("comments-{{$entry->id}}")' class="btn btn-xs btn-outline-secondary">Comments ({{$entry->comments()->count()}})</button>-->
                                 <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#comments{{$entry->id}}">
                                 Comments ({{$entry->comments()->count()}})
                                </button>
                               
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="comments{{$entry->id}}" tabindex="-1" role="dialog" aria-labelledby="rulesLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="rulesLabel">Comments</h4>
                                    </div>
                                    <div class="modal-body">
                                    @comments(['model' => $entry])
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
        </div>
        <script>
            function showComments(divId) {
                var x = document.getElementById(divId);
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
            
            function vote(entryId) {
                alert(entryId);
                $.ajax
                ({ 
                    url: '/vote',
                    data: {"entry_id": entryId},
                    type: 'post',
                    success: function(result)
                    {
                        alert("voted!");
                        
                        $('.modal-box').text(result).fadeIn(700, function() 
                        {
                            setTimeout(function() 
                            {
                                $('.modal-box').fadeOut();
                            }, 2000);
                        });
                        
                    }
                });
            }
        </script>
@endsection