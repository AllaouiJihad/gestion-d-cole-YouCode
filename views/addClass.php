<div class="row justify-content-center">
    <div class="card mt-3">
        <div class="card-header" >
            <h3>add class </h3>
        </div>
        <div class="card-body mt-3">
            <form action="../controllers/ClasseCreateController.php" method="post">

                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">level</label>
                <input type="text" class="form-control" name="level" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">promotion</label>
                <input type="text" class="form-control" name="promotion" id="exampleFormControlInput1" placeholder="">
                </div>
            
                <button type="submit" class="btn btn-primary mt-3" name="create">Submit</button>

            </form>
        
        </div>
    </div>
</div>