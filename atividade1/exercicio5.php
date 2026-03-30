<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Billing address</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #ffffff; }
    .form-container { max-width: 700px; background: #6868681c; padding: 2rem; border-radius: 8px; }
    label { font-weight: 500; margin-bottom: 5px; }
  </style>
</head>

<body>

  <div class="container py-5">
    <div class="form-container mx-auto">
      <h4 class="mb-3">Billing address</h4>
      
      <form class="needs-validation" novalidate>
        <div class="row g-3">
          
          <div class="col-sm-6">
            <label for="firstName" class="form-label">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
          </div>

          <div class="col-sm-6">
            <label for="lastName" class="form-label">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
          </div>

          <div class="col-12">
            <label for="username" class="form-label">Username</label>
            <div class="input-group">
              <span class="input-group-text">@</span>
              <input type="text" class="form-control" id="username" placeholder="Username" required>
            </div>
          </div>

          <div class="col-12">
            <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com">
          </div>

          <div class="col-12">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
          </div>

          <div class="col-12">
            <label for="address2" class="form-label">Address 2 <span class="text-body-secondary">(Optional)</span></label>
            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
          </div>

          <div class="col-md-5">
            <label for="country" class="form-label">Country</label>
            <select class="form-select" id="country" required>
              <option value="">Choose...</option>
              <option>United States</option>
            </select>
          </div>

          <div class="col-md-4">
            <label for="state" class="form-label">State</label>
            <select class="form-select" id="state" required>
              <option value="">Choose...</option>
              <option>California</option>
            </select>
          </div>

          <div class="col-md-3">
            <label for="zip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
          </div>
          
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>