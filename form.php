<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Info Form</title>
  <meta name="description" content="SkillsUSA Info Form">
  <meta name="author" content="T-roy Sirat">

  <link rel="stylesheet" href="css/styles.css">
  <script src="js/scripts.js"></script>

   <style>
    html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	
	
	vertical-align: baseline;
}

    
  </style> 
    
</head>

<body style="font-family: helvetica;">
    <div style="background-color: #0071bc; border-right: 10px solid #ffd72e; float: left; height:100vh; width: 25%;">
        <p style="color: white; padding: 20px; line-height: 40px; font-size: 20px; margin: 0 auto; padding-left: 30px;">Here, you can input your information, as a member of SkillsUSA, to add to our records.</p>
    
    
    
    
    
    
    </div>

 
    <form action="send.php" method="post" style="float: left; padding: 30px;"/>
    <input type="hidden" name="redirect_to" value="http://www.yahoo.com" />
        <div>
            <div style="float: left; padding: 20px;">
                <div style="float: left;">First Name</div> <div style="float: left; padding-left: 10px; color: red; font-size: 20px;">&bull;</div><br>
                <input type="text" name="firstname" placeholder="Ex. Troy" required style="width: 240px;
   height: 30px; font-size: 15px;">
                <br>
            </div>
            <div style="float: left; padding: 20px;">
                <div style="float: left;">Last Name</div><div style="float: left; padding-left: 10px; color: red; font-size: 20px;">&bull;</div><br>
                <input type="text" name="lastname" placeholder="Ex. Sirat" required style="width: 240px;
   height: 30px; font-size: 15px;">
                <br>
            </div>
            <div style="padding: 20px; ">
                <div style="float: left;">Program Area</div><br><div style="float: left;  padding-left: 10px; color: red; font-size: 20px;">&bull;</div><br>
                <div style="clear: both;"><input type="text" name="programarea" placeholder="Ex. Web" required style="width: 240px;
   height: 30px; font-size: 15px;"></div>
            </div>
        </div>
        <div>
            <div style="padding: 20px; float: left;">
                <div style="float: left;">Graduation Year</div><div style="float: left; padding-left: 10px; color: red; font-size: 20px;">&bull;</div><br>
                <input type="text" name="graduationyear" placeholder="Ex. 2015"style="width: 240px;
   height: 30px; font-size: 15px;">
                <br>
            </div>
            <div style="padding: 20px; float: left;">
                <div style="float: left;">Student ID</div><div style="float: left; padding-left: 10px; color: red; font-size: 20px;">&bull;</div><br>
                <input type="text" placeholder="Ex. 656754" name="studentid" style="width: 240px;
   height: 30px; font-size: 15px;">
                <br>
            </div>
            <div style="clear: both;">
                <div style="padding: 20px; float: left;">
                    <div style="float: left;">T-Shirt Size</div><div style="float: left; padding-left: 10px; color: red; font-size: 20px;">&bull;</div><br>
                    <select name="shirtsize" required style="width: 240px; 
   height: 34px;
   overflow: hidden;
   background: url(img/down_arrow_select.jpg) no-repeat right ;
   border: 1px solid #ccc; -webkit-appearance: none; padding-left: 10px; font-size: 15px;">
                      <option value="volvo">Small</option>
                      <option value="saab">Medium</option>
                      <option value="mercedes">Large</option>
                      <option value="audi">Extra-Large</option>
                    </select>
                    <br>
                </div>
                <div style="padding: 20px; float: left;">
                     <div style="float: left;">Blazer Size</div><div style="float: left; padding-left: 10px; color: red; font-size: 20px;">&bull;</div><br>
                    <select name="blazersize" style="width: 240px;
   height: 34px;
   overflow: hidden;
   background: url(img/down_arrow_select.jpg) no-repeat right ;
   border: 1px solid #ccc; -webkit-appearance: none; padding-left: 10px; font-size: 15px;">
                      <option value="2">2</option>
                      <option value="4">4</option>
                      <option value="6">6</option>
                      <option value="8">8</option>
                      <option value="34">34</option>
                      <option value="36">36</option>
                      <option value="38">38</option>
                      <option value="42">42</option>
                      <option value="44">44</option>
                      <option value="46">46</option>
                      <option value="48">48</option>
                    </select>
                </div>
            </div>
        </div>
        <div>
            <div style="padding: 20px;">
            Leadership Competition<br>
            <input type="text" name="leadershipcompetition" placeholder="Ex. Quiz Bowl"style="width: 240px;
   height: 30px; font-size: 15px;">
            <br>
            </div>
            <div style="padding: 20px;">
            Skills Competition<br>
            <input type="text" name="skillscompetition" placeholder="Ex. Drafting" style="width: 240px;
   height: 30px; font-size: 15px;">
            <br>
            </div>
            <div style="padding: 20px;">
            Comments<br />
  <textarea name='comments' placeholder="Ex. I love Skills!"id='comment' style="width: 240px;
   height: 30px; font-size: 15px;"></textarea><br />
            </div>
        </div>
        <div style="padding: 20px;">
            <input type='submit' value='Submit' style="background-color:#0071bc;
	color:#fff;
	font-family:'Helvetica Neue',sans-serif;
	font-size:18px;
	line-height:30px;
	border-radius:20px;
	-webkit-border-radius:20px;
	-moz-border-radius:20px;
	border:0;
	text-shadow:#0071bb 0 -1px 0;
	width:120px;
	height:32px"/> 
        </div>
</form>
    
<div style="float: left; padding: 20px; margin-top: 90px;">
   <a href="index.php" style="text-decoration: none;"><div style="background-color: #ed1c24; color: white; width: 300px; height: 70px; text-align: center; margin-bottom: 150px;"><h3 style="padding-top: 15px; font-size: 35px;">Home Page</h3></div></a>
    <a href="" style="text-decoration: none;"><div style="background-color: #ed1c24; color: white; width: 300px; height: 70px; text-align: center; margin-bottom: 150px;"><h3 style="padding-top: 15px; font-size: 35px;">Chapter Store</h3></div></a>
    <a href="" style="text-decoration: none;"><div style="background-color: #ed1c24; color: white; width: 300px; height: 70px; text-align: center;"><h3 style="padding-top: 15px; font-size: 35px;">Send a Messgae</h3></div></a>
    
</div>
  
</body>
</html>
