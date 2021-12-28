<x-app-layout>
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 bg-white border-b border-gray-200">--}}
{{--                    You're logged in!--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!--Dash Content -->
    <div id="dash-content" class="bg-gray-200 py-6 lg:py-0 w-full lg:max-w-sm flex flex-wrap content-start">

        <div class="w-1/2 lg:w-full">
            <div class="border-2 border-gray-400 border-dashed hover:border-transparent hover:bg-white hover:shadow-xl rounded p-6 m-2 md:mx-10 md:my-6">
                <div class="flex flex-col items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded-full p-3 bg-gray-300"><i class="fa fa-wallet fa-fw fa-inverse text-indigo-500"></i></div>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-3xl">$3249 <span class="text-green-500"><i class="fas fa-caret-up"></i></span></h3>
                        <h5 class="font-bold text-gray-500">Total Revenue</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-1/2 lg:w-full">
            <div class="border-2 border-gray-400 border-dashed hover:border-transparent hover:bg-white hover:shadow-xl rounded p-6 m-2 md:mx-10 md:my-6">
                <div class="flex flex-col items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded-full p-3 bg-gray-300"><i class="fas fa-users fa-fw fa-inverse text-indigo-500"></i></div>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-3xl">249 <span class="text-orange-500"><i class="fas fa-exchange-alt"></i></span></h3>
                        <h5 class="font-bold text-gray-500">Total Users</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-1/2 lg:w-full">
            <div class="border-2 border-gray-400 border-dashed hover:border-transparent hover:bg-white hover:shadow-xl rounded p-6 m-2 md:mx-10 md:my-6">
                <div class="flex flex-col items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded-full p-3 bg-gray-300"><i class="fas fa-user-plus fa-fw fa-inverse text-indigo-500"></i></div>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-3xl">2 <span class="text-yellow-600"><i class="fas fa-caret-up"></i></span></h3>
                        <h5 class="font-bold text-gray-500">New Users</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-1/2 lg:w-full">
            <div class="border-2 border-gray-400 border-dashed hover:border-transparent hover:bg-white hover:shadow-xl rounded p-6 m-2 md:mx-10 md:my-6">
                <div class="flex flex-col items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded-full p-3 bg-gray-300"><i class="fas fa-server fa-fw fa-inverse text-indigo-500"></i></div>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-3xl">152 days</h3>
                        <h5 class="font-bold text-gray-500">Server Uptime</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--Graph Content -->
    <div id="main-content" class="w-full flex-1">

        <div class="flex flex-1 flex-wrap">

            <div class="w-full xl:w-2/3 p-6 xl:max-w-6xl">

                <!--"Container" for the graphs"-->
                <div class="max-w-full lg:max-w-3xl xl:max-w-5xl">

                    <!--Graph Card-->
                    <div class="border-b p-3">
                        <h5 class="font-bold text-black">Graph</h5>
                    </div>
                    <div class="p-5">
                        <div class="ct-chart ct-golden-section" id="chart1"></div>
                    </div>
                    <!--/Graph Card-->

                    <!--Table Card-->
                    <div class="p-3">
                        <div class="border-b p-3">
                            <h5 class="font-bold text-black">Table</h5>
                        </div>
                        <div class="p-5">
                            <table class="w-full p-5 text-gray-700">
                                <thead>
                                <tr>
                                    <th class="text-left text-blue-900">Name</th>
                                    <th class="text-left text-blue-900">Side</th>
                                    <th class="text-left text-blue-900">Role</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>Obi Wan Kenobi</td>
                                    <td>Light</td>
                                    <td>Jedi</td>
                                </tr>
                                <tr>
                                    <td>Greedo</td>
                                    <td>South</td>
                                    <td>Scumbag</td>
                                </tr>
                                <tr>
                                    <td>Darth Vader</td>
                                    <td>Dark</td>
                                    <td>Sith</td>
                                </tr>
                                </tbody>
                            </table>

                            <p class="py-2"><a href="#">See More issues...</a></p>

                        </div>
                    </div>
                    <!--/table Card-->

                </div>

            </div>

            <div class="w-full xl:w-1/3 p-6 xl:max-w-4xl border-l-1 border-gray-300">

                <!--"Container" for the graphs"-->
                <div class="max-w-sm lg:max-w-3xl xl:max-w-5xl">

                    <!--Graph Card-->

                    <div class="border-b p-3">
                        <h5 class="font-bold text-black">Graph</h5>
                    </div>
                    <div class="p-5">
                        <div class="ct-chart ct-golden-section" id="chart2"></div>
                    </div>

                    <!--/Graph Card-->

                    <!--Graph Card-->
                    <div class="border-b p-3">
                        <h5 class="font-bold text-black">Graph</h5>
                    </div>
                    <div class="p-5">
                        <div class="ct-chart ct-golden-section" id="chart3"></div>
                    </div>

                    <!--/Graph Card-->

                    <!--Graph Card-->

                    <div class="border-b p-3">
                        <h5 class="font-bold text-black">Graph</h5>
                    </div>
                    <div class="p-5">
                        <div class="ct-chart ct-golden-section" id="chart4"></div>
                    </div>

                    <!--/Graph Card-->

                    <!--Template Card-->
                    <div class="p-3">
                        <div class="border-b p-3">
                            <h5 class="font-bold text-black">Template</h5>
                        </div>
                        <div class="p-5">

                        </div>
                    </div>
                    <!--/Template Card-->

                </div>

            </div>

        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <script>
        /* Refer to https://gionkunz.github.io/chartist-js/examples.html for setting up the graphs */

        var mainChart = new Chartist.Line('#chart1', {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
            series: [
                [1, 5, 2, 5, 4, 3],
                [2, 3, 4, 8, 1, 2],
                [5, 4, 3, 2, 1, 0.5]
            ]
        }, {
            low: 0,
            showArea: true,
            showPoint: false,
            fullWidth: true
        });

        mainChart.on('draw', function(data) {
            if (data.type === 'line' || data.type === 'area') {
                data.element.animate({
                    d: {
                        begin: 1000 * data.index,
                        dur: 1000,
                        from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                        to: data.path.clone().stringify(),
                        easing: Chartist.Svg.Easing.easeOutQuint
                    }
                });
            }
        });

        var chartScatter = new Chartist.Line('#chart2', {
            labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
            series: [
                [12, 9, 7, 8, 5, 4, 6, 2, 3, 3, 4, 6],
                [4, 5, 3, 7, 3, 5, 5, 3, 4, 4, 5, 5],
                [5, 3, 4, 5, 6, 3, 3, 4, 5, 6, 3, 4],
                [3, 4, 5, 6, 7, 6, 4, 5, 6, 7, 6, 3]
            ]
        }, {
            low: 0
        });

        chartScatter.on('draw', function(data) {
            if (data.type === 'line' || data.type === 'area') {
                data.element.animate({
                    d: {
                        begin: 500 * data.index,
                        dur: 1000,
                        from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                        to: data.path.clone().stringify(),
                        easing: Chartist.Svg.Easing.easeOutQuint
                    }
                });
            }
        });

        var chartBar = new Chartist.Bar('#chart3', {
            labels: ['Q1', 'Q2', 'Q3', 'Q4'],
            series: [
                [800000, 1200000, 1400000, 1300000],
                [200000, 400000, 500000, 300000],
                [100000, 200000, 400000, 600000]
            ]
        }, {
            stackBars: true,
            axisY: {
                labelInterpolationFnc: function(value) {
                    return (value / 1000) + 'k';
                }
            }
        })

        chartBar.on('draw', function(data) {
            if (data.type === 'bar') {
                data.element.attr({
                    style: 'stroke-width: 30px'
                }),
                    data.element.animate({
                        y2: {
                            dur: '0.5s',
                            from: data.y1,
                            to: data.y2
                        }
                    });
            }
        });

        var chartPie = new Chartist.Pie('#chart4', {
            series: [10, 20, 50, 20, 5, 50, 15],
            labels: [1, 2, 3, 4, 5, 6, 7]
        }, {
            donut: true,
            showLabel: true
        });

        chartPie.on('draw', function(data) {
            if (data.type === 'slice') {
                var pathLength = data.element._node.getTotalLength();
                data.element.attr({
                    'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
                });

                var animationDefinition = {
                    'stroke-dashoffset': {
                        id: 'anim' + data.index,
                        dur: 200,
                        from: -pathLength + 'px',
                        to: '0px',
                        easing: Chartist.Svg.Easing.easeOutQuint,
                        fill: 'freeze'
                    }
                };

                if (data.index !== 0) {
                    animationDefinition['stroke-dashoffset'].begin = 'anim' + (data.index - 1) + '.end';
                }

                data.element.attr({
                    'stroke-dashoffset': -pathLength + 'px'
                });

                data.element.animate(animationDefinition, false);
            }
        });
    </script>

    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var userMenuDiv = document.getElementById("userMenu");
        var userMenu = document.getElementById("userButton");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //User Menu
            if (!checkParent(target, userMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, userMenu)) {
                    // click on the link
                    if (userMenuDiv.classList.contains("invisible")) {
                        userMenuDiv.classList.remove("invisible");
                    } else {
                        userMenuDiv.classList.add("invisible");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    userMenuDiv.classList.add("invisible");
                }
            }

        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }
    </script>
</x-app-layout>
