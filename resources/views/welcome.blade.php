<!DOCTYPE html>
<html lang="en">
<head>
    <title>Encrypt and Decrypt Data using Laravel 10</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="border border-slate-300 text-center">#</th>
                    <th class="border border-slate-300">Name</th>
                    <th class="border border-slate-300">Bank Account Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach($userRecords as $user)
                    <tr>
                        <td class="border border-slate-300 text-center">{{$loop->iteration}}</td>
                        <td class="border border-slate-300">{{$user->name}}</td>
                        <td class="border border-slate-300">{{$user->bank_account_number}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
         <div class="row">
             <div class="d-flex justify-content-center">
                 {{ $userRecords->links('pagination::bootstrap-5') }}
             </div>
         </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
