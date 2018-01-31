<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Invoices</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
  <table class="table">
    <tr>
      <th>Date</th>
      <th>Last Name</th>
      <th colspan="2">First Name</th>
    </tr>
    @foreach($invoices as $invoice)
    <tr>
      <td>{{$invoice->InvoiceDate}}</td>
      <td>{{$invoice->LastName}}</td>
      <td>{{$invoice->FirstName}}</td>
      <td>
        <a href="/invoices/{{$invoice->InvoiceId}}">Details</a>
      </td>
    </tr>
    @endforeach
  </table>
</body>
</html>