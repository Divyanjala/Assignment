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
                        <i class="fas fa-plus-circle"></i> Check Plant diseases
                    </a>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1>Most Common Aquarium Plant Problems</h1>
            <p style="color: black">There are a range of potential plant problems. Some of which are easy to treat, whereas
                others may be costly and difficult to treat.</p>

            <p style="color: black">
                To make it easier for you, we have made a list of common plant symptoms and along with a diagnosis.
                Like any other living organisms, aquarium plants become susceptible to disease. In aquarium condition,
                diseases may occur due to many reasons such as inappropriate maintenance of aquarium, improper supply of
                nutrient substrates; lack of lighting, composition of water, its temperature etc lead to diseases of plants.
                To make your aquarium plants disease free, it is necessary to use balanced fertilizers. In aquarium
                condition, nutrient substances influence the growth of plants. In this case, pH plays great role than
                fertilizers to keep your plants healthy. Besides these, the chemical composition of water, temperature,
                lighting, quality and quantity of substrates, fertilizers, the presence of parasites of animal origin etc
                factors adversely affect on your aquarium plants.
            </p>
            <div class="d-block mb-2">
                <a type="button" class="btn btn-success mt-2" href="#Infections">Infections</a>
                <a type="button" class="btn btn-success mt-2" href="#Growth">Growth and Development</a>
                <a type="button" class="btn btn-success mt-2" href="#Discoloration">Discoloration</a>
                <a type="button" class="btn btn-success mt-2" href="#Conditions">Tank & Water Conditions</a>
                <a type="button" class="btn btn-success mt-2" href="#Roots">Roots and Stems</a>

            </div>
        </div>

        <div class="card col-md-9 " id="Infections">
            <h2>Infections</h2>

            <div class="image">
                <img src="{{ asset('img/Overgrown-algae-aquarium_Madhourse_shutterstock.webp') }}" alt=""
                    width="300" height="200">
            </div>


            <h4 class="mt-4"><b>Symptoms of Infections</b></h4>

            <h5 style="color: black" class="mt-4">
                White, fluffy growths on the plant. The small fur-like growths can be long or short. The growths may take on
                a white and grey appearance due to trapped dirt. Stringlike webbing may be visible around the plant.
            </h5>

            <h4 class="mt-4"><b>Diagnosis</b></h4>

            <h5 style="color: black" class="mt-4">
                This is a fungal or bacterial infection. The plant should be moved to a quarantine tank and treated. Fungal
                and bacterial infections spread rapidly from plant to plant. These infections present themselves in an
                aquarium from newly added infected fish or plants. Sometimes unclean water conditions are a factor.
            </h5>
        </div>

        <div class="card col-md-9 mt-4" id="Growth">
            <h2>Growth and Development</h2>

            <div class="image">
                <img src="{{ asset('img/Overgrown-algae-aquarium_Madhourse_shutterstock.webp') }}" alt=""
                    width="300" height="200">
            </div>


            <h4 class="mt-4"><b>Symptoms</b></h4>

            <h5 style="color: black" class="mt-4">
                The plant is not growing. Slow to no growth has presented itself since buying the aquatic plant. A few
                leaves may look discoloured or wilted.
            </h5>

            <h4 class="mt-4"><b>Diagnosis:</b></h4>

            <h5 style="color: black" class="mt-4">
                It can be from a deficiency in either CO2, poor lighting, or a lack of nutrients in the water. Researching
                and supplying the plants with their ideal growth requirements will grow your plant out. However, some plants
                naturally grow at a slow rate and are not a cause of concern.
            </h5>

            <h4 class="mt-4"><b>Symptoms</b></h4>

            <h5 style="color: black" class="mt-4">
                The plant has brittle leaves that look wilted and dried out despite the plants being surrounded by water.
            </h5>

            <h4 class="mt-4"><b>Diagnosis:</b></h4>

            <h5 style="color: black" class="mt-4">
                The plant is lacking iron. Iron supplements should be given as fertilizer.
            </h5>

        </div>


        <div class="card col-md-9 " id="Discoloration">
            <h2>Discoloration</h2>

            <div class="image">
                <img src="{{ asset('img/pond.webp') }}" alt="" width="300" height="200">
            </div>


            <h4 class="mt-4"><b>Symptoms:</b></h4>

            <h5 style="color: black" class="mt-4">
                The plant may begin developing brown or black leaves rapidly. The leaves will look wilted, and some will
                look droopy. Healthy green plants that start developing discoloured leaves are an indication that something
                is not right.
            </h5>

            <h4 class="mt-4"><b>Diagnosis</b></h4>

            <h5 style="color: black" class="mt-4">
                High phosphate levels in an aquarium lead to dark and dying leaves.
            </h5>

            <h4 class="mt-4"><b>Symptoms:</b></h4>

            <h5 style="color: black" class="mt-4">
                Flourishing green leaves start to turn yellow. The yellow may be in patches or the full leaf. Some browning
                may be seen around the yellow.
            </h5>

            <h4 class="mt-4"><b>Diagnosis</b></h4>
            <h5 style="color: black" class="mt-4">
                The plant is receiving inadequate light levels. Yellow leaves are an indication of low lighting
            </h5>

            <h4 class="mt-4"><b>Symptoms:</b></h4>
            <h5 style="color: black" class="mt-4">
                The plant has multiple leaves turning an unusual grey color. This discoloration can be shown with spotting,
                patches, or the entire leaf. The entire leaf may start to melt away.
            </h5>

            <h4 class="mt-4"><b>Diagnosis</b></h4>
            <h5 style="color: black" class="mt-4">
                The plant is receiving low amounts of CO2. Slowly increase the levels of co2 to help conquer this problem.
            </h5>
        </div>


        <div class="card col-md-9 " id="Conditions">
            <h2>Tank & Water Conditions</h2>

            <div class="image">
                <img src="{{ asset('img/rectangular-glass-aquarium_Oleksandr-Khalimonov_shutterstock.webp') }}"
                    alt="" width="300" height="200">
            </div>


            <h4 class="mt-4"><b>Symptoms:</b></h4>

            <h5 style="color: black" class="mt-4">
                The plant has stopped growing before reaching its full potential and is starting to die off. The plant may
                come to a standstill in growth and slowly die off.
            </h5>

            <h4 class="mt-4"><b>Diagnosis</b></h4>

            <h5 style="color: black" class="mt-4">
                The temperature is the main problem when it comes to ceased growth. The plant cannot photosynthesise
                properly to provide itself with food to encourage growth.
            </h5>

            <h4 class="mt-4"><b>Symptoms:</b></h4>

            <h5 style="color: black" class="mt-4">
                Small pin holes develop in the leaves. The holes gradually get larger, and the plant will start to die off.
                Minor color change can occur around the holes.
            </h5>

            <h4 class="mt-4"><b>Diagnosis</b></h4>
            <h5 style="color: black" class="mt-4">
                High levels of nitrates cause a condition known as Cryptocoryne rot. It should be treated immediately. Doing
                a series of large water changes can lower your aquarium’s nitrates.
            </h5>
        </div>


        <div class="card col-md-9 " id="Roots">
            <h2>Roots and Stems</h2>

            <div class="image">
                <img src="{{ asset('img/Bacteria-underwater_nuzaa_shutterstock.webp') }}" alt="" width="300"
                    height="200">
            </div>


            <h4 class="mt-4"><b>Symptoms:</b></h4>

            <h5 style="color: black" class="mt-4">
                The plant’s growth has ceased. The roots are turning black and decaying. The roots will appear mushy and
                have the texture of jelly.
            </h5>

            <h4 class="mt-4"><b>Diagnosis</b></h4>

            <h5 style="color: black" class="mt-4">
                The soil is not ideal for the type of plant. It may be too compact or to lose. If the plant has been in the
                substrate for a long period, the substrate will not hold as much nutrients as it used to.
            </h5>

            <h4 class="mt-4"><b>Symptoms:</b></h4>

            <h5 style="color: black" class="mt-4">
                The stems of the plant are turning black. The stem will hang limp and not be able to support the additional
                stems and leaves.
            </h5>

            <h4 class="mt-4"><b>Diagnosis</b></h4>
            <h5 style="color: black" class="mt-4">
                The plant is not receiving enough nutrients. This can be due to poor fertilizations, aquarium plants
                competing for nutrients or the water not holding enough nutrients for the plant to sustain itself.
            </h5>
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
