<h2>Bank Operation</h2>
    <form class="mt-5 fullForm" method="post" action="">
      <div class="form-group">
        <label for="countType">Choose your account</label>
        <select class="form-control" id="countType" name="countType">
          <option value="courant">KR35675434Z</option>
          <option value="livreta">KR4576231000O</option>
          <option value="pel">KR23438778I</option>
        </select>
    </div>
    <div class="form-group">
      <label for="opération">Operation</label>
      <select class="form-control" id="opération" name="opération">
        <option value="deposit">Deposit</option>
        <option value="withdrawal">Withdrawal</option>
      </select>
    </div>
    <div class="form-group">
      <label for="amount">Amount of transfer</label>
      <input type="number" name="amount" id="amount" min="10 000" value="10 000">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-warning">Send</button>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
      <label class="form-check-label" for="flexCheckDefault">
        I accept Terms and Conditions
      </label>
    </div>
  </form>