@extends('layouts.master')

@section('title', 'Court Information')

@section('meta_description', 'Overview of the Court')

@section('content')

        <div style="background-color:#eee;">
            <div class="container">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-header" style="border-color: #333;">
                            <h1>Franklin County Municipal Court <small>Sitemap</small></h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <ol class="breadcrumb" style="background-color: #fff;">
                            <li><a href="/">Home</a></li>
                            <li class="active">Court</li>
                        </ol>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-9">

                        <div class="well" style="background-color: #fff;">

                          <ul class="list">
                            <li><a href="/court/judges">Judges</a></li>
                            <li><a href="#">Magistrates</a></li>
                            <li class="list-unstyled">&nbsp;</li>
                            <li><a href="#">Local Rules</a></li>
                            <li class="list-unstyled">&nbsp;</li>
                            <li role="presentation" class="header">Departments
                            	<ul class="list">
		                            <li><a href="#">Court Services</a></li>
		                            <li><a href="#">Duty Room</a></li>
		                            <li><a href="#">Jury</a></li>
		                            <li><a href="#">Mediation</a></li>
		                            <li><a href="#">Security</a></li>
		                            <li><a href="#">Small Claims</a></li>
		                        </ul>
		                    </li>
                            <li class="list-unstyled">&nbsp;</li>
                            <li><a href="#">Employment</a></li>
                            <li><a href="#">Contact Us</a></li>
                          </ul>

                        </div>

                    </div>

                    <div class="col-sm-3">
                        <div class="well well-sm" style="background-color: #fff;">
                            <p class="text-muted">The Local Rules have been converted to PDF documents to allow them to be downloaded and read by the vast majority of online users. A free Adobe PDF reader can be downloaded from <a href="#">www.adobe.com</a>.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

@stop
