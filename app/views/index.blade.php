@extends('layouts.master')

@section('content')

        <div style="background-color:#eee;">
            <div class="container">

                <div class="row">

                    <div class="col-sm-3">
                        @include('_partials._quick_links')
                    </div>

                    <div class="col-sm-9">

                        <div class="row" style="margin-bottom: 25px;">

                            <div class="col-xs-12" style="background-color: #fff; padding-bottom: 25px; margin-left: 15px; margin-right: 15px; width: auto;">

                                <h2>Announcements <small>&amp; Featured Updates</small></h2>

                                <div class="media">
                                    <a class="pull-left" href="#" style="color: inherit;">
                                        <i class="fa fa-gavel fa-5x fa-fw"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Local Rules Updates</h4>
                                        New Update to the Local Court Rules.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut enim nulla. Aenean et consectetur justo, vel semper nisi. Donec iaculis iaculis dui non porttitor. Suspendisse suscipit sit amet dolor vitae congue. Curabitur nec egestas lectus. Nulla facilisi. Phasellus auctor nibh ut lacus feugiat vehicula ut sed odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas a posuere turpis. Proin aliquam magna vitae turpis aliquet placerat. Phasellus dapibus odio tempus augue venenatis laoreet. Pellentesque orci eros, eleifend at augue ut, malesuada cursus dolor.
                                    </div>
                                </div>

                                <div class="media">
                                    <a class="pull-left" href="#" style="color: inherit;">
                                        <i class="fa fa-user fa-5x fa-fw"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">New Jobs Posted</h4>
                                        Another Update. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut enim nulla. Aenean et consectetur justo, vel semper nisi.
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="row" style="margin-bottom: 25px;">

                            <div class="col-xs-12" style="background-color: #fff; padding-bottom: 25px; margin-left: 15px; margin-right: 15px; width: auto;">

                                <h2>News Feed <small>&amp; Recent Updates</small></h2>

                                <div class="media">
                                    <a class="pull-left" href="#" style="color: inherit;">
                                        <span class="fa-stack fa-3x">
                                            <i class="fa fa-circle fa-fw fa-stack-2x"></i>
                                            <i class="fa fa-gavel fa-stack-1x fa-fw fa-inverse"></i>
                                        </span>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Local Rules Updates</h4>
                                        New Update to the Local Court Rules.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut enim nulla. Aenean et consectetur justo, vel semper nisi. Donec iaculis iaculis dui non porttitor. Suspendisse suscipit sit amet dolor vitae congue. Curabitur nec egestas lectus. Nulla facilisi. Phasellus auctor nibh ut lacus feugiat vehicula ut sed odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas a posuere turpis. Proin aliquam magna vitae turpis aliquet placerat. Phasellus dapibus odio tempus augue venenatis laoreet. Pellentesque orci eros, eleifend at augue ut, malesuada cursus dolor.
                                    </div>
                                </div>

                                <div class="media">
                                    <a class="pull-left" href="#" style="color: inherit;">
                                        <span class="fa-stack fa-3x">
                                            <i class="fa fa-square fa-fw fa-stack-2x"></i>
                                            <i class="fa fa-user fa-stack-1x fa-fw fa-inverse"></i>
                                        </span>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">New Jobs Posted</h4>
                                        Another Update. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut enim nulla. Aenean et consectetur justo, vel semper nisi.
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

@stop
