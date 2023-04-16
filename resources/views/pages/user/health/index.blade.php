@extends('layouts.user')
@section('header')
    <div class="row  py-4">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <div class="col-lg-6 col-7">
                    {{-- <h6 class="h4 text-dark d-inline-block mb-0">Health Management</h6> --}}

                </div>
                <div class="col-lg-4 text-right">

                    {{-- <a href="{{ route('user.product.new') }}" class=" btn btn-sm btn-primary float-right">
                        <i class="fas fa-plus-circle"></i> Add New
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="card border-0 shadow">
        <div class="ml-2">
            <h2>Plant Care</h2>
            <div class="plant_image">
                <img src="{{ asset('img/bannerhome.png') }}" alt="">
            </div>

            <p>
                As a guide, we suggest following these daily, weekly and monthly aquarium plant maintenance routines:
            </p>

            <p class="header"><b>Daily Maintenance</b></p>
            <hr>
            <p>
                1. Dose fertilizers & liquid carbon. Missing your daily dose of liquid carbon will mean your plants are not
                getting a consistent supply of carbon. Fluctuating levels can lead to algae problems.
                <br><br>
                2. Remove any dead or decaying leaves. Their breakdown will promote algae growth.
                <br><br>
                3. Check your water temperature. Any faults with your heater could mean your temperature drops which could
                harm fish & plants, especially in the winter.
                <br><br>
                4. Clean aquarium glass and top up water levels if required.
            </p>

            <p class="header"><b>Weekly Maintenance</b></p>
            <hr>
            <p>
                1. Conduct a water change of a minimum 30% each week. This prevents the build up of organic waste which
                algae thrive on. During the first 2-4 weeks you should be changing the water more often until your tank
                matures. 2-3 times per week will help reduce the risk of algae outbreaks during the most fragile stages in
                the life of your aquarium. Your tank will mature over time and only then should you reduce the frequency of
                water changes each week.
                <br><br>
                2. Check your aquarium equipment is working properly (heater, filter, light timer, CO2 equipment etc.). Any
                faults can disrupt the stability of your planted aquarium.
                <br><br>
                3. Clean glass, hardscape and plant leaves. If you are encountering a large build up of algae, seriously
                consider reducing your lighting, reviewing your CO2 levels and increasing the amount of water changes.
                Cleaning algae out of the tank is only a short term solution, stopping the cause of algae is a long term
                solution.
                <br><br>
                4. Trim your plants using your plant scissors. It is important to trim regularly to encourage desired growth
                and to ensure plants do not grow out of control. It is also your chance to be creative and nurture a planted
                aquarium to be proud of! Re-plant any cuttings by removing lower leaves, snipping the roots and replanting
                into your substrate.
            </p>
            <p class="header"><b>Monthly Maintenance</b></p>
            <hr>
            <p>
                1. Clean out your filters. Give your filter media a good clean, it is often best to do this in aquarium
                water you have taken out from a water change. Cleaning your filter will remove organic waste that has built
                up over time in your filter. Do not worry about killing the beneficial bacteria that's in your filter, there
                will still be plenty left to deal with your tanks natural eco-system.
                <br><br>
                2. Clean pipes, lily pipes and any other equipment inside/outside your tank. Presentation is everything!
            </p>
            <video controls autoplay height="600" width="900">
                <source src="{{ asset('video/Aquascaping Maintenance at Aquarium Gardens.mp4') }}" type="video/mp4">

              </video>
            <div>
                <p>Aquatic plants bring many benefits to your aquarium. As well as having a stunning visual impact, aquatic
                    plants aerate your water, remove impurities and create a healthy environment for your fish to thrive in.
                    You
                    will also notice that if you look after your plants properly then algae is rarely a problem.
                    <br><br>
                    By using the guides below, we can help you create a planted aquarium that you can enjoy...
                </p>
            </div>
            <h3><u>Plant Difficulty - Start by Choosing the Right Plants</u> </h3>
            <p>Choosing plants can often be tricky, especially if your just starting out. This is a simple plant difficulty
                system to help you choose the right plants for your planted aquarium.</p>
            <br>
            <h3><u>Aquarium Lighting</u> </h3>
            <p>Depending on what plants you want to grow and whether you're injecting CO2 will determine how much light you
                should have. Learning how much is key to your success...</p>
            <br>
            <h3><u>Aquarium Dosing & Nutrients</u> </h3>
            <p>Nutrients such as phosphorus, nitrogen , potassium among others are required for healthy aquatic plants.
                Adding them will not cause algae, adversely not adding them will not solve your algae problems either...

            </p>
            <br>
            <h3><u>Understanding CO2 & Set-up Guide</u> </h3>
            <p>Understand why Carbon Dioxide is a vital component in the health and growth of aquatic plants. This guide
                also explains exactly what is needed to set up your own CO2 system...
            </p>
            <br>
            <h3><u>Liquid Carbon</u> </h3>
            <p>CO2 injection is not required in all planted aquariums, but if your planning on growing lush & healthy plants
                we most definitely recommend it. Alternatively that try liquid carbon...
            </p>
            <br>
            <h3><u>Preparing Your Plants for Planting</u> </h3>
            <p>So you've received your plants in top condition from Aquarium Gardens, now what do you do? Here's our guide
                to preparing your plants for the aquarium.
            </p>
            <br>
            <h3><u> Planted Aquarium Maintenance</u> </h3>
            <p>Our guide to daily, weekly and monthly maintenance in the planted aquarium. Essential reading & essential
                planted aquarium maintenance....
            </p>
            <br>
            <h3><u> The Fight Against Algae</u> </h3>
            <p>We've all had algae right? Here's the main reasons we all have algae...and what we can do to prevent it.
            </p>
            <br>
            <h3><u>The CO2 Drop Checker</u> </h3>
            <p>The CO2 drop checker monitors your concentration of CO2 in your aquarium. Read this guide and follow the step
                by step installation guide for a CO2 drop checker...

            </p>
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
