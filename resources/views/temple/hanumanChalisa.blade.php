@extends('master.layout')

@section('content')
<div class="back-color">
    <div class="container pt-4 pb-4">
        <h1>Aarati</h1>
        <div class="bs-callout">
            <div class="row">
                <div class="col-md-3">
                    @include('partials.verticalNav')
                </div>
                <div class="col-md-8">
                    <div class="center-heading text-center wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                        <!-- Heading -->
                        <h2 style="padding-bottom:10px;">Hanuman Chalisa</h2>
                        <audio controls>
                            <source src="{{ asset('aarti/Hanuman_Chalisa.mp3') }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <p class="para">
                            <br>|| Doha ||<br><br>Shree Guru Charan Saroj Raj, Nij Man Mukar Sudhari,<br>Barnau Raghuvar Bimal Jasu, Jo dayaku Phal Chari<br><br>Budhi heen Tanu Janike, Sumirow, Pavan Kumar,<br>Bal Buddhi Vidya Dehu Mohi, Harahu Kalesh Bikaar<br><br>|| Chaupai ||<br><br>Jai Hanuman Gyan Guna Sagar, Jai Kipis Tihun Lok Ujgaar<br>Ramdoot Atulit Bal Dhamaa, Anjani Putra Pavansut naamaa.<br><br>Mahebeer Bikram Bajrangi, Kumati Nivaar Sumati Ke Sangi<br>Kanchan BaranBiraaj Subesaa, Kanan kundal kunchit kesa.<br><br>Hath Bajra Aur Dhvaja Birjai, Kandhe Moonj Janeu saage<br>Shankar Suvna Kesari Nandan, Tej Pratap Maha Jag Vandan.<br><br>Vidyavaan Guni Ati Chatur, Ram Kaj Karibe Ko Atur<br>Prabhu Charittra Sunibe Ko Rasiya, Ram Lakhan Sita man basyia.<br><br>Sukshma roop Dhari Siyahi Dikhwana, Bikat roop Dhari Lank Jarawa<br>Bhim roop Dhari Asur Sanhare, Ramchandra Ke kaaj Savare.<br><br>Laye Sajivan Lakhan Jiyaye, Shri Raghubir harashi ur laye<br>Raghupati Kinhi Bahut Badaai, Tum Mama Priya Bharat Sam Bahi.<br><br>Sahastra Badan Tumharo Jas Gaave, Asa kahi Shripati Kanth Laagave<br>Sankadik Brahmadi Muneesa, Narad Sarad Sahit Aheesa.<br><br>Jam Kuber Digpal Jahan Te, Kabi Kabid Kahin Sake Kahan Te<br>Tum Upkar Sugrivahi Keenha, Ram Miali Rajpad Deenha.<br><br>Tumharo Mantro Bibhishan Maana, Lankeshwar Bhaye Sab Jag Jaana<br>Juug Sahastra Jojan Par Bhaanu, Leelyo Taahi Madhur Phal Jaanu.<br><br>Prabhu Mudrika Meli Mukha Maaheen, Jaladhi Langhi Gaye Acharaj Naheen<br>Durgam Kaaj Jagat Ke Jeete, Sugam Anugrah Tumhre Te Te.<br><br>Ram Duware Tum Rakhavare, Hot Na Aagya Bin Paisare<br>Sab Sukh Lahen Tumhari Sarna, Tum Rakshak Kaahu Ko Darnaa.<br><br>Aapan Tej Samharo Aapei, Tanau Lok Hank Te Kanpei<br>Bhoot Pisaach Nikat Nahi Avei, Mahabir Jab Naam Sunavei.<br><br>Nasei Rog Hare Sab Peera, Japat Niranter Hanumant Beera<br>Sankat Te Hanuman Chhudavei, Man Kram Bachan Dhyan Jo Lavei.<br><br>Sub Par Ram Tapasvee Raaja, Tinke Kaaj Sakal Tum Saaja<br>Aur Manorath Jo Koi Lave, Soi Amit Jivan Phal Pave.<br><br>Charo Juung Partap Tumhara, Hai Parsiddha Jagat Ujiyara<br>Sadho Sant Ke Tum Rakhvare, Asur Nikandan Ram Dulare.<br><br>Ashta Siddhi Nau Nidhi Ke Data, Asa Bar Din Janki Mata.<br>Ram Rasayan Tumhare Pasa, Sadaa Raho Raghupati Ke Dasa.<br><br>Tumhare Bhajan Ramko Pavei. Janam Janam Ke Dukh Bisravei<br>Anta Kaal Raghubar Pur Jai, Jahan Janma Hari Bhakta Kahai.<br><br>Aur Devata Chitt Na Dharai, Hanumant Sei Sarva Sukh Karai<br>Sankat Kate Mitey Sab Peera, Jo Sumirei Hanumant Balbeera.<br><br>Jai Jai Jai Hanuman Gosai Kripa Karahu Gurudev Ki Naiee<br>Jo Sat Baar Paath Kar Koi, Chhutahi Bandi Maha Sukh Hoi.<br><br>Jo Yah Padhe Hanuman Chalisa, Hoy Siddhi Sakhi Gaurisa<br>Tulsidas Sada Hari Chera, Keeje Nath Hriday Mah Dera. <br><br>|| Doha ||<br><br>Pavan Tanay Sankat Haran, Mangal Murti Roop<br>Ram Lakhan Sita Sahit, Hriday Basahu Sur Bhoop.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection