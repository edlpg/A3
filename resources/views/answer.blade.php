<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
  <link href="/css/styles.css" type='text/css' rel='stylesheet'>
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
       <input type='number'min='1' name='manyWays'required>
   </label>

   <section>
  <p class="error">{{ $splitFeed }}</p>
  </section>
  <br>

   <label> How much was the check?
       <input name='tab'required>
   </label>
   <section>
  <p class="error">{{ $howMuchFeed }}</p>
  </section>
<br>

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
   </label>
   <input type='submit' value='Calculate' id="sub"><br><br>
</form>
   <br><br>
<section>
<h1 class="answer" >{{ $answer }}</h1>
</section>
</body>
</html>
