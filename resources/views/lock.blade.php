<html>
    <head>
        <title>Box</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>
    <body>
       <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
             
        <h3 class="fw-bolder ms-5 MT-5"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="30" fill="currentColor" class="bi bi-text-center" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
          </svg>Box</h3><p class="text-MUTED MT-4 fw-weight">LOCK<h6 class="mt-4">the</h6></p>
            <ul class="navbar-nav ms-auto">
                <li class="badge rounded-pill bg-danger"><a  class="btn btn-danger fw-weight">Upcoming Event</a></li>
            </ul>
       </nav>
       <div class="cover">
         <div class="row">
           <div class="col-lg-6 mx-auto mt-5">
             <div class="card">
               <div class="card-body">
                 <form action="{{route('store')}}" method="POST">
                   @csrf
                  <h4 class="text-dark">Login or Signup</h4>
                  <img src="{{asset('images/i.png')}}" alt="" width="100%" height="160px">
                  <ul class="list-group list-group-horizontal">
                    <H6 class="list-group-item list-group-item-action">SHORTLIST YOUR<BR>FAV BOOKS</H6>
                    <h6 class="list-group-item list-group-item-action">SELECT A BOX<BR>SIZE</h6>
                    <h6 class="list-group-item list-group-item-action">ADD YOUR<BR>ADDRESS</h6>
                    <h6 class="list-group-item list-group-item-action">REVIEW &<BR>CHECKOUT</h6>
                  </ul>
                   <div class="form-group">
                     <label for="">Mobile_Number</label>
                     <input type="text" name="Mobile Number" class="form-control">
                   </div>
                   <div class="form-group">
                     <label for="">name</label>
                     <input type="text" name="name" class="form-control">
                   </div>
                   <div class="form-group">
                     <input type="submit" name="send" class="btn btn-primary w-100">
                   </div>
                 </form>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="container-fluid">
        <div class="row">
       
        </div>
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
      
    </body>
</html>