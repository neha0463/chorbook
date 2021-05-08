<html>
    <head>
        <title>Bookchor</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
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
          <form action="" method="POST ms-5">
            <input type="search" id="Book/Author/ISBN" class="form-inline rounded-pill bg-gray  mt-4 ms-5"
            placeholder="search facebook">
            <input type="submit" name="search" class="btn btn-danger">
            </form>
  </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light shadow-lg">
      <form action="" method="POST">
        <ul class="navbar-nav mx-auto mt-2">
          <li class="nav-item"><a href="" class="nav-link ms-5 text-dark text-bold"><P class="h6"><i>Categories</i></P></a></li>
          <li class="nav-item"><a href="{{route('newly')}}" class="nav-link ms-3 text-dark text-bold"><P class="h6"><i>Newly Address</i></P></a></li>
          <li class="nav-item"><a href="{{route('eatu')}}" class="nav-link ms-3 text-dark text-bold"><P class="h6"><i>eatured Books</i></P></a></li>
          <li class="nav-item"><a href="{{route('deal')}}" class="nav-link ms-3 text-dark text-bold"><P class="h6"><i>Deals Store</i></P></a></li>
          <li class="nav-item"><a href="{{route('popular')}}" class="nav-link ms-3 text-dark text-bold"><P class="h6"><i>Popular Bok Sets</i></P></a></li>
          <li class="nav-item"><a href="{{route('young')}}" class="nav-link ms-3 text-dark text-bold"><P class="h6"><i>Young Adult</i></P></a></li>
          <li class="nav-item"><a href="{{route('rate')}}ra" class="nav-link ms-3 text-dark text-bold"><P class="h6"><i>Rare & Collection</i></P></a></li>
          <li class="nav-item"><a href="{{route('lock')}}" class="nav-link ms-3 text-dark text-bold"><P class="h6"><i>Lock The Box</i></P></a></li>
          <li class="nav-item"><a href="{{route('stor')}}" class="nav-link ms-3 text-dark text-bold"><P class="h6"><i>99 Store</i></P></a></li>
        </ul>
        </form>
    </nav>
    <div class="contaner">
        <div class="row">
            
                <div class="col-lg-3">
                    <div class="list-group list-group-center">
                        <a href="#" class="list-group-item list-group-item-action"> > Best Seller</a>
                        <a href="#" class="list-group-item list-group-item-action"> > LITERATURE AND FICTION</a>
                        <a href="#" class="list-group-item list-group-item-action"> > CRIME AND THRILLER</a>
                        <a href="#" class="list-group-item list-group-item-action"> >ROMANCE</a>
                        <a href="#" class="list-group-item list-group-item-action"> >CLASSIES</a>
                        <a href="#" class="list-group-item list-group-item-action"> >SCIENCE FICTION</a>
                        <a href="#" class="list-group-item list-group-item-action"> >FANTASY</a>
                        <a href="#" class="list-group-item list-group-item-action"> >YOUNG ADULT</a>
                        <a href="#" class="list-group-item list-group-item-action"> >CHILDRENS</a>
                        <a href="#" class="list-group-item list-group-item-action">> NONFICTIN</a>
                        <a href="#" class="list-group-item list-group-item-action"> > TEXTBOOK</a>
                        <a href="#" class="list-group-item list-group-item-action"> > 90 PERCENT STORE</a>
                        <a href="#" class="list-group-item list-group-item-action"> > TEXTBOOK</a>
                        <a href="#" class="list-group-item list-group-item-action"> > LOOT STORE</a>
                      </div>
                    
            </div>
            <div class="col-lg-9 mt-2">
               <div class="row bg-light">
                   <div class="col-lg-3 ms-5  shadow-lg">
                    <div class="card-body ">
                        <img src="{{asset('images/Screenshot (152).png')}}" class="mt-3" width="95%" height="270px" alt="...">
                        <p class="text-muted MS-5 MT-2">HAMLET...</p>
                        <P class="text-dark mt-2">By: Willam Shakespeare....</P>
                        <p class="text-danger mt-1">`RS/299</p>
                    </div>
                   </div>
                   <div class="col-lg-3 ms-1  shadow-lg">
                    <div class="card-body ">
                        <img src="{{asset('images/Screenshot (153).png')}}" class="mt-3" width="95%" height="270px" alt="...">
                        <p class="text-muted MS-5 MT-2">HAMLET...</p>
                        <P class="text-dark mt-2">By: Willam Shakespeare....</P>
                        <p class="text-danger mt-1">`RS/169</p>
                    </div>
                   </div>
                   <div class="col-lg-3 ms-1  shadow-lg">
                    <div class="card-body">
                        <img src="{{asset('images/Screenshot (154).png')}}" class="mt-3" width="95%" height="270px" alt="...">
                        <p class="text-muted MS-5 MT-2">HAMLET...</p>
                        <P class="text-dark mt-2">By: Willam Shakespeare....</P>
                        <p class="text-danger mt-1">`RS/279</p>
                    </div>
                   </div>
                   <div class="col-lg-3 ms-5 mt-5  shadow-lg">
                    <div class="card-body ">
                        <img src="{{asset('images/Screenshot (153).png')}}" class="mt-3" width="95%" height="270px" alt="...">
                        <p class="text-muted MS-5 MT-2">HAMLET...</p>
                        <P class="text-dark mt-2">By: Willam Shakespeare....</P>
                        <p class="text-danger mt-1">`RS/279</p>
                    </div>
                   </div>
                   <div class="col-lg-3 ms-1 mt-4 shadow-lg">
                    <div class="card-body">
                        <img src="{{asset('images/Screenshot (154).png')}}" class="mt-3" width="95%" height="270px" alt="...">
                        <p class="text-muted MS-5 MT-2">HAMLET...</p>
                        <P class="text-dark mt-2">By: Willam Shakespeare....</P>
                        <p class="text-danger mt-1">`RS/279</p>
                    </div>
                   </div>
                   <div class="col-lg-3 ms-1 mt-4 shadow-lg">
                    <div class="card-body">
                        <img src="{{asset('images/Screenshot (154).png')}}" class="mt-3" width="95%" height="270px" alt="...">
                        <p class="text-muted MS-5 MT-2">HAMLET...</p>
                        <P class="text-dark mt-2">By: Willam Shakespeare....</P>
                        <p class="text-danger mt-1">`RS/279</p>
                    </div>
                   </div>
                   <div class="col-lg-3 ms-5  shadow-lg">
                    <div class="card-body ">
                        <img src="{{asset('images/Screenshot (152).png')}}" class="mt-3" width="95%" height="270px" alt="...">
                        <p class="text-muted MS-5 MT-2">HAMLET...</p>
                        <P class="text-dark mt-2">By: Willam Shakespeare....</P>
                        <p class="text-danger mt-1">`RS/299</p>
                    </div>
                   </div>
                   <div class="col-lg-3 ms-1  shadow-lg">
                    <div class="card-body ">
                        <img src="{{asset('images/Screenshot (153).png')}}" class="mt-3" width="95%" height="270px" alt="...">
                        <p class="text-muted MS-5 MT-2">HAMLET...</p>
                        <P class="text-dark mt-2">By: Willam Shakespeare....</P>
                        <p class="text-danger mt-1">`RS/169</p>
                    </div>
                   </div>
                   <div class="col-lg-3 ms-1  shadow-lg">
                    <div class="card-body">
                        <img src="{{asset('images/Screenshot (154).png')}}" class="mt-3" width="95%" height="270px" alt="...">
                        <p class="text-muted MS-5 MT-2">HAMLET...</p>
                        <P class="text-dark mt-2">By: Willam Shakespeare....</P>
                        <p class="text-danger mt-1">`RS/279</p>
                    </div>
                   </div>
              </div>
            </div>
           
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <img src="{{asset('images/Screenshot (135).png')}}" alt="" width="100%" height="150px">          
              </div>
             </div>
    </div>
    <div class="footer">
        <img src="{{asset('images/Screenshot (143).png')}}" alt="" width="100%" height="200px">
       </div>
       