@extends('racine/layourt')
@section('contenu')
    <p> {{ $dossiers->libelle }} </p>
    <p> {{ $dossiers->type_bornage_id }} </p>


    <div class="tabs tabs-alt clearfix ui-tabs ui-corner-all ui-widget ui-widget-content" id="tabs-profile">

        <ul class="tab-nav clearfix ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header"
            role="tablist">
            <li role="tab" tabindex="0"
                class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active"
                aria-controls="tab-feeds" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a
                    href="#tab-feeds" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-1"><i
                        class="icon-rss2"></i>Tache</a></li>
            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab"
                aria-controls="tab-posts" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a
                    href="#tab-posts" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-2"><i
                        class="icon-pencil2"></i> Les observations</a></li>
            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab"
                aria-controls="tab-replies" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false"><a
                    href="#tab-replies" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-3"><i
                        class="icon-reply"></i> les commentaires</a></li>
            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab"
                aria-controls="tab-connections" aria-labelledby="ui-id-4" aria-selected="false" aria-expanded="false"><a
                    href="#tab-connections" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-4"><i
                        class="icon-users"></i> L'equipe de travail</a></li>
        </ul>

        <div class="tab-container">

            <div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content" id="tab-feeds"
                aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false" style="">

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>tache réaliser</th>
                            <th>tache non réaliser</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <code>5/23/2021</code>
                            </td>
                            <td>Payment for VPS2 completed</td>
                        </tr>
                        <tr>
                            <td>
                                <code>5/23/2021</code>
                            </td>
                            <td>Logged in to the Account at 16:33:01</td>
                        </tr>
                        <tr>
                            <td>
                                <code>5/22/2021</code>
                            </td>
                            <td>Logged in to the Account at 09:41:58</td>
                        </tr>
                        <tr>
                            <td>
                                <code>5/21/2021</code>
                            </td>
                            <td>Logged in to the Account at 17:16:32</td>
                        </tr>
                        <tr>
                            <td>
                                <code>5/18/2021</code>
                            </td>
                            <td>Logged in to the Account at 22:53:41</td>
                        </tr>
                    </tbody>
                </table>

            </div>


            <div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content" id="tab-posts"
                aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="true" style="display: none;">

                <!-- observation
                            ============================================= -->


                @foreach ($observations as $observation)
                    @if ($observation->dossier_id == $dossiers->id)
                        <div class="card">
                            <div class="card-header"><strong>Poster par : <a href="#">MONE</a></strong></div>
                            <div class="card-body">
                                {{ $observation->contenu }}
                            </div>
                        </div>
                        <br>
                    @endif
                @endforeach


            </div>


            <div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content" id="tab-replies"
                aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">


                {{-- <li class="comment even thread-even depth-1" id="li-comment-1">

                        @foreach ($observations as $observation)

                            @if ($commentaires->dossier_id == $dossiers->id)
                                <div id="comment-1" class="comment-wrap clearfix">
                                    <div class="comment-content clearfix">

                                        @foreach ($utilisateurs as $utilisateur)
                                            @if ($utilisateur->id == $commentaire->utilisateur_id)
                                                <div class="comment-author"> {{ $utilisateur->nom_utilisateur }} <span><a
                                                            href="#" title="Permalink to this comment">
                                                            {{ $commentaire->date_enregistrement }} </a></span></div>
                                                <p>{{ $commentaire->contenu }}</p>
                                                <a class="comment-reply-link" href="#"><i class="icon-reply"></i></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            @endif
                        @endforeach
                        @endif



                        <ul class="children">
                            <li class="comment byuser comment-author-_smcl_admin odd alt depth-2" id="li-comment-3">
                                <div id="comment-3" class="comment-wrap clearfix">
                                    <div class="comment-meta">
                                        <div class="comment-author vcard">

                                            <span class="comment-avatar clearfix">
                                                <img alt="Image"
                                                    src="https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G"
                                                    class="avatar avatar-40 photo" height="40" width="40"></span>

                                        </div>
                                    </div>
                                    <div class="comment-content clearfix">
                                        <div class="comment-author"><a href="#" rel="external nofollow"
                                                class="url">SemiColon</a><span><a href="#"
                                                    title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span>
                                        </div>

                                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                                        <a class="comment-reply-link" href="#"><i class="icon-reply"></i></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </li>
                        </ul>
                    </li> --}}




                @foreach ($commentaires as $commentaire)
                    @if ($commentaire->dossier_id == $dossiers->id)
                        <div class="clear topmargin-sm"></div>
                        <ol class="commentlist border-0 m-0 p-0 clearfix">
                            <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1"
                                id="li-comment-2">
                                <div class="comment-wrap clearfix">

                                    <div class="comment-content clearfix">
                                        <div class="comment-author"><a href="#" rel="external nofollow"
                                                class="#{{-- url --}}">MONE : {{ $commentaire->utilisateur_id }} </a><span><a
                                                    href="#" title="Permalink to this comment">
                                                    {{ $commentaire->date_enregistrement }} </a></span></div>

                                        <p> {{ $commentaire->contenu }} </p>

                                        <a class="comment-reply-link" href="#"><i class="icon-reply"></i></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </li>
                        </ol>
                    @endif
                @endforeach







            </div>
            <div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content" id="tab-connections"
                aria-labelledby="ui-id-4" role="tabpanel" aria-hidden="true" style="display: none;">

                {{-- <div class="row topmargin-sm">
                    <div class="col-lg-3 col-md-6 bottommargin">

                        <div class="team">
                            <div class="team-image">
                                <img src="images/team/3.jpg" alt="John Doe">
                            </div>
                            <div class="team-desc">
                                <div class="team-title">
                                    <h4>John Doe</h4><span>CEO</span>
                                </div>
                                <a href="#"
                                    class="social-icon inline-block si-small si-light si-rounded si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#"
                                    class="social-icon inline-block si-small si-light si-rounded si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>
                                <a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 bottommargin">

                        <div class="team">
                            <div class="team-image">
                                <img src="images/team/2.jpg" alt="Josh Clark">
                            </div>
                            <div class="team-desc">
                                <div class="team-title">
                                    <h4>Josh Clark</h4><span>Co-Founder</span>
                                </div>
                                <a href="#"
                                    class="social-icon inline-block si-small si-light si-rounded si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#"
                                    class="social-icon inline-block si-small si-light si-rounded si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>
                                <a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 bottommargin">

                        <div class="team">
                            <div class="team-image">
                                <img src="images/team/8.jpg" alt="Mary Jane">
                            </div>
                            <div class="team-desc">
                                <div class="team-title">
                                    <h4>Mary Jane</h4><span>Sales</span>
                                </div>
                                <a href="#"
                                    class="social-icon inline-block si-small si-light si-rounded si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#"
                                    class="social-icon inline-block si-small si-light si-rounded si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>
                                <a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6">

                        <div class="team">
                            <div class="team-image">
                                <img src="images/team/4.jpg" alt="Nix Maxwell">
                            </div>
                            <div class="team-desc">
                                <div class="team-title">
                                    <h4>Nix Maxwell</h4><span>Support</span>
                                </div>
                                <a href="#"
                                    class="social-icon inline-block si-small si-light si-rounded si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#"
                                    class="social-icon inline-block si-small si-light si-rounded si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>
                                <a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div> --}}

            </div>

        </div>

    </div>


@endsection
