<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1 id="title">Survey</h1>
    <p id="description">Today we're doing a survey on cats</p>
    <form id="survey-form">
      <label for="name" id="name">First name:</label><br>
      <input type="text" id="name-label" name="name" value=""><br>
      <label for="email" id="email">Email:</label><br>
      <input type="email" id="email-label" name="email" value=""><br>
      <label for="number" id="number">Number:</label><br>
      <input type="number" id="number-label" name="number" value="" min="0" max="999999999999999"><br>
      <label for="cats">Choose a cat:</label>
        <select name="cats" id="dropdown">
          <option value="abyssinian">Abyssinian</option>
          <option value="americanwirehair">American Wirehair</option>
        </select><br>
        <p>Choose your favorite cat food brand:</p>

        <form>
          <input type="radio" id="whiskas" name="fav_catfood" value="whiskas">
          <label for="whiskas">Whiskas</label><br>
          <input type="radio" id="purina" name="fav_catfood" value="purina">
          <label for="purina">Purina</label><br>
        </form>

        <label for="comments">If you have any additional comments, please write them below:</label>
        <textarea id="story" name="story" rows="5" cols="33"></textarea><br><br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
