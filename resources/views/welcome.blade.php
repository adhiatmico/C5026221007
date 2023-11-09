<html>

<head>
    <title>My Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="{{asset('ETS/dup2.css')}}">

  <script>
    function validateForm() {
     var x =document.getElementById("fname");
     var notelp =document.getElementById("telp");
     var NRP =document.getElementById("NRP");
     var email =document.getElementById("email");
     var message =document.getElementById("message");
    //nama
     if (x.value == "") {
        alert("Nama harus diisi..");
        x.focus;
        return false;
      }

     if (isNaN(x.value) == false ){
        alert("Nama harus alfabet..");
        x.focus;
        x.value = "" ;
        return false; }


    //no telepon
      if (notelp.value == "") {
        alert("Nomor Telepon harus diisi..");
        notelp.focus;
        return false;
      }
      if (isNaN(notelp.value) == true ){
        alert("Nomor telepon harus angka..");
        notelp.focus;
        notelp.value = "" ;
        return false; }

      if (notelp.value.substring(0,2) != 62 ){
        alert("No.telepon harus dimulai dengan angka 62");
        notelp.focus;
        notelp.value = "" ;
        return false; }

      if (notelp.value.length < 7 ){
        alert("Jumlah digit No.Telepon harus lebih dari 6, Anda memasukkan " + notelp.value.length + " digit!");
        notelp.focus;
        notelp.value = "" ;
        return false; }
    //nrp
    if (NRP.value == "") {
        alert("NRP harus diisi..");
        NRP.focus;
        return false;
      }
      if (isNaN(NRP.value) == true ){
        alert("NRP harus angka..");
        NRP.focus;
        NRP.value = "" ;
        return false; }

      if (NRP.value.length != 10 ){
        alert("Jumlah digit NRP harus 10, Anda memasukkan " + NRP.value.length + " digit!");
        NRP.focus;
        NRP.value = "" ;
        return false; }

    //email
    if (email.value == "") {
        alert("E-mail address harus diisi..");
        email.focus;
        return false;
      }

    if (email.value.substring(0,1) != "@" ){
        alert("Alamat e-mail awali dengan tanda @");
        email.focus;
        email.value = "" ;
        return false; }

    //message
    if (message.value.length > 30 ){
        alert("Anda hanya mampu mengirim pesan sebanyak 30 karakter, Anda memasukkan " + message.value.length + " karakter!");
        message.focus;
        message.value = "" ;
        return false; }
    }
    </script>



    </head>
        <body>
            <ul style="margin-bottom:25; margin-right: 0;">
                <li><a href="#food">Food</a></li>
                <li><a href="#hobby">Hobby</a></li>
                <li><a href="#trip">Trip</a></li>
                <li><a href="#animal">Animal</a></li>
                <li><a href="#contact">Form</a></li>
              </ul>


        <div class="container-fluid">
                <div class="col-12">
                        <div class="row">
                            <div class="col-4">
                                <h2 class="text1">All About</h2></div>
                                <div class=" col-3">
                                    <div class="btn-group">
                                        <a href="https://www.linkedin.com/in/arumiadhiatmico" target="_blank">
                                        <button type="button" class="btn btn-warning">
                                            <div class="textMico" >Mico</div></button></a>
                                    </div>
                                    </div></div></div>


                                        <div class="row">
                                            <div class="col-3">
                                                <div class="text2">
                                                    <a href="#food" target="_blank">
                                                    <button type="button" class="btn btn-danger">
                                                        <div class="textMico" >Food</div></button></a>
                                                </div></div>
                                            <div class="col-3">
                                                <img class="animal" src="{{asset('ETS/bibimbap.png')}}">
                                                    </div></div>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="text2">
                                                    <a href="#hobby" target="_blank">
                                                    <button type="button" class="btn btn-primary">
                                                        <div class="textMico" >Hobby</div></button></a>
                                                </div></div>
                                            <div class="col-3">
                                                <img class="animal" src="{{asset('ETS/lifestyle.png')}}">
                                                    </div></div>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="text2">
                                                    <a href="#trip" target="_blank">
                                                    <button type="button" class="btn btn-info">
                                                        <div class="textMico" >Trip</div></button></a>
                                                        </div> </div>
                                            <div class="col-3">
                                                <img class="animal" src="{{asset('ETS/travel.png')}}">
                                                    </div></div>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="text2">
                                                    <a href="#animal" target="_blank">
                                                    <button type="button" class="btn btn-success">
                                                        <div class="textMico" >Animal</div></button></a>
                                                        </div> </div>
                                            <div class="col-3">
                                                <img class="animal" src="{{asset('ETS/koala.png')}}">
                                                    </div></div>
                                </div></div>

                    <div id="food" class="container1">
                        <div class="bflex">
                        <div class="col-6">
                            <p class="bText">I have a deep appreciation for classic comfort food, and there's something about a delicious burger and a side of crispy fries that truly hits the spot for me. The juicy, perfectly seasoned patty nestled between soft, toasted buns and topped with fresh lettuce, tomatoes, and savory condiments is a culinary delight. When paired with a generous helping of golden, salted fries, it's a match made in food heaven. The combination of textures and flavors, from the satisfying crunch of the fries to the savory goodness of the burger, never fails to satisfy my taste buds and leave me with a contented smile.</p>

                            <div class="flip-box">
                                <div class="flip-box-inner">
                                  <div class="flip-box-front">
                                  </div>
                                  <div class="flip-box-back">
                                  </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>


                    <div id="hobby" class="container2">
                        <div class="col-6">
                        <p class="cText">Night driving is not just a hobby for me; it's a therapeutic escape that I eagerly look forward to. As the world around me settles into a serene darkness, the open road beckons with its own kind of allure. The quiet streets, illuminated by the soft glow of streetlights and the occasional car passing by, create a serene atmosphere that's perfect for introspection and relaxation. There's a unique sense of freedom in navigating through the city or countryside at night, where the usual chaos gives way to a tranquil, almost surreal ambiance. It's during these nocturnal journeys that I find solace, allowing me to clear my mind and revel in the simple pleasure of the road ahead, bathed in the gentle embrace of the moonlight.</p>
                        <div> <img src="{{asset('ETS/moon.png')}}" class="bulan"></div>
                 </div>
            </div>


                <div id="trip" class="container3">
                    <div class="bflex">
                        <div class="col-6">
                    <p class="bText">When it comes to choosing a destination for a vacation, Malang unquestionably stands as my absolute favorite. Nestled in the heart of East Java, Indonesia, this enchanting city offers a blend of natural beauty, culture, and adventure that's second to none. From the breathtaking landscapes of Mount Bromo and its otherworldly sunrise vistas to the lush greenery of apple orchards and picturesque waterfalls, Malang is a paradise for nature lovers. Its rich Javanese heritage and friendly locals add an extra layer of warmth to the experience. Whether I'm exploring the vibrant markets, savoring local delicacies, or simply strolling through its charming streets, Malang never fails to captivate my heart and soul, making every visit an unforgettable and cherished memory.</p>
                        <div> <img src="{{asset('ETS/car.png')}}" class="mobil"></div>
                        <div> <img src="{{asset('ETS/travel.png')}}" class="mobil1"></div>


                </div>
                    </div>
                </div>

                <div id="animal" class="container4">
                    <div class="col-6">
                        <p class="cText">My love for animals is an unwavering and profound connection that has shaped my life in countless ways. From the majestic creatures that roam the wild to the loyal pets that share our homes, each one holds a unique place in my heart. The beauty of the animal kingdom, with its diversity and intricate web of life, never fails to fill me with awe and wonder. I'm inspired by their resilience, their capacity for love, and the way they enrich our lives with their presence. Whether it's observing a graceful dolphin leaping in the ocean or simply cuddling with a furry friend, my love for animals is a reminder of the precious bond we share with the creatures who share our planet, and the responsibility we have to protect and cherish them.</p>
                        <br> <br>
                        <img src="{{asset('ETS/fren.jpg')}}" class="zoom">
                        <img src="{{asset('ETS/husky.jpg')}}" class="zoom">
                    </div>
                </div>

                <div id="contact" class="container5">
                    <br>
                    <h1 style="text-align: center;">Let's be friend!</h1>
                    <form name="myForm" action="ganjil.html" onsubmit="return validateForm()" method="post">
                        <div class="container mt-3">

                              <div class="mb-3">
                                <label for="fname" class="form-label">Name:</label>
                                <input type="text" class="form-control" id="fname" placeholder="Enter name" name="fname" required>
                                <div class="invalid-feedback">Please fill out this field.</div>
                              </div>


                              <div class="mb-3">
                                <label for="nomortelfon" class="form-label">No. Telepon:</label>
                                <input type="text" class="form-control" id="telp" placeholder="Enter No. Telp" name="nomortelfon" required>
                                <div class="invalid-feedback">Please fill out this field.</div>
                              </div>

                              <div class="mb-3">
                                <label for="NRP" class="form-label">NRP:</label>
                                <input type="text" class="form-control" id="NRP" placeholder="Enter NRP" name="NRP" required>
                                <div class="invalid-feedback">Please fill out this field.</div>
                              </div>

                              <div class="mb-3">
                                <label for="email" class="form-label">E-mail:</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter E-mail address" name="email" required>
                                <div class="invalid-feedback">Please fill out this field.</div>
                              </div>

                              <div class="mb-3">
                                <label for="message" class="form-label">Message:</label>
                                <input type="text" class="form-control" id="message" placeholder="Enter Message" name="message" required>
                                <div class="invalid-feedback">Please fill out this field.</div>
                              </div>


                              <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="myCheck"  name="remember" required>
                                <label class="form-check-label" for="myCheck">I'm sure to submit this form..</label>
                                <div class="invalid-feedback">Check this checkbox to continue.</div>
                              </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>

                            <br>

                           <a href='/js1'>JS1 -</a>;
                           <a href='/js2'>JS2</a>;
                           <a href='/link'>link</a>;
                           <a href='/style'>style</a>;  -
                           <a href='/responsive'>responsive</a>;  -
                           <a href='/ganjil'>ganjil</a>; -
                           <a href='/miniso'>Miniso</a>;  -
                           <a href='/abbreviations'>Abbreviations</a>;  -
                           <a href='/blockquotes'>BlockQuotes</a>;  -
                           <a href='/DList'>Description List</a>;  -
                           <a href='/Kinputs'>Keyboard inputs</a>; -



</body>
</html>
