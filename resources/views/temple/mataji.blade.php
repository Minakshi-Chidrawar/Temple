@extends('master.layout')

@section('content')
<h1>Aarati</h1>
<div class="bs-callout">
    <div class="row">
        <div class="col-md-3">
            @include('partials.verticalNav')
        </div>
        <div class="col-md-8">
            <div class="center-heading text-center wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                <!-- Heading -->
                <h2 style="padding-bottom:10px;">Mataji aarati</h2>
                <audio controls>
                    <source src="{{ asset('aarti/Mataji_Aarti.mp3') }}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
                <p class="para">
                    <br>|| Maa Adhyashakti Ambe Maa Aarti ||<br>Jay Adhyashakti Maa, Maa Jay Adhyashakti<br>Akhand Brahmand Dipavya, Padve Pragtya Maa<br>Jai O Jai O Maa Jagdambe<br><br>Dvitiya Beu Swarup, Shivshakti Janu; Maa...(2)<br>Brahma Ganpati Gaye, Har Gaye Har Maa<br>Jai O Jai O Maa Jagdambe<br><br>Trutiya Tran Swarup, Tribhuvanma Betha; Maa...(2)<br>Drya Thaki Tarveni, Tame Tarveni Maa<br>Jai O Jai O Maa Jagdambe<br><br>Chothe Chathura Mahalaxmi, Maa Sachrachar Vyapya; Maa... (2)<br>Char Bhuja Choudisha, Pragtya Daxinmaa<br>Jai O Jai O Maa Jagdambe<br><br>Panchami Panchrishi, Panchami Gun Padmaa; Maa...(2)<br>Panch Sahchatra Tya Shohiye, Panche Tatvo Maa<br>Jai O Jai O Maa Jagdambe<br><br>Shashthi Tu Narayani, Mahishasur Maryo; Maa...(2)<br>Narnarina Rupe, Vyapya Saghne Maa<br>Jai O Jai O Maa Jagdambe<br><br>Saptami Sapta Patal, Sandhya Savitri; Maa...(2)<br>Gou Ganga Gaytri, Gouri Geeta Maa<br>Jai O Jai O Maa Jagdambe<br><br>Ashtami Ashta Bhuja, Ayee Aananda; Maa...(2)<br>Sunivar Munivar Janmya, Devo Daityo Maa<br>Jai O Jai O Maa Jagdambe<br><br>Navmi Navkul Nag, Seve Navdurga; Maa...(2)<br>Nav Ratrina Pujan Shiv Ratrina Archan Kidha Har Brahma<br>Jai O Jai O Maa Jagdambe<br><br>Dashmi Das Avtar, Jai Vijya Dashmi; Maa...(2)<br>Rame Ram Ramadya, Ravan Rodyo Maa<br>Jai O Jai O Maa Jagdambe<br><br>Aekadashi Agiyarash, Katya Yanikama; Maa...(2)<br>Kam Durga Kalika, Shyama Ne Rama<br>Jai O Jai O Maa Jagdambe<br><br>Bar Se Bada rup Bahuchari Amba Maa; Maa...(2)<br>Batuk Bhairav Sohiye Kaal Bhairav Sohiye Tara Che Tuj Maa<br>Jai O Jai O Maa Jagdambe<br><br>Ter Se Tudja Rup Tame Taaruni Mata; Maa...(2)<br>Brahma Vishnu Sadashiv, Gun Tara Gata<br>Jai O Jai O Maa Jagdambe<br><br>Chou Dase Chouda Rup Chandi Chamunda; Maa...(2)<br>Bhav Bhakti Kayee Aapo, Chturai Kayee Aapo Sinh Vahni Mata<br>Jai O Jai O Maa Jagdambe<br><br>Poonme Kumbh Bharyo Sambhan Jo Karuna; Maa..(2)<br>Vasistha Deve Vakhanya, Markand Deve Vakhanya, Gayee Subh Kavita<br>Jai O Jai O Maa Jagdambe<br><br>Sanvat Sol Sattavan, Sol Se Bavish Maa; Maa..(2)<br>Sanvat Sole Pragtya, Reva Ne Tire, Har Ganga Ne Tire<br>Jai O Jai O Maa Jagdambe<br><br>Trambavati Nagari Maa, Rupavati Nagari, Maa Mansavati Nagari<br>Sol Sahstra Tya Sohiye Ksama Karo Gouri, Maa Daya Karo Gouri<br>Jai O Jai O Maa Jagdambe<br><br>Shiv Shakti Ni Aarti Je Koi Gashe, Maa Je Bhave Gashe<br>Bhane Sivanand Swami Sukh Sampati Thase<br>Har Kailashe Jase, Maa Amba Dukh Harse<br>Jai O Jai O Maa Jagdambe<br><br>Ak Me Ak Swarup, Anter Nav Dharso; Maa...(2)<br>Bhola Bhavani Ne Bhajta, Bhola Ambe Maa Ne Bhajta, Bhav Sagar Tarso<br>Jai O Jai O Maa Jagdambe<br><br>Bhav Na Janu Bhakti Na Janu, Na Janu Seva; Maa...(2)<br>Vallabh Bhatt Ne Esthapya Charne Subh Leva<br>Jai O Jai O Maa Jagdambe<br><br>Mano Mandap Lal Gulal Shobha Bahu Sari, Maa Sobha Bahu Sari<br>Abil Ude Anand, Gulal Ude Anand Jay Bahuchar Vali<br>Jai O Jai O Maa Jagdambe<br><br>Jay Adhyashakti Maa Jay Adhyashakti <br>Akhand Brahmand Dipavya Padve Pragtya Maa<br>Jai O Jai O Maa Jagdambe, Jai O Jai O Maa Jagdambe<br><br><br>Om Karpur GouramKarunavtaram Sansar Saram Bhujgendra Haram |<br>Sada Vasantam Rudyaar Vinde Bhavam Bhavani Sahitam Namami ||<br>Manglam Bhagvan Vishnu: Manglam Garud Dhwajam: |<br>Manglam Pundrixame, Manglay Tano Hari: ||<br>Sarv Mangal Manglye, Shive Sarvang Sadhike |<br>Sharnye Taryambke Gouri, Narayani Namostute ||<br><br>||Bolo Shree Ambe Maat Ki Jai||<br> 
                </p>
            </div>
        </div>
    </div>
</div>
@endsection