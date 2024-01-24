!function ($) {
    "use strict";

    var MorrisCharts = function () {
    };
        initChart();

        function initChart(date) {

            //creates Bar chart
            MorrisCharts.prototype.createBarChart = function (element, data, xkey, ykeys, labels, lineColors) {
                Morris.Bar({
                    element: element,
                    data: data,
                    xkey: xkey,
                    ykeys: ykeys,
                    labels: labels,
                    gridLineColor: '#eef0f2',
                    barSizeRatio: 0.4,
                    resize: true,
                    hideHover: 'auto',
                    barColors: lineColors
                });
            },



            //creates Stacked chart
            MorrisCharts.prototype.createStackedChart = function (element, data, xkey, ykeys, labels, lineColors) {
                Morris.Bar({
                    element: element,
                    data: data,
                    xkey: xkey,
                    ykeys: ykeys,
                    stacked: true,
                    labels: labels,
                    hideHover: 'auto',
                    barSizeRatio: 0.4,
                    resize: true, //defaulted to true
                    gridLineColor: '#eeeeee',
                    barColors: lineColors
                });
            },


                MorrisCharts.prototype.init = function () {
                    var dataOrder = JSON.parse($('#data_order').val()).map((item) => {
                        return {
                           // y: 'Tên đơn hàng: ' + item['order_name'] + '<br>' + 'Ngày dự kiến xong:' + item['order_date_done'],
                            y: item['order_name'],
                            a: +item['amount'],
                            b: +item['total_product_done'],
                        }
                    });
                    this.createBarChart('morris-orders', dataOrder, 'y', ['a', 'b'], ['Tổng số lượng', 'Tổng số lượng hoàn thành', 'Ngày dự kiến xong:' ], ['#7a6fbe','#28bbe3', '#28bb88']);


                    //
                    var dataQuantity = JSON.parse($('#data_quantity').val());
                    var dataQuantity1 = dataQuantity.map((item) => {
                        return {
                            y: item['full_name'],
                            a: item['total_user_quantity'],
                            b: 0,
                        }
                    })
                    var dataQuantity2 = dataQuantity.map((item) => {
                        return {
                            y: item['full_name'],
                            a: 0,
                            b: item['total_user_salary']
                        }
                    })
                    var $barData = dataQuantity1;
                    var $barData2 = dataQuantity2;
                    this.createStackedChart('morris-bar-example', $barData, 'y', ['a'], ['Tổng sản lượng'], ['#7a6fbe','#28bbe3']);
                    this.createStackedChart('morris-bar-example-2', $barData2, 'y', ['b'], ['Tổng lương'], ['#28bbe3']);
                },
                //init
                $.MorrisCharts = new MorrisCharts, $.MorrisCharts.Constructor = MorrisCharts
        }
}(window.jQuery),

//initializing
    function ($) {
        "use strict";
        $.MorrisCharts.init();
    }(window.jQuery);
