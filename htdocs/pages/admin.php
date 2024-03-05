<?php include "../partials/header.php"?>

<section style="margin-left:300px">

<form action="../process/admin/add_tourOperator.php" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Tour Operator Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="nameTip">
            <div id="nameTip" class="form-text">Please enter the name of the new Tour Operator.</div>
        </div>
       
        <div class="mb-3">
            <label for="link" class="form-label">Tour Operator Link</label>
            <input type="text" class="form-control" name="link" id="link" aria-describedby="linkTip">
            <div id="linkTip" class="form-text">Please enter the link of the new Tour Operator.</div>
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
</form>

</section>


<?php include "../partials/footer.php"?>