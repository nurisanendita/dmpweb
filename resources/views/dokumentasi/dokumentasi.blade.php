@extends('template')

@section('content')

<div class="container">
  <div class="row">
    <div class="container">

      @foreach($dokumentasi as $dokumentasi_list)
      <div class="container mySlides col-md-12 col-lg-12" >
        <div class="col-md-3 col-lg-3">
          <div class="info-box bg-orange" style="height:500px; font-family:Hind;">
            <div class="info-box-content" style="margin-left:30px; margin-right:30px;">
              <span><h5 style="margin-top:20px;"><b>{{ $dokumentasi_list->judul_foto }}</b></h5></span><br>
              <div class="container" style="height:400px; font-family:Hind; text-overflow: ellipsis; white-space:nowrap; overflow:hidden;">
                <p>{{ $dokumentasi_list->keterangan_foto }}</p>
              </div>
              <p>{{ $dokumentasi_list->tanggal }}</p>
            </div>
          </div>
        </div>

        <div class="col-md-9 col-lg-9">
          <img src="{{ $dokumentasi_list->foto }}" style="height:500px; width:850px;">
          <div class="row">
            <div class="container">
              <a class="w3-btn-floating w3-display-left w3-opacity-off" onclick="plusDivs(-1)" style="margin-left:20px; opacity: 0.5;">&#10094;</a>
              <a class="w3-btn-floating w3-display-right w3-opacity-off" onclick="plusDivs(1)" style="margin-right:20px; opacity: 0.5;">&#10095;</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach

  <div class="row" style="margin-top:30px; font-family:Montserrat; font-size:20px;">
    <div class="container">
      <marquee behavior="scroll" direction="left" style="text-transform:uppercase;">running text</img></marquee>
    </div>
  </div>

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
@endsection
