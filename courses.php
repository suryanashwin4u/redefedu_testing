<?php include "header.php"; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>All Courses</li>
        </ol>
        <h2>All Courses</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <style>
    .filterDiv {
           float: left;
    color: #ffffff;
    text-align: center;
    margin: 10px;
    display: none;
    padding: 15px 30px;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.15);
    border-radius: 50px;
    background: white;
    transition: all ease-in-out 0.3s;
    height: 100%;
    color: black;
    }

    @media (max-width: 800px) {
      .filterDiv{
        width: -webkit-fill-available;
      }
    }

    #myBtnContainer{

      padding: 10px;
      overflow-x: scroll;
      white-space: nowrap;

    }

    .show {
      display: block;
    }

    .container {
    /*  margin-top: 20px;*/
      overflow: hidden;
    }

    #heading_properties{

      font-size: 20px !important;
      color: black !important;
      font-weight: 700 !important;

    }

    #paragraph_properties{

        font-size: 14px;
        color: black;
      
    }

    #button_properties{
    border-radius: 25px;
    background-color: white;
    color: black;
    border: 2px;
    box-shadow: 0px 2px 15px rgb(0 0 0 / 15%);
    }

    </style>



<section id="portfolio" class="portfolio featured" >
  <div class="container" >
    <div class="section-title" >
      <h2>All Courses</h2>
    </div>
    <div class="container" id="myBtnContainer">
      <button class="btn btn-primary active" id="button_properties" onclick="filterSelection('Special_Courses')">Special Courses</button>
      <button class="btn btn-primary"        id="button_properties" onclick="filterSelection('Crash_Courses')">Crash Courses</button>
      <button class="btn btn-primary"        id="button_properties" onclick="filterSelection('GS_Classroom')">GS Classroom</button>
      <button class="btn btn-primary"        id="button_properties" onclick="filterSelection('GS_Test Series')">GS Test Series</button>
      <button class="btn btn-primary"        id="button_properties" onclick="filterSelection('GS_Foundation')">GS Foundation</button>
      <button class="btn btn-primary"        id="button_properties" onclick="filterSelection('Optional_Classroom')">Optional Classroom</button>
      <button class="btn btn-primary"        id="button_properties" onclick="filterSelection('Optional_Test_Series')">Optional Test Series</button>
      <button class="btn btn-primary"        id="button_properties" onclick="filterSelection('Optional_Foundation')">Optional Foundation</button>
    </div>

<div class="container" style="margin-top: 15px;">
  <div class="filterDiv Special_Courses" >
    <center>
      <a href="https://redefedu.com/redefedu_testing/course_1.php" >
        <h3 id="heading_properties" >
          [01] 20-20 and 50-50 Series 2021
        </h3>
        <p id="paragraph_properties" >70 high yielding topics for prelims</p>
      </a>
    </center> 
  </div>
  <div class="filterDiv Special_Courses" >
    <center>
      <a href="#">
        <h3 id="heading_properties">
          [02] PT360
        </h3>
        <p id="paragraph_properties">5 year Current Affair for Prelims</p>
      </a>
    </center>  
  </div>
  <div class="filterDiv Special_Courses" >
    <center>
      <a href="#">
        <h3 id="heading_properties">
          [03] Mains seat Guarantee programme (MSGP)
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions for prelims 25 years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv Special_Courses" >
    <center>
      <a href="#">
        <h3 id="heading_properties">
          [04] Mains in 300 Topics 2021
        </h3>
        <p id="paragraph_properties">5 Years Contemporary Issues + 1 Year Current Affairs</p>
      </a>
    </center> 
  </div>
  <div class="filterDiv Special_Courses" >
    <center>
      <a href="#">
        <h3 id="heading_properties">
          [05] Mains Answer Building
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv Special_Courses" >
    <center>
      <a href="#">
        <h3 id="heading_properties">
          [06] GS 4 Ethics 2021
        </h3>
        <p id="paragraph_properties">Theory, Case Studies and Applied Ethics</p>
      </a>  
    </center>
  </div>
  <div class="filterDiv Special_Courses" >
    <center>
      <a href="#">
        <h3 id="heading_properties">
          [07] CSAT
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv Special_Courses" >
    <center>
      <a href="#">
        <h3 id="heading_properties">
          [08] Hindu & Indian Express in 5 mint.
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>



  <div class="filterDiv Crash_Courses">
    <center>
      <a href="#">
        <h3 id="heading_properties">
          [01] Prelims 2.0 2021
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center> 
  </div>



  <div class="filterDiv GS_Classroom">
    <center>
      <a href="#">
        <h3 id="heading_properties">
          [01] Prelims 2021
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv GS_Classroom">
    <center>
      <a href="#">
        <h3 id="heading_properties">
          [02] Mains 2021
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv GS_Classroom">
    <center>
      <a href="#">
        <h3 id="heading_properties">
          [03] Essay 2021
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv GS_Classroom">
    <center>
      <a href="#">
        <h3 id="heading_properties"> 
          [04] Prelims + Mains Combo 2021
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv GS_Classroom">
    <center>
      <a href="#">
        <h3 id="heading_properties">[05] Prelims + Mains + Essay Combo 2021</h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>

  <div class="filterDiv GS_Test Series">
    <center>
      <a href="#">
        <h3 id="heading_properties">
          [01] Prelims 2021
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv GS_Test Series">
    <center>
      <a href="#">
        <h3 id="heading_properties">
          [02] Mains 2021
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv GS_Test Series">
   <center>
    <a href="#">
      <h3 id="heading_properties">
        [03] Essay 2021
      </h3>
      <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
    </a>
    </center>
  </div>
  <div class="filterDiv GS_Test Series">
    <center>
      <a href="#">
        <h3 id="heading_properties">
          [04] Prelims + Mains Combo 2021
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv GS_Test Series">
    <center>
      <a href="#">
        <h3 id="heading_properties">
          [05] Prelims + Mains + Essay Combo 2021
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>

  <div class="filterDiv GS_Foundation">
    <center>
      <a href="#">
        <h3 id="heading_properties">[01] Prelims 2021</h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv GS_Foundation">
    <center>
      <a href="#">
        <h3 id="heading_properties">
          [02] Mains 2021
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv GS_Foundation">
    <center>
      <a href="#">
        <h3 id="heading_properties">
          [03] Essay 2021
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv GS_Foundation">
    <center>
     <a href="#">
      <h3 id="heading_properties">
        [04] Prelims + Mains Combo 2021
      </h3>
      <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
    </a>
   </center>
  </div>
  <div class="filterDiv GS_Foundation">
    <center>
      <a href="#">
        <h3 id="heading_properties">
          [05] Prelims + Mains + Essay Combo 2021
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>

  <div class="filterDiv Optional_Classroom">
    <center>
      <a href="#">
        <h3 id="heading_properties">
          Geography Optional
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv Optional_Classroom">
    <center>
      <a href="#">
        <h3 id="heading_properties">
          PSIR Optional
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv Optional_Classroom">
    <center>
      <a href="#">
          <h3 id="heading_properties">
              Sociology Optional
          </h3>
          <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv Optional_Classroom">
    <center>
      <a href="#">
        <h3 id="heading_properties">
          Public Administration Optional
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>

  <div class="filterDiv Optional_Test_Series">
    <center>
      <a href="#">
        <h3 id="heading_properties">
          Geography Optional
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv Optional_Test_Series">
    <center>
      <a href="#">
        <h3 id="heading_properties">
          PSIR Optional
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv Optional_Test_Series">
    <center>
      <a href="#">
        <h3 id="heading_properties">
          Sociology Optional
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv Optional_Test_Series">
    <center>
      <a href="#">
        <h3 id="heading_properties">
          Public Administration Optional
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv Optional_Test_Series">
    <center>
      <a href="#">
        <h3 id="heading_properties">
          Geology Optional (IAS & IFS)
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>

  <div class="filterDiv Optional_Foundation">
    <center>
      <a href="#">
        <h3 id="heading_properties">
          Geography Optional
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv Optional_Foundation">
    <center>
      <a href="#">
        <h3 id="heading_properties">PSIR Optional</h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv Optional_Foundation">
    <center>
      <a href="#">
        <h3 id="heading_properties">
          Sociology Optional
        </h3>
        <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv Optional_Foundation">
    <center>
      <a href="#">
      <h3 id="heading_properties">
         Public Administration Optional
      </h3>
      <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
  <div class="filterDiv Optional_Foundation">
    <center>
      <a href="#">
      <h3 id="heading_properties">
        Geology Optional (IAS & IFS)
      </h3>
      <p id="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
      </a>
    </center>
  </div>
</div>
</div>
</section>

<script>

filterSelection("Special_Courses")


function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all"){ 
  c = "";
  }
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>





<!--    <div class="row" >
      <div class="col-lg-12" >
        <ul id="portfolio-flters" class="display_inline_scroll" >
          <li data-filter="*" class="filter-active" id="button_properties">All Courses</li>
          <li data-filter=".filter-d" id="button_properties">Special Courses</li>
          <li data-filter=".filter-h" id="button_properties">Crash Courses</li>
          <li data-filter=".filter-e" id="button_properties">GS Classroom</li>
          <li data-filter=".filter-f" id="button_properties">GS Test Series</li>
          <li data-filter=".filter-g" id="button_properties">GS Foundation</li>
          <li data-filter=".filter-a" id="button_properties">Optional Classroom</li>
          <li data-filter=".filter-b" id="button_properties">Optional Test Series</li>
          <li data-filter=".filter-c" id="button_properties">Optional Foundation</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" >

      <div class="col-lg-4 col-md-6 portfolio-item filter-g wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <a href="./course_1.php">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties">[01] Prelims 2021</h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
          </a>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 portfolio-item filter-g wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <a href="#">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties">[02] Mains 2021</h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-g wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <a href="#">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties">[03] Essay 2021</h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-g wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <a href="#">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties" >[04] Prelims + Mains
              Combo 2021</h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
        </a>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-g wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <a href="#">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties">[05] Prelims + Mains + Essay Combo 2021</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </a>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-f wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">[01] Prelims 2021</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 portfolio-item filter-f wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">[02] Mains 2021</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-f wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">[03] Essay 2021</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-f wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">[04] Prelims + Mains
              Combo 2021</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-f wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">[05] Prelims + Mains + Essay Combo 2021</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-md-6 portfolio-item filter-h wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">[01] Prelims 2.0 2021</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-a wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">Geography Optional</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-a wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">PSIR Optional</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-a wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">Sociology Optional</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-a wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">Public Administration Optional</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-a wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">Geology Optional (IAS & IFS)</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-e wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">[01] Prelims 2021</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 portfolio-item filter-e wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">[02] Mains 2021</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-e wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">[03] Essay 2021</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-e wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">[04] Prelims + Mains
              Combo 2021</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-e wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">[05] Prelims + Mains + Essay Combo 2021</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-b wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">Geography Optional</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-b wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">PSIR Optional</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-b wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">Sociology Optional</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-b wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">Public Administration Optional</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-b wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">Geology Optional (IAS & IFS)</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>


      
      <div class="col-lg-4 col-md-6 portfolio-item filter-c wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">Geography Optional</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div> -->

      <!-- 
      <div class="col-lg-4 col-md-6 portfolio-item filter-c wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">PSIR Optional</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-c wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">Sociology Optional</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-c wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">Public Administration Optional</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-c wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">Geology Optional (IAS & IFS)</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-d wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">[01] 20-20 and 50-50 Series 2021</a></h3>
            <p class="paragraph_properties">70 high yielding topics for prelims</p>
          </center> 
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-d wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">[02] PT360</a></h3>
            <p class="paragraph_properties">5 year Current Affair for Prelims</p>
          </center> 
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-d wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">[03] Mains seat Guarantee programme (MSGP)</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions for prelims 25 years</p>
          </center> 
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-d wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">[04] Mains in 300 Topics 2021</a></h3>
            <p class="paragraph_properties">5 Years Contemporary Issues + 1 Year Current Affairs</p>
          </center> 
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-d wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">[05] Mains Answer Building</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-d wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">[06] GS 4 Ethics 2021</a></h3>
            <p class="paragraph_properties">Theory, Case Studies and Applied Ethics</p>
          </center> 
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-d wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">[07] CSAT</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-d wow fadeInUp" >
        <div class="col-lg-4 mt-4 mt-lg-0" id="card_sizes">
          <div class="icon-box">
          <center>
            <h3 class="heading_properties"><a href="#">[08] Hindu & Indian Express in 5 mint.</a></h3>
            <p class="paragraph_properties">Comprehensive Solutions For Mains 40 Years</p>
          </center> 
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->


    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Clients</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> --><!-- End Clients Section -->

  </main><!-- End #main -->

  <?php include "footer.php"; ?>