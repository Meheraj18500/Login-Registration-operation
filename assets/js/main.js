new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  lineColors: ['orange'],
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { year: '2014', value: 3 },
    { year: '2015', value: 9 },
    { year: '2016', value: 20 },
    { year: '2017', value: 13 },
    { year: '2018', value: 18 },
    { year: '2019', value: 8 },
    { year: '2020', value: 20 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value']
});

Morris.Donut({
    element: 'donut-example',
    data: [
      {label: "Total Like", value: 30},
      {label: "Total Share", value: 12},
      {label: "Total comment", value: 20}
    ],
    colors: ['#035397', '#FFAA4C', '#8E2657'],
    labelColor: '#ffffff'
  });