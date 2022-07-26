<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Upload</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    </head>

    <body>
        <div class="bg-light p-5 rounded">
            <h1>Add file</h1>
            
            <form action="{{ route('files.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-4">
                  <input type="file" name="file" class="form-control" accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip">
                </div>
    
                <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Save</button>
            </form>
    
        </div>
    

    </body>

 
</html>