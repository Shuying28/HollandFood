<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu: Explore More</title>

  <!-- Bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

  <!-- Bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- external css stylesheet -->
  <link rel="stylesheet" href="/styles/user_menu.css">

  <!-- Include Bootsrap JavaScript plugin -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- external font -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

</head>

<body>
  <style>
    * {
      font-family: 'Montserrat';
    }

    .navbar{
      padding-top: 50px;
    }

    .navbar-light .navbar-nav .nav-link {
      color: white;
      font-size: 18px;
      padding: 10px 0px 0px 0px;
      margin: 20px;
      text-shadow: 1px 1px 8px white;

    }

    .navbar-light .navbar-brand {
      color: white;
      font-size: 20px;
      padding: 0px 35px 0px 10px;
      text-shadow: 1px 1px 8px white;

    }

    .nav-link {
      position: relative;
    }

    .nav-link-underline::after {
      content: "";
      position: absolute;
      background-color: #FE724C;
      height: 3px;
      width: 0;
      left: 0;
      bottom: -10px;
      transition: 0.3s;
    }

    .nav-link-underline:hover::after {
      width: 100%;
    }

    .btn-sign-up {
      background-color: #FE724C;
      color: white;
      border-radius: 30px;
      margin-top: 0px;
      width: 150px;
      border: none;
      font-size: 15px;
      padding: 10px 20px 10px 20px;
      text-align: center;

    }

    .btn-sign-up:hover {
      background-color: #f83701;
    }
  </style>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
      <div class="container">
        <a class="navbar-brand fw-bold" href="index.html"><img src="/images/holland_food_icon.png" width="35px" />
          Holland Food</a>
        <!-- hamburger icon when screen size become small -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
          aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-stream navbar-toggler-icon"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link active nav-link-underline" aria-current="page" href="index.html#home">Home</a>
            </li>

            <li class="nav-item active">
              <a class="nav-link nav-link-underline" href="index.html#aboutUs">About Us</a>
            </li>

            <li class="nav-item active">
              <a class="nav-link nav-link-underline" href="index.html#menu">Menu</a>
            </li>

            <li class="nav-item active">
              <a class="nav-link active nav-link-underline" href="index.html#bookNow">Book Now</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="Layout/user/user_sign_InOut.html"><button
                  class="btn-sign-up">LOGIN</button></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="row justify-content-center p-5 ">
    <div class="leftcolumn">
      <div class="row justify-content-center category-div" style="background-color: #130D25">
        <!-- Menu Category -->
        <div class="menu_con col-2 justify-content-center " data-category="all">
          <div class="container-fluid mt-3 p-1 pb-2">
            <img src="images/all-category.png" class="align-items-center w-3 rounded mx-auto d-block mb-4" height="64px"
              width="64px" />
            <p class="text-center fs-6 border-bottom border-3 fw-bold mb-4 pb-4">
              All
            </p>
            <div class="showMore text-center">
              <a href="#">
                <i class="bi bi-caret-right text-white"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Salad -->
        <div class="menu_con col-2 justify-content-center" data-category="salad">
          <div class="container-fluid mt-3 p-1 pb-2">
            <img src="images/salad-category.png"
              class="align-items-center w-3 img-fluid rounded mx-auto d-block mb-4" />
            <p class="text-center fs-6 border-bottom border-3 fw-bold mb-4 pb-4">
              Salad
            </p>
            <div class="showMore text-center">
              <a href="#">
                <i class="bi bi-caret-right text-white"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Dutch -->
        <div class="menu_con col-2 justify-content-center " data-category="dutch">
          <div class="container-fluid mt-3 p-1 pb-2">
            <img src="images/dutch-category.png"
              class="align-items-center w-3 img-fluid rounded mx-auto d-block mb-4" />
            <p class="text-center fs-6 border-bottom border-3 fw-bold mb-4 pb-4">
              Dutch
            </p>
            <div class="showMore text-center">
              <a href="#">
                <i class="bi bi-caret-right text-white"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Pizza -->
        <div class="menu_con col-2 justify-content-center " data-category="pizza">
          <div class="container-fluid mt-3 p-1 pb-2">
            <img src="images/pizza-category.png"
              class="align-items-center w-3 img-fluid rounded mx-auto d-block mb-4" />
            <p class="text-center fs-6 border-bottom border-3 fw-bold mb-4 pb-4">
              Pizza
            </p>
            <div class="showMore text-center">
              <a href="#">
                <i class="bi bi-caret-right text-white"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Spaghetti -->
        <div class="menu_con col-2 justify-content-center" data-category="spaghetti">
          <div class="container-fluid mt-3 p-1 pb-2">
            <img src="images/spaghetti-category.png"
              class="align-items-center w-3 img-fluid rounded mx-auto d-block mb-4" />
            <p class="text-center fs-6 border-bottom border-3 fw-bold mb-4 pb-4">
              Spaghetti
            </p>
            <div class="showMore text-center">
              <a href="#">
                <i class="bi bi-caret-right text-white"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Snacks -->
        <div class="menu_con col-2 justify-content-center" data-category="snacks">
          <div class="container-fluid mt-3 p-1 pb-2">
            <img src="images/snacks-category.png"
              class="align-items-center w-3 img-fluid rounded mx-auto d-block mb-4" />
            <p class="text-center fs-6 border-bottom border-3 fw-bold mb-4 pb-4">
              Snacks
            </p>
            <div class="showMore text-center">
              <a href="#">
                <i class="bi bi-caret-right text-white"></i>
              </a>
            </div>
          </div>
        </div>



        <!-- Drink -->
        <div class="menu_con col-2 justify-content-center" data-category="drinks">
          <div class="container-fluid mt-3 p-1 pb-2">
            <img src="images/beverage-category.png"
              class="align-items-center w-3 img-fluid rounded mx-auto d-block mb-4" />
            <p class="text-center fs-6 border-bottom border-3 fw-bold mb-4 pb-4">
              Drinks
            </p>
            <div class="showMore text-center">
              <a href="#">
                <i class="bi bi-caret-right text-white"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div id="menucard">
        <div class="card" style="height:1000px; background-color: #130D25">
          <div class="row mt-5 justify-content-around pe-3 ">
            <div class="col-4 col-xl-2 col-lg-3 col-md-3 col-sm-4 ms-lg-1 my-3 me-3 me-xl-1 me-lg-2 me-md-4 me-sm-4"
              data-category="pizza">
              <div class="menu-item container-fluid shadow-lg bg-body ms-3">
                <img src="../../images/garlic-herb-pizza.png" class="menu-item" />
              </div>
              <div class="border_menu">
                <div class="menu-item-desc ps-4 container-fluid">
                  <div class="fw-bold">Garlic Herb Pizza</div>
                  <div class="ingredient">Garlic, Herb, Olive oil</div>
                  <div class="mt-4 price">
                    <p class="m-0">RM22.00</p>
                   
                  </div>
                </div>
              </div>
            </div>

            <div class="col-4 col-xl-2 col-lg-3 col-md-3 col-sm-4 ms-lg-1 my-3 me-3 me-xl-1 me-lg-2 me-md-4 me-sm-4"
              data-category="pizza">
              <div class="menu-item container-fluid shadow-lg bg-body ms-3">
                <img src="../../images/menu-icon-3.png" class="menu-item" />
              </div>
              <div class="border_menu">
                <div class="menu-item-desc ps-4 container-fluid">
                  <div class="fw-bold">Margherita Pizza</div>
                  <div class="ingredient">Tomatoes, Fresh basil</div>
                  <div class="mt-4 price">
                    <p class="m-0">RM22.00</p>
                    

                  </div>
                </div>
              </div>
            </div>

            <div class="col-4 col-xl-2 col-lg-3 col-md-3 col-sm-4 ms-lg-1 my-3 me-3 me-xl-1 me-lg-2 me-md-4 me-sm-4"
              data-category="pizza">
              <div class="menu-item container-fluid shadow-lg bg-body ms-3">
                <img src="../../images/mushroom pizza.png" class="menu-item" />
              </div>
              <div class="border_menu">
                <div class="menu-item-desc ps-4 container-fluid">
                  <div class="fw-bold">Mushroom Pizza</div>
                  <div class="ingredient">Mushroom</div>
                  <div class="mt-4 price">
                    <p class="m-0">RM15.00</p>
                    

                  </div>
                </div>
              </div>
            </div>


            <!-- spaghetti -->
            <div class="col-4 col-xl-2 col-lg-3 col-md-3 col-sm-4 ms-lg-1 my-3 me-3 me-xl-1 me-lg-2 me-md-4 me-sm-4"
              data-category="spaghetti">
              <div class="menu-item container-fluid shadow-lg bg-body ms-3">
                <img src="../../images/menu-icon-4.png" class="menu-item" />
              </div>
              <div class="border_menu">
                <div class="menu-item-desc ps-4 container-fluid">
                  <div class="fw-bold">Aglio e Olio</div>
                  <div class="ingredient">Beef, Tomatoes</div>
                  <div class="mt-4 price">
                    <p class="m-0">RM20.50</p>
                   
                  </div>
                </div>
              </div>
            </div>

            <div class="col-4 col-xl-2 col-lg-3 col-md-3 col-sm-4 ms-lg-1 my-3 me-3 me-xl-1 me-lg-2 me-md-4 me-sm-4"
              data-category="spaghetti">
              <div class="menu-item container-fluid shadow-lg bg-body ms-3">
                <img src="../../images/spaghetti-tomato_chicken_pasta.png" class="menu-item" />
              </div>
              <div class="border_menu">
                <div class="menu-item-desc ps-4 container-fluid">
                  <div class="fw-bold">Chicken Pasta</div>
                  <div class="ingredient">Tomato, Chicken</div>
                  <div class="mt-4 price">
                    <p class="m-0">RM18.50</p>
                 
                  </div>
                </div>
              </div>
            </div>

            <div class="col-4 col-xl-2 col-lg-3 col-md-3 col-sm-4 ms-lg-1 my-3 me-3 me-xl-1 me-lg-2 me-md-4 me-sm-4"
              data-category="spaghetti">
              <div class="menu-item container-fluid shadow-lg bg-body ms-3">
                <img src="../../images/spaghetti-Vegan_Carbonara.png" class="menu-item" />
              </div>
              <div class="border_menu">
                <div class="menu-item-desc ps-4 container-fluid">
                  <div class="fw-bold">Vegan Carbonara</div>
                  <div class="ingredient">Vegetables</div>
                  <div class="mt-4 price">
                    <p class="m-0">RM16.50</p>
                    
                  </div>
                </div>
              </div>
            </div>


           <!-- drink -->
           <div class="col-4 col-xl-2 col-lg-3 col-md-3 col-sm-4 ms-lg-1 my-3 me-3 me-xl-1 me-lg-2 me-md-4 me-sm-4"
           data-category="drinks">
           <div class="menu-item container-fluid shadow-lg bg-body ms-3">
             <img src="../../images/drinks-iceLemonTea.png" class="menu-item" />
           </div>
           <div class="border_menu">
             <div class="menu-item-desc ps-4 container-fluid">
               <div class="fw-bold">Ice Lemon Tea</div>
               <div class="ingredient">Lemon, Tea</div>
               <div class="mt-4 price">
                 <p class="m-0">RM6.50</p>
              
               </div>
             </div>
           </div>
         </div>

         <div class="col-4 col-xl-2 col-lg-3 col-md-3 col-sm-4 ms-lg-1 my-3 me-3 me-xl-1 me-lg-2 me-md-4 me-sm-4"
           data-category="drinks">
           <div class="menu-item container-fluid shadow-lg bg-body ms-3">
             <img src="../../images/drinks-latte.png" class="menu-item" />
           </div>
           <div class="border_menu">
             <div class="menu-item-desc ps-4 container-fluid">
               <div class="fw-bold">Latte</div>
               <div class="ingredient">Coffee, Milk</div>
               <div class="mt-4 price">
                 <p class="m-0">RM9.50</p>
                

               </div>
             </div>
           </div>
         </div>

       <div class="col-4 col-xl-2 col-lg-3 col-md-3 col-sm-4 ms-lg-1 my-3 me-3 me-xl-1 me-lg-2 me-md-4 me-sm-4"
         data-category="drinks">
         <div class="menu-item container-fluid shadow-lg bg-body ms-3">
           <img src="../../images/drinks-lemonade.png" class="menu-item" />
         </div>
         <div class="border_menu">
           <div class="menu-item-desc ps-4 container-fluid">
             <div class="fw-bold">Lemonade</div>
             <div class="ingredient">Rasberry, Soda</div>
             <div class="mt-4 price">
               <p class="m-0">RM7.00</p>
             

             </div>
           </div>
         </div>
       </div>
            
          
          <!-- salad -->
          <div class="col-4 col-xl-2 col-lg-3 col-md-3 col-sm-4 ms-lg-1 my-3 me-3 me-xl-1 me-lg-2 me-md-4 me-sm-4"
            data-category="salad">
            <div class="menu-item container-fluid shadow-lg bg-body ms-3">
              <img src="../../images/menu-icon-2.png" class="menu-item" />
            </div>
            <div class="border_menu">
              <div class="menu-item-desc ps-4 container-fluid">
                <div class="fw-bold">Caesar Salad</div>
                <div class="ingredient">Cucumber, Onions</div>
                <div class="mt-4 price">
                  <p class="m-0">RM9.90</p>
                 

                </div>
              </div>
            </div>
          </div>

          

            <div class="col-4 col-xl-2 col-lg-3 col-md-3 col-sm-4 ms-lg-1 my-3 me-3 me-xl-1 me-lg-2 me-md-4 me-sm-4"
              data-category="salad">
              <div class="menu-item container-fluid shadow-lg bg-body ms-3">
                <img src="../../images/Avocado Salad.png" class="menu-item" />
              </div>
              <div class="border_menu">
                <div class="menu-item-desc ps-4 container-fluid">
                  <div class="fw-bold">Avocado Salad</div>
                  <div class="ingredient">Avocado, Chickpea</div>
                  <div class="mt-4 price">
                    <p class="m-0">RM13.50</p>
                  

                  </div>
                </div>
              </div>
            </div>
            
          <div class="col-4 col-xl-2 col-lg-3 col-md-3 col-sm-4 ms-lg-1 my-3 me-3 me-xl-1 me-lg-2 me-md-4 me-sm-4"
            data-category="salad">
            <div class="menu-item container-fluid shadow-lg bg-body ms-3">
              <img src="../../images/garden salad.png" class="menu-item" />
            </div>
            <div class="border_menu">
              <div class="menu-item-desc ps-4 container-fluid">
                <div class="fw-bold">Garden Salad</div>
                <div class="ingredient">Tomato, Vegetables</div>
                <div class="mt-4 price">
                  <p class="m-0">RM11.50</p>
                 

                </div>
              </div>
            </div>
          </div>


          <!-- snacks -->
          <div class="col-4 col-xl-2 col-lg-3 col-md-3 col-sm-4 ms-lg-1 my-3 me-3 me-xl-1 me-lg-2 me-md-4 me-sm-4"
            data-category="snacks">
            <div class="menu-item container-fluid shadow-lg bg-body ms-3">
              <img src="../../images/taco.png" class="menu-item" />
            </div>
            <div class="border_menu">
              <div class="menu-item-desc ps-4 container-fluid">
                <div class="fw-bold">Taco</div>
                <div class="ingredient">Ground beef</div>
                <div class="mt-4 price">
                  <p class="m-0">RM17.50</p>
                 

                </div>
              </div>
            </div>
          </div>

          <div class="col-4 col-xl-2 col-lg-3 col-md-3 col-sm-4 ms-lg-1 my-3 me-3 me-xl-1 me-lg-2 me-md-4 me-sm-4"
            data-category="snacks">
            <div class="menu-item container-fluid shadow-lg bg-body ms-3">
              <img src="../../images/french fries.png" class="menu-item" />
            </div>
            <div class="border_menu">
              <div class="menu-item-desc ps-4 container-fluid">
                <div class="fw-bold">French Fries</div>
                <div class="ingredient">Potato</div>
                <div class="mt-4 price">
                  <p class="m-0">RM10.50</p>
                 

                </div>
              </div>
            </div>
          </div>


          <div class="col-4 col-xl-2 col-lg-3 col-md-3 col-sm-4 ms-lg-1 my-3 me-3 me-xl-1 me-lg-2 me-md-4 me-sm-4"
            data-category="snacks">
            <div class="menu-item container-fluid shadow-lg bg-body ms-3">
              <img src="../../images/menu-icon-5.png" class="menu-item" />
            </div>
            <div class="border_menu">
              <div class="menu-item-desc ps-4 container-fluid">
                <div class="fw-bold">Buffalo Wings</div>
                <div class="ingredient">Chicken</div>
                <div class="mt-4 price">
                  <p class="m-0">RM18.50</p>
                 
                </div>
              </div>
            </div>
          </div>

          <!-- dutch -->

          <div class="col-4 col-xl-2 col-lg-3 col-md-3 col-sm-4 ms-lg-1 my-3 me-3 me-xl-1 me-lg-2 me-md-4 me-sm-4"
            data-category="dutch">
            <div class="menu-item container-fluid shadow-lg bg-body ms-3">
              <img src="../../images/menu-icon-1.png" class="menu-item" />
            </div>
            <div class="border_menu">
              <div class="menu-item-desc ps-4 container-fluid">
                <div class="fw-bold">Stamppot</div>
                <div class="ingredient">Potatoes, Shallots</div>
                <div class="mt-4 price">
                  <p class="m-0">RM28.00</p>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-4 col-xl-2 col-lg-3 col-md-3 col-sm-4 ms-lg-1 my-3 me-3 me-xl-1 me-lg-2 me-md-4 me-sm-4"
            data-category="dutch">
            <div class="menu-item container-fluid shadow-lg bg-body ms-3">
              <img src="../../images/dutch-herby-smoked-salmon.png" class="menu-item" />
            </div>
            <div class="border_menu">
              <div class="menu-item-desc ps-4 container-fluid">
                <div class="fw-bold">Smoked Salmon</div>
                <div class="ingredient">Lemon, Salmon</div>
                <div class="mt-4 price">
                  <p class="m-0">RM31.00</p>
                 

                </div>
              </div>
            </div>
          </div>

          <div class="col-4 col-xl-2 col-lg-3 col-md-3 col-sm-4 ms-lg-1 my-3 me-3 me-xl-1 me-lg-2 me-md-4 me-sm-4"
            data-category="dutch">
            <div class="menu-item container-fluid shadow-lg bg-body ms-3">
              <img src="../../images/dutch-lasagna.png" class="menu-item" />
            </div>
            <div class="border_menu">
              <div class="menu-item-desc ps-4 container-fluid">
                <div class="fw-bold">Lasagna</div>
                <div class="ingredient">Cottage cheese</div>
                <div class="mt-4 price">
                  <p class="m-0">RM28.00</p>
                  
                </div>
              </div>
            </div>
          </div>


          </div>
        </div>
      </div>
    </div>

  </div>

  </div>



  <script src="/script/userMenu.js"></script>



</body>

</html>