<div class="container">
    <div class="card">
        <div class="card-body">
            <div id="ajaxStatus"></div>
            <form class="form-group" action="#" method="POST" id="formTwit">
                <div class="form-group">
                    <input type="hidden" name="user_id" value="<?php echo getUserID(); ?>">
                    <label for="twit">Your twit</label>
                    <textarea class="form-control rounded" name="twit" id="twit" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mr-2">SEND</button>
            </form>
        </div>
    </div>
</div>