@extends('layouts.user')
@section('header')
    <div class="row  py-4">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <div class="col-lg-6 col-7">
                    <h6 class="h4 text-dark d-inline-block mb-0"></h6>

                </div>
                <div class="col-lg-4 text-right">

                    <a href="{{ route('user.growth.rate') }}" class=" btn btn-sm btn-primary float-right">
                        <i class="fas fa-plus-circle"></i> Measure Plant
                    </a>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>How to Measure Growth Rate of Plants</h1>
            <p style="color: black">Measuring plant growth is a very simple procedure that can be done quickly. Whether you
                want to know
                how quickly your house plants are growing or need to calculate growth rate of lab specimens, you can
                do so with minimal effort. You only need a few simple supplies and a bit of time to track the
                plant’s growth rate.</p>
        </div>

        <div class="card col-md-9 ">
            <h2>Measuring Plant Height</h2>

            <div class="image">
                <img src="{{ asset('img/aid1375842-v4-728px-Measure-Growth-Rate-of-Plants-Step-1-Version-2.jpg.jpeg') }}"
                    alt="">
            </div>
            <h5 style="color: black">
                <span><b>1. </b></span>
                <b>Set the ruler at the base of the plant.</b> Smaller plants can be measured with a ruler, while taller
                plants may
                require a measuring tape, yardstick, or meter stick. Make sure that the ruler begins at zero on the bottom
            </h5>
            <u>
                <li>If you are measuring a plant in a pot, the ruler should begin at ground level.</li>
            </u>
            <div class="image">
                <img src="{{ asset('img/aid1375842-v4-728px-Measure-Growth-Rate-of-Plants-Step-2-Version-2.jpg.jpeg') }}"
                    alt="">
            </div>
            <h5 style="color: black">
                <span><b>2. </b></span>
                <b>Record the height of the plant.</b> You will want to measure the plant from its base to its highest
                point. Write this down in a chart with both the date and the height recorded. Repeat every two to three
                days.
            </h5>
            <div class="image mt-2">
                <img src="{{ asset('img/aid1375842-v4-728px-Measure-Growth-Rate-of-Plan.jpeg') }}" alt="">
            </div>
            <h5 style="color: black">
                <span><b>3. </b></span>
                <b>Calculate the average using the growth rate formula.</b>
                You can see the average daily growth rate by taking the
                change in size and dividing it by the amount of time it has been growing.
            </h5>
            <u>
                <li>The equation for the growth rate formula is
                    <b>(S2-S1)/T</b> where S1=first measurement, S2=second measurement, and T equals the number of days between
                    each.</li>
                <li>
                    This is an extremely general figure. Plant growth rate is extremely fluid and can be subject to major
                    variations day by day. Currently, there is no way to accurately predict exact daily growth rate without
                    the use of sophisticated laboratory equipment.
                </li>
            </u>
        </div>

        <div class="card col-md-9 mt-4">
            <h2>Judging Leaf Size</h2>

            <div class="image">
                <img src="{{ asset('img/aid1375842-v4-728px-Measure-Growth-Rate-of-Plants-Step-4-Version-2.jpg.jpeg') }}"
                    alt="">
            </div>
            <h5 style="color: black" class="mt-4">
                <span><b>1. </b></span>
                <b>Create a chart.</b> Your chart should have rows for each date that you measure your leaves. The columns should
                be labeled “number of leaves,” “average length,” and “average width.” You should check your leaves every two
                to three days.
            </h5>

            <div class="image mt-4">
                <img src="{{ asset('img/aid1375842-v4-728px-Measure-Growth-Rate-of-Plants-Step-5-Version-2.jpg.jpeg') }}"
                    alt="">
            </div>
            <h5 style="color: black" class="mt-4">
                <span><b>2. </b></span>
                <b>Count the leaves on your plant.</b> Be extremely thoroughly, but make sure you do not count the same leaves
                twice. Include new leaf tips and sprouts in your count. Record the number of leaves down in your chart.
            </h5>
            <div class="image mt-4">
                <img src="{{ asset('img/aid1375842-v4-728px-Measure-Growth-Rate-of-Plants-Step-6-Version-2.jpg.jpeg') }}"
                    alt="">
            </div>
            <h5 style="color: black" class="mt-4">
                <span><b>3. </b></span>
                <b>Mark the length and width.</b> Choose a random sampling of four or five leaves. Hold the ruler from the bottom
                to the tip of the leaf. Add up the measurements, and divide by the number of measurements you took. (For
                example, if you measured by five leaves, divide by five). This is the average leaf length for that day.
                Record this down in your chart.
            </h5>
            <u>
                <li>Repeat this process to find the width of the leaves. Measure the leaves at their widest part.</li>
                <li>Be as specific as possible; get the measurement down to centimeters and millimeters if you can.</li>
            </u>
            <div class="image mt-4">
                <img src="{{ asset('img/aid1375842-v4-728px-Measure-Growth-Rate-of-Plants-Step-7-Version-2.jpg (1).jpeg') }}"
                    alt="">
            </div>
            <h5 style="color: black" class="mt-4">
                <span><b>4. </b></span>
                <b>Trace your plant's leaves on grid paper.</b> Keeping the leaf on the plant, draw around the leaf on grid paper.
                The grid should have squares that are one inch in area. Count the number of squares covered to get the
                surface area of each leaf.
            </h5>
            <div class="image mt-4">
                <img src="{{ asset('img/aid1375842-v4-728px-Measure-Growth-Rate-of-Plants-Step-8-Version-2.jpg.jpeg') }}"
                    alt="">
            </div>
            <h5 style="color: black" class="mt-4">
                <span><b>5. </b></span>
                <b>Repeat measurements every two or three days.</b> Leaves can grow quickly. Check the size of your leaves every
                few days to see how they are growing. You can use a modification of the growth rate formula for this
                purpose.
            </h5>
            <u>
                <li>You can calculate the leaf number growth rate. This modification of the growth rate formula will tell
                    you how many leaves are approximately growing per day. The equation for this growth rate is
                    <b>(L1 -L2/T)</b> where L1=first leaf count, L2=second leaf count, and T equals the number of days between
                    each.</li>
                <li>
                    The leaf size formula is the same as the plant height formula. Instead of height, the variable is the
                    surface area. The equation for the growth rate formula is
                    <b>(S2-S1/T)</b> where S1=first surface area measurement, S2=second surface area measurement, and T equals the
                    number of days between each.
                </li>
            </u>
            <div class="image mt-4">
                <img src="{{ asset('img/aid1375842-v4-728px-Measure-Growth-Rate-of-Plants-Step-9-Version-2.jpg.jpeg') }}"
                    alt="">
            </div>
            <h5 style="color: black" class="mt-4">
                <span><b>6. </b></span>
               <b> Create a growth template.</b> Once you have gathered a few weeks’ worth of leaf tracings, you can use those
                shapes to create a template. Take a piece of paper or cardboard. Take the smallest tracing, and create a
                circle roughly that size, starting from the bottom of the paper. Create up to six larger circles that
                contain all of the measurements up to the largest. These should form concentric rings outside of the first
                circle. Label each of these circles with a number. One should be the smallest and six, the largest.
            </h5>
            <u>
                <li>In the future, you can use this template to measure leaves with greater ease. Hold up the leaf at the
                    bottom of the paper with it centered around the smallest circle. Mark the largest circle it fills
                    without going over and record that as the leaf size.</li>
            </u>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#employees').dataTable({
                "language": {
                    "emptyTable": "No data available in the table",
                    "paginate": {
                        "previous": '<i class="fas fa-chevron-left text-dark"></i>',
                        "next": '<i class="fas fa-chevron-right text-dark"></i>'
                    },
                    "sEmptyTable": "No data available in the table"
                }
            });
        });



    </script>
@endsection
@section('css')
    <style>
        h2,
        h3 {
            color: #12a880;
        }

        p {
            color: black;
        }

        .header {
            font-size: 18px;
            color: #07e7ac;
        }
    </style>
@endsection
