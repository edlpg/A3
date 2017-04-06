<!DOCTYPE html>
<head>
<title>A3</title>
<link href="/css/styles.css" rel="stylesheet">

<title> @yield('title', 'A3')</title>

<style>

h1{
margin-top: 100px;
margin-left: 150px;
}

label{
margin-top: 50px;
margin-left: 100px;
}
p{
  margin-left: 100px;
  font-size: 70%;
  color: red;
}
body{
  border: 2px solid black;
}
.sub{
  margin-top: 50px;
  margin-left: 200px;
}
.answer{
    color: green;
  margin-left: 100px;
  margin-top: 50px;
}
.error{
  color: red;
}
</style>


</head>

<body>
  <h1>Bill Splitter</h1>
  <form method='GET' action='/calculate'>

   <label>How many people?
       <input name='manyWays'required>
   </label>

  <br><br>

   <label> How much was the check?
       <input type='number'min='0' name='tab'required>
   </label>
<br><br>

   <label>How much do you wanna tip?
     <select name="howWasService">
        <option value="15">15%</option>
        <option value="10">10%</option>
        <option value="5">5%</option>
        <option value="0">0%</option>
</select>
   </label><br><br>

   <label>Round up?
     <input type="radio" name="round" checked="yes" value="yes">Yes
     <input type="radio" name="round" value ="no">No
   </label><br>

   <input type='submit' value='Calculate' id="sub"><br><br>
</form>
</body>
