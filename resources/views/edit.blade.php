<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRUD_ORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <div class="row">  
            <div class="col-sm-6">

                    <form action="" method="POST">
                     @csrf
                    <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value={{$student->name}} >
                    </div>

                    <div class="form-group">
                    <label for="exampleInputCity">City</label>
                    <input type="text" class="form-control" id="city" name="city" value={{$student->city}} >
                    </div>

                    <div class="form-group">
                    <label for="exampleInputMarks">Marks</label>
                    <input type="number" class="form-control" id="marks" name="marks" value={{$student->marks}}>
                    </div>

                  <button type="submit" class="btn btn-primary mt-2">Update</button>
            </form>

            </div>

        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>