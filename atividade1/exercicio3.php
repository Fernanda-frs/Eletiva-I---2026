<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Sample Form</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Remove espaços grandes do Bootstrap */
    .row {
      --bs-gutter-x: 10px;
      --bs-gutter-y: 6px;
    }

    /* Labels mais compactos */
    .col-form-label {
      font-size: 14px;
      margin-bottom: 0;
      padding-top: 6px;
      padding-bottom: 0;
    }

    /* Inputs mais finos (igual imagem) */
    .form-control {
      height: 34px;
      font-size: 14px;
      padding: 4px 8px;
    }

    textarea.form-control {
      height: auto;
    }

    /* Espaçamento entre blocos */
    .form-group {
      margin-bottom: 8px;
    }

    /* Centralização mais fiel */
    .container {
      max-width: 900px;
    }
  </style>
</head>
<body>

<div class="container mt-4">
  <h4 class="text-center mb-4">Sample Form</h4>

  <form>

    <div class="row">

      <!-- ESQUERDA -->
      <div class="col-md-6">

        <div class="row form-group">
          <label class="col-sm-4 col-form-label"><strong>Partner Name</strong></label>
          <div class="col-sm-8">
            <input type="text" class="form-control">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-sm-4 col-form-label"><strong>Partner Legal Name</strong></label>
          <div class="col-sm-8">
            <input type="text" class="form-control">
          </div>
        </div>

      </div>

      <!-- DIREITA -->
      <div class="col-md-6">

        <div class="row form-group">
          <label class="col-sm-4 col-form-label"><strong>Partner Email ID</strong></label>
          <div class="col-sm-8">
            <input type="email" class="form-control">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-sm-4 col-form-label"><strong>Partner Mobile</strong></label>
          <div class="col-sm-8">
            <input type="text" class="form-control">
          </div>
        </div>

      </div>

    </div>

    <!-- ADDRESS -->
    <div class="row form-group mt-2">
      <label class="col-sm-2 col-form-label"><strong>Partner Address</strong></label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="3"></textarea>
      </div>
    </div>

    <div class="row mt-2">

      <!-- ESQUERDA -->
      <div class="col-md-6">

        <div class="row form-group">
          <label class="col-sm-4 col-form-label"><strong>Contract Start Date</strong></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" placeholder="Date Start">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-sm-4 col-form-label"><strong>Minimum Loan Amount</strong></label>
          <div class="col-sm-8">
            <input type="number" class="form-control">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-sm-4 col-form-label"><strong>Interest Rate</strong></label>
          <div class="col-sm-8">
            <input type="number" class="form-control">
          </div>
        </div>

      </div>

      <!-- DIREITA -->
      <div class="col-md-6">

        <div class="row form-group">
          <label class="col-sm-4 col-form-label"><strong>Contract Expiry Date</strong></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" placeholder="Date End">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-sm-4 col-form-label"><strong>Maximum Loan Amount</strong></label>
          <div class="col-sm-8">
            <input type="number" class="form-control">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-sm-4 col-form-label"><strong>Deposit Amount</strong></label>
          <div class="col-sm-8">
            <input type="number" class="form-control">
          </div>
        </div>

      </div>

    </div>

    <!-- BOTÃO -->
    <div class="text-center mt-3">
      <button class="btn btn-primary px-4">Save</button>
    </div>

  </form>
</div>

</body>
</html>