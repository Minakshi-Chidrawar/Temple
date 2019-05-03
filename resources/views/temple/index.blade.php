@extends('master.layout')

@section('content')
  <div class="row">
    <div class="col-md-6 mt-1">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 carousel-img" src="{{ asset('images/Mataji.png') }}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 carousel-img" src="{{ asset('images/Mataji1.png') }}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 carousel-img" src="{{ asset('images/Mataji2.png') }}" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 carousel-img" src="{{ asset('images/Mataji3.png') }}" alt="Fourth slide">
          </div>    
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col-md-6 mt-1">
        <h2>About Mataji</h2>
        <p>
          In Hindu mythology, Shakti symbolizes the divine energy. It is believed that when the demons attacked the Gods and conquered heaven, the energies of the trinity of the Hindu Gods coalesced (joined together) to create the Goddess Durga. She went to battle armed with the weapons given to her by the other Gods. In the battle, she fought and killed the evil Mahishasura and restored heaven to the Gods. The Durga Puja is observed in her honour, to celebrate her victory over evil.
        </p>
        <p>
          This anger came out in the form of energy from Shiva’s third eye and concentrated to form a woman. All the Gods who were present there contributed their share of energy to this Goddess and thus Durga, the eternal mother, was born. Riding a lion, she attacked Mahishasura. After a fierce battle, Durga transformed into Devi Chandika, the most ferocious form of the Goddess, and beheaded Mahishasura.
        </p>
        <p>
          The day after Navratri, that is the 10th day after Ashwina, is Dussera when we celebrate the victory of Lord Rama over Ravana. Ravana is burnt in his effigy; often, giant dummies of Ravana stuffed with fireworks are shot with arrows until they blow up before a large, applauding audience.
        </p>
        <p>
          The most characteristic dances of Gujarat during Navratri are the Raas and Garba dances, which are performed by men, women and children of all levels of society.The origin of the Rasa is traced back to the legends connected with the life of Lord Krishna.
        </p>
    </div>
  </div>
  
  <hr class="clearfix w-100">
  @include('partials.subPages')
  <hr class="clearfix w-100">
@endsection