<DOCTYPE html>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta http-equiv="content-type" content="text/html" charset="utf-8">
        <title>Metro Rail-findRoute</title>
        <style media="screen">
          .header{
            text-align:center;
            }
          .header a{text-decoration:none;
                    color:red;
          }
          .findRoute{
            width:300px;height:400px;
            border:2px  white;
            margin:5px auto;
            -webkit-border-radius:5px;
            padding:25px;
            background-color: palegreen;
            border-color: solid whitesmoke;
            background-image: url('rail2.jpg') ;width:300px;height:400px;

  
          }
          p{font-weight:bold;
          color: red;}
          span{
            color: red;
          }
          h1{
            color: red;
            float:center;
            margin-top: 25px;
          }
          .separator{
            display:inline-blok;width:20px;}
        input[type=text]{
  
          width: 70%;
          padding: 10px 20px ;
          background-color: solid white;
          /*font-size: 1rem;*/
          height: 30px;
          margin: 20px 0;
          color: solid white;
          box-sizing: border-box;
          /*border: 3px solid salmon;
          border-radius: 5px;*/
          border: none;
          border-bottom: 3px solid palegreen;
          }
            
          input[type="button"]{
              width: 100px;
              border: none;
              background-color: red;
              color: white;
              padding: 10px;
              cursor: pointer;
              margin-left: 00px;
              float:left;
          }
          input[type="date"]{
            width: 70%;
          padding: 10px 20px ;
          background-color: solid white;
          /*font-size: 1rem;*/
          height: 30px;
          margin: 20px 0;
          color: black;
          box-sizing: border-box;
          /*border: 3px solid salmon;
          border-radius: 5px;*/
          border: none;
          border-bottom: 3px solid palegreen;
          }
          .img1{
      padding: 20px;
      float: center;
  }
        </style>
      </head>
      <body>
        <div class="header">
          <a href="HomePage.html"><img src="images/metro.png" height="70px" width="70px" class="img1"><span></span></a>
          
        </div>
        <div class="findRoute">
          <h1>Route</h1>
          <form action="findRouteConnect.php" method="POST">
            <input type="text" name="From" id="Fromid" placeholder="From" ><span></span>
            <input type="text" name="To" id="Toid" placeholder="To" ><br>
            <input type="date" name="date" id="dateid" placeholder="Date" ><br><br>
            
              <!-- <input type="submit" value="Submit"><br><br> -->
              <input type="submit" name="findRoute" id="findRoute" value="Find Route"/>
             
  
  
          </form>
        </div>
        </div>
      </body>
    </html>
  