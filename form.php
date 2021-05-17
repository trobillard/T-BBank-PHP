<h2>Contact Us</h2>
    <form class="mt-5 fullForm" method="post" action="">
    <div class="form-group">
      <label for="usr">FirstName:</label>
      <input type="text" class="form-control" id="usr" required><br>
    </div>
    <div class="form-group">
      <label for="usr">Lastname:</label>
      <input type="text" class="form-control" id="usr" required><br>
    </div>
    <div class="form-group">
      <label for="phone">Enter a phone number:</label>
      <input type="tel" class="form-control" name="phone" placeholder="01052894992" pattern="[0-9]{3}[0-9]{4}[0-9]{4}" required><br>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required><br>
    </div>
    <div class="form-group">
    <select class="container form-select" aria-label="Default select example">
      <option selected>Reason of Contact ?</option><br>
      <option value="1">Get call back</option>
      <option value="2">Help on my account</option>
      <option value="3">other</option>
    </select>
    </div>
    <div class="form-group">
      <label for="message">Your Message : </label>
      <textarea class="form-control" id="message" rows="3" aria-describedby="messageHelp"></textarea>
      <small class="form-text text-muted">Remaining caracter : <span id="count"></span></small>
      <small id="messageHelp" class="form-text text-muted"></small>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-warning">Submit</button>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
      <label class="form-check-label" for="flexCheckDefault">
        I accept Terms and Conditions
      </label>
    </div>
  </form>