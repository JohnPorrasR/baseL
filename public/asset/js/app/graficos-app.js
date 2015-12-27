'use strict';

var myapp = angular.module('myapp', ["highcharts-ng"]);

myapp.controller('myctrl', function ($scope) {

  $scope.chartSeries1 = [
    {"name": "My Super Column", "data": [1, 1, 2, 3, 5], type: "column"}
  ];

  $scope.chartSeries2 = [
    {"name":"Some data 3","data":[3,1,10,5,2],"connectNulls":true,"id":"series-2"}
  ];

  $scope.chartConfig1 = {
    options: {
      chart: {
        type: 'areaspline'
      },
      plotOptions: {
        series: {
          stacking: ''
        }
      }
    },
    series: $scope.chartSeries1,
    title: {
      text: 'Grafico en barra'
    },
    credits: {
      enabled: false
    },
    loading: false,
    size: {}
  }

  $scope.chartConfig2 = {
    options: {
      chart: {
        type: 'pie'
      },
      plotOptions: {
        series: {
          stacking: ''
        }
      }
    },
    series: $scope.chartSeries2,
    title: {
      text: 'Grafico Pastel'
    },
    credits: {
      enabled: true
    },
    loading: false,
    size: {}
  }


});