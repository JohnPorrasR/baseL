@extends('base.base')

@section('title')
    @johnporrasr
@stop

@section('style')

@stop

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Panel de control
                <small>Registros</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Panel de control</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>150 H.</h3>
                            <p>P 1</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">+ info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>53 <sup style="font-size: 20px">%</sup></h3>
                            <p>P 2</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">+ info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>44 H.</h3>
                            <p>P 3</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">+ info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>65 H.</h3>
                            <p>P 4</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">+ info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section ng-app="myapp">
            <div class="row" ng-controller="myctrl">
                <div class="col-md-6">
                        <highchart id="chart1" config="chartConfig1" class="span9" ></highchart>
                </div>
                <div class="col-md-6">
                        <highchart id="chart1" config="chartConfig2" class="span9" ></highchart>
                </div>
            </div>
        </section>
    </div>

@stop


@section('script')
    <script src=" {!! asset('asset/js/lib/index/angular.min.js') !!} "></script>
    <script src=" {!! asset('asset/js/lib/index/highstock.js') !!} "></script>
    <script src=" {!! asset('asset/js/lib/index/highcharts-ng.js') !!} "></script>
    <script src=" {!! asset('asset/js/app/graficos-app.js') !!} "></script>
    <script src=" {!! asset('asset/js/lib/app.min.js') !!} "></script>
@stop