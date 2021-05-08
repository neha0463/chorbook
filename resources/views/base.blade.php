<html>
    <head>
        <title>Bookchor</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-light shadow-lg">
            <a href="" class="navbar-brand ms-5"><h3><i class="text-dark">Bookchor <i>B</i></i></h3></a>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill ms-5" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                <p class="mt-2 ms-2">+91-9050111218</p>
              </svg>
           <svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" fill="currentColor" class="bi bi-archive-fill ms-5" viewBox="0 0 16 16">
        <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
        <p class="mt-2">WholeSale</p>
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-map-fill ms-5" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.598-.49L10.5.99 5.598.01a.5.5 0 0 0-.196 0l-5 1A.5.5 0 0 0 0 1.5v14a.5.5 0 0 0 .598.49l4.902-.98 4.902.98a.502.502 0 0 0 .196 0l5-1A.5.5 0 0 0 16 14.5V.5zM5 14.09V1.11l.5-.1.5.1v12.98l-.402-.08a.498.498 0 0 0-.196 0L5 14.09zm5 .8V1.91l.402.08a.5.5 0 0 0 .196 0L11 1.91v12.98l-.5.1-.5-.1z"/>
            <p class="mt-3 ms-2">Sell Book</p>
          </svg>
          <form action="" method="get ">
            <input type="search" id="Book/Author/ISBN" class="form-inline rounded-pill bg-gray  mt-4 ms-5"
            placeholder="search facebook">
            <input type="submit" name="search" class="rounded-pill bg-danger">
            </form>
         <img src="{{asset('images/Screenshot (186).png')}}" class="ms-auto" alt="" width="3%" height="40px">  <p class="text-muted mt-4 ">Login</p>
            
  </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light shadow-lg navbar-hover ">
      <form action="" method="POST">
        <ul class="navbar-nav mx-auto mt-2">
          <li class="nav-item"><a href="" class="nav-link ms-5 text-dark text-bold"><P class="h6"><i>Categories</i></P></a></li>
          <li class="nav-item"><a href="{{route('newly')}}" class="nav-link ms-3 text-dark text-bold"><P class="h6"><i>Newly Address</i></P></a></li>
          <li class="nav-item"><a href="{{route('eatu')}}" class="nav-link ms-3 text-dark text-bold"><P class="h6"><i>eatured Books</i></P></a></li>
          <li class="nav-item"><a href="{{route('deal')}}" class="nav-link ms-3 text-dark text-bold"><P class="h6"><i>Deals Store</i></P></a></li>
          <li class="nav-item"><a href="{{route('popular')}}" class="nav-link ms-3 text-dark text-bold"><P class="h6"><i>Popular Bok Sets</i></P></a></li>
          <li class="nav-item"><a href="{{route('young')}}" class="nav-link ms-3 text-dark text-bold"><P class="h6"><i>Young Adult</i></P></a></li>
          <li class="nav-item"><a href="{{route('rate')}}" class="nav-link ms-3 text-dark text-bold"><P class="h6"><i>Rare & Collection</i></P></a></li>
          <li class="nav-item"><a href="{{route('lock')}}" class="nav-link ms-3 text-dark text-bold"><P class="h6"><i>Lock The Box</i></P></a></li>
          <li class="nav-item"><a href="{{route('stor')}}" class="nav-link ms-3 text-dark text-bold"><P class="h6"><i>99 Store</i></P></a></li>
        </ul>
        </form>
        <hr>
    </nav>
        
    <div class="container-fluid bg-light">
      <div class="row bg-white">
        <div class="col-lg-12 ">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('images/p1.png')}}" class="d-block w-100" alt="...">
               
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/p2.png')}}" class="d-block w-100" alt="...">
               
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/p3.jpg')}}" class="d-block w-100" height="250px" alt="...">
                
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-lg-12 ms-2 shadow-lg bg-white ms-4 mt-3 ml-4 ml-2">
          <p class="h5 ms-5">Book Sets</p>
          <br>
          <div class="row ms-5">
            <br>
            <div class="col-lg-2">
              <div class="card">
                <div class="card-body">
                 <img src="{{asset('images/s1.png')}}" width="90%" height="190px" alt="...">
                 <p class="MT-3">FIFTY SHADES O...</p>
                 <h6 class="text-info mt-1">Rs.299</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-2 ms-4">
              <div class="card">
                <div class="card-body">
                 <img src="{{asset('images/s2.png')}}" width="90%" height="190px" alt="...">
                 <p class="MT-3">FIFTY SHADES O...</p>
                 <h6 class="text-info mt-1">Rs.299</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-2 ms-4">
              <div class="card">
                <div class="card-body">
                 <img src="{{asset('images/p3.jpg')}}" width="90%" height="190px" alt="...">
                 <p class="MT-3">FIFTY SHADES O...</p>
                 <h6 class="text-info mt-1">Rs.299</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-2 ms-4">
              <div class="card">
                <div class="card-body">
                 <img src="{{asset('images/s3.png')}}" width="90%" height="190px" alt="...">
                 <p class="MT-3">FIFTY SHADES O...</p>
                 <h6 class="text-info mt-1">Rs.299</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-2 ms-3">
              <div class="card">
                <div class="card-body">
                 <img src="{{asset('images/s1.png')}}" width="90%" height="190px" alt="...">
                 <p class="MT-3">FIFTY SHADES O...</p>
                 <h6 class="text-info mt-1">Rs.299</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
    
            
              <div class="col-lg-12 ms-2 shadow-lg bg-white ms-4 mt-3 ml-4 ml-2">
                <p class="ms-5 h5">Young Adult</p>
                <br>
                <div class="row ms-5">
                  <br>
                  <div class="col-lg-2">
                    <div class="card">
                      <div class="card-body">
                       <img src="{{asset('images/s6 (2).png')}}" width="90%" height="190px" alt="...">
                       <p class="MT-3">ELENOR OLIPHA....</p>
                       <h6 class="text-info mt-1">Rs.279</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 ms-4">
                    <div class="card">
                      <div class="card-body">
                       <img src="{{asset('images/s6 (3).png')}}" width="90%" height="190px" alt="...">
                       <p class="MT-3">THE SINGS</p>
                       <h6 class="text-info mt-1">Rs.259</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 ms-4">
                    <div class="card">
                      <div class="card-body">
                       <img src="{{asset('images/s6 (5).png')}}" width="90%" height="190px" alt="...">
                       <p class="MT-3">FIFTY SHADES O...</p>
                       <h6 class="text-info mt-1">Rs.299</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 ms-4">
                    <div class="card">
                      <div class="card-body">
                       <img src="{{asset('images/s6 (4).png')}}" width="90%" height="190px" alt="...">
                       <p class="MT-3">FIFTY SHADES O...</p>
                       <h6 class="text-info mt-1">Rs.239</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 ms-3">
                    <div class="card">
                      <div class="card-body">
                       <img src="{{asset('images/s3.png')}}" width="90%" height="190px" alt="...">
                       <p class="MT-3">THE DIARY OF A...
                       </p>
                       <h6 class="text-info mt-1">Rs.279</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 ms-2 shadow-lg bg-white ms-4 mt-3 ml-4 ml-2">
                <p class="ms-5 h5">Recently Purchaeed </p>
                <br>
                <div class="row ms-5">
                  <br>
                  <div class="col-lg-2">
                    <div class="card">
                      <div class="card-body">
                       <img src="{{asset('images/S2.png')}}" width="90%" height="190px" alt="...">
                       <p class="MT-3">FIFTY SHADES O...</p>
                       <h6 class="text-info mt-1">Rs.259</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 ms-4">
                    <div class="card">
                      <div class="card-body">
                       <img src="{{asset('images/P3.png')}}" width="90%" height="190px" alt="...">
                       <p class="MT-3">FIFTY SHADES O...</p>
                       <h6 class="text-info mt-1">Rs.249</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 ms-4">
                    <div class="card">
                      <div class="card-body">
                       <img src="{{asset('images/S6 (5).png')}}" width="90%" height="190px" alt="...">
                       <p class="MT-3">FIFTY SHADES O...</p>
                       <h6 class="text-info mt-1">Rs.299</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 ms-4">
                    <div class="card">
                      <div class="card-body">
                       <img src="{{asset('images/S6 (2).png')}}" width="90%" height="190px" alt="...">
                       <p class="MT-3">FIFTY SHADES O...</p>
                       <h6 class="text-info mt-1">Rs.299</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 ms-3">
                    <div class="card">
                      <div class="card-body">
                       <img src="{{asset('images/p1.png')}}" width="90%" height="190px" alt="...">
                       <p class="MT-3">FIFTY SHADES O...</p>
                       <h6 class="text-info mt-1">Rs.299</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 ms-2 shadow-lg bg-white ms-4 mt-3 ml-4 ml-2">
                <p class="h5 ms-5">Book Sets</p>
                <br>
                <div class="row ms-5">
                  <br>
                  <div class="col-lg-2">
                    <div class="card">
                      <div class="card-body">
                       <img src="{{asset('images/s1.png')}}" width="90%" height="190px" alt="...">
                       <p class="MT-3">FIFTY SHADES O...</p>
                       <h6 class="text-info mt-1">Rs.299</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 ms-4">
                    <div class="card">
                      <div class="card-body">
                       <img src="{{asset('images/s2.png')}}" width="90%" height="190px" alt="...">
                       <p class="MT-3">FIFTY SHADES O...</p>
                       <h6 class="text-info mt-1">Rs.299</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 ms-4">
                    <div class="card">
                      <div class="card-body">
                       <img src="{{asset('images/p3.jpg')}}" width="90%" height="190px" alt="...">
                       <p class="MT-3">FIFTY SHADES O...</p>
                       <h6 class="text-info mt-1">Rs.299</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 ms-4">
                    <div class="card">
                      <div class="card-body">
                       <img src="{{asset('images/s3.png')}}" width="90%" height="190px" alt="...">
                       <p class="MT-3">FIFTY SHADES O...</p>
                       <h6 class="text-info mt-1">Rs.299</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 ms-3">
                    <div class="card">
                      <div class="card-body">
                       <img src="{{asset('images/s1.png')}}" width="90%" height="190px" alt="...">
                       <p class="MT-3">FIFTY SHADES O...</p>
                       <h6 class="text-info mt-1">Rs.299</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="col-lg-12-fluid ms-4">
              <img src="{{asset('images/Screenshot (135).png')}}" alt="" width="100%" height="150px">          
            </div> 
            <div class="col-lg-12">
      <h4 class="font-weight-light text-center mt-4">
        <span class="text-bold text-center"> All  BookChor  Books Pass  Our   Quality  Control  Test</span>
    </h4>
    <p class="mt-4 text-center">The BookChor books diffreance is not just low price on used books;is's a Quality Guarantee.<br><br>
       Between Saving books and shipping a bookchor staff member personally handales each and every volume. <br><br>live you,our iten has very high standerds.you should known exactly what to expact when your purchase aerrives</p>
       <br>
       <br>
       <img src="{{asset('images/Screenshot (136).png')}}" alt="" width="100%" height="150px">   
              </div> 
              <div class="col-lg-12 ms-4 mt-2">
                <img src="{{asset('images/s8.png')}}" alt="" width="100%" height="400px">  
              </div>
            </div>
            </div>
        <div class="container-fluid mt-1">
          <div class="row bg-dark">
            <div class="col-lg-4 ms-4">
              <h6 class="text-white mt-5 ms-5">ABOUT US</h6>
              <p class="text-muted">Ever wanted to buy o book but could not<br>beacause  it was too expensive worry not<br>beacause Bookchor is here! Bookchor<br>these days in news,is beging called as the<br>Robinhood of the world of books.<br>Bookchor term is commited to bring to<br>you all kind of best<br>prices ever seen anywhere yes,we are<br>literally giving you awway a steal.</p>
          </div>
          <div class="col-lg-2 mt-5">
            <h6 class="text-white ">INFORMATION</h6>
            <a href="" class="nav-link">> About Us</a>
            <a href="" class="nav-link">> Sell Back</a>
            <a href="" class="nav-link">> Wholesale</a>
            <a href="" class="nav-link">> Contant Us</a>
            <a href="" class="nav-link">> Careers</a>
            <a href="" class="nav-link">> Frequently Asked Question</a>
            <a href="" class="nav-link">> Our Coupon Partners</a>
            <a href="" class="nav-link">> Terms of use & pollcy</a>
            
        </div>
        <div class="col-lg-3">
          <h4 class="text-white mt-5">Tweets  by<a href="" class="nav-link h6">@bookchor</a></h4>
          <hr>
          <h6 class="text-white ms-5"><img src="{{asset('images/Screenshot (140).png')}}" alt="" width="8%" height="30px">Bookchor<br>@bookchor</h6> 
           <p class="text-white">You will forever in our herts. Reast in<br>peace,legend!<a class="nav-link"> #irrfankhan</a></p>
           <img src="{{asset('images/Screenshot (141).png')}}" alt="" width="80%" height="190px">
        </div>
     <div class="col-lg-2">
       <h5 class="text-white FONT-WIGHT-LIGHT MT-5">OUR CONTANT</h5>
       <H5 class="text-muted font-weighted-light">Bookchor.com</H5>
       <p class="text-muted">#1218,<br>Sector-15,seson<br>Hayana-131001<br>p+91-946527<br>Email:ffdd</p>
     </div>
       </div>
        </div>
        <div class="footer">
          <img src="{{asset('images/Screenshot (143).png')}}" alt="" width="100%" height="200px">
         </div>
       
    
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    </body>
</html>