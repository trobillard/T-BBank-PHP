<h2>Open a New Account</h2>
    <form class="mt-5 fullForm" method="post" action="">
      <div class="form-group">
        <label for="countType">Account</label>
        <select class="form-control" id="countType" name="countType">
          <option value="courant">Current account</option>
          <option value="livreta">Savings account</option>
          <option value="pel">Salary account</option>
          <option value="pea">Insurance account</option>
        </select>
    </div>
    <div class="form-group">
      <label for="amount">Amount</label>
      <input type="number" name="amount" id="amount" min="20 000" value="20 000">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-warning">Open my account</button>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
      <label class="form-check-label" for="flexCheckDefault">
        I accept Terms and Conditions
      </label>
    </div>
  </form>