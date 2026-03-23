<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exercício 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
  <form class="row g-3">
    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">First name</label>
      <input type="text" class="form-control" id="validationDefault01" value="" placeholder = "Mark" required>
    </div>
    <div class="col-md-4">
      <label for="validationDefault02" class="form-label">Last name</label>
      <input type="text" class="form-control" id="validationDefault02" value="" placeholder = "Otto" required>
    </div>
    <div class="col-md-4">
      <label for="validationDefaultUsername" class="form-label">Username</label>
      <div class="input-group">
        <span class="input-group-text" id="inputGroupPrepend2">@</span>
        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" placeholder = "Username"
          required>
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationDefault03" class="form-label">City</label>
      <input type="text" class="form-control" id="validationDefault03"  placeholder = "City"required>
    </div>
    <div class="col-md-3">
      <label for="validationDefault05" class="form-label">State</label>
      <input type="text" class="form-control" id="validationDefault05"  placeholder = "State"required>
    </div>
    <div class="col-md-3">
      <label for="validationDefault05" class="form-label">Zip</label>
      <input type="text" class="form-control" id="validationDefault05" placeholder = "Zip" required>
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
        <label class="form-check-label" for="invalidCheck2">
          Agree to terms and conditions
        </label>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
  </form>
</body>

</html>