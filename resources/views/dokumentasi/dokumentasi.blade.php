@extends('template')

@section('content')

<div class="container">
  <div class="row">
    <div class="container">

      @foreach($dokumentasi as $dokumentasi_list)
      <div class="container mySlides col-md-12 col-lg-12" >
        <div class="col-md-3 col-lg-3">
          <div class="info-box bg-orange" style="height:500px; font-family:Hind;">
            <div class="info-box-content" style="margin-left:20px; margin-right:20px;">
              <span><h5 style="margin-top:20px;"><b>{{ $dokumentasi_list->judul_foto }} </b></h5></span><br>
              <div class="container" style="height:300px; width:220px; font-family:Hind;">
                <p>{{ $dokumentasi_list->keterangan_foto }}</p><br>
                <p>{{ $dokumentasi_list->tanggal }}</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-9 col-lg-9">
          <img src="{{ $dokumentasi_list->foto }}" style="height:500px; width:850px;">
          <div class="row">
            <div class="container">
              <a class="w3-btn-floating w3-display-left w3-opacity-off" onclick="plusDivs(-1)" style="margin-left:20px; opacity: 0.2;">&#10094;</a>
              <a class="w3-btn-floating w3-display-right w3-opacity-off" onclick="plusDivs(1)" style="margin-right:20px; opacity: 0.2;">&#10095;</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach

      <script>
      var myIndex = 0;
      carousel();

      function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}
          x[myIndex-1].style.display = "block";
          setTimeout(carousel, 10000); // Change image every 10 seconds
      }

      var slideIndex = 1;
      showDivs(slideIndex);

      function plusDivs(n) {
        showDivs(slideIndex += n);
      }

      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
      }
      </script>


      </div>
      <div class="row " style="margin-top100px; font-family:Montserrat; font-size:20px;">
        <div class="container bg-blue">
          @foreach ($quotes as $quote_list)
          <marquee behavior="scroll" direction="left" style="text-transform:uppercase;">{{ $quote_list->quote }}</marquee>
          @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
