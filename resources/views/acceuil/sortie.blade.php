@extends('racine/layourt')

@section('contenu')
<br>
{{-- <section id="content">

    <div class="container clearfix">
        <div class="table-responsive">

            <div class="card-header text-center">La liste des Sorties</div>
            <br>
            <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>les materiels utilisers</th>
                                <th>La date de sortie</th>
                                <th>L'equipe de sortie</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sorties as $sortie)
                                <tr>
                                    <td>{{ $sortie->id }}</td>
                                    <td>{{ $sortie->materiel_utiliser }}</td>
                                    <td>{{ $sortie->date_debut_sortie }}</td>
                                    <td>{{ $sortie->equipe_sorti }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section><!-- #content end -->
 --}}

 {{-- <div class="events-calendar">
    <div class="events-calendar-header clearfix">
        <h2>Events Overview</h2>
        <h3 class="calendar-month-year">
            <span id="calendar-month" class="calendar-month">February</span>
            <span id="calendar-year" class="calendar-year">2023</span>
            <nav>
                <span id="calendar-prev" class="calendar-prev"><i class="icon-chevron-left"></i></span>
                <span id="calendar-next" class="calendar-next"><i class="icon-chevron-right"></i></span>
                <span id="calendar-current" class="calendar-current" title="Got to current date"><i class="icon-reload"></i></span>
            </nav>
        </h3>
    </div>
    <div id="calendar" class="fc-calendar-container"><div class="fc-calendar fc-five-rows"><div class="fc-head"><div>Monday</div><div>Tuesday</div><div>Wednesday</div><div>Thursday</div><div>Friday</div><div>Saturday</div><div>Sunday</div></div><div class="fc-body"><div class="fc-row"><div class="fc-past" style="background: transparent; cursor: default;"><span class="fc-date fc-emptydate">30</span><span class="fc-weekday">Mon</span></div><div class="fc-past" style="background: transparent; cursor: default;"><span class="fc-date fc-emptydate">31</span><span class="fc-weekday">Tue</span></div><div class="fc-past"><span class="fc-date">1</span><span class="fc-weekday">Wed</span></div><div class="fc-past"><span class="fc-date">2</span><span class="fc-weekday">Thu</span></div><div class="fc-past"><span class="fc-date">3</span><span class="fc-weekday">Fri</span></div><div class="fc-past"><span class="fc-date">4</span><span class="fc-weekday">Sat</span></div><div class="fc-past"><span class="fc-date">5</span><span class="fc-weekday">Sun</span></div></div><div class="fc-row"><div class="fc-past"><span class="fc-date">6</span><span class="fc-weekday">Mon</span></div><div class="fc-past"><span class="fc-date">7</span><span class="fc-weekday">Tue</span></div><div class="fc-past"><span class="fc-date">8</span><span class="fc-weekday">Wed</span></div><div class="fc-past"><span class="fc-date">9</span><span class="fc-weekday">Thu</span></div><div class="fc-past"><span class="fc-date">10</span><span class="fc-weekday">Fri</span></div><div class="fc-past"><span class="fc-date">11</span><span class="fc-weekday">Sat</span></div><div class="fc-past"><span class="fc-date">12</span><span class="fc-weekday">Sun</span></div></div><div class="fc-row"><div class="fc-past"><span class="fc-date">13</span><span class="fc-weekday">Mon</span></div><div class="fc-past"><span class="fc-date">14</span><span class="fc-weekday">Tue</span></div><div class="fc-past"><span class="fc-date">15</span><span class="fc-weekday">Wed</span></div><div class="fc-past"><span class="fc-date">16</span><span class="fc-weekday">Thu</span></div><div class="fc-past"><span class="fc-date">17</span><span class="fc-weekday">Fri</span></div><div class="fc-today fc-future"><span class="fc-date">18</span><span class="fc-weekday">Sat</span></div><div class="fc-future"><span class="fc-date">19</span><span class="fc-weekday">Sun</span></div></div><div class="fc-row"><div class="fc-future"><span class="fc-date">20</span><span class="fc-weekday">Mon</span></div><div class="fc-future"><span class="fc-date">21</span><span class="fc-weekday">Tue</span></div><div class="fc-future"><span class="fc-date">22</span><span class="fc-weekday">Wed</span></div><div class="fc-future"><span class="fc-date">23</span><span class="fc-weekday">Thu</span></div><div class="fc-future"><span class="fc-date">24</span><span class="fc-weekday">Fri</span></div><div class="fc-future"><span class="fc-date">25</span><span class="fc-weekday">Sat</span></div><div class="fc-future"><span class="fc-date">26</span><span class="fc-weekday">Sun</span></div></div><div class="fc-row"><div class="fc-future"><span class="fc-date">27</span><span class="fc-weekday">Mon</span></div><div class="fc-future"><span class="fc-date">28</span><span class="fc-weekday">Tue</span></div><div class="fc-future" style="background: transparent; cursor: default;"><span class="fc-date fc-emptydate">1</span><span class="fc-weekday">Wed</span></div><div class="fc-future" style="background: transparent; cursor: default;"><span class="fc-date fc-emptydate">2</span><span class="fc-weekday">Thu</span></div><div class="fc-future" style="background: transparent; cursor: default;"><span class="fc-date fc-emptydate">3</span><span class="fc-weekday">Fri</span></div><div class="fc-future" style="background: transparent; cursor: default;"><span class="fc-date fc-emptydate">4</span><span class="fc-weekday">Sat</span></div><div class="fc-future" style="background: transparent; cursor: default;"><span class="fc-date fc-emptydate">5</span><span class="fc-weekday">Sun</span></div></div></div></div></div>
</div> --}}

<section id="content">
    <div class="content-wrap">

        <div class="parallax header-stick bottommargin-lg dark" style="padding: 60px 0; background-color :rgb(88, 161, 243) ; height: auto;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -500px;">

            <div class="container clearfix">

                <div class="events-calendar">
                    <div class="events-calendar-header clearfix">
                        <h2>Events Overview</h2>
                        <h3 class="calendar-month-year">
                            <span id="calendar-month" class="calendar-month"></span>
                            <span id="calendar-year" class="calendar-year"></span>
                            <nav>
                                <span id="calendar-prev" class="calendar-prev"><i class="icon-chevron-left"></i></span>
                                <span id="calendar-next" class="calendar-next"><i class="icon-chevron-right"></i></span>
                                <span id="calendar-current" class="calendar-current" title="Got to current date"><i class="icon-reload"></i></span>
                            </nav>
                        </h3>
                    </div>
                    <div id="calendar" class="fc-calendar-container"></div>
                </div>

            </div>

        </div>

    </div>
</section><!-- #content end -->

@endsection
