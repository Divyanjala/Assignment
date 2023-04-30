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
                        <i class="fas fa-plus-circle"></i> Check Fish diseases
                    </a>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1>Most Common Fish Diseases</h1>
            <p style="color: black">Is your fish showing signs that they are sick? Or does something just not seem right in
                your fish? Fish too can get sick. The most common reason that your fish could be sick is due to parasites.
                Your fish can have both internal and external parasites, causing them to have issues. They can also be
                afflicted with fungal, bacterial, or viral infections.</p>

            <br>
            <p style="color: black">
                If you have noticed that your fish is just not right, it may be time to look for a fish vet. Yes, there are
                vets that also see fish. While it can be harder to find a fish vet, they do exist. If you are having trouble
                finding one, ask your local aquarium store, as they should know who will treat fish, and may even be able to
                give you advice on what to do to help your fish return to normal.
            </p>
            <div class="d-block mb-2">
                <a type="button" class="btn btn-success mt-2" href="#anchor">Anchor Worms</a>
                <a type="button" class="btn btn-success mt-2" href="#Bacterial">Bacterial Infections</a>
                <a type="button" class="btn btn-success mt-2" href="#Constipation">Constipation</a>
                <a type="button" class="btn btn-success mt-2" href="#Poisoning">CO2 Poisoning</a>
                <a type="button" class="btn btn-success mt-2" href="#Flukes">Flukes</a>
                <a type="button" class="btn btn-success mt-2" href="#dropsy">Dropsy</a>
                <a type="button" class="btn btn-success mt-2" href="#Ich">Freshwater Ich</a>
                <a type="button" class="btn btn-success mt-2" href="#Velvet">Freshwater Velvet</a>
                <a type="button" class="btn btn-success mt-2" href="#Fungus">Fungus</a>
                <a type="button" class="btn btn-success mt-2" href="#Mites">Gill Mites</a>
                <a type="button" class="btn btn-success mt-2" href="#Head">Hole In The Head</a>
            </div>
        </div>

        <div class="card col-md-9 " id="anchor">
            <h2>Anchor Worms</h2>

            <div class="image">
                <img src="{{ asset('img/ProformLA2.webp') }}" alt="" width="300" height="200">
            </div>
            <h5 style="color: black" class="mt-4">
                Anchor worms are not actually a <b>type of worm</b> but a large parasitic crustacean
                from the Lernaea species that
                can live on your fish. Pond fish are most commonly infected with this species.
                They will attach to your
                fish’s skin and burry their head into your fish’s muscles.
            </h5>

            <h4 class="mt-4"><b>Symptoms of Anchor Worms</b></h4>

            <h5 style="color: black" class="mt-4">
                If your fish has Anchor worms, common signs that you would see are red and inflamed scales. If you look
                close enough, you may even be able to see the body of these parasites sticking out of your fish. Their
                bodies will look like whitish green thread stuck to your fish. You may also notice that your fish is rubbing
                its body up against things in its tank.
            </h5>

            <h4 class="mt-4"><b>Treatment of Anchor Worms</b></h4>

            <h5 style="color: black" class="mt-4">
                For larger fish, anchor worms can usually be easily removed by carefully pulling on the body of the
                parasite. After you have removed the parasites, you can apply topical antibiotic ointment to their scales.
                It would be best if you also cleaned the whole tank to get rid of any of the eggs, larvae, or parasites in
                the tank. For small fish in aquariums, using Hiraki USA Cyropro works without affecting your biological
                filtration.
            </h5>
        </div>
        <div class="card col-md-9 mt-4" id="Bacterial">
            <h2>Bacterial Infections</h2>

            <div class="image">
                <img src="{{ asset('img/ulcers.jpg') }}" alt="" width="300" height="200">
            </div>
            <h5 style="color: black" class="mt-4">
                Your fish can get a bacterial infection. These commonly happen after your fish has injured a part of its
                body. A common bacteria for your fish to encounter is Aeromonas salmonicida1.
            </h5>

            <h4 class="mt-4"><b>Causes of bacterial infections</b></h4>

            <h5 style="color: black" class="mt-4">
                Many times the cause of these bacterial infections is due to poor water quality and poor diet. This can
                cause stress in your fish leading to a lower immune system and allow any bacterial infection to set in.
            </h5>

            <h4 class="mt-4"><b>Signs of a bacterial infection</b></h4>

            <h5 style="color: black" class="mt-4">
                If your fish has a bacterial infection, these are some of the most common signs that you will see:
            </h5>
            <u>
                <li>Red spot on the body</li>
                <li>Ulcers on gills</li>
                <li>Enlarged eyes</li>
                <li>Swollen abdomen</li>
            </u>

            <h4 class="mt-4"><b>Treatment of bacterial infections</b></h4>
            <h5 style="color: black" class="mt-4">
                If your fish has a bacterial infection, your vet will prescribe antibiotics based on the bacteria that is
                present. There are some medications that you can buy online or at a local aquarium store to help treat
                bacterial infections.
            </h5>
            <h5 style="color: black" class="mt-4">
                A popular brand for many fish vets to recommend is API’s Furan-2 or Triple Sulfa. These are medications that
                you put into their water. Many fish will need to be transferred to a quarantine tank or hospitalized tank
                while they are being treated. Before going back to their main tank, the issue with the tank would need to be
                corrected, and the tank cleaned.
            </h5>
        </div>


        <div class="card col-md-9 mt-4" id="Constipation">
            <h2>Constipation</h2>

            <div class="image">
                <img src="{{ asset('img/1491713245_fishworm.jpg.11fd8e9731b5d13107343e03368e03fa.jpg') }}" alt=""
                    width="300" height="200">
            </div>
            <h5 style="color: black" class="mt-4">
                If your fish can not poop, they will quickly become constipated. This can cause your fish to become very
                ill.


            </h5>

            <h4 class="mt-4"><b>Causes of Constipation</b></h4>

            <h5 style="color: black" class="mt-4">
                There are two main causes of constipation in fish.
            </h5>
            <u>
                <li>Improper diet</li>
                <li>Parasite infections</li>
            </u>
            <h5 style="color: black" class="mt-4">
                Both of these can cause your fish to not be able to properly pass feces
            </h5>

            <h4 class="mt-4"><b>Symptoms of Constipation</b></h4>

            <h5 style="color: black" class="mt-4">
                If your fish is constipated you may notice a bloated abdomen. Constipation can cause them to develop swim
                bladder disease so you will see signs of buoyancy issues.
            </h5>

            <h4 class="mt-4"><b>Treatment of Constipation</b></h4>
            <h5 style="color: black" class="mt-4">
                One of the easiest ways to treat a constipated fish is to increase the amount of fiber in their diet and
                deworm your fish. Another way to treat constipation is to dose your tank with Epson salt. Adding 1 to 3
                teaspoons of salt per every 5 gallons of water will help. Epson salt will act as a muscle relaxant and help
                them be able to poop easier.
            </h5>

        </div>


        <div class="card col-md-9 mt-4" id="Poisoning">
            <h2>CO2 Poisoning</h2>

            <div class="image">
                <img src="{{ asset('img/download (3).jpeg') }}" alt="" width="300" height="200">
            </div>
            <h5 style="color: black" class="mt-4">
                CO2 levels over 30 ppm can be dangerous for your fish. This issue can arise with tanks that use CO2
                injection in planted tanks.


            </h5>

            <h4 class="mt-4"><b>Signs of CO2 Poisoning</b></h4>

            <h5 style="color: black" class="mt-4">
                If your fish’s tank has high levels of CO2 you will notice that your fish is breathing more rapidly and may
                be gasping for air. You also may notice that these fish are spending more time near the surface of the tank.
            </h5>

            <h4 class="mt-4"><b>Causes of CO2 Poisoning</b></h4>

            <h5 style="color: black" class="mt-4">
                CO2 poisoning in fish can be caused by your CO2 reactor not working, or your plants not absorb CO2 due to
                the lights not working properly.
            </h5>

            <h4 class="mt-4"><b>Treatment of CO2 Poisoning</b></h4>
            <h5 style="color: black" class="mt-4">
                The best way for you to treat CO2 poisoning in your fish is to use an air stone to agitate the surface. This
                causes the carbon dioxide to dissipate from the water. You can also adjust the rate of CO2 injection in your
                tank.
            </h5>

        </div>

        <div class="card col-md-9 mt-4" id="Flukes">
            <h2>Flukes</h2>

            <div class="image">
                <img src="{{ asset('img/Fluke.jpg') }}" alt="" width="300" height="200">
            </div>
            <h5 style="color: black" class="mt-4">
                Flukes are external parasites that your fish can get (Source- Cuttlebrook Koi Farm). Most flukes will affect
                fish gills. The two most common flukes that are seen in fish are Dactylogyrus and Gyrodactylus.ills

            </h5>

            <h4 class="mt-4"><b>Causes of Flukes</b></h4>

            <h5 style="color: black" class="mt-4">
                These flukes can commonly enter your aquarium from another fish that is infected with flukes.
            </h5>

            <h4 class="mt-4"><b>Symptoms of Flukes</b></h4>

            <h5 style="color: black" class="mt-4">
                Flukes will attach themselves to your fish’s gills and skin. This can damage these areas leading to a
                secondary bacterial infection.
            </h5>

            <h4 class="mt-4"><b>Treatment of Flukes</b></h4>
            <h5 style="color: black" class="mt-4">
                The most effective treatment for flukes is Praziquantel. After you have treated these flukes, you can treat
                any wounds that they left on your fish with antibiotics.
            </h5>
        </div>

        <div class="card col-md-9 mt-4" id="dropsy">
            <h2>Dropsy</h2>

            <div class="image">
                <img src="{{ asset('img/images (3).jpeg') }}" alt="" width="300" height="200">
            </div>
            <h5 style="color: black" class="mt-4">
                Dropsy is a term used to describe your fish who is swelling due to kidney disease.
            </h5>

            <h4 class="mt-4"><b>Symptoms of Dropsy</b></h4>

            <h5 style="color: black" class="mt-4">
                Usually, the signs of dropsy that are seen are a slightly swollen belly all the way to a very swollen
                abdomen so much that your fish’s scales will stick straight out, causing your fish to look like a pinecone.
            </h5>

            <h4 class="mt-4"><b>Cause of Dropsy</b></h4>

            <h5 style="color: black" class="mt-4">
                There are many things that can cause your fish to have kidney issues. These are some common reasons:
            </h5>
            <u>
                <li>Stress</li>
                <li>Polycystic Kidney Disease</li>
            </u>

            <h4 class="mt-4"><b>Treatment for Dropsy</b></h4>
            <h5 style="color: black" class="mt-4">
                If your fish has Dropsy, first start by putting it in a quarantine tank. This can help eliminate the stress
                that may be in the display tank if they improve while in the quarantine tank, there is a stressor in the
                main tank that needs to be addressed. This may be poor water quality, parasites, overcrowding, or something
                else. Try to figure out what is causing your fish to be stressed, and fix this issue.
            </h5>
            <h5 style="color: black" class="mt-4">
                Dropsy is a serious disease that lead to the death of your prized pet. It is best for you to see a vet. Some
                vets will see fish; however, it may be hard to find one near you. Reaching out to your local aquarium store,
                you may be able to get suggestions on who to see to help treat your fish.
            </h5>
            <h5 style="color: black" class="mt-4">
                I know both of these are not always available to some, so I’m going to defer to Lori’s Hartland’s experience
                on how she cured her Goldfish using a triple treatment of Kanaplex, Metroplex & Epsom Salt. Here is the full
                video below that walks you through her experience. It’s also very important to see her experience with her
                vet call at 19:06. She had to take a phone consultation, which is going to be what most will get when
                consulting a vet for smaller fish.
            </h5>
        </div>

        <div class="card col-md-9 mt-4" id="Ich">
            <h2>Freshwater Ich</h2>

            <div class="image">
                <img src="{{ asset('img/download (6).jpeg') }}" alt="" width="300" height="200">
            </div>
            <h5 style="color: black" class="mt-4">
                Ichthyobodo is a protozoan parasitic infection seen in fish who are stressed.

            </h5>

            <h4 class="mt-4"><b>Symptoms of Ich</b></h4>

            <h5 style="color: black" class="mt-4">
                Ich attacks your fish’s gills and skin. These parasites will cause your fish to have a grey color to their
                skin. You will notice that your fish will be lethargic, weak, and not want to eat. You may notice that they
                spend more time near the top of the tank, gulping air or rubbing their side on their tank.
            </h5>

            <h4 class="mt-4"><b>Cause of Ich</b></h4>

            <h5 style="color: black" class="mt-4">
                Stress is the main cause of Ich. This can be due to poor water conditions, overcrowding, or illness. When
                your fish is stressed, it leads to a lower immune system and allows this protozoal parasite to take over.
            </h5>

            <h4 class="mt-4"><b>Treatment for Ich</b></h4>
            <h5 style="color: black" class="mt-4">
                If your fish has Ich, it would be best to see a vet or an aquatic specialist. They will help guide you on
                how exactly to treat your fish. Common things used are medicated fish tanks with aquarium salt, potassium
                permanganate or copper sulfate. Seeking the help of an experienced fish hobbyist or a vet who will treat
                fish will help make sure that you are not going to harm your fish.
            </h5>
            <h5 style="color: black" class="mt-4">
                In Mark’s experience, his drug of choice has been Ich-X for freshwater fish. He often says the freshwater
                side of the hobby has it much easier with a wonder solution like Ich-X. Watch for secondary infections, as
                these will usually kill the fish.
            </h5>
        </div>

        <div class="card col-md-9 mt-4" id="Velvet">
            <h2>Freshwater Velvet (Gold Dust Disease)</h2>

            <div class="image">
                <img src="{{ asset('img/Freshwater-Velvet-1024x768.jpg') }}" alt="" width="300"
                    height="200">
            </div>
            <h5 style="color: black" class="mt-4">
                Velvet in fish can be very deadly for your whole tank. This disease can quickly wipe out everything in your
                tank.

            </h5>

            <h4 class="mt-4"><b>Symptoms of Velvet</b></h4>

            <h5 style="color: black" class="mt-4">
                Fish who have velvet will be scratching their body against any hard surface in the tank. This is to try to
                remove the parasites from their skin. They may also display some of the following signs:
            </h5>

            <u>
                <li>Lethargic</li>
                <li>Rapid Breathing</li>
                <li>Not eating and weight loss</li>
                <li>Holds fins next to body</li>
                <li>Labored or rapid breathing</li>
                <li>Yellow to rust color dust on the fish’s body</li>
                <li>Pealing of the skin in severe cases</li>
            </u>

            <h4 class="mt-4"><b>Cause of Velvet</b></h4>

            <h5 style="color: black" class="mt-4">
                Velvet is caused by the parasite Oödinium pillularis or Oödinium limneticum. These parasites may be present
                in many aquariums but only cause issues if your fish is stressed, sick, being transported, has a sudden,
                temperature change or has poor water quality.
            </h5>

            <h4 class="mt-4"><b>Treatment of Velvet</b></h4>
            <h5 style="color: black" class="mt-4">
                If your fish has velvet, you do a few things to help treat your fish.
            </h5>
            <u>
                <li>Increase the temperature of the water by just a few degrees</li>
                <li>Dim the aquarium lights for a few days</li>
                <li>The treatment of choice for velvet is copper sulfate for 10 days. A good brand to look for is Copper
                    Power or SeaChem Cupramine. DO NOT use copper sulfate in a displayer tank. A removal of the sick fish to
                    a quarantine tank is a must!</li>
            </u>
            <h5 style="color: black" class="mt-4">
                Velvet can many times be prevented by quarantining any new fish that you are planning on adding to your
                tank, providing your fish with a proper diet, and maintaining good water quality. If you came here to get
                info on the saltwater version, check out Mark’s article on Marine Velvet.
            </h5>
        </div>

        <div class="card col-md-9 mt-4" id="Fungus">
            <h2>Fungus</h2>

            <div class="image">
                <img src="{{ asset('img/cotton-wool-disease.jpg') }}" alt="" width="300" height="200">
            </div>
            <h5 style="color: black" class="mt-4">
                Fish can get fungal infections. Two common fungal infections seen in freshwater fish are:

            </h5>

            <u>
                <li>Saprolegnia2 and </li>
                <li>Ichthyophonus hoferi </li>
            </u>
            <h4 class="mt-4"><b>Symptoms of Fungal Infections</b></h4>

            <h5 style="color: black" class="mt-4">
                A Fungal infection can cause damage to internal organs. Common signs seen in fish with fungal infections are
                grey cotton-like growths seen on the skin, gills, fins, and around the eyes.
            </h5>

            <h4 class="mt-4"><b>Causes of Fungal Infections</b></h4>

            <h5 style="color: black" class="mt-4">
                Fungal infections are caused by unclean water conditions and dead and decaying organic material in your
                tank.
            </h5>

            <h4 class="mt-4"><b>Treatment of Fungal Infections</b></h4>
            <h5 style="color: black" class="mt-4">
                The first thing you need to do to treat fungal infections in your fish is to clean their tank fully. Then
                using potassium permanganate that you put into your fish’s water. You will want to make sure that you have
                removed any external pathogens from your fish’s skin. A popular brand of fungal treatment that you can use
                after fully cleaning your fish tank is API Fungus Cure.
            </h5>
            <h5 style="color: black" class="mt-4">
                You can also increase the water temperature to 82 degrees as most of these fungal infections thrive in
                colder temperatures.
            </h5>
        </div>

        <div class="card col-md-9 mt-4" id="Mites">
            <h2>Gill Mites</h2>

            <div class="image">
                <img src="{{ asset('img/Gill-Mites-768x595.png') }}" alt="" width="300" height="200">
            </div>
            <h5 style="color: black" class="mt-4">
                Gill mites3 are common parasites that are seen in fish. These parasites attach to your fish’s skin and feed
                on their blood.
            </h5>

            <h4 class="mt-4"><b>Symptoms of Gill Mites</b></h4>

            <h5 style="color: black" class="mt-4">
                If your fish has gill mites, you will notice that their gills do not fully close. These mites prevent the
                gills from being able to function properly. This will cause your fish to spend most of its time at the
                surface of the tank gasping for air.
            </h5>

            <h4 class="mt-4"><b>Causes of Gill Mites</b></h4>

            <h5 style="color: black" class="mt-4">
                These mites enter your tank from new fish who already have these mites. This is one reason why it is advised
                to always quarantine any new fish before adding them to your aquarium.
            </h5>

            <h4 class="mt-4"><b>Treatment of Gill Mites</b></h4>
            <h5 style="color: black" class="mt-4">
                To treat gill mites you will need to use sterazin and octozin. You will need to repeat this treatment about
                5 days later to kill any other mites that may have hatched.
            </h5>

        </div>

        <div class="card col-md-9 mt-4" id="Head">
            <h2> Hole In The Head</h2>

            <div class="image">
                <img src="{{ asset('img/images (1).jpeg') }}" alt="" width="300" height="200">
            </div>
            <h5 style="color: black" class="mt-4">
                Hole in the head disease is seen when there are small indentions in your fish’s head or along their lateral
                line.
            </h5>

            <h4 class="mt-4"><b>Symptoms of Hole in the Head</b></h4>

            <h5 style="color: black" class="mt-4">
                If your fish has hole in the head, you will start to see small indentions into their skin. These will start
                as slight depressions and can advance to more severe holes. Some fish with this disease will stop eating.
            </h5>

            <h4 class="mt-4"><b>Causes of Hole in the Head</b></h4>

            <h5 style="color: black" class="mt-4">
                Hole in the head is caused by a a protozoan called Hexamita. It is a common disease in Discus fish. Another
                factor is deficiency of minerals in water due to the use of RODI water or excessive usage of activated
                carbon.
            </h5>

            <h4 class="mt-4"><b>Treatment of Hole in the Head</b></h4>
            <h5 style="color: black" class="mt-4">
                The best way to treat this is in a quarantine tank and treating with Metronidazole or API General Cure.
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
