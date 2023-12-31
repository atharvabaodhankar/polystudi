<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include_once "../inc/header.php";
  include_once "../inc/import.php";
  getStyles("PolyStudi || CM 4 I", "../");
  ?>
</head>

<body>
  <div class="loader-wrapper">
    <img src="../images/loading.gif" alt="" />
  </div>
  <!-- Header/Hero -->
  <section id="hero">
    <?php

    require_once "../inc/header.php";
    navbar(
      [
        "Assignment" => "Assignments",
        "Paper" => "Papers"
      ],
      "../"
    );

    ?>
    <div id="hero-div">
      <div class="hero-div-main">
        <h1 class="hero-h1">CM 4 I</h1>
        <div class="hero-div-inner">
          <h3 class="hero-h3-1">For Students</h3>
          <span></span>
          <h3 class="hero-h3-1">By Students</h3>
        </div>
        <p>
          Polystudi is more than just a website, it's a movement. We're
          passionate about empowering polytechnic students to achieve their
          academic dreams. So, what are you waiting for? Join the Polystudi
          fam, crank up your learning curve, and watch your potential explode!
        </p>
      </div>
    </div>
  </section>
  <!-- Syllabus -->
  <section id="syllabus">
    <div class="syllabus-head section-head">
      <h1 class="p-h1 sy-h1">Syllabus</h1>
    </div>
    <div class="syllabus-main">
      <table class="syllabus-table">
        <thead>
          <tr>
            <th>Sr.No</th>
            <th>Subject Name</th>
            <th>Subject Code</th>
            <th>Total Marks</th>
            <th>Download PDF</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Java Programming (JPR)</td>
            <td>22412</td>
            <td>200</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1se1NWnX-jUBICBrdZ6cod_0LRawVS5RX/view?usp=drive_link">Download</a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Software Engineering (SEN)</td>
            <td>22413</td>
            <td>150
            </td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1xKCyL9IfWUJj1iYSgzkzDZ4ovfhl1pjj/view?usp=drive_link">Download</a>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>Data Communication and Computer Network (DCC)</td>
            <td>22414</td>
            <td>150</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1GtaTXknZleMKjWzmhbJCxMwuG6nNM8Gm/view?usp=drive_link">Download</a>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>Microprocessors (MIC)</td>
            <td>22415</td>
            <td>150</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1sE45w5MIg6WCbvUXmhG_qIgnqFvUJfHw/view?usp=drive_link">Download</a>
            </td>
          </tr>
          <tr>
            <td>5</td>
            <td>Gui Application Development Using Vb.Net (GAD)</td>
            <td>22034</td>
            <td>100</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1x9I7fz8TvTdCLWVKOJ6gLYZXAHP0510z/view?usp=drive_link">Download</a>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </section>
  <!-- Manual -->
  <section id="manual">
    <div class="manual-head section-head">
      <h1 class="p-h1 m-h1">Manuals</h1>
    </div>
    <div class="slide-container swiper">
      <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
          <div class="card swiper-slide">
            <div class="card-image">
              <img src="https://drive.google.com/uc?export=view&id=1kkXMFTSTOwXvW5QWh9D2WwQ2SWrAUQQo" alt="" />
            </div>
            <div class="card-content">
              <h1>22412 - Java Programming (JPR)</h1>
              <a target="_blank" href="#" class="manual-btn">
                <span class="m-btn-c"><i class="fa fa-download"></i></span>
                <span class="m-btn-download">Download</span>
                <span class="m-btn-h">Click here</span>
              </a>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="card-image">
              <img src="https://drive.google.com/uc?export=view&id=1LB3Seb_MqrN4iXaboZF76lufm4d0QEZT" alt="" />
            </div>
            <div class="card-content">
              <h1>
                22413- Software Engineering (SEN)
              </h1>
              <a target="_blank" href="#" class="manual-btn">
                <span class="m-btn-c"><i class="fa fa-download"></i></span>
                <span class="m-btn-download">Download</span>
                <span class="m-btn-h">Click here</span>
              </a>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="card-image">
              <img src="https://drive.google.com/uc?export=view&id=14D9QNVhd5NUXIWXNT2zIom3WaW2AV8MJ" alt="" />
            </div>
            <div class="card-content">
              <h1>22414- Data Communication and Computer Network (DCC)</h1>
              <a target="_blank" href="#" class="manual-btn">
                <span class="m-btn-c"><i class="fa fa-download"></i></span>
                <span class="m-btn-download">Download</span>
                <span class="m-btn-h">Click here</span>
              </a>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="card-image">
              <img src="https://drive.google.com/uc?export=view&id=1amKrrd4AgvzKVkp4hE1yKdr0MNfa5pGR" alt="" />
            </div>
            <div class="card-content">
              <h1>22415- Microprocessors (MIC)</h1>
              <a target="_blank" href="#" class="manual-btn">
                <span class="m-btn-c"><i class="fa fa-download"></i></span>
                <span class="m-btn-download">Download</span>
                <span class="m-btn-h">Click here</span>
              </a>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="card-image">
              <img src="https://drive.google.com/uc?export=view&id=1T2BdQGkB_LHoVJp6sKTlwZZlUZN_YsPV" alt="" />
            </div>
            <div class="card-content">
              <h1>22034- Gui Application Development Using Vb.Net (GAD)</h1>
              <a target="_blank" href="#" class="manual-btn">
                <span class="m-btn-c"><i class="fa fa-download"></i></span>
                <span class="m-btn-download">Download</span>
                <span class="m-btn-h">Click here</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
    </div>
  </section>
  <!-- Solved Papers -->
  <section id="solvedpapers">
    <div class="solvedpapers-head section-head">
      <h1 class="p-h1 sp-h1">Solved Papers</h1>
    </div>
    <div class="solvedpapers-main">
      <table class="syllabus-table">
        <thead>
          <tr>
            <th>Sr.No</th>
            <th>Subject Name</th>
            <th>Download PDF</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Java Programming (JPR)</td>
            <td>
              <a href="../CM4I/papers.html">Download</a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Software Engineering (SEN)</td>
            <td>
              <a href="../CM4I/papers.html">Download</a>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>Data Communication and Computer Network (DCC)</td>
            <td>
              <a href="../CM4I/papers.html">Download</a>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>Microprocessors (MIC)</td>
            <td>
              <a href="../CM4I/papers.html">Download</a>
            </td>
          </tr>


        </tbody>
      </table>
    </div>
  </section>
  <!-- Notes -->
  <section id="notes">
    <div class="notes-head section-head">
      <h1 class="p-h1 n-h1">Notes</h1>
    </div>
    <div class="notes-main">
      <div class="notes-box" data-tilt data-tilt-max="20" data-tilt-speed="300" data-tilt-perspective="500">
        <div class="notes-box-content">
          <h1>Java Programming</h1>
          <p>By ......... ............. ..............</p>
          <a href="#" class="cu-btn">Soon</a>
        </div>
      </div>
      <div class="notes-box" data-tilt data-tilt-max="20" data-tilt-speed="300" data-tilt-perspective="500">
        <div class="notes-box-content">
          <h1>Software Engineering </h1>
          <p>By ......... ............. ..............</p>
          <a href="#" class="cu-btn">Soon</a>
        </div>
      </div>
      <div class="notes-box" data-tilt data-tilt-max="20" data-tilt-speed="300" data-tilt-perspective="500">
        <div class="notes-box-content">
          <h1>Data Communication and Network</h1>
          <p>By ......... ............. ..............</p>
          <a href="#" class="cu-btn">Soon</a>
        </div>
      </div>
      <div class="notes-box" data-tilt data-tilt-max="20" data-tilt-speed="300" data-tilt-perspective="500">
        <div class="notes-box-content">
          <h1>Vb.Net</h1>
          <p>By ......... ............. ..............</p>
          <a href="#" class="cu-btn">Soon</a>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <?php
  getFooter();
  getScript("../"); ?>
</body>

</html>