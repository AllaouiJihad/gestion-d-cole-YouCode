<div class="row justify-content-center">
    <div class="card mt-3">
        <div class="card-header" >
            <h3>add formateur </h3>
        </div>
        <div class="card-body mt-3">
            <form action="../controllers/ClasseCreateController.php" method="post">

                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">firstname</label>
                <input type="text" class="form-control" name="fname" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">lastname</label>
                <input type="text" class="form-control" name="lname" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">email</label>
                <input type="text" class="form-control" name="email" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">cin</label>
                <input type="text" class="form-control" name="cin" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">phone</label>
                <input type="text" class="form-control" name="phone" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">birthdate</label>
                <input type="date" class="form-control" name="birthdate" id="exampleFormControlInput1" placeholder="">
                </div>
            
                <button type="submit" class="btn btn-primary mt-3" name="create">Submit</button>

            </form>
        
        </div>
    </div>
</div>