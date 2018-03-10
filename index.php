<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" href="images/other/hall12.png" type="image/x-icon" />
  <title>Hall 12</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Hall of Residence 12 is the newest among all other hostels at IIT Kanpur. It is the only male Hostel having a lift for the students. It is situated at north-west zone of IIT Kanpur campus. The hostel has six blocks, A, B, C, D, E, ad F and each block is 6 storey building. It has capacity of about 600 students with about 456 rooms. The Hall has single, double and triple occupancy.. The hall mainly consists of first, second, third year B.Tech students."
  />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="hall12,Hall 12,IIT Kanpur">
  <meta name="author" content="Akash kumar singh">
  <script src="js/lib/jquery-1.11.1.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="css/index.css">

</head>

<body>
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <style>
    body {
      overflow: hidden;
    }

    #preloader {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #fff;
      z-index: 99;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    #status {
      height: 350px;
      width: 350px;
      position: absolute;
      background-image: url(images/other/loading.gif);
      background-repeat: no-repeat;
    }
  </style>

  <script>
    $(window).on('load', function() {
      $('#status').fadeOut();
      $('#preloader').delay(350).fadeOut('slow');
    });
  </script>

  <header>
    <div class="container">
      <nav class="site-nav">
        <ul>
          <li><a onclick="go(0)" class="a" id='a0' style="cursor:pointer;">Home</a></li>
          <li><a onclick="go(1)" class="a" id='a1' style="cursor:pointer;">Hall warden & HEC</a></li>
          <li><a onclick="go(2)" class="a" id='a2' style="cursor:pointer;">Hall office & Announcement</a></li>
          <li><a onclick="go(3)" class="a" id='a3' style="cursor:pointer;">Mess & Dues</a></li>
          <li><a onclick="go(4)" class="a" id='a4' style="cursor:pointer;">Forms & Link</a></li>
          <li><a onclick="go(5)" class="a" id='a5' style="cursor:pointer;">counselling service</a></li>
          <li><a onclick="go(6)" class="a" id='a6' style="cursor:pointer;">General championship</a></li>
          <li><a onclick="go(7)" class="a" id='a7' style="cursor:pointer;">Club</a></li>
        </ul>
      </nav>
      <div class="menu-toggle">
        <div class="hamburger"></div>
      </div>
    </div>
  </header>
  <div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
    <img src="images/other/hall_day.jpg" alt="Smiley face" height="550px" width="350px">
    </div>

  </div>
  <div id="bo">
    <div id="p0" class="pages">
      <div class="a" id="azara" style="  position: absolute;  width: 100%;  background-size: 100% 100%;height: 100%;background-color:rgba(255,255,255,0.3);display:flex;flex-direction:column;  align-items: center;justify-content: center;font-family:samaa;color:rgb(50,50,50);">
        <div style="font-family:sama;">Hall 12</div>
        <br>
        <div style="width:70vw">Hall of Residence 12 is the newest among all other hostels at IIT Kanpur. It is the only male Hostel having a lift for the students. It is situated at the north-west zone of IIT Kanpur campus. The hostel has six blocks, A, B, C, D, E, and F and
          each block is 6 storey building. It has a capacity of about 600 students with about 456 rooms. The Hall has single, double and triple occupancy... The hall mainly consists of first, second, third-year B.Tech students.</div>
      </div>
    </div>
    <div id="p2" class="pages">
      <div class="ohellx" onmouseover="nonnn()" onmouseout="yes()">
        <div style="z-index: inherit;" id="announcement">
          <div class="anthumtop">Hall office</div>
          <div id="helli" onmouseover="nonnn()" onmouseout="yes()">
            <div class="pa" style="background-image:url('images/office/o1.jpeg');">
              <div class="paa">
                OFFICE INCHARGE
                <br>SUNIL KUMAR PATHAK
                <div class="hi">9125323884
                </div>
              </div>
            </div>
            <div class="pa" style="background-image:url('images/office/o2.jpg');">
              <div class="paa">
                assistant
                <br>DINESH CHANDRA PAL
                <div class="hi">7309200637
                </div>
              </div>
            </div>
            <div class="pa" style="background-image:url('images/office/o3.jpg');">
              <div class="paa">
                assistant
                <br>DINESH GAUR
                <div class="hi">8960623343
                </div>
              </div>
            </div>
          </div>
          <div style="display:flex;flex-wrap: nowrap;font-family: 'Open Sans', sans-serif;">
            <div style="flex:1;margin-bottom:50px;display: flex;align-items: center;flex-direction:column;;">
              <br>
              <div style="flex:1;margin-bottom:50px;display: flex;align-items: center;justify-content:center;flex-wrap:wrap;" id="news">
                <a href="administration.html" target="_blank" class="events">
                  <div style="margin:auto;">ADMINISTRATION</div>
                </a>
                <a href="meet.html" target="_blank" class="events">
                  <div style="margin:auto;"><b><b>MINUTES OF MEETING</b><br></b>
                  </div>
                </a>
                <a href="https://docs.google.com/spreadsheets/d/15eudwkEox4yarSqp2PxNuWx_1F6A6z0neaO5bXa37ZE/edit#gid=0" target="_blank" class="events">
                  <div class="date-box">
                    <div class="date-format">29</div>
                    <div class="month-format">Aug'17</div>
                  </div>
                  <div style="margin:auto;"><b><b>BUDGET</b><br></b>
                  </div>
                </a>
                <a href="https://docs.google.com/spreadsheets/d/10sOOC30sO2O8n7AUMHeyvpelGF-7R_9bv-aFTMQt67Y/edit#gid=0" target="_blank" class="events">
                  <div class="date-box">
                    <div class="date-format">25</div>
                    <div class="month-format">Jan'18</div>
                  </div>
                  <div style="margin:auto;"><b><b>PURCHASE DETAILS</b><br></b>
                  </div>
                </a>
                <a href="notification.html" target="_blank" class="events">
                  <div style="margin:auto;"><b><b>NOTIFICATION</b><br></b>
                  </div>
                </a>
              </div>
            </div>
            <!--  <div style="flex:1;min-width:500px;width:auto;flex:1;margin-bottom:50px;display: flex;align-items: center;flex-direction:column;">
            <div class="anthumtop">Minutes of meeting</div>
            <a href="pdf/1st.pdf" target="_blank" class="events">
             <div class="date-box">
              <div class="date-format">8</div>
              <div class="month-format">Aug'17</div>
            </div> <b>First HEC Meeting</b><br>
          </a>
        </div>--></div>
        </div>
      </div>
    </div>
    <div id="p1" class="pages">
      <div class="helli" onmouseover="nonnn()" onmouseout="yes()">
        <div class="hellio">wardens</div>
        <a target="_blank" href="http://home.iitk.ac.in/~agaur/">
          <div class="pa" style="background-image:url('images/warden/anshu.jpeg');">
            <div class="paa">
              Warden incharge
              <br>Anshu gaur
              <div class="hi"> +91 512 2597600
                <br>agaur@iitk.ac.in
                <br>Lab: WL 312</div>
            </div>
          </div>
        </a>
        <a target="_blank" href="http://iitk.ac.in/new/ark-verma">
          <div class="pa" style="background-image:url('images/warden/ark.jpeg');">
            <div class="paa">
              Mess Warden
              <br>Ark verma
              <div class="hi">0512-259-6847
                <br>arkverma@iitk.ac.in</div>
            </div>
          </div>
        </a>
        <a target="_blank" href="http://iitk.ac.in/new/shankar-prawesh">
          <div class="pa" style="background-image:url('images/warden/3.jpeg');">
            <div class="paa">
              Maintainence Wadern
              <br>Shankar Prawesh
              <div class="hi">0512-259-6182
                <br>sprawesh@iitk.ac.in</div>
            </div>
          </div>
        </a>
        <div class="hellio">HEC</div>

        <a target="_blank" href="https://www.facebook.com/abhishek.allenstudent">
          <div class="pa" style="background-image:url('images/hec/abhishek.jpg');">
            <div class="paa">
              president
              <br>Abhishek Singh
              <div class="hi">7318019917
                <br>abhisgh@iitk.ac.in</div>
            </div>
          </div>
        </a>
        <a target="_blank" href="https://www.facebook.com/nilay.tiwari.733">
          <div class="pa" style="background-image:url('images/hec/nilay.jpg');">
            <div class="paa">
              Mess and canteen
              <br>Nilay tiwari
              <div class="hi">9411844526
                <br>nilayt@iitk.ac.in</div>
            </div>
          </div>
        </a>
        <a target="_blank" href="https://www.facebook.com/adhip.garg">
          <div class="pa" style="background-image:url('images/hec/adhip.jpg');">
            <div class="paa">
              Mess
              <br>Adhip garg
              <div class="hi">7318018998,9891669888
                <br>adhipg@iitk.ac.in</div>
            </div>
          </div>
        </a>
        <a target="_blank" href="https://www.facebook.com/streakzzz101">
          <div class="pa" style="background-image:url('images/hec/gajendra.jpg');">
            <div class="paa">
              accounts
              <br>gajendra meena
              <div class="hi">7318018981
                <br>gajenkm@iitk.ac.in</div>
            </div>
          </div>
        </a>
        <a target="_blank" href="https://www.facebook.com/siddhartha.d.srivastava">
          <div class="pa" style="background-image:url('images/hec/siddhartha.jpg');">
            <div class="paa">
              maintainence
              <br>Siddhartha Srivastava
              <div class="hi">7376235795
                <br>ssriva@iitk.ac.in</div>
            </div>
          </div>
        </a>
        <a target="_blank" href="https://www.facebook.com/chitralgupta11">
          <div class="pa" style="background-image:url('images/hec/chitral.jpg');">
            <div class="paa">
              cultural
              <br>chitral gupta
              <div class="hi">9413678035
                <br>chitral@iitk.ac.in</div>
            </div>
          </div>
        </a>
        <a target="_blank" href="https://www.facebook.com/suryansh.agarwal.90">
          <div class="pa" style="background-image:url('images/hec/suryansh.jpg');">
            <div class="paa">
              SNT
              <br>Suryansh Agarwal
              <div class="hi">9718643337
                <br>asurya@iitk.ac.in</div>
            </div>
          </div>
        </a>
        <a target="_blank" href="https://www.facebook.com/profile.php?id=100006784009242">
          <div class="pa" style="background-image:url('images/hec/ganesh.jpg');">
            <div class="paa">
              Sports Secretary
              <br> Ganesh Sharma
              <div class="hi">
                <br></div>
            </div>
          </div>
        </a>
        <a target="_blank" href="https://www.facebook.com/kalpraj.chaudhari">
          <div class="pa" style="background-image:url('images/hec/kalpraj.jpg');">
            <div class="paa">
              RR-CC
              <br> Kalpraj Chaudhari
              <div class="hi">7020721619
                <br>kalpraj@iitk.ac.in</div>
            </div>
          </div>
        </a>
        <a target="_blank" href="https://www.facebook.com/akash31ks">
          <div class="pa" style="background-image:url('images/hec/akash.jpg');">
            <div class="paa">
              Web master
              <br> Akash kumar singh
              <div class="hi">9169139387
                <br>akashks@iitk.ac.in</div>
            </div>
          </div>
        </a>
        <a target="_blank" href="https://www.facebook.com/utkarsh.dongardive.7">
          <div class="pa" style="background-image:url('images/hec/utkarsh.jpg');">
            <div class="paa">
              FMC
              <br>Utkarsh Dongardive
              <div class="hi">
                <br></div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div id="p3" class="pages">
      <div id="mess">
        <form>
          Mess menu
          <br>
          <select name="mess" id="abbba">
                        <option value="7">Today</option>
                        <option value="0">Sunday</option>
                        <option value="1">Monday</option>
                        <option value="2">Tuesday</option>
                        <option value="3">Wednesday</option>
                        <option value="4">Thursday</option>
                        <option value="5">Friday</option>
                        <option value="6">Saturday</option>
                    </select>
          <div class="button" onclick="mess()">Submit</div>
        </form>
        <div id="bbbb">
          <div style="font-family:rio;font-weight: 400;font-size:2vh;background-color:rgba(0,0,0,0.3);padding:1vh;">Mess menu</div>
        </div>
        <div style="display: flex;margin-bottom:10px;align-items: center;justify-content: center;width:100vw;"><a href="https://docs.google.com/spreadsheets/d/1WitjnJLHRxDSlFJM5YZeFnLMqg3uXT39vgfQ2Lwhly8/edit?usp=sharing" class="button">
          Hall dues
        </a></div>
        <div style="display: flex;align-items: center;justify-content: center;width:100vw;"><a target="_blank" href="https://www.onlinesbi.com/prelogin/icollecthome.htm" class="button">
          PAY hall dues
        </a></div>
      </div>
    </div>
    <div id="p4" class="pages">
      <div id="az">
        <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLScuJ1qQTXBfdi6VEq_mGPX0ON7KRFbaO2gTLANGu92gxloszA/viewform?usp=sf_link">
          <div class="linked">Complain Form
          </div>
        </a>
        <a target="_blank" href="guest.html">
          <div class="linked">Guest room booking
          </div>
        </a>
        <a target="_blank" href="https://docs.google.com/spreadsheets/d/1ZAPdzLQPMsI6QD4f0BQXiI4h5uigi0xb7RCtmyK85Ts/edit?usp=sharing">
          <div class="linked">Books in reading room
          </div>
        </a>
        <a target="_blank" href="https://docs.google.com/spreadsheets/d/1M2QEy0_zurx-qSNCFKfN-utSp8rgrdJLaGWOVa85JCc/pubhtml?widget=true&amp;headers=false">
          <div class="linked">Sports equipments
          </div>
        </a>
        <a target="_blank" href="https://docs.google.com/forms/u/0/d/e/1FAIpQLSdhoowRE0tdKBpvT8PcGq99Zc7LcEtLaGVDJnCsfumlCbZefQ/viewform?usp=sf_link">
          <div class="linked">Ask the HEC
          </div>
        </a>
        <a target="_blank" href="https://docs.google.com/spreadsheets/d/1r_4fDJN7NjCypXM9JDeJxqHpKV0m_kMb4drrcvVny7g/edit?usp=sharing">
          <div class="linked">Ask the HEC-response
          </div>
        </a>
        <a target="_blank" href="http://pkklib.iitk.ac.in/">
          <div class="linked">P K Kelkar library
          </div>
        </a>
        <a target="_blank" href="http://students.iitk.ac.in/gymkhana/">
          <div class="linked">Students Gymkhana
          </div>
        </a>
        <a target="_blank" href="http://students.iitk.ac.in/snt/">
          <div class="linked">SNT council
          </div>
        </a>
        <a target="_blank" href="http://students.iitk.ac.in/cultcouncil/cult/">
          <div class="linked">Cultural council
          </div>
        </a>
        <a target="_blank" href="students.iitk.ac.in/sports/">
          <div class="linked">Games & Sports council
          </div>
        </a>
        <a target="_blank" href="https://www.iitk.ac.in/doaa/academic-calendar">
          <div class="linked">Academic calender
          </div>
        </a>
        <a target="_blank" href="http://www.iitk.ac.in/new/emergency-services">
          <div class="linked">Emergency service
          </div>
        </a>
        <a target="_blank" href="http://pingala.iitk.ac.in/">
          <div class="linked">IWD Complaint
          </div>
        </a>
        <a target="_blank" href="http://www.iitk.ac.in/ccnew/index.php/network/hostel-ip-address">
          <div class="linked">Room IP address
          </div>
        </a>
        <a target="_blank" href="http://www.iitk.ac.in/hc/">
          <div class="linked">Health center
          </div>
        </a>
      </div>
      <div id="link">
        <div id="links">
          <div id="flip" style="cursor:pointer;">Complain form</div>
          <a target="_blank" href="guest.html">
            <div class="linked">Guest room booking
            </div>
          </a>
          <div id="fl" style="cursor:pointer;">Books list</div>
          <div id="flii" style="cursor:pointer;">Sports equipments</div>
          <div id="fliii" style="cursor:pointer;">Ask the HEC</div>
          <div id="fliiii" style="cursor:pointer;">Ask the HEC-response</div>
          <a target="_blank" href="http://pkklib.iitk.ac.in/">
            <div class="linked">P K Kelkar library
            </div>
          </a>
          <a target="_blank" href="http://students.iitk.ac.in/gymkhana/">
            <div class="linked">Students Gymkhana
            </div>
          </a>
          <a target="_blank" href="http://students.iitk.ac.in/snt/">
            <div class="linked">SNT council
            </div>
          </a>
          <a target="_blank" href="http://students.iitk.ac.in/cultcouncil/cult/">
            <div class="linked">Cultural council
            </div>
          </a>
          <a target="_blank" href="https://students.iitk.ac.in/sports/">
            <div class="linked">Games & Sports council
            </div>
          </a>
          <a target="_blank" href="https://www.iitk.ac.in/doaa/academic-calendar">
            <div class="linked">Academic calender
            </div>
          </a>
          <a target="_blank" href="http://www.iitk.ac.in/new/emergency-services">
            <div class="linked">Emergency service
            </div>
          </a>
          <a target="_blank" href="http://pingala.iitk.ac.in/">
            <div class="linked">IWD Complaint
            </div>
          </a>
          <a target="_blank" href="http://www.iitk.ac.in/ccnew/index.php/network/hostel-ip-address">
            <div class="linked">Room IP address
            </div>
          </a>
          <a target="_blank" href="http://www.iitk.ac.in/hc/">
            <div class="linked">Health center
            </div>
          </a>
        </div>
        <div style="overflow-y:scroll;flex:1;max-height:80vh;background-color:rgba(00,00,00,0);padding-bottom:4vh;padding-left:0px;" onmouseover="nonnn()" onmouseout="yes()">
          <div id="panel">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScuJ1qQTXBfdi6VEq_mGPX0ON7KRFbaO2gTLANGu92gxloszA/viewform?embedded=true" height="800" frameborder="0" marginheight="0" style="width:48vw;" marginwidth="0">
                        </iframe>
          </div>
          <div id="pane">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdWGSO2rWn3kNaBf6mmXOogA6ApwOks8jw1WbZgfT6rjNlEKw/viewform?embedded=true" height="800" frameborder="0" marginheight="0" marginwidth="0" style="width:48vw;">
                        </iframe>
          </div>
          <div id="pan">
            <iframe src="https://docs.google.com/spreadsheets/d/1ZAPdzLQPMsI6QD4f0BQXiI4h5uigi0xb7RCtmyK85Ts/pubhtml?widget=true&amp;headers=false" height="800" frameborder="0" marginheight="0" marginwidth="0" style="width:48vw;"></iframe>
          </div>
          <div id="pann">
            <iframe src="https://docs.google.com/spreadsheets/d/1M2QEy0_zurx-qSNCFKfN-utSp8rgrdJLaGWOVa85JCc/pubhtml?widget=true&amp;headers=false" height="800" frameborder="0" marginheight="0" marginwidth="0" style="width:48vw;"></iframe>
          </div>
          <div id="pannn">
            <iframe src="https://docs.google.com/forms/u/0/d/e/1FAIpQLSdhoowRE0tdKBpvT8PcGq99Zc7LcEtLaGVDJnCsfumlCbZefQ/viewform?embedded=true" style="width:48vw;" height="800" frameborder="0" marginheight="0" marginwidth="0">
                        </iframe>
          </div>
          <div id="pannnn">
            <iframe src="https://docs.google.com/spreadsheets/d/1r_4fDJN7NjCypXM9JDeJxqHpKV0m_kMb4drrcvVny7g/edit?usp=sharing" style="width:48vw;" height="800" frameborder="0" marginheight="0" marginwidth="0">
                        </iframe>
          </div>
        </div>
      </div>
    </div>
    <div id="p5" class="pages">
      <form>
        Counselling Service
        <br>
        <select name="cs" id="abba">
                    <option value="8">Core team</option>
                    <option value="7">SG</option>
                    <optgroup label="AM">
                        <option value="0">MTH101/102</option>
                        <option value="1">ESC101</option>
                        <option value="2">PHY102</option>
                        <option value="3">PHY103</option>
                        <option value="4">CHM102</option>
                        <option value="5">TA101</option>
                        <option value="6">LIF101</option>
                    </optgroup>
                </select>
        <br>
        <div class="button" onclick="cs()">Submit</div>
      </form>
      <div id="b0" class="club" style="text-align:center;font-family:myFont;font-size:3vh;">
        <div style="font-family:rom;font-size:5vh;">MTH101/102</div>
        <br>
        <br> Ankush Tiwari
        <br> Kamresh Agarwal
        <br> Karan Jha
        <br> Mayank Shrivastava
        <br> Siddhant Kar
        <br> Vishal Rathore
        <br>
      </div>
      <div id="b1" class="club" style="text-align:center;font-family:myFont;font-size:3vh;">
        <div style="font-family:rom;font-size:5vh;">ESC101</div>
        <br>
        <br> Ahsan Barkati
        <br> Aditya Garg
        <br> Akhil Jha
        <br> Ayush Gupta
        <br> Jenil Mewada
        <br> Promit Chakroborty
        <br> Vishal Singh
        <br>
      </div>
      <div id="b2" class="club" style="text-align:center;font-family:myFont;font-size:3vh;">
        <div style="font-family:rom;font-size:5vh;">PHY102</div>
        <br>
        <br> Adarsh Kumar
        <br> Anurag Pandey
        <br> Nachiket Karve
        <br> Samridh Joshi
        <br>
      </div>
      <div id="b3" class="club" style="text-align:center;font-family:myFont;font-size:3vh;">
        <div style="font-family:rom;font-size:5vh;">PHY103</div>
        <br>
        <br> Anay Mehrotra
        <br> Aritra Das
        <br> Ayush Basu
        <br> Kishan Sankharva
        <br>
      </div>
      <div id="b4" class="club" style="text-align:center;font-family:myFont;font-size:3vh;">
        <div style="font-family:rom;font-size:5vh;">CHM102</div>
        <br>
        <br> Avijit Kalra
        <br> Sunil Prajapati
        <br>
      </div>
      <div id="b5" class="club" style="text-align:center;font-family:myFont;font-size:3vh;">
        <div style="font-family:rom;font-size:5vh;">TA101</div>
        <br>
        <br> Niket Agarwal
        <br> Shubham Singh
        <br>
      </div>
      <div id="b6" class="club" style="text-align:center;font-family:myFont;font-size:3vh;">
        <div style="font-family:rom;font-size:5vh;">LIF101</div>
        <br>
        <br> Sagar Chaudhary
        <br>
      </div>
      <div id="b7" class="club" onmouseover="nonnn()" onmouseout="yes()" style="text-align:center;font-family:myFont;font-size:3vh;overflow-y:scroll;">
        <div style="font-family:rom;font-size:5vh;">SG</div>
        <br>
        <br> Abhinav Arora
        <br> Abhinav Tiwari
        <br> Ahsan Barkati
        <br> Akhil Jha
        <br> Anay Mehrotra
        <br> Aryaman Jha
        <br> Aryan Singh
        <br> Ashish Kumar
        <br> Augustya Sudarshan
        <br> Avijit Kalra
        <br> Devanshu Somani
        <br> Dhruv Mittal
        <br> Divyankar Pratyush
        <br> Gaurav Rawat
        <br> Hardik Harsh
        <br> Himanshu Arora
        <br> Kushagra Ahuja
        <br> Kshitiz Shukla
        <br> Mohammad Atif
        <br> Mohit Kumar Singh
        <br> Naman Verma
        <br> Mitul Patel
        <br> Promit Chakrobarty
        <br> Sagar Chaudhary
        <br> Shashikant
        <br> Shivam Barodiya
        <br> Shubham Pandey
        <br> Siddhart Chinmay
        <br> Smit Choudhary
        <br> Sirjan Jain
        <br> Suraj Hanchinal
        <br> Suyash Agrawal
        <br> Tanay Batra
        <br> Vaibhav Pratap Singh
        <br> Vardhan Gupta
      </div>
      <div id="b8" class="club" onmouseover="nonnn()" onmouseout="yes()" style="text-align:center;font-family:myFont;font-size:3vh;overflow-y:scroll;  display: flex;flex-wrap: wrap;align-items: center;justify-content: center;">
        <a target="_blank" href="https://www.facebook.com/profile.php?id=100010147443976">
          <div class="pa" style="background-image:url('http://www.iitk.ac.in/counsel/images/team/acads/abhikr.jpg');">
            <div class="paa">
              Academics Team
              <br>Abhishek Kumar
              <div class="hi">9454025308
                <br>abhikr@iitk.ac.in</div>
            </div>
          </div>
        </a>
        <a target="_blank" href="https://www.facebook.com/arjungupta3276">
          <div class="pa" style="background-image:url('http://www.iitk.ac.in/counsel/images/team/acads/arjung.jpg');">
            <div class="paa">
              Academics Team
              <br>Arjun Gupta
              <div class="hi">9140880210
                <br>arjung@iitk.ac.in</div>
            </div>
          </div>
        </a>
        <a target="_blank" href="https://www.facebook.com/akshay.thengane">
          <div class="pa" style="background-image:url('http://www.iitk.ac.in/counsel/images/team/ops/akshayt.jpg');">
            <div class="paa">
              Operations Team
              <br>Akshay Thengane
              <div class="hi">7054117957
                <br>akshayt@iitk.ac.in</div>
            </div>
          </div>
        </a>
        <a target="_blank" href="https://www.facebook.com/m.abbas88">
          <div class="pa" style="background-image:url('http://www.iitk.ac.in/counsel/images/team/ops/mzaidi.jpg');">
            <div class="paa">
              Operations Team
              <br>Mohd Abbas Zaidi
              <div class="hi">8948267081
                <br>mzaidi@iitk.ac.in</div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div id="p6" class="pages">
      <div class="hellx">
        <div style="z-index: inherit;top:0px; right:0px;" id="anthum" onmouseover="nonnn()" onmouseout="yes()">
          <div class="anthumtop">General championship</div>
          <br>
          <br> General championship is an annual inter hostel event organised by the student's Gymkhana which tests the hall residents with different skill set. Every council has a different event with the council relevant competitions like inferno for
          sports, takneek for technological and entrepreneurship skills, Spectrum is organised by the films and media council and galaxy to test the cultural skill. Each hostel strives hard to win the extravagant General championship trophy. Each participating
          hall has a pool name allotted to it. We participate under the pool name Maratha.
          <br>
          <br>
          <br>
          <br>
          <div class="anthumtop">Pool Anthem</div>
          <br>Veer Shiva Shamsheer Maratha
          <br>Anupam Nutan Santane
          <br>Rakt ubalta soch dehalti
          <br>Vijay Pataka lehrane
          <br> har ek dushman laute bas aankhon mein darr aur haar liye...
          <br> jab Chale maratha jange ladne haathon mein talvar liye!!!
          <br> jab chale maratha jange ladne hathon mein talvar liye
          <br>
          <br>
          <br>
          <div class="anthumtop">General championship results</div>
          <br>
          <br>The amount of hard work and the dedication with which our hall residents participates in general championship can be clearly seen by this year results-
          <br>
          <br>Fresher-Inferno - 1st
          <br>Takneek - 1st
          <br>
          <br>The amount of hard work and the dedication with which our hall residents participates in general championship can be clearly seen by the last year results-
          <br>
          <br>Inferno - 1st
          <br>Takneek - 1st
          <br>Spectrum - 2nd
          <br>Galaxy - 3rd
        </div>
        <canvas id="canvas"></canvas>

      </div>
      <div id="shivaji"></div>
    </div>
    <div id="p7" class="pages">
      <form>
        Clubs
        <br>
        <select name="clubs" id="abbu">
                    <option value="0">Aeromodelling</option>
                    <option value="1">Astronomy Club</option>
                    <option value="12">Dance club</option>
                    <option value="6">DebSoc</option>
                    <option value="2">Electronics Club</option>
                    <option value="7">ELS</option>
                    <option value="11">Film club</option>
                    <option value="9">Fine arts</option>
                    <option value="8">HSS</option>
                    <option value="13">Music club</option>
                    <option value="10">Photography club</option>
                    <option value="3">Programming Club</option>
                    <option value="4">Robotics Club</option>
                    <option value="5">Rubik Cube Hobby Group</option>
                </select>
        <br>
        <div class="button" onclick="club()">Submit</div>
      </form>
      <div id="0" class="club" style="text-align:center;font-family:myFont;font-size:3vh;overflow-y: scroll;display: flex;flex-wrap: wrap;align-items: center;justify-content: center;">
        <a target="_blank" href="https://www.facebook.com/unnat.singh.1">
          <div class="pa" style="background-image:url('https://scontent-bom1-1.xx.fbcdn.net/v/t1.0-9/13238977_926659760780299_1132121803530195330_n.jpg?oh=b9ee3b1085860f7bea7a6c01f5612a10&oe=5A6E453A');">
            <div class="paa">
              Coordinator
              <br>Unnat singh
            </div>
          </div>
        </a>
        <a target="_blank" href="https://www.facebook.com/i.m.gajen">
          <div class="pa" style="background-image:url('images/cordi/aero1.jpg');">
            <div class="paa">
              Coordinator
              <br>Gajendra Nagar
            </div>
          </div>
        </a>
        <a target="_blank" href="https://www.facebook.com/profile.php?id=100001482115581">
          <div class="pa" style="background-image:url('images/cordi/aero2.jpg');">
            <div class="paa">
              Coordinator
              <br>Prashant singh
            </div>
          </div>
        </a>
        <br>Neerak Dhanandiya
        <br>Akhilesh kumar gupta
        <br>Vishal Singh
        <br>Vaibhav Agarwal</div>
      <div id="1" class="club" style="text-align:center;font-family:myFont;font-size:3vh;overflow-y: scroll;display: flex;flex-wrap: wrap;align-items: center;justify-content: center;">
        <a target="_blank" href="https://www.facebook.com/pranavkulkarni12">
          <div class="pa" style="background-image:url('images/cordi/astro.jpg');">
            <div class="paa">
              Coordinator
              <br>Pranav Kulkarni
            </div>
          </div>
        </a>
        <br>Aniket Pandey
        <br>Kishan Sankharva
        <br>R Rajat
        <br>Malay Kumar Mohanta
        <br>Sandarsh Gupta
        <br>Adarsh Kumar
        <br> Pranjal Pratik Lal</div>
      <div id="2" class="club" style="overflow-y: scroll;display: flex;flex-wrap: wrap;align-items: center;justify-content: center;text-align:center;font-family:myFont;font-size:3vh;">
        <a target="_blank" href="https://www.facebook.com/hardik1496">
          <div class="pa" style="background-image:url('images/cordi/elect.jpg');">
            <div class="paa">
              Coordinator
              <br>Hardik Maheshwari
            </div>
          </div>
        </a>
        <br>Avinash kumar
        <br>Nachiket Karve
        <br>Suraj Hanchinal</div>
      <div id="3" class="club" style="overflow-y: scroll;display: flex;flex-wrap: wrap;align-items: center;justify-content: center;text-align:center;font-family:myFont;font-size:3vh;">
        <a target="_blank" href="https://www.facebook.com/yash98/photos_all?lst=100011589708810%3A1752510270%3A1499542810">
          <div class="pa" style="background-image:url('https://scontent.fdel1-1.fna.fbcdn.net/v/t1.0-9/13346460_10201680761458129_539434041480890404_n.jpg?oh=850eed42891027a3cac84525b1e26049&oe=5A0E4DC3');">
            <div class="paa">
              Coordinator
              <br>Yash srivastav
            </div>
          </div>
        </a>
        <a target="_blank" href="https://www.facebook.com/milind.luthra">
          <div class="pa" style="background-image:url('https://scontent.fdel1-1.fna.fbcdn.net/v/t1.0-9/13221499_1031365370273025_5729535733715082328_n.jpg?oh=1de7e482305b0f68ae4f62b6b7a30685&oe=5A0E7F4F');">
            <div class="paa">
              Coordinator
              <br>Milind Luthra
            </div>
          </div>
        </a>
        <a target="_blank" href="https://www.facebook.com/arjun.sinha.9406">
          <div class="pa" style="background-image:url('images/cordi/panda.jpg');">
            <div class="paa">
              Coordinator
              <br>Arjun Sinha
            </div>
          </div>
        </a>
        <br> Aniket Pandey
        <br>Abhishek Yadav
        <br>Ahsan Barkati
        <br>Hritwik Taneja</div>
      <div id="4" class="club" style="overflow-y: scroll;display: flex;flex-wrap: wrap;align-items: center;justify-content: center;text-align:center;font-family:myFont;font-size:3vh;">
        <a target="_blank" href="https://www.facebook.com/profile.php?id=100009945753579">
          <div class="pa" style="background-image:url('https://scontent.fdel1-1.fna.fbcdn.net/v/t1.0-9/10392422_105806259760899_9153111995756856805_n.jpg?oh=53e5c224845323230235eb92672fcf37&oe=5A08915A');">
            <div class="paa">
              Coordinator
              <br>Saurabh Ranjan
            </div>
          </div>
        </a>
        <br> Akash Kumar Singh
        <br>Suryansh Agarwal
        <br>Shivank Garg
        <br>Abhishek arya
        <br>Abhinav Arora
        <br>Vivek Jain</div>
      <div id="5" class="club" style="text-align:center;font-family:myFont;font-size:3vh;">Vishal Singh
        <br>Aniket Pandey
        <br>Abhishek saini</div>
      <div id="6" class="club" style="overflow-y: scroll;display: flex;flex-wrap: wrap;align-items: center;justify-content: center;text-align:center;font-family:myFont;font-size:3vh;">
        <a target="_blank" href="https://www.facebook.com/ayushbasu07">
          <div class="pa" style="background-image:url('images/cordi/debsoc.jpg');">
            <div class="paa">
              Coordinator
              <br>Ayush basu
            </div>
          </div>
        </a>
        <br> Karan Jha
        <br>Siddhant Mhambrey</div>
      <div id="7" class="club" style="text-align:center;font-family:myFont;font-size:3vh;">Karan Jha
        <br>Siddhanta mhambrey
        <br>Siddhant thakur
        <br>Ayush basu
        <br>Aryaman jha</div>
      <div id="8" class="club" style="text-align:center;font-family:myFont;font-size:3vh;overflow-y: scroll;display: flex;flex-wrap: wrap;align-items: center;justify-content: center;">
        <a target="_blank" href="https://www.facebook.com/profile.php?id=100008329848790">
          <div class="pa" style="background-image:url('https://scontent.fdel1-1.fna.fbcdn.net/v/t1.0-9/14572197_1782886851998959_5260968010733639366_n.jpg?oh=df467b20aa2cc93f38bdff840844bf97&oe=5A08E1EE');">
            <div class="paa">
              Coordinator
              <br>Manvendra Singh Rajput
            </div>
          </div>
        </a>
        <br> Ayush Singh
        <br>Suyash Baranwal
        <br>Abhishek saini
        <br>Ankit Verma
        <br>Anup Nayak
        <br>Ashutosh Kumar
        <br>Prakhar Saxena
        <br>Saurabh Singh Yadav</div>
      <div id="9" class="club" style="text-align:center;font-family:myFont;font-size:3vh;">Ahsan Barkati
        <br>Anay Mehrotra
        <br>Akash Kumar Singh</div>
      <div id="10" class="club" style="overflow-y: scroll;display: flex;flex-wrap: wrap;align-items: center;justify-content: center;text-align:center;font-family:myFont;font-size:3vh;">
        <a target="_blank" href="https://www.facebook.com/rishab.kedia.710">
          <div class="pa" style="background-image:url('images/cordi/photo.jpg');">
            <div class="paa">
              Coordinator
              <br>Rishabh Kedia
            </div>
          </div>
        </a>
        <br> Niket Agrawal
        <br>Kunal Suryawanshi
        <br>Tanay Batra
        <br>Devanshu
        <br> Ayush Basu</div>
      <div id="11" class="club" style="overflow-y: scroll;display: flex;flex-wrap: wrap;align-items: center;justify-content: center;text-align:center;font-family:myFont;font-size:3vh;">
        <a target="_blank" href="https://www.facebook.com/shrirang.deshmukh.54">
          <div class="pa" style="background-image:url('https://scontent.fdel1-1.fna.fbcdn.net/v/t31.0-8/18320733_1464096736974918_8568464312244118406_o.jpg?oh=728b12cb89f581e7b624260724d5735a&oe=5A0E9706');">
            <div class="paa">
              Coordinator
              <br>Shrirang Deshmukh
            </div>
          </div>
        </a>
        <br> Niket Agrawal
        <br>Kunal Suryawanshi
        <br>Devanshu Somani
      </div>
      <div id="12" class="club" style="text-align:center;font-family:myFont;font-size:3vh;">Pulkit Prakash
        <br> Sahil Bansal </div>
      <div id="13" class="club" style="text-align:center;font-family:myFont;font-size:3vh;overflow-y: scroll;display: flex;flex-wrap: wrap;align-items: center;justify-content: center;">
        <a target="_blank" href="https://www.facebook.com/vidvat.ramachandran">
          <div class="pa" style="background-image:url('https://scontent.fdel1-1.fna.fbcdn.net/v/t1.0-9/12743977_1035057253211409_6982876232271557034_n.jpg?oh=7aea5bfe4ffb9734ecc4dc8b584e1a6b&oe=5A0CC7EE');">
            <div class="paa">
              Coordinator
              <br>Vidvat Ramachandran
            </div>
          </div>
        </a>
        <br>Dhruv Mittal</div>
    </div>
    <div id="pappu">
      <img onclick="uu()" src="images/other/previous.png" height="50" class="navbtn"></img>

      <a href="https://www.facebook.com/hall12iitkanpur/" target="_blank" style="background:rgba(100,100,100,0.5);  border-radius: 30%;"><img src="images/other/fb.png" style="height:3vh;"/></a>
      <div class="mail">
        <img src="images/other/email.png" style="height:3vh;" />hall12@iitk.ac.in
      </div>
      <div class="mail">
        <img src="images/other/phone.png" style="height:3vh;" />05122595737
      </div>
      <img onclick="dd()" src="images/other/next.png" height="50" class="navbtn"></img>
      <div class="mail" id="counter">
          <?php
          $handle = fopen("counter.txt", "r");
          if(!$handle){
              echo "could not open the file" ;
          }
          else {
              $counter = (int ) fread($handle,20);
              fclose ($handle); $counter++;
              echo" <strong> you are visitor no ". $counter . " </strong> " ;
              $handle = fopen("counter.txt", "w" );
              fwrite($handle,$counter) ;
              fclose ($handle) ;
          }
         ?>
    </div>
    </div>
</body>
<link rel="stylesheet" href="css/animate.css">
<script src="js/index.js"></script>

</html>
