<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section class="bg-light p-5">
        <h3 class="pb-2">Responsive table</h3>
        <div class="table-responsive" id="no-more-tables">
          <table class="table bg-white">
                <thead class="bg-dark text-light">
                    <tr>
                        <th>Account Number</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-title="Account Number">123456</td>
                        <td data-title="First Name">Nelly</td>
                        <td data-title="Last Name">Wambui</td>
                        <td data-title="Email">nellywambui@gmail.com</td>
                        <td data-title="Phone Number">111</td>
                        <td data-title="Address">Nyeri</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>