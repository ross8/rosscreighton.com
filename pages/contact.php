<div class="container">
    <div class="marketing-heading">
        Thanks for stopping by. Lets Talk.
    </div>
    <form id="contact-form" role="form" action="./page.php?page=contactmail" enctype="application/x-www-form-urlencoded" method="post">
        <div class="col-sm-15 col-md-10">
            <div class="col-sm-20 col-md-20">
                <div id="first-name" class="col-sm-10 col-md-10">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="First Name" name="first_name">
                    </div>
                </div>
                <div id="last-name" class="col-sm-10 col-md-10">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control"  placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Subject" name="subject">
                </div>
            </div>
            <div class="col-sm-20 col-md-20">
                <div class="form-group">
                    <textarea placeholder="Message" rows="10" type="text" class="form-control" name="message">
                    </textarea>
                </div>
            </div>
            <input type="submit" name="submit" value="Send" class="btn">
        </div>
    </form>
</div>