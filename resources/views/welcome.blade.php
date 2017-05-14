<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>        

    <title>Books API</title>

  </head>
  <body>

    <div class="container">

      <div class="panel-group" id="api" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="heading-users">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#api" href="#api-users" aria-expanded="true" aria-controls="api-users">
                Users
              </a>
            </h4>
          </div>
          <div id="api-users" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-users">
            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="col-sm-1">Method</th>
                    <th class="col-sm-5">URI</th>
                    <td class="col-sm-6">Description</td>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>POST</td>
                    <td>/api/auth/signup</td>
                    <td>Create a new user account</td>
                  </tr>
                  <tr>
                    <td>POST</td>
                    <td>/api/auth/login</td>
                    <td>Authenticate user</td>
                  </tr>
                  <tr>
                    <td>POST</td>
                    <td>/api/auth/recovery</td>
                    <td>Forgot password</td>
                  </tr>
                  <tr>
                    <td>POST</td>
                    <td>/api/auth/reset</td>
                    <td>Set new password</td>
                  </tr>
                </tbody>
              </table>        
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="heading-books">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#api" href="#api-books" aria-expanded="true" aria-controls="api-books">
                Books
              </a>
            </h4>
          </div>
          <div id="api-books" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-books">
            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="col-sm-1">Method</th>
                    <th class="col-sm-5">URI</th>
                    <td class="col-sm-6">Description</td>
                  </tr>
                </thead>

                <tbody>

                  <tr>
                    <td>POST</td>
                    <td>/api/books</td>
                    <td>Add a new book</td>
                  </tr>

                  <tr>
                    <td>GET</td>
                    <td>/api/books</td>
                    <td>Get all books</td>
                  </tr>

                  <tr>
                    <td>GET</td>
                    <td>/api/books/:id</td>
                    <td>Get a book by id</td>
                  </tr>

                  <tr>
                    <td>PUT</td>
                    <td>/api/books/:id</td>
                    <td>Update a book</td>
                  </tr>

                  <tr>
                    <td>DELETE</td>
                    <td>/api/books/:id</td>
                    <td>Delete a book</td>
                  </tr>

                </tbody>
              </table>        
            </div>
          </div>
        </div>
      </div>


    </div>

  </body>
</html>
