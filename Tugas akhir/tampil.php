<!DOCTYPE html>
<html>
<head>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Times new roman;
      padding: 10px;
      background: #f1f1f1;
      background-image: url("abu.jpg");
    }

    .header {
      padding: 30px;
      text-align: center;
      background: white
    }

    .header h1 {
      font-size: 50px
    }

    .topnav {
      overflow: hidden;
      background-color: #333;
    }

    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    .leftcolumn {
      float: left;
      width: 25%;
      background-color: #f1f1f1;
      padding-left: 20px
    }

    .centercolumn {
      float: left;
      width: 50%;
      background-color: #f1f1f1;
      padding-left: 20px
    }

    .rightcolumn {
      float: left;
      width: 25%;
      background-color: #f1f1f1;
      padding-left: 20px
    }

    .fakeimg {
      background-color: #aaa;
      width: 75%;
    }

    .card {
      background-color: white;
      padding: 20px;
      margin-top: 20px;
    }

    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    .footer {
      padding: 20px;
      text-align: center;
      background-color: #ddd;
      margin-top: 15px;
    }

    .leftcolumn, .rightcolumn {
      width: 100%
      padding 0;
    }

    .topnav a {
      float: none;
      width: 100%
    }

html {
  font-size: 50%;
}

    .container {
      width: 100%;
      height: 100vh;
      background-color: lightgrey;
      color: #eee;
      display: flex;
      justify-content: center;
      align-items: center;
     }

    .calendar {
      width: 45rem;
      height: 52rem;
      background-color: grey;
      box-shadow: 0 0.5rem 3rem rgba(0, 0, 0, 0.4);
     }

    .month {
      width: 100%;
      height: 12rem;
      background-color: lightgrey;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 2rem;
      text-align: center;
      text-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.5);
    }

    .month i {
      font-size: 2.5rem;
      cursor: pointer;
    }

    .month h1 {
      font-size: 3rem;
      font-weight: 400;
      text-transform: uppercase;
      letter-spacing: 0.2rem;
      margin-bottom: 1rem;
    }

    .month p {
      font-size: 1.6rem;
    }

    .weekdays {
      width: 100%;
      height: 5rem;
      padding: 0 0.4rem;
      display: flex;
      align-items: center;
    }

    .weekdays div {
      font-size: 1.5rem;
      font-weight: 400;
      letter-spacing: 0.1rem;
      width: calc(44.2rem / 7);
      display: flex;
      justify-content: center;
      align-items: center;
      text-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.5);
    }

    .days {
      width: 100%;
      display: flex;
      flex-wrap: wrap;
      padding: 0.2rem;
    }

    .days div {
      font-size: 1.4rem;
      margin: 0.3rem;
      width: calc(40.2rem / 7);
      height: 5rem;
      display: flex;
      justify-content: center;
      align-items: center;
      text-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.5);
      transition: background-color 0.2s;
    }

    .days div:hover:not(.today) {
      background-color: #262626;
      border: 0.2rem solid #777;
      cursor: pointer;
    }

    .prev-date,
    .next-date {
      opacity: 0.5;
    }

    .today {
  background-color: lightgrey;
}
  </style>
</head>
<body>

  <div class="header" style="background-color: darkgrey;">
    <h1 style="font-family: serif;">FTA WEB</h1>
  </div>

  <div class="rightcolumn">
      <div class="card" style="background-color: lightgrey">
        
        <div>
          <img src="fta.jpeg" width="185px">
          <h2 style="font-family: Times New roman">Hai saya Fikriana Tri Agustina</h2>
            <h4>Saya dari prodi Informatika UAD</h4>
        </div>
      </div>
    </div>
    <div class="rightcolumn">
      <div class="card" style="background-color: gray">
        <h2 style="font: Times New Roman">Tentang Saya :</h2>
          Nama saya Fikriana Tri Agustina biasa dipanggil Gustin, dan hobi saya travelling</p>
                  Saya berasal dari NTB dan kuliah di Prodi Informatika Universitas Ahmad Dahlan</p>

                <h3>Jangan lupa follow</h3>
            <img src="ig.jpg" width="30px">
            <a href="https://www.instagram.com/invites/contact/?i=1m3wkcadz6saj&utm_content=ep5onc0/">@fkrntriii_</a><br><br>
      </div>

  
     <div class="card">
        <h1><center style="font-family: times new roman ;">HITUNG</center></h1>
          <table border="1" cellspacing="10" align="center" cellpadding="">
                <tr>
                    <td colspan="4" id="inputLabel">0</td>
                </tr>

                <tr>
                    <td colspan="3"><button onclick="pushBtn(this);">Reset</button></td>
                    <td><button onclick="pushBtn(this);">/</button></td>
                </tr>
                <tr>
                   <td colspan="2"><button onclick="pushBtn(this);">0</button></td>
                   <td><button onclick="pushBtn(this);">.</button></td>
                   <td><button onclick="pushBtn(this);">=</button></td>
               </tr>
               <tr>
                    <td><button onclick="pushBtn(this);">1</button></td>
                    <td><button onclick="pushBtn(this);">2</button></td>
                    <td><button onclick="pushBtn(this);">3</button></td>
                    <td><button onclick="pushBtn(this);">+</button></td>
                </tr>
                <tr>
                    <td><button onclick="pushBtn(this);">4</button></td>
                    <td><button onclick="pushBtn(this);">5</button></td>
                    <td><button onclick="pushBtn(this);">6</button></td>
                    <td><button onclick="pushBtn(this);">-</button></td>
                </tr>
                <tr>
                    <td><button onclick="pushBtn(this);">7</button></td>
                    <td><button onclick="pushBtn(this);">8</button></td>
                    <td><button onclick="pushBtn(this);">9</button></td>
                    <td><button onclick="pushBtn(this);">*</button></td>
                </tr>

            </table>

                <script type="text/javascript">
                var inputLabel = document.getElementById('inputLabel');
                function pushBtn(obj) {
                    var pushed = obj.innerHTML
                    if (pushed == '=') {
                    // Calculate
                    inputLabel.innerHTML = eval(inputLabel.innerHTML);
                    } else if (pushed == 'Reset') {
                    // All Clear
                    inputLabel.innerHTML = '0';
                    } else {
                        if (inputLabel.innerHTML == '0') {
                               inputLabel.innerHTML = pushed;  
                    } else {
                        inputLabel.innerHTML += pushed; 
                    }
                }
            }
            
            </script>
            </div>
         </div></a>
    </div>
          
    <div class="centercolumn">
      <div class="card" style="background-color: white">
        <h2 align="center" style="font-family: Times New roman">TUGAS AKHIR PWEB</h2><br><br>
      
      <div style="background-color: lightgrey">
          
              <div align="center"><strong><font size="6" face="Times New roman">Input Data Diri</font></strong></div>
                <form name="nama" method="post" action="proses.php">
              <table width="58%" border="0" align="center">
            <tr>
              <td><h4>Nama lengkap</h4></td>
              <td><input style="background-color:darkgrey;" type="text" name="nama" id="nama"></td>
            </tr>
                <td><h4>NIM</h4></td>
              <td><input style="background-color:darkgrey;" type="text" name="nim" id="nim"></td>
           
            <tr>
              <td><h4>Email</h4></td>
              <td><input style="background-color:darkgrey;" type="text" name="email" id="email"></td>
            </tr>
            <tr>
          <td><h4>Fakultas</h4></td>
          <td><select style="background-color:darkgrey;" name="prodi" id="prodi">
            <option>Informatika</option>
            <option>Kedokteran</option>
            <option>Teknik Kimia</option>
            <option>Teknik Industri</option>
          </select></td>
        </tr>
        <tr>
          <td>&nbsp</td>
          <td><input style="background-color:lightgrey;" type="submit" name="submit" value="kirim" id="kirim"><input style="background-color:lightgrey;" type="reset" name="reset" value="batal"></td>
        </tr>
        
      </table>
    </form>
        <br>
        <div align="center"><strong><a href="lihat.php">::Cek Data::</a></strong></div>
      </div>
    
        
 
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kalender</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"/>
  <body>
    <div class="container">
      <div class="calendar">
        <div class="month">
          <i class="fas fa-angle-left prev"></i>
          <div class="date">
            <h1></h1>
            <p></p>
          </div>
          <i class="fas fa-angle-right next"></i>
        </div>
        <div class="weekdays">
          <div>Minggu</div>
          <div>Senin</div>
          <div>Selasa</div>
          <div>Rabu</div>
          <div>Kamis</div>
          <div>Jum'at</div>
          <div>Sabtu</div>
        </div>
        <div class="days"></div>
      </div>
    </div>

    <script>
      const date = new Date();

const renderCalendar = () => {
  date.setDate(1);

  const monthDays = document.querySelector(".days");

  const lastDay = new Date(
    date.getFullYear(),
    date.getMonth() + 1,
    0
  ).getDate();

  const prevLastDay = new Date(
    date.getFullYear(),
    date.getMonth(),
    0
  ).getDate();

  const firstDayIndex = date.getDay();

  const lastDayIndex = new Date(
    date.getFullYear(),
    date.getMonth() + 1,
    0
  ).getDay();

  const nextDays = 7 - lastDayIndex - 1;

  const months = [
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember",
  ];

  document.querySelector(".date h1").innerHTML = months[date.getMonth()];

  document.querySelector(".date p").innerHTML = new Date().toDateString();

  let days = "";

  for (let x = firstDayIndex; x > 0; x--) {
    days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
  }

  for (let i = 1; i <= lastDay; i++) {
    if (
      i === new Date().getDate() &&
      date.getMonth() === new Date().getMonth()
    ) {
      days += `<div class="today">${i}</div>`;
    } else {
      days += `<div>${i}</div>`;
    }
  }

  for (let j = 1; j <= nextDays; j++) {
    days += `<div class="next-date">${j}</div>`;
    monthDays.innerHTML = days;
  }
};

document.querySelector(".prev").addEventListener("click", () => {
  date.setMonth(date.getMonth() - 1);
  renderCalendar();
});

document.querySelector(".next").addEventListener("click", () => {
  date.setMonth(date.getMonth() + 1);
  renderCalendar();
});

renderCalendar();
    </script>
  </body>
</html>


        
            
                
     <div class="footer" style="background-color: grey;">
      <h2>Copyright(c)FTAAA 2022</h2>
      <p></p>
     </div>

</body>
</html>